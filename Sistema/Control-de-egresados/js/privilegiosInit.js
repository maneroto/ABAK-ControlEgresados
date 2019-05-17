$(document).ready(function()
{
   $.ajax(
       {
          type: "GET",
          url: '../php/obtenerPrivilegios',
          success: function(data)
          {
              $('#privilegios').append(data);
              $('#privilegios').formSelect();
          }
       });
       
     $('#cambiarPrivilegios').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: '../php/cambiarPrivilegios',
            data: $(this).serialize(),
            success: function(data){
                alert(data);
            }
        });
    });
      
});