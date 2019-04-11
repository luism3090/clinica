$(document).on('ready',function()
{

	validaLogin();


	$("#formLogin").on("submit",function(event)
	{
		
		 event.preventDefault();

		$("#formLogin").bootstrapValidator();

	});

	function validaLogin()
	{
		$('#formLogin').bootstrapValidator(
		{

	        message: 'This value is not valid',
	        container: 'tooltip',
	        feedbackIcons: {
	            valid: 'glyphicon glyphicon-ok',
	            invalid: 'glyphicon glyphicon-remove',
	            validating: 'glyphicon glyphicon-refresh'
	        },
	        fields: {
	            txtUsuario: {
	                group: '.form-group',
	                validators: {
	                    notEmpty: {
	                        message: 'Este campo es requerido'
	                    }

	                }
	            }
	            ,
	            txtContrasena: {
	                group: '.form-group',
	                validators: {
	                    notEmpty: {
	                        message: 'Este campo es requerido'
	                    }

	                }
	            }
	           
	        }
	    }).on('success.form.bv', function (e) 
	    {

			e.preventDefault();

			let datosLogin = {
							 	usuario: $("#txtUsuario").val(),
							 	contrasena: $("#txtContrasena").val(),
							}


			$.ajax(
               {
	               type: "POST",
	               url: "login.php",
	               data:{datos:datosLogin} ,
	               async: true,
	               dataType:"json",
	               success: function(result)
	               {              
	               	 

	               	  if(result.error == true){

	               	  	 $('#modalAlertaError .modal-body .mldMsj').text(result.mensaje);
		          	  	 $('#modalAlertaError').modal('show');

	               	  }
	               	  else{
	               	  	 
	               	  	  if(result.registros == 0)
	               	  	 {
	               	  	 	$('#modalAlertaWarning .modal-body .mldMsj').text(result.mensaje);
		          	  	 	$('#modalAlertaWarning').modal('show');
	               	  	 }
	               	  	 else{

	               	  	 	if(result.id_tipo_usuario == "3"){

	               	  	 		location.href = 'ficha_identificacion_inicio_view.php';
	               	  	 	}
	               	  	 	else if(result.id_tipo_usuario == "2"){

	               	  	 		location.href = 'medico_inicio_view.php';
	               	  	 	}
	               	  	 }
	               	  }

	               	 
	               },
	               error:function(result)
	               {
	                    console.log(result.responseText);
	                    //$("#error").html(data.responseText); 
	               }
          
           });


	    });
	}

});