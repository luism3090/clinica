$(document).on('ready',function()
{

	validaDatosFichaIdentificacion();


	$("#formFichaIdentificacion").on("submit",function(event)
	{
		event.preventDefault();

		$("#formFichaIdentificacion").bootstrapValidator();

	});

	function validaDatosFichaIdentificacion()
	{
		

		$('#formFichaIdentificacion').bootstrapValidator(
		{

	        message: 'This value is not valid',
	        container: 'tooltip',
	        feedbackIcons: {
	            valid: 'glyphicon glyphicon-ok',
	            invalid: 'glyphicon glyphicon-remove',
	            validating: 'glyphicon glyphicon-refresh'
	        },
	        fields: {
	            txtIdPaciente: {
	                group: '.form-group',
	                validators: {
	                    notEmpty: {
	                        message: 'Este campo es requerido'
	                    },
	                    stringLength: {
                            max: 13,
                             message: 'El RFC esta compuesto de solo 13 caractéres'
                        }

	                }
	            }
	            ,
	            txtFechaHoraElab: {
	                group: '.form-group',
	                validators: {
	                    notEmpty: {
	                        message: 'Este campo es requerido'
	                    }

	                }
	            }
	            ,
	            slTipoInterrogatorio: {
	                group: '.form-group',
	                validators: {
	                    notEmpty: {
	                        message: 'Este campo es requerido'
	                    }

	                }
	            }
	             ,
	            txtNombreAcompanante: {
	                group: '.form-group',
	                validators: {
	                    notEmpty: {
	                        message: 'Este campo es requerido'
	                    }

	                }
	            }
	             ,
	            txtApePaternoAcompanante: {
	                group: '.form-group',
	                validators: {
	                    notEmpty: {
	                        message: 'Este campo es requerido'
	                    }

	                }
	            }
	             ,
	            txtApeMaternoAcompanante: {
	                group: '.form-group',
	                validators: {
	                    notEmpty: {
	                        message: 'Este campo es requerido'
	                    }

	                }
	            }
	            ,
	            txtParentescoAcompanante: {
	                group: '.form-group',
	                validators: {
	                    notEmpty: {
	                        message: 'Este campo es requerido'
	                    }

	                }
	            }
	            ,
	            txtNombrePaciente: {
	                group: '.form-group',
	                validators: {
	                    notEmpty: {
	                        message: 'Este campo es requerido'
	                    }

	                }
	            }
	            ,
	            txtApePaterno: {
	                group: '.form-group',
	                validators: {
	                    notEmpty: {
	                        message: 'Este campo es requerido'
	                    }

	                }
	            }
	            ,
	            txtApeMaterno: {
	                group: '.form-group',
	                validators: {
	                    notEmpty: {
	                        message: 'Este campo es requerido'
	                    }


	                }
	            }
	            ,
	            txtFechaNacimiento: {
	                group: '.form-group',
	                validators: {
	                    notEmpty: {
	                        message: 'Este campo es requerido'
	                    }

	                }
	            }
	            ,
	            txtEdad: {
	                group: '.form-group',
	                validators: {
	                    notEmpty: {
	                        message: 'Este campo es requerido'
	                    }
	                }
	            }
	            ,
	            slGenero: {
	                group: '.form-group',
	                validators: {
	                    notEmpty: {
	                        message: 'Este campo es requerido'
	                    }

	                }
	            }
	            ,
	            slEdoCivil: {
	                group: '.form-group',
	                validators: {
	                    notEmpty: {
	                        message: 'Este campo es requerido'
	                    }

	                }
	            }
	            ,
	            txtLugarOrigen: {
	                group: '.form-group',
	                validators: {
	                    notEmpty: {
	                        message: 'Este campo es requerido'
	                    }

	                }
	            }
	            ,
	            txtLocalidadResidencia: {
	                group: '.form-group',
	                validators: {
	                    notEmpty: {
	                        message: 'Este campo es requerido'
	                    }

	                }
	            }
	            ,
	            txtMunicipioResidencia: {
	                group: '.form-group',
	                validators: {
	                    notEmpty: {
	                        message: 'Este campo es requerido'
	                    }
	                }
	            }
	            ,
	            txtEstadoResidencia: {
	                group: '.form-group',
	                validators: {
	                    notEmpty: {
	                        message: 'Este campo es requerido'
	                    }

	                }
	            }
	            ,
	            txtColoniaResidencia: {
	                group: '.form-group',
	                validators: {
	                    notEmpty: {
	                        message: 'Este campo es requerido'
	                    }

	                }
	            }
	            ,
	            txtCalleResidencia: {
	                group: '.form-group',
	                validators: {
	                    notEmpty: {
	                        message: 'Este campo es requerido'
	                    }
	                }
	            }
	            ,
	            txtNumeroExterior: {
	                group: '.form-group',
	                validators: {
	                    notEmpty: {
	                        message: 'Este campo es requerido'
	                    }

	                }
	            }
	            ,
	            txtNumeroInterior: {
	            	enabled: false,
	                group: '.form-group',
	                validators: {
	                    stringLength: {
                        max: 15
                    	}
	                }
	            }
	           
	        }
	    }).on('success.form.bv', function (e) 
	    {

			e.preventDefault();

			alert();

			/*

			var datosRelCarrerasMaterias = [];

			$clave_oficial = $("#slCarreras").val();
			$id_semestre = $("#slSemestres").val();

			$("#tblCarrerasMaterias tbody tr").each(function()
			{

				var datosCarrerasMaterias = {
											
											claveMateria:$(this).attr("data-claveMateria"),
											creditos_materia:$(this).find("input").eq(0).val().trim(),
											horas_teoricas:$(this).find("input").eq(1).val().trim(),
											horas_practicas:$(this).find("input").eq(2).val().trim()
				
											}


				datosRelCarrerasMaterias.push(datosCarrerasMaterias);

			})

			//console.log(datosRelCarrerasMaterias);

			$.ajax(
			{
	          type: "POST",
	          dataType:"json",
	          url: base_url+"CarrerasMaterias/guardarCarrerasMaterias",
	          data: {datosMaterias:datosRelCarrerasMaterias,clave_oficial:$clave_oficial,id_semestre:$id_semestre},
	          async: true,
	          success: function(result)
		          {

		          	if( typeof(result.redirect) == 'undefined')
                    {
                    	$('#modalAlerta .modal-body').text(result.mensaje);
                    	$('#modalAlerta').modal('show');
                    	if(result.status == 'OK')
                    	{
                    		
                    		getInfoCarrerasMaterias();
                    		$("#btnGuardarCarrerasMaterias").attr('disabled',false); 
                    	}
                    }
                    else
                    {
                      location.href = result.url;
                    }
	
		          

		          },
			   error:function(result)
				  {
				  	console.log(result.responseText);
				  	//$("#error").html(data.responseText); 
				  }
	          
	        });

	        */

	    });


	}


	$("#btnEnviar2").on("click",function(){

		$.ajax({
            type: "POST",
            data:{dato: "algo"},
            url:"guardarFicha.php",
            async: true,
            success: function(data){
                console.log(data);
            }
        });

	})

	 


/*
	$.ajax(
               {
               type: "POST",
               dataType:"json",
               url: "guardarFicha.php",
               data:datos ,
               async: true,
               success: function(result)
               {              

               },
               error:function(result)
               {
                    console.log(result.responseText);
                    //$("#error").html(data.responseText); 
               }
          
           });

           */

});