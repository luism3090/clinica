$(document).on('ready',function()
{

	var tblCarreras = $('#tblPacientesFicha').DataTable(
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
                    url : "cargar_tabla_ficha_identificacion.php", 
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


});