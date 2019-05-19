
           <div class="container">  
                <p class="caption">Consultar alumnos</p>
                <hr>
                <br />  
                <div class="table-responsive">  
                    <table id="student_data" class="mdl-data-table mdl-data-table--selectable mdl-shadow--2dp highlight" style="margin: 0 auto;">
                        <thead>  
                            <tr>  
                                <td>No. Control</td>  
                                <td>Nombre</td>  
                                <td>Apellido Paterno</td>  
                                <td>Apellido Materno</td>  
                                <td>Sexo</td>
                                <td>Email</td>
                                <td>Teléfono</td>
                                <td>Especialidad</td> 
                                <td>Contacto</td>
                            </tr>  
                        </thead>
                    </table> 
                </div>  
           </div>
           
           <?php 
               $js = '
               <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/consultas/jquery-1.12.3.js"></script>
               <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	           <script src="https://cdn.datatables.net/1.10.19/js/dataTables.material.min.js"></script>
               <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/consultas/dataTables.bootstrap.js"></script>
               <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/consultas/dataTables.buttons.min.js"></script>
               <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/consultas/buttons.bootstrap.min.js"></script>
               <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
               <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/consultas/jszip.min.js"></script>
               <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/consultas/pdfmake.min.js"></script>
               <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/consultas/vfs_fonts.js"></script>
               <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/consultas/buttons.html5.min.js"></script>
               <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/consultas/buttons.print.js"></script>
               <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/materialize.min.js"></script>
               <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/consultas/consultarAlumnos.js"></script>';
           ?>