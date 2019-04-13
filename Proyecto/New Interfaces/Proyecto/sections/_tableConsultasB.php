    <div class="container">
        <div class="row">
            <div class="col s12">
                <br>
                <table id="consultas" class="responsive-table highlight table-responsive">
                    <thead>
                        <tr>
                            <th>
                                <a class="waves-effect waves-light btn blue darken-4"><i class="mdi mdi-sort right"></i>No. Control</a>
                            </th>
                            <th>
                                <a class="waves-effect waves-light btn blue darken-4"><i class="mdi mdi-sort-alphabetical right"></i>Nombre del Alumno</a>
                            </th>
                            <th>
                                <div class="input-field col s12">
                                    <select name="category" id="category" class="form-control no-autoinit">
                                        <option value="">Especialidad</option>
                                            <?php 
                                            while($row = mysqli_fetch_array($result))
                                            {
                                            echo '<option value="'.$row["category_id"].'">'.$row["category_name"].'</option>';
                                            }
                                            ?>
                                    </select>
                                </div>
                            </th>
                            <th>
                                <a class="waves-effect waves-light btn blue darken-4"><i class="mdi mdi-account-check right"></i>Estatus</a>
                            </th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <br>
    <br>
    <?php $js='<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/materialize.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/pdfmake.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/buttons.print.js"></script>
    <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/consultasInit.js"></script>'?>
