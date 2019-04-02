<?php include '../sections/_header.php'; ?>
<?php include '../sections/_preloader.php'; ?>
<?php include '../sections/_nav.php'; ?>
<?php include '../sections/_registros.php'; ?>
<script>
    $(document).ready(function(){
      $('.tabs').tabs();
    });
</script>
<script>
document.querySelector(".onlyNumbers").addEventListener("keypress", function (evt) {
    if (evt.which != 8 && evt.which != 0 && evt.which < 48 || evt.which > 57)
    {
        evt.preventDefault();
    }
});
</script>
<?php include '../sections/_footer.php'; ?>