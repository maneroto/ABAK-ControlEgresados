          <div class="container">  
                <p class="caption">Consultar alumnos</p>
                <hr>
                <button id="printable" class="waves-effect waves-light btn indigo darken-4"><i class="material-icons left">local_printshop</i>Imprimir Tabla</button>
                <br />  
                <div class="table-responsive" style="overflow-x:scroll;overflow-y:hidden;height:auto;">  
                     <table id="student_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>No. Control</td>  
                                    <td>Nombre</td>  
                                    <td>Apellido Paterno</td>  
                                    <td>Apellido Materno</td>  
                                    <td>Sexo</td>
                                    <td>Edad</td>
                                    <td>Área de Interés</td>
                                    <td>Ocupación</td>
                                    <td>Grupo</td>
                                    <td>Email</td>
                                    <td>Teléfono</td>
                                    <td>Contacto</td>
                                    <td>Editar</td>
                               </tr>  
                          </thead>
                     </table>  
                </div>  
           </div>
           <div class="container">
               <div class="row">
                   <div class="col s12 m4 l2"></div>
                   <div class="col s12 m4 l8">
                        <form id="frmModificarUsuario" class="form-horizontal" action="" method="POST" accept-charset="UTF-8" style="display: none;">
                    <div class="form-group">
                      <h3 class="col-sm-offset-2 col-sm-8 center-align caption">          
                      Editar Información de Alumno</h3>
                    </div>
                    <input type="hidden" id="idusuario" name="idusuario" value="0">
                    <input type="hidden" id="opcion" name="opcion" value="modificar">
                    <div class="form-group">
                      <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                      <div class="col-sm-8"><input id="nombre" name="nombre" type="text" class="form-control"  autofocus maxlength="50" required></div>
                      <span id="span_nombre" class="error"></span>
                    </div>
                    <div class="form-group">
                      <label for="apaterno" class="col-sm-2 control-label">Apellido Paterno</label>
                      <div class="col-sm-8"><input id="apaterno" name="apaterno" type="text" class="form-control" maxlength="50" required></div>
                      <span id="span_apaterno" class="error"></span>
                    </div>
                    <div class="form-group">
                      <label for="amaterno" class="col-sm-2 control-label">Apellido Materno</label>
                      <div class="col-sm-8"><input id="amaterno" name="amaterno" type="text" class="form-control" maxlength="50" required></div>
                      <span id="span_amaterno" class="error"></span>
                    </div>
                    <div class="form-group">
                      <label for="email" class="col-sm-2 control-label">Email</label>
                      <div class="col-sm-8"><input id="email" name="email" type="text" class="form-control" maxlength="100"></div>
                      <span id="span_email" class="error"></span>
                    </div>
                    <div class="form-group">
                      <label for="telefono" class="col-sm-2 control-label">Teléfono</label>
                      <div class="col-sm-8"><input id="telefono" name="telefono" type="text" class="form-control" maxlength="12"></div>
                      <span id="span_telefono" class="error"></span>
                    </div>
                    <div class="form-group">
                        <select id="idgrupo" name="idgrupo" required>
                                  <option value="" disabled selected>Grupo</option>
                                </select>
                                <label>Grupo</label>
                                <span id="span_idgrupo" class="error"></span>
                    </div>                      
                    <div class="form-group center-align">
                      <div class="col-sm-offset-2 col-sm-8">
                        <input id="" type="submit" class="btn btn-primary green accent-4" value="Guardar Cambios" onclick="ocultar_forma_modificar()">
                        <input id="btn_listar" type="button" class="btn btn-primary red darken-4" value="Cancelar" onclick="ocultar_forma_modificar()">
                      </div>
                    </div>
                  </form>
                  <br>
                  <br>
                        <form id="frmEliminarUsuario" class="form-horizontal" action="" method="POST" style="display: none;">
                    <div class="form-group">
                      <h3 class="col-sm-offset-2 col-sm-8 center-align caption">          
                      Eliminar Alumno por No. Control</h3>
                      <p>¿Está seguro que desea eliminar un alumno?. Esta acción no se puede deshacer.</p>
                    </div>
                    <input type="hidden" id="idusuario" name="idusuario" value="0">
                    <input type="hidden" id="opcion" name="opcion" value="eliminar">
                    <div class="form-group">
                      <label for="idusuario" class="col-sm-2 control-label">No. Control</label>
                      <div class="col-sm-8"><input id="idusuario" name="idusuario" type="text" class="form-control"  autofocus></div>       
                    </div>
                    <div class="form-group center-align">
                      <div class="col-sm-offset-2 col-sm-8">
                        <input id="eliminar-alumno" type="submit" class="btn btn-primary green accent-4" value="Eliminar Alumno" onclick="ocultar_forma_eliminar()">
                        <input id="btn_listar" type="button" class="btn btn-primary red darken-4" value="Cancelar" onclick="ocultar_forma_eliminar()">
                      </div>
                    </div>
                  </form>                 
                   </div>
                   <div class="col s12 m4 l2"></div>
               </div>
           </div>
           <?php 
               $js = '
               <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/consultas/jquery-1.12.3.js"></script>
               <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/consultas/bootstrap.min.js"></script>
               <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/consultas/jquery.dataTables.min.js"></script>
               <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/consultas/dataTables.bootstrap.js"></script>
               <script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
               <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/consultas/buttons.bootstrap.min.js"></script>
               <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
               <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/consultas/jszip.min.js"></script>
               <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/consultas/pdfmake.min.js"></script>
               <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/consultas/vfs_fonts.js"></script>
               <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/consultas/buttons.html5.min.js"></script>
               <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/consultas/buttons.print.js"></script>
               <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/materialize.min.js"></script>
               <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/consultas/consultarAlumnos.js"></script>
               <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/alumnosInit.js"></script>
               <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/offline-js/offline.min.js"></script>
               <script type="text/javascript">
           Offline.options = {
             // to check the connection status immediatly on page load.
             checkOnLoad: false,
           
             // to monitor AJAX requests to check connection.
             interceptRequests: true,
           
             // to automatically retest periodically when the connection is down (set to false to disable).
             reconnect: {
               // delay time in seconds to wait before rechecking.
               initialDelay: 3,
           
               // wait time in seconds between retries.
               delay: 10
             },
           
             // to store and attempt to remake requests which failed while the connection was down.
             requests: true
           };
         </script>';
           
           ?>