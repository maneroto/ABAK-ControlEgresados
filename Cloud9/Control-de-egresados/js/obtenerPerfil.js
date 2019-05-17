$(document).ready(function()
{
   $.ajax(
       {
          type: "GET",
          url: '../php/obtenerPerfil',
          success: function(data)
          {
              $('.card-info').html(data);
          }
       });
      
});