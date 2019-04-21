$(document).on('ready',function()
{

	   var tblPacientesBandeja = $('#tblPacientesBandeja').DataTable(
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
                    url : "medico_bandeja_tabla_cargar.php", 
                    type: "post",  
                    error: function(d){ 
                      $(".employee-grid-error").html("");
                      $("#employee-grid").append('<tbody class="employee-grid-error"><tr><th colspan="3">No se encontraron datos</th></tr></tbody>');
                      $("#employee-grid_processing").css("display","none");
                      
                    }
                    // ,
                    // success:function(d)
                    // {
                    //   debugger;
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


 var myVar = setInterval( function () {
           
       tblPacientesBandeja.ajax.reload();

    }, 10000 );


 $("body").on("click",'.btnHistoriaPaciente',function()
     {

            let paciente = tblPacientesBandeja.rows($(this).closest("tr").index()).data().pluck(1)[0];

            $("#modalFormHistoriaClinica .lblPaciente").text(paciente);
            $("#modalFormHistoriaClinica").modal("show");
            //clearInterval(myVar);


     });



     $("#navSalir").on("click",function()
     {

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



});