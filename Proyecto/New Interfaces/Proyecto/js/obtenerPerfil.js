$(document).ready(function()
{
   $.ajax(
       {
          type: "GET",
          url: '../php/obtenerPerfil.php',
          success: function(data)
          {
              $('.card-info').html(data);
          }
       });
});