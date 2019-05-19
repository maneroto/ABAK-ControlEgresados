<div id="mainEncuestas">
  <section id="content" class="mainContent">
    <div class="container">
        <p class="caption">Activar encuestas</p>
        <hr>
        <div id="card-stats">
          <div class="row">
              <?php include '_encuesta4.php';?>
              <?php include '_encuesta6.php';?>
              <?php include '_encuestaEgresados.php';?>            
          </div> 
          <br><br>
          <div class="center-align" id="faltantesEncuesta"></div>
        </div>
    </div>
  </section>
</div>
<div id="statuses"></div>
<?php
 $js .= '<script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/encuestasInit.js"></script>';
?>