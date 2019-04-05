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
	                    },
	                    regexp: {
                            regexp: /^\d{4}-\d{2}-\d{2}$/,

                            message: 'La fecha no tiene un formato correcto',

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
	                    },
	                    stringLength: {
                        	 max: 50,
                        	 message: '50 caracteres como máximo'
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
	                    ,
	                    stringLength: {
                        	max: 50,
                        	message: '50 caracteres como máximo'
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
	                    ,
	                    stringLength: {
                        	max: 50,
                        	message: '50 caracteres como máximo'
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
	                    ,
	                    stringLength: {
                        	max: 50,
                        	message: '50 caracteres como máximo'
                    	}

	                }
	            }
	            ,
	            txtNombrePaciente: {
	                group: '.form-group',
	                validators: {
	                    notEmpty: {
	                        message: 'Este campo es requerido'
	                    },
	                    stringLength: {
                        	max: 50,
                        	message: '50 caracteres como máximo'
                    	}

	                }
	            }
	            ,
	            txtApePaterno: {
	                group: '.form-group',
	                validators: {
	                    notEmpty: {
	                        message: 'Este campo es requerido'
	                    },
	                    stringLength: {
                        	max: 50,
                        	message: '50 caracteres como máximo'
                    	}

	                }
	            }
	            ,
	            txtApeMaterno: {
	                group: '.form-group',
	                validators: {
	                    notEmpty: {
	                        message: 'Este campo es requerido'
	                    },
	                    stringLength: {
                        	max: 50,
                        	message: '50 caracteres como máximo'
                    	}


	                }
	            }
	            ,
	            txtFechaNacimiento: {
	                group: '.form-group',
	                validators: {
	                    notEmpty: {
	                        message: 'Este campo es requerido'
	                    },
	                    regexp: {
                            regexp: /^\d{4}-\d{2}-\d{2}$/,
                            message: 'La fecha no tiene un formato correcto',

                        }

	                }
	            }
	            ,
	            txtEdad: {
	                group: '.form-group',
	                validators: {
	                    notEmpty: {
	                        message: 'Este campo es requerido'
	                    },
	                    regexp: {
	                        regexp: /^[0-9.]+$/,

	                        message: 'Solo debe ingresar números',

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
	                    },
	                    stringLength: {
                        	max: 100,
                        	message: '100 caracteres como máximo'
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
	                    ,
	                    stringLength: {
                        	max: 50,
                        	message: '50 caracteres como máximo'
                    	}

	                }
	            }
	            ,
	            txtMunicipioResidencia: {
	                group: '.form-group',
	                validators: {
	                    notEmpty: {
	                        message: 'Este campo es requerido'
	                    },
	                    stringLength: {
                        	max: 50,
                        	message: '50 caracteres como máximo'
                    	}
	                }
	            }
	            ,
	            txtEstadoResidencia: {
	                group: '.form-group',
	                validators: {
	                    notEmpty: {
	                        message: 'Este campo es requerido'
	                    },
	                    stringLength: {
                        	max: 50,
                        	message: '50 caracteres como máximo'
                    	}

	                }
	            }
	            ,
	            txtColoniaResidencia: {
	                group: '.form-group',
	                validators: {
	                    notEmpty: {
	                        message: 'Este campo es requerido'
	                    },
	                    stringLength: {
                        	max: 50,
                        	message: '50 caracteres como máximo'
                    	}

	                }
	            }
	            ,
	            txtCalleResidencia: {
	                group: '.form-group',
	                validators: {
	                    notEmpty: {
	                        message: 'Este campo es requerido'
	                    },
	                    stringLength: {
                        	max: 50,
                        	message: '50 caracteres como máximo'
                    	}
	                }
	            }
	            ,
	            txtNumeroExterior: {
	                group: '.form-group',
	                validators: {
	                    notEmpty: {
	                        message: 'Este campo es requerido'
	                    },
	                    stringLength: {
                        	max: 50,
                        	message: '50 caracteres como máximo'
                    	}

	                }
	            }
	            ,
	            txtNumeroInterior: {
	                group: '.form-group',
	                validators: {
	                    /*notEmpty: {
	                        message: 'Este campo es requerido'
	                    },*/
	                    stringLength: {
                        	max: 50,
                        	message: '50 caracteres como máximo'
                    	}
	                }
	            }
	            ,
	            slEscolaridad: {
	                group: '.form-group',
	                validators: {
	                    notEmpty: {
	                        message: 'Este campo es requerido'
	                    }

	                }
	            },
	             txtCarrera: {
	                group: '.form-group',
	                validators: {
	                    notEmpty: {
	                        message: 'Este campo es requerido'
	                    },
	                    stringLength: {
                        	max: 50,
                        	message: '50 caracteres como máximo'
                    	}

	                }
	            }
	            ,
	             txtOcupacion: {
	                group: '.form-group',
	                validators: {
	                    notEmpty: {
	                        message: 'Este campo es requerido'
	                    },
	                    stringLength: {
                        	max: 50,
                        	message: '50 caracteres como máximo'
                    	}

	                }
	            }
	            ,
	             txtReligion: {
	                group: '.form-group',
	                validators: {
	                    notEmpty: {
	                        message: 'Este campo es requerido'
	                    },
	                    stringLength: {
                        	max: 50,
                        	message: '50 caracteres como máximo'
                    	}

	                }
	            }
	            ,
	             txtCelular: {
	                group: '.form-group',
	                validators: {
	                    notEmpty: {
	                        message: 'Este campo es requerido'
	                    },
	                    regexp: {
	                        regexp: /^[0-9.]+$/,

	                        message: 'Solo debe ingresar números',

	                    },
	                    stringLength: {
                        	max: 10,
                        	min: 10,
                        	message: 'El número de celular consta de 10 dígitos'
                    	}

	                }
	            }
	            ,
	             txtTelefono: {
	                group: '.form-group',
	                validators: {
	                    // notEmpty: {
	                    //     message: 'Este campo es requerido'
	                    // },
	                    regexp: {
	                        regexp: /^[0-9.]+$/,

	                        message: 'Solo debe ingresar números',

	                    },
	                    stringLength: {
                        	max: 10,
                        	min: 10,
                        	message: 'El número de teléfono consta de 10 dígitos'
                    	}

	                }
	            },
	             txtEmail: {
	                group: '.form-group',
	                validators: {
	                    notEmpty: {
	                        message: 'Este campo es requerido'
	                    },
		                   emailAddress: {
	                        message: 'La dirección de correo electrónico ingresada no es correcta'
                    	},
	                    stringLength: {
                        	max: 50,
                        	message: '50 caracteres como máximo'
                    	}

	                }
	            }
	           
	        }
	    }).on('success.form.bv', function (e) 
	    {

			e.preventDefault();

			let datosFichaIdentificacion = {
											 fecha_hora_elaboracion: $("#txtFechaHoraElab").val(),
											 tipo_interrogatorio: $("#slTipoInterrogatorio").val(),
											 nombre_acompanante: $("#txtNombrePaciente").val(),
											 ape_paterno_acompanante: $("#txtApePaternoAcompanante").val(),
											 ape_materno_acompanante: $("#txtApeMaternoAcompanante").val(),
											 parentesco_acompanante: $("#txtParentescoAcompanante").val(),
											 estado_civil: $("#slEdoCivil").val(),
											 lugar_origen: $("#txtLugarOrigen").val(),
											 localidad_residencia: $("#txtLocalidadResidencia").val(),
											 municipio_residencia: $("#txtMunicipioResidencia").val(),
											 estado_residencia: $("#txtEstadoResidencia").val(),
											 colonia_residencia: $("#txtColoniaResidencia").val(),
											 calle_residencia: $("#txtCalleResidencia").val(),
											 num_exterior: $("#txtNumeroExterior").val(),
											 num_interior: $("#txtNumeroInterior").val(),
											 escolaridad: $("#slEscolaridad").val(),
											 carrera: $("#txtCarrera").val(),
											 ocupacion: $("#txtOcupacion").val(),
											 religion: $("#txtReligion").val(),
											 tel_movil: $("#txtCelular").val(),
											 tel_casa: $("#txtTelefono").val(),
											 correo_electronico: $("#txtEmail").val()
											}



			let datosPaciente = {

				  
				  nombre: $("#txtNombrePaciente").val(),
				  ape_paterno: $("#txtApePaterno").val(),
				  ape_materno: $("#txtApeMaterno").val(),
				  genero: $("#slGenero").val(),
				  fecha_nacimiento: $("#txtFechaNacimiento").val(),
				  edad: $("#txtEdad").val()
				  

			}

			// console.log(datosFichaIdentificacion);
			// console.log(datosPaciente);

			$.ajax(
               {
	               type: "POST",
	               url: "guardarFicha.php",
	               data:{datosFichaIdentificacion:datosFichaIdentificacion,datosPaciente:datosPaciente} ,
	               async: true,
	               success: function(result)
	               {              
	               	  console.log(result);
	               },
	               error:function(result)
	               {
	                    console.log(result.responseText);
	                    //$("#error").html(data.responseText); 
	               }
          
           });


				

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