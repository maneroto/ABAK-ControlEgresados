<?php
if(isset($_SESSION['errorMessage']))
  {
      echo '<script>alert("'.$_SESSION['errorMessage'].'");</script>';
      unset($_SESSION['errorMessage']);
  }
?>

<section id="perfilMain" class="mainContent">
    <div class="card ">
        <div class="card-background">
          <img class="card-image" src="<?php echo $httpProtocol.$host.$url.'img/perfil/avatar-2.jpeg'?>">
        </div>
        <div class="card-content card-info noHover">
          <h1>Nombre APaterno AMaterno</h1>
            <hr/>
            <p>RFC</p>
            <p>Sexo</p>
            <p>Email</p>
            <p>Teléfono</p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
          <?php include('_editarPerfil.php'); ?>
        </div>
    </div>
</section>

<?php $js .= '<script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/obtenerPerfil.js"></script>
<script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/perfilInit.js"></script>';?>