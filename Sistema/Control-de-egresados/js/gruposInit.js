$(document).ready(function()
{
   $('#viewsGrupos').addClass('active');
   
   $.ajax({
      type: "GET",
      url: '../php/selectGeneracion',
      success: function(data)
      {
          $('#generacion').append(data);
          $('#generacion').formSelect();
      }
    });
    
    
});