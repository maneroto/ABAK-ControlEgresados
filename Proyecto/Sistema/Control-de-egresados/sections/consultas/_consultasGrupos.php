           <div class="container">  
                <p class="caption">Consultar grupos</p>
                <hr>
                <button id="printable" class="waves-effect waves-light btn indigo darken-4"><i class="material-icons left">local_printshop</i>Imprimir Tabla</button>
                <br />  
                <div class="table-responsive" style="overflow-x:scroll;overflow-y:hidden;height:auto;">  
                     <table id="student_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                   <td>ID</td>
                                    <td>Nombre</td>  
                                    <td>Especialidad</td>  
                                    <td>Turno</td>  
                                    <td>Semestre</td>  
                                    <td>Generación</td>
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
                        <form id="frmModificarGrupo" class="form-horizontal" action="" method="POST" accept-charset="UTF-8" style="display: none;">
                    <div class="form-group">
                      <h3 class="col-sm-offset-2 col-sm-8 center-align caption">          
                      Editar Información de Grupo</h3>
                    </div>
                    <input type="hidden" id="idgrupo" name="idgrupo" value="0">
                    <input type="hidden" id="opcion" name="opcion" value="modificar">
                    <div class="form-group">
                                <select id="nombre" name="nombre" required>
                                  <option value="" disabled selected>Nombre de grupo</option>
                                  <option value="A">A</option>
                                  <option value="B">B</option>
                                  <option value="C">C</option>
                                  <option value="D">D</option>
                                  <option value="E">E</option>
                                  <option value="F">F</option>
                                </select>
                                <label>Nombre de grupo</label>
                                <span id="span_nombre" class="error">Campo obligatorio</span>
                            </div>
                    <div class="form-group">
                                <select id="especialidad" name="especialidad" required>
                                  <option value="" disabled selected>Especialidad</option>
                                  <option value="PROGRAMACION">Programación</option>
                                  <option value="CONTABILIDAD">Contabilidad</option>
                                  <option value="ARQUITECTURA">Arquitectura</option>
                                  <option value="ELECTROMECANICA">Electromecánica</option>
                                </select>
                                <label>Especialidad</label>
                                <span id="span_especialidad" class="error">Campo obligatorio</span>
                            </div>
                    <div class="form-group">
                                <select id="turno" name="turno" required>
                                  <option value="" disabled selected>Turno</option>
                                  <option value="M">M</option>
                                  <option value="V">V</option>
                                </select>
                                <label>Especialidad</label>
                                <span id="span_turno" class="error">Campo obligatorio</span>
                            </div>
                    <div class="form-group">
                                <select id="semestre" name="semestre" required>
                                  <option value="" disabled selected>Semestre</option>
                                  <option value="1">Primero</option>
                                  <option value="2">Segundo</option>
                                  <option value="3">Tercero</option>
                                  <option value="4">Cuarto</option>
                                  <option value="5">Quinto</option>
                                  <option value="6">Sexto</option>
                                </select>
                                <label>Semestre</label>
                                <span id="span_semestre" class="error">Campo obligatorio</span>
                            </div>
                    <div class="form-group">
                                <select id="generacion" name="generacion" required> 
                                  <option value="" disabled selected>Generación</option>
                                </select>
                                <label>Generación</label>
                                <span id="span_generacion" class="error">Campo obligatorio</span>
                            </div>
                    <div class="form-group center-align">
                      <div class="col-sm-offset-2 col-sm-8">
                        <input id="modificar-grupo" type="submit" class="btn btn-primary green accent-4" value="Guardar Cambios" onclick="ocultar_forma_modificar()">
                        <input id="btn_listar" type="button" class="btn btn-primary red darken-4" value="Cancelar" onclick="ocultar_forma_modificar()">
                      </div>
                    </div>
                  </form>
                  <br>
                  <br>
                        <form id="frmEliminarGrupo" class="form-horizontal" action="" method="POST" style="display: none;">
                    <div class="form-group">
                      <h3 class="col-sm-offset-2 col-sm-8 center-align caption">          
                      Eliminar Grupo por ID</h3>
                      <p>¿Está seguro que desea eliminar un grupo?. Esta acción no se puede deshacer.</p>
                    </div>
                    <input type="hidden" id="idgrupo" name="idgrupo" value="0">
                    <input type="hidden" id="opcion" name="opcion" value="eliminar">
                    <div class="form-group">
                      <label for="idgrupo" class="col-sm-2 control-label">ID. Grupo</label>
                      <div class="col-sm-8"><input id="idgrupo" name="idgrupo" type="text" class="form-control"  autofocus></div>       
                    </div>
                    <div class="form-group center-align">
                      <div class="col-sm-offset-2 col-sm-8">
                        <input id="eliminar-grupo" type="submit" class="btn btn-primary green accent-4" value="Eliminar Grupo" onclick="ocultar_forma_eliminar()">
                        <input id="btn_listar" type="button" class="btn btn-primary red darken-4" value="Cancelar" onclick="ocultar_forma_eliminar()">
                      </div>
                    </div>
                  </form>
                  <br><br>
                  <form id="frmEgresarGrupo" class="form-horizontal" action="" method="POST" style="display: none;">
                    <div class="form-group">
                      <h3 class="col-sm-offset-2 col-sm-8 center-align caption">          
                      Egresar Grupo por ID</h3>
                      <p>¿Está seguro que desea egresar un grupo?. Esta acción no se puede deshacer.</p>
                    </div>
                    <input type="hidden" id="idgrupo" name="idgrupo" value="0">
                    <input type="hidden" id="opcion" name="opcion" value="egresar">
                    <div class="form-group">
                      <label for="idgrupo" class="col-sm-2 control-label">ID. Grupo</label>
                      <div class="col-sm-8"><input id="idgrupo" name="idgrupo" type="text" class="form-control"  autofocus></div>       
                    </div>
                    <div class="form-group center-align">
                      <div class="col-sm-offset-2 col-sm-8">
                        <input id="egresar-grupo" type="submit" class="btn btn-primary green accent-4" value="Egresar Grupo" onclick="ocultar_forma_egresar()">
                        <input id="btn_listar" type="button" class="btn btn-primary red darken-4" value="Cancelar" onclick="ocultar_forma_egresar()">
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
               <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/consultas/dataTables.buttons.min.js"></script>
               <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/consultas/buttons.bootstrap.min.js"></script>
               <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/consultas/jszip.min.js"></script>
               <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/consultas/pdfmake.min.js"></script>
               <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/consultas/vfs_fonts.js"></script>
               <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/consultas/buttons.html5.min.js"></script>
               <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/consultas/buttons.print.js"></script>
               <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/materialize.min.js"></script>
               <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/consultas/consultarGrupos.js"></script>
               <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/gruposInit.js"></script>
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