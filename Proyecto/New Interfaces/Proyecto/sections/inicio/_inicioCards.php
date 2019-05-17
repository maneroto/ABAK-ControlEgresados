            <div class = "container">
                <?php echo "<pre>";
print_r($_SESSION);
if(in_array(array("BUSCAR ALUMNOS"),$_SESSION['permisos']))
    print_r("hola");
echo "</pre>";?>
                <div class = "card-stats">
                    <div class="row">
                        <?php
                            if(in_array(array("BUSCAR ALUMNOS"),$_SESSION['permisos']))
                                include('_consultas.php');
                        ?>
                    </div>
                </div>
            </div>