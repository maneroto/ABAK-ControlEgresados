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
        <div id="breadcrumbs-wrapper">
            <!-- Search for small screen -->
            <div class="header-search-wrapper grey hide-on-large-only">
                <i class="mdi-action-search active"></i>
                <input type="text" Name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
            </div>
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Editar perfil</h5>
                <ol class="breadcrumbs">
                    <li><a href="inicio.php">Inicio</a></li>
                    <li><a href="perfil.php">Mi perfil</a></li>
                    <li class="active">Editar perfil</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->

        <!--start container-->
        <div class="container">
          <div class="section">

            <p class="caption">Editar la informacion de mi perfil</p>
            <div class="divider"></div>
            <!--Buttons for adding-->

              <form method="post">

                <div class="input-field col s4 m6 l2">
                  <p><a class="waves-effect waves-light btn modal-trigger red" href="#modal2">Cancelar</a>

                  <div id="modal2" class="modal">
                    <div class="modal-content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                    <div class="modal-footer">
                      <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close">Cancelar</a>
                      <a href="perfil.php" class="waves-effect waves-green btn-flat modal-action modal-close">Aceptar</a>
                    </div>
                  </div>
                </div>

                <div class="center-align">
                  <div class="popup-gallery">
                    <div class="gallary-sizer"></div>
                    <div class="gallary-item"><a href="images/avatar-2.jpeg" title="Alonso Oropeza"><img src="images/avatar-2.jpeg"></a></div>
                  </div>
                  <div class="file-field input-field">
                    <div class="btn">
                      <span>Archivo</span>
                      <input type="file">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text" placeholder="Sube una foto de perfil">
                    </div>
                  </div>
                </div>


                <div class="row col s12">
                  <div class="input-field col s12 m6 l4">
                    <i class="mdi-action-account-circle prefix"></i>
                    <input id="Name" type="text" class="validate">
                    <label for="Name">Name</label>
                  </div>
                  <div class="input-field col s12 m6 l4">
                    <input id="lName1" type="text" class="validate">
                    <label for="lName1">Apellido Paterno</label>
                  </div>
                  <div class="input-field col s12 m6 l4">
                    <input id="lName2" type="text" class="validate">
                    <label for="lName2">Apellido Materno</label>
                  </div>
                </div>
                <div class="row col s12">
                  <div class="input-field col s12 m6 l2">
                    <i class="mdi-communication-phone prefix"></i>
                    <input id="lada" type="number" min="000" max="999" class="validate" value="52">
                    <label for="lada">Zona</label>
                  </div>
                  <div class="input-field col s12 m6 l1">
                    <input id="lada" type="number" min="000" max="999" class="validate">
                    <label for="lada">Lada</label>
                  </div>
                  <div class="input-field col s12 m6 l3">
                    <input id="number" type="number" min="0000000" max="9999999" class="validate">
                    <label for="number">Numero</label>
                  </div>
                </div>
                <div class="row col s12">
                  <div class="input-field col s12 m6 l4">
                    <i class="mdi-communication-email prefix"></i>
                    <input id="email" type="email" class="validate">
                    <label for="email">Correo electronico</label>
                  </div>
                </div>

                <p class="caption">Cambio de contrasena</p>
                <div class="divider"></div>

                <div class="row col s12">
                  <div class="input-field col s12 m6 l3">
                    <i class="mdi-action-lock prefix"></i>
                    <input id="p1" type="password" class="validate">
                    <label for="p1">Contrasena actual</label>
                  </div>
                  <div class="input-field col s12 m6 l3">
                    <input id="p2" type="password" class="validate">
                    <label for="p2">Contrasena actual</label>
                  </div>
                  <div class="input-field col s12 m6 l3">
                    <input id="p3" type="password" class="validate">
                    <label for="p3">Contrasena nueva</label>
                  </div>
                  <div class="input-field col s12 m6 l3">
                    <input id="p4" type="password" class="validate">
                    <label for="p4">Contrasena nueva</label>
                  </div>
                </div>
                <br>
                <div class="input-field col s4 m6 l2">
                  <button class="waves-effect waves-light btn modal-trigger green" href="#modal1" type="submit">Finalizar</button>

                  <div id="modal1" class="modal">
                    <div class="modal-content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                    <div class="modal-footer">
                      <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close">Cancelar</a>
                      <a href="perfil.php" class="waves-effect waves-green btn-flat modal-action modal-close">Aceptar</a>
                    </div>
                  </div>
                </div>


              </form>
            </div>
          </div>
        <!--end container-->
      </section>
      <!-- END CONTENT -->

    </div>
    <!-- END WRAPPER -->

  </div>
  <!-- END MAIN -->
  <?php include 'common/footer.html'; ?>

  <script type="text/javascript">
    /*
     * Masonry container for Gallery page
     */
    var $containerGallery = $(".masonry-gallery-wrapper");
    $containerGallery.imagesLoaded(function() {
      $containerGallery.masonry({
          itemSelector: '.gallary-item img',
         columnWidth: '.gallary-sizer',
         isFitWidth: true
      });
    });

    //popup-gallery
    $('.popup-gallery').magnificPopup({
      delegate: 'a',
      type: 'image',
      closeOnContentClick: true,
      fixedContentPos: true,
      tLoading: 'Loading image #%curr%...',
      mainClass: 'mfp-img-mobile mfp-no-margins mfp-with-zoom',
      gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
      },
      image: {
        verticalFit: true,
        tError: '<a href="%url%">The image #%curr%</a> no se pudo cargar la imagen.',
        titleSrc: function(item) {
          return item.el.attr('title');
        },
      zoom: {
        enabled: true,
        duration: 300 // don't foget to change the duration also in CSS
      }
      }
    });
  </script>
</body>

</html>
