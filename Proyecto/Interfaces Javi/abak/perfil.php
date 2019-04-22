<!DOCTYPE html>
<html lang="es">
  <?php include 'common/header.html'; ?>

  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">
      <?php include 'common/sidenav.html'; ?>

      <!-- START CONTENT -->
      <section id="content">

        <!--breadcrumbs start-->
        <!--breadcrumbs end-->

        <div id="profile-page-header" class="card">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="images/background.png" alt="user background">
            </div>
            <figure class="card-profile-image">
                <img src="images/avatar-2.jpeg" alt="profile image" class="circle z-depth-2 responsive-img activator">
            </figure>
            <div class="card-content">
              <div class="row">
                <div class="col s3 offset-s2">
                    <h4 class="card-title grey-text text-darken-4">Alonso Oropeza</h4>
                    <p class="medium-small grey-text">Administrador</p>
                </div>
                <div class="col s2 center-align">
                    <h4 class="card-title grey-text text-darken-4">CBTis 145</h4>
                    <p class="medium-small grey-text">Plantel</p>
                </div>
                <div class="col s2 center-align">
                    <h4 class="card-title grey-text text-darken-4">Querétaro</h4>
                    <p class="medium-small grey-text">Ciudad</p>
                </div>
                <div class="col s2 center-align">
                    <h4 class="card-title grey-text text-darken-4">San Juan</h4>
                    <p class="medium-small grey-text">Municipio</p>
                </div>
                <div class="col s1 right-align">
                  <a class="btn-floating activator waves-effect waves-light darken-2 right">
                      <i class="mdi-action-perm-identity"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="card-reveal">
                <p>
                  <span class="card-title grey-text text-darken-4">Alonso Oropeza <i class="mdi-navigation-close right"></i></span>
                  <span><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> Director</span>
                </p>

                <p>Hola!, soy Alonso Oropeza y estos son mis datos</p>

                <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> +1 (612) 222 8989</p>
                <p><i class="mdi-communication-email cyan-text text-darken-2"></i> alonso@gmail.com</p>
                <p><i class="mdi-social-cake cyan-text text-darken-2"></i> 18 de Junio 1999</p>
                <p><i class="mdi-device-airplanemode-on cyan-text text-darken-2"></i> San Juan del Rio, Queretaro</p>
            </div>
        </div>
        <!--Cards Profile Information-->
        <div id="card-stats">
            <div class="row center-align">
                <div class="col s12 m6 l12">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <a href="editar_perfil.php"><img src="images/profile.jpg" alt="alumnos-img"></a>
                        </div>
                        <div class="card-content  blue darken-4 white-text">
                            <p class="card-stats-title"><i class="mdi-social-person"></i></p>
                            <h4 class="card-stats-number">Editar Perfil</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      </section>
      <!-- END CONTENT -->

    </div>
    <!-- END WRAPPER -->

  </div>
  <!-- END MAIN -->
  <?php include 'common/footer.html'; ?>
</body>

</html>
