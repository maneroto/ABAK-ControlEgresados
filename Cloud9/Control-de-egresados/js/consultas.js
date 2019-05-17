		$(document).on("ready", function(){
			listar();
		});
        
        var listar = function(){
            var spanishlang = {
              "sProcessing":     "Por favor espere...",
              "sLengthMenu":     "Mostrar _MENU_ registros",
              "sZeroRecords":    "No se encontraron resultados",
              "sEmptyTable":     "Ningún dato disponible en esta tabla",
              "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
              "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
              "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
              "sInfoPostFix":    "",
              "sSearch":         "Buscar:",
              "sUrl":            "",
              "sInfoThousands":  ",",
              "sLoadingRecords": "Cargando...",
              "oPaginate": {
                  "sFirst":    "Primero",
                  "sLast":     "Último",
                  "sNext":     "Siguiente",
                  "sPrevious": "Anterior"
              },
              "oAria": {
                  "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                  "sSortDescending": ": Activar para ordenar la columna de manera descendente"
              }
            }
            var table = $("#student_data").DataTable({
                dom: 'Bfrtip',
                "buttons":[ 
                    { 
                    text: '<i class="fa fa-user-plus"></i>',
                    titleAttr: 'Agregar',
                    className: 'btn btn-success',
                    action: function(){ 
                        agregar_nuevo_usuario();
                        
                        } 
                    },
                    { 
                    extend: 'excelHtml5',
                    text: '<i class="fa fa-file-excel-o"></i>',
                    titleAttr: 'Excel' },
                    {
                    extend: 'csvHtml5',
                    text: '<i class="fa fa-file-text-o"></i>',
                    titleAttr: 'CSV' },
                    { 
                    extend: 'pdfHtml5',
                    text: '<i class="fa fa-file-pdf-o"></i>',
                    titleAttr: 'PDF' 
                    } 
                ],
                "language": spanishlang,//Cambia el idioma de la tabla a spanish.
                "processing":true,
                //"serverSide":true,
                "ajax":{
                    "method":"POST",
                    "url":"../php/verConsultas"
                },
                "columns":[
                    {"data":"idusuario"},
                    {"data":"nombre"},
                    {"data":"apaterno"},
                    {"data":"amaterno"},
                    {"data":"sexo"},
                    {"data":"email"},
                    {"data":"telefono"},
                    {"data":"especialidad"}
                ]//Se obtienen los datos de cada una de las columnas desde la base de datos.
            });
        }