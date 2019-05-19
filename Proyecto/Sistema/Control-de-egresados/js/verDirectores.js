$(document).ready(function()
{
   $.ajax(
       {
          type: "GET",
          url: '../php/verDirectores',
          success: function(data)
          {
              $('#directores').html(data);
          }
       });
      
});