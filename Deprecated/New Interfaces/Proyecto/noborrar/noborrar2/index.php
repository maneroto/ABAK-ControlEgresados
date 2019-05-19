<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Prueba Consultas</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	<!-- Buttons DataTables -->
	<link rel="stylesheet" href="css/buttons.bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

</head>
<body>
	<br /><br />  
           <div class="container">  
                <h3 align="center">Prueba</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="student_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>ID</td>  
                                    <td>Nombre</td>  
                                    <td>Apellido Paterno</td>  
                                    <td>Apellido Materno</td>  
                                    <td>Sexo</td>
                                    <td>Email</td>
                                    <td>Teléfono</td>
                                    <td>Especialidad</td>    
                               </tr>  
                          </thead>
                     </table>  
                </div>  
           </div>
	<script src="js/jquery-1.12.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.js"></script>
	<!--botones DataTables-->	
	<script src="js/dataTables.buttons.min.js"></script>
	<script src="js/buttons.bootstrap.min.js"></script>
	<!--Libreria para exportar Excel-->
	<script src="js/jszip.min.js"></script>
	<!--Librerias para exportar PDF-->
	<script src="js/pdfmake.min.js"></script>
	<script src="js/vfs_fonts.js"></script>
	<!--Librerias para botones de exportación-->
	<script src="js/buttons.html5.min.js"></script>

	<script>		
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
                "language": spanishlang,//Cambia el idioma de la tabla a spanish.
                "processing":true,
                //"serverSide":true,
                "ajax":{
                    "method":"POST",
                    "url":"list.php"
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
		
		
		

	</script>
</body>
</html>
