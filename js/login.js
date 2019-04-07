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

	               	  	 $('#modalAlerta .modal-body').text(result.mensaje);
		          	  	 $('#modalAlerta').modal('show');

	               	  }
	               	  else{
	               	  	 
	               	  	  if(result.registros == 0)
	               	  	 {
	               	  	 	$('#modalAlerta .modal-body').text(result.mensaje);
		          	  	 	$('#modalAlerta').modal('show');
	               	  	 }
	               	  	 else{

	               	  	 	if(result.id_tipo_usuario == "3"){

	               	  	 		location.href = 'tabla_ficha_identificacion.php';
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