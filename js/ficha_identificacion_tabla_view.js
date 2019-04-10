$(document).on('ready',function()
{

	var tblPacientesFicha = $('#tblPacientesFicha').DataTable(
               {
                  "processing": true,
                  "serverSide": true,
                  "ordering": true,
                   "language": {
                                  "url": "libreriasJS/Spanish.json"
                                },
                            "scrollY":        "500px",
                            "scrollCollapse": true,
                  "ajax":{
                    url : "ficha_identificacion_tabla_cargar.php", 
                    type: "post",  
                    error: function(d){ 
                    	
                      $(".employee-grid-error").html("");
                      $("#employee-grid").append('<tbody class="employee-grid-error"><tr><th colspan="3">No se encontraron datos</th></tr></tbody>');
                      $("#employee-grid_processing").css("display","none");
                      
                    }
                    // ,
                    // success:function(d)
                    // {
                      
                    //  console.log(d);
                    // }
                  },
                  // "columnDefs": [
                  //               {
                  //                   "targets": [ 0 ],
                  //                   "visible": false,
                  //                   "searchable": false
                  //               }
                  //           ],
                   
               
               });



    $("body").on("click",'.btnFichaPaciente',function()
     {

            let id_paciente = tblPacientesFicha.rows($(this).closest("tr").index()).data().pluck(0)[0];


            $.ajax(
               {
                 type: "POST",
                 url: "ficha_identificacion_cargar.php",
                 data:{id_paciente:id_paciente} ,
                 async: true,
                 dataType:"json",
                 success: function(result)
                 {              
                  

                    if(result.error == false){


                    $("#modalFormModificarFichaPaciente .modal-body").attr("data-num_ficha",result.datos.num_ficha);
                    $("#modalFormModificarFichaPaciente .modal-body").attr("data-id_paciente",result.datos.id_paciente);
                    $("#modalFormModificarFichaPaciente .modal-body").attr("data-id_signos_vitales",result.datos.id_signos_vitales);

                     $('#modalFormModificarFichaPaciente .lblPaciente').text(result.datos.nombre+" "+result.datos.ape_paterno+" "+result.datos.ape_materno);
                    
                      $("#txtFechaHoraElab").val(result.datos.fecha_hora_elaboracion.split(" ")[0]);
                      $("#slTipoInterrogatorio").val(result.datos.tipo_interrogatorio);
                      $("#txtNombreAcompanante").val(result.datos.nombre_acompanante);
                      $("#txtApePaternoAcompanante").val(result.datos.ape_paterno_acompanante);
                      $("#txtApeMaternoAcompanante").val(result.datos.ape_materno_acompanante);
                      $("#txtParentescoAcompanante").val(result.datos.parentesco_acompanante);
                      $("#slEdoCivil").val(result.datos.estado_civil);
                      $("#txtLugarOrigen").val(result.datos.lugar_origen);
                      $("#txtLocalidadResidencia").val(result.datos.localidad_residencia);
                      $("#txtMunicipioResidencia").val(result.datos.municipio_residencia);
                      $("#txtEstadoResidencia").val(result.datos.estado_residencia);
                      $("#txtColoniaResidencia").val(result.datos.colonia_residencia);
                      $("#txtCalleResidencia").val(result.datos.calle_residencia);
                      $("#txtNumeroExterior").val(result.datos.num_exterior);
                      $("#txtNumeroInterior").val(result.datos.num_interior);
                      $("#slEscolaridad").val(result.datos.escolaridad);
                      $("#txtCarrera").val(result.datos.carrera);
                      $("#txtOcupacion").val(result.datos.ocupacion);
                      $("#txtReligion").val(result.datos.religion);
                      $("#txtCelular").val(result.datos.tel_movil);
                      $("#txtTelefono").val(result.datos.tel_casa);
                      $("#txtEmail").val(result.datos.correo_electronico);
                      $("#slMedicoTratante").val(result.datos.id_medico);


                       $("#txtPeso").val(result.datos.peso);
                       $("#txtTalla").val(result.datos.talla);
                       $("#txtIMC").val(result.datos.IMC);
                       $("#txtTenArterial").val(result.datos.tension_arterial);
                       $("#txtFrecCardiaca").val(result.datos.FC);
                       $("#txtFrecRespiratoria").val(result.datos.FR);
                       $("#txtAbdomen").val(result.datos.abdomen);
                       $("#txtCadera").val(result.datos.cadera);
                       $("#txtICC").val(result.datos.ICC);
                       $("#txtSpO2").val(result.datos.SpO2);
                       $("#txtGLIC").val(result.datos.GLIC);
                       $("#txtTemperatura").val(result.datos.Temperatura);
                      // num_ficha: '',
                      // id_paciente: ''

                      $("#txtIdPaciente").val(result.datos.id_paciente);
                       $("#txtNombrePaciente").val(result.datos.nombre);
                       $("#txtApePaterno").val(result.datos.ape_paterno);
                       $("#txtApeMaterno").val(result.datos.ape_materno);
                       $("#slGenero").val(result.datos.genero);
                       $("#txtFechaNacimiento").val(result.datos.fecha_nacimiento);
                       $("#txtEdad").val(result.datos.edad);



                     $('#modalFormModificarFichaPaciente').modal('show');


                    }
                    else{
                       
                       
                    }

                   
                 },
                 error:function(result)
                 {
                      console.log(result.responseText);
                      //$("#error").html(data.responseText); 
                 }
          
           });


     });


    validaDatosFichaIdentificacion();


  $("#formModificarFichaIdentificacion").on("submit",function(event)
  {
    event.preventDefault();

    $("#formModificarFichaIdentificacion").bootstrapValidator();

  });

  $('#modalFormModificarFichaPaciente').on('hide.bs.modal', function (e) 
    {

      $("#formModificarFichaIdentificacion").data('bootstrapValidator').resetForm();
        
    });

  function validaDatosFichaIdentificacion()
  {
    

      $('#formModificarFichaIdentificacion').bootstrapValidator(
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
                               message: 'El RFC esta compuesto de 13 caractéres'
                          }
                          ,
                          callback: {
                           message: 'El RFC no esta disponible',
                           callback: function(value, validator) {
                               // Get the selected options

                               var valida = true;

                               var datos = {
                                              id_paciente_new: $("#txtIdPaciente").val().trim(),
                                              id_paciente_ori:  $("#modalFormModificarFichaPaciente .modal-body").attr("data-id_paciente")
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

              id_signos_vitales:$("#modalFormModificarFichaPaciente .modal-body").attr("data-id_signos_vitales"),
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
              num_ficha:  $("#modalFormModificarFichaPaciente .modal-body").attr("data-num_ficha"),
              id_paciente: $("#modalFormModificarFichaPaciente .modal-body").attr("data-id_paciente")

            }


            let pacientes = {

                id_paciente: $("#txtIdPaciente").val(),
                nombre: $("#txtNombrePaciente").val(),
                ape_paterno: $("#txtApePaterno").val(),
                ape_materno: $("#txtApeMaterno").val(),
                genero: $("#slGenero").val(),
                fecha_nacimiento: $("#txtFechaNacimiento").val(),
                edad: $("#txtEdad").val(),
                num_ficha:  $("#modalFormModificarFichaPaciente .modal-body").attr("data-num_ficha"),
                id_paciente_ori:  $("#modalFormModificarFichaPaciente .modal-body").attr("data-id_paciente"),
                

            }

            // console.log(datosFichaIdentificacion);
            // console.log(datosPaciente);

                  $.ajax(
                           {
                             type: "POST",
                             url: "ficha_identificacion_modificar.php",
                             data:{ficha_identificacion:ficha_identificacion,pacientes:pacientes,signos_vitales:signos_vitales} ,
                             async: true,
                             dataType:"json",
                             success: function(result)
                             {            
                                console.log(result);

                                  if(result.error == true)
                                  {

                                        $('#modalAlertaError .modal-body .mldMsj').text(result.mensaje);
                                        $('#modalFormModificarFichaPaciente').modal('hide');
                                         $('#modalAlertaError').modal('show');

                                    }
                                    else
                                    {
                                       
                                       $('#modalAlertaSuccess .modal-body .mldMsj').text(result.mensaje);
                                       $('#modalFormModificarFichaPaciente').modal('hide');
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

  

  $("#btnCancelarFicha").on("click",function(){

    $('#modalFormModificarFichaPaciente').modal("hide");

  });

  $("#txtFechaNacimiento").on("change",function(){

    let edad = calcularEdad($("#txtFechaNacimiento").val());

    $("#txtEdad").val(edad);
    $("#formFichaIdentificacion").bootstrapValidator('validateField', "txtEdad");

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