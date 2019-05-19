<?php include("../sections/_header.php")?>
<?php include '../sections/_preloader.php'; ?>
<?php include("../sections/_nav.php")?>
<?php include("../sections/perfil/_editarPerfil.php")?>
<?php include("../sections/_footer.php")?>
<script type="text/javascript">
  $('#newPassword, #confirmPassword').on('keyup', function () {
    if ($('#newPassword').val() == $('#confirmPassword').val()) {
      $('#passConfirm').html('*Las contrasenas coinciden').css('color', 'green');
    } else 
      $('#passConfirm').html('*Las contrasenas no coinciden').css('color', 'red');
  });
</script>