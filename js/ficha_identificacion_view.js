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
		                    // stringLength: {
	                     //        max: 13,
	                     //         message: 'El RFC esta compuesto de solo 13 caractéres'
	                     //    },
		                    regexp: {
	                            // regexp: /^([A-Z,Ñ,&]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[A-Z|\d]{3})$/, // RFC CON homoclave
	                            regexp: /^[A-Z]{4}([0-9]{2})(1[0-2]|0[1-9])([0-3][0-9])([ -]?)$/,  // RFC SIN homoclave
	                            message: 'El RFC no tiene el formato correcto',

	                        },
                          callback: {
                           message: 'El RFC no esta disponible',
                           callback: function(value, validator) {
                               // Get the selected options

                               var valida = true;

                               var datos = {
                                              id_paciente_new: $("#txtIdPaciente").val().trim(),
                                              id_paciente_ori: '-1'
                                           }


                                           $.ajax(
                                           {
                                               type: "POST",
                                               url: "ficha_identificacion_valida_idpaciente.php",
                                               dataType:"json",
                                               data: {datos:datos},
                                                async: false,
                                               success: function(result)
                                                   {
                                                         //console.log(result);
                                                      
                                                          if(result.error == true)
                                                          {
                                                             $('#modalAlertaError .modal-body .mldMsj').text(result.mensaje);
                                                             $('#modalAlertaError').modal('show');
                                                          }
                                                          else
                                                          {

                                                            if(result.resultado == 'no_disponible')
                                                            {
                                                               valida = false;
                                                            }
                                                            else{
                                                              valida = true;
                                                            }
                                                            
                                                          }
                                                     
                                                   },
                                              error:function(result)
                                                 {
                                                   alert("Error");
                                                  console.log(result.responseText);
                                                   
                                                 }
                                                 
                                           });

                                           return valida;

                           }
                       },

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
		            ,
		             txtPeso: {
		                group: '.form-group',
		                validators: {
		                    notEmpty: {
		                        message: 'Este campo es requerido'
		                    },
		                    stringLength: {
	                        	max: 10,
	                        	message: '10 caracteres como máximo'
	                    	}

		                }
		            },
		             txtTalla: {
		                group: '.form-group',
		                validators: {
		                    notEmpty: {
		                        message: 'Este campo es requerido'
		                    },
		                    stringLength: {
	                        	max: 10,
	                        	message: '10 caracteres como máximo'
	                    	}

		                }
		            },
		             txtIMC: {
		                group: '.form-group',
		                validators: {
		                    notEmpty: {
		                        message: 'Este campo es requerido'
		                    },
		                    stringLength: {
	                        	max: 10,
	                        	message: '10 caracteres como máximo'
	                    	}

		                }
		            },
		             txtTenArterial: {
		                group: '.form-group',
		                validators: {
		                    notEmpty: {
		                        message: 'Este campo es requerido'
		                    },
		                    stringLength: {
	                        	max: 10,
	                        	message: '10 caracteres como máximo'
	                    	}

		                }
		            },
		             txtFrecCardiaca: {
		                group: '.form-group',
		                validators: {
		                    notEmpty: {
		                        message: 'Este campo es requerido'
		                    },
		                    stringLength: {
	                        	max: 10,
	                        	message: '10 caracteres como máximo'
	                    	}

		                }
		            },
		             txtFrecRespiratoria: {
		                group: '.form-group',
		                validators: {
		                    notEmpty: {
		                        message: 'Este campo es requerido'
		                    },
		                    stringLength: {
	                        	max: 10,
	                        	message: '10 caracteres como máximo'
	                    	}

		                }
		            },
		             txtAbdomen: {
		                group: '.form-group',
		                validators: {
		                    notEmpty: {
		                        message: 'Este campo es requerido'
		                    },
		                    stringLength: {
	                        	max: 10,
	                        	message: '10 caracteres como máximo'
	                    	}

		                }
		            },
		             txtCadera: {
		                group: '.form-group',
		                validators: {
		                    notEmpty: {
		                        message: 'Este campo es requerido'
		                    },
		                    stringLength: {
	                        	max: 10,
	                        	message: '10 caracteres como máximo'
	                    	}

		                }
		            },
		             txtICC: {
		                group: '.form-group',
		                validators: {
		                    notEmpty: {
		                        message: 'Este campo es requerido'
		                    },
		                    stringLength: {
	                        	max: 10,
	                        	message: '10 caracteres como máximo'
	                    	}

		                }
		            },
		             txtSpO2: {
		                group: '.form-group',
		                validators: {
		                    notEmpty: {
		                        message: 'Este campo es requerido'
		                    },
		                    stringLength: {
	                        	max: 10,
	                        	message: '10 caracteres como máximo'
	                    	}

		                }
		            },
		             txtGLIC: {
		                group: '.form-group',
		                validators: {
		                    notEmpty: {
		                        message: 'Este campo es requerido'
		                    },
		                    stringLength: {
	                        	max: 10,
	                        	message: '10 caracteres como máximo'
	                    	}

		                }
		            },
		             txtTemperatura: {
		                group: '.form-group',
		                validators: {
		                    notEmpty: {
		                        message: 'Este campo es requerido'
		                    },
		                    stringLength: {
	                        	max: 10,
	                        	message: '10 caracteres como máximo'
	                    	}

		                }
		            }
		            ,
		             slMedicoTratante: {
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

				let ficha_identificacion = {
												 fecha_hora_elaboracion: $("#txtFechaHoraElab").val(),
												 tipo_interrogatorio: $("#slTipoInterrogatorio").val(),
												 nombre_acompanante: $("#txtNombreAcompanante").val(),
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
												 correo_electronico: $("#txtEmail").val(),
												 id_medico: $("#slMedicoTratante").val()
												}

				let signos_vitales = {

					peso: $("#txtPeso").val(),
					talla: $("#txtTalla").val(),
					IMC: $("#txtIMC").val(),
					tension_arterial: $("#txtTenArterial").val(),
					FC: $("#txtFrecCardiaca").val(),
					FR: $("#txtFrecRespiratoria").val(),
					abdomen: $("#txtAbdomen").val(),
					cadera: $("#txtCadera").val(),
					ICC: $("#txtICC").val(),
					SpO2: $("#txtSpO2").val(),
					GLIC: $("#txtGLIC").val(),
					Temperatura: $("#txtTemperatura").val(),
					num_ficha: '',
					id_paciente: ''

				}



				let pacientes = {

					  id_paciente: $("#txtIdPaciente").val(),
					  nombre: $("#txtNombrePaciente").val(),
					  ape_paterno: $("#txtApePaterno").val(),
					  ape_materno: $("#txtApeMaterno").val(),
					  genero: $("#slGenero").val(),
					  fecha_nacimiento: $("#txtFechaNacimiento").val(),
					  edad: $("#txtEdad").val(),
					  num_ficha: ''

				}

				// console.log(datosFichaIdentificacion);
				// console.log(datosPaciente);

				$.ajax(
	               {
		               type: "POST",
		               url: "ficha_identificacion_guardar.php",
		               data:{ficha_identificacion:ficha_identificacion,pacientes:pacientes,signos_vitales:signos_vitales} ,
		               async: true,
		               dataType:"json",
		               success: function(result)
		               {            

		               	  if(result.error == true)
		               	  {

	   	  	               	  	$('#modalAlertaError .modal-body .mldMsj').text(result.mensaje);
		          	  	 		$('#modalAlertaError').modal('show');

   	  	               	  }
   	  	               	  else
   	  	               	  {
   	  	               	  	 
	   	  	               	   $('#modalAlertaSuccess .modal-body .mldMsj').text(result.mensaje);
	   	  		          	   $('#modalAlertaSuccess').modal('show');
	   	  	               	  	 
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

	$("#txtFechaNacimiento").on("change",function(){

		let edad = calcularEdad($("#txtFechaNacimiento").val());

		$("#txtEdad").val(edad);
		$("#formFichaIdentificacion").bootstrapValidator('validateField', "txtEdad");

	});

	$("#navSalir").on("click",function(){

		$.ajax(
	    {
	      
	      type: "POST",
	      url: "cerrar_sesion.php",
	      dataType:"json",
	      data: '',
	      async: true,
	        success: function(result)
	            {

	            	 location.href = 'index.php';
	              
	            },
	       error:function(result)
	          {
	           console.log(result);
	            
	          }
	   });

	});

	


	function calcularEdad(fecha) {
	    var hoy = new Date();
	    var cumpleanos = new Date(fecha);
	    var edad = hoy.getFullYear() - cumpleanos.getFullYear();
	    var m = hoy.getMonth() - cumpleanos.getMonth();

	    if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
	        edad--;
	    }

	    return edad;
	}


	function cargarSelectMedicoTratante()
	{

		$.ajax(
	    {
	      
	      type: "POST",
	      url: "cargarSelectMedicoTratante.php",
	      dataType:"json",
	      data: '',
	      async: true,
	        success: function(result)
	            {

    	                if(result.registros > 0)
    	                {
    	                   let options ="<option selected disabled >Elija una opción</option>";
    	                   result.resultado.forEach(function(elemento,index) 
    	                   {
    	  
    	                       options += '<option value="'+elemento.id_medico+'">'+elemento.medico+'</option>';
    	                      
    	                  });

    	                   	$("#slMedicoTratante").html(options);

    	                }
    	                else
    	                {
    	                	$("#modalAlerta .modal-body").html("No se encontraron datos disponibles");
    						$("#modalAlerta").modal("show");
    	                }
                    

	                
	              
	            },
	       error:function(result)
	          {
	           console.log(result);
	            
	          }
	   });


	}
	cargarSelectMedicoTratante();

	$('#modalAlertaSuccess').on('hide.bs.modal', function (e) 
  	{

  		location.reload();
  	    
  	});

});