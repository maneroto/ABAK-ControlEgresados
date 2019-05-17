 <?php  
 $connect = mysqli_connect("localhost", "root", "", "controlegresados");  
 $query ="SELECT A.idusuario, U.nombre, U.apaterno, U.amaterno, U.sexo, U.email, U.telefono, G.especialidad FROM Alumno A, Usuario U, Grupo G WHERE A.idusuario = U.idusuario AND A.idgrupo = G.idgrupo ORDER BY U.idusuario DESC";   
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html lang="es" dir="ltr">  
      <head>
           <meta charset="utf-8">  
           <title>Control de Egresados</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
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
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["idusuario"].'</td>  
                                    <td>'.$row["nombre"].'</td>  
                                    <td>'.$row["apaterno"].'</td>  
                                    <td>'.$row["amaterno"].'</td>  
                                    <td>'.$row["sexo"].'</td>
                                    <td>'.$row["email"].'</td>
                                    <td>'.$row["telefono"].'</td>
                                    <td>'.$row["especialidad"].'</td>
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#student_data').DataTable();  
 });  
 </script>
 