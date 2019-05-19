$(document).ready(function()
{
   $('#viewsAlumnos').addClass('active');
   
   $.ajax({
      type: "GET",
      url: '../php/selectGrupo',
      success: function(data)
      {
          $('#idgrupo').append(data);
          $('#idgrupo').formSelect();
      }
    });
    
    $("#nombre").on('input',function(){
        var regex = /^[a-zA-Z\u00C0-\u00ff\s]+$/;
        var nombre = $('#nombre').val();
        if(nombre == "")
            $("#span_nombre").text("Campo obligatorio");
        else if(!regex.test(nombre))
             $("#span_nombre").text("Solo se aceptan letras");
        else
            $("#span_nombre").text("");
    });
    
    $("#nombre").on('change',function(){
        var regex = /^[a-zA-z\u00C0-\u00ff\s]+$/;
        var nombre = $('#nombre').val()
        if(nombre == "")
            $("#span_nombre").text("Campo obligatorio");
        else if(!regex.test(nombre)){
             $("#span_nombre").text("Solo se aceptan letras");
             $('#nombre').val("");
        }
        else{
            $("#span_nombre").text("");
            $("#nombre").val(nombre.toUpperCase().normalize('NFD').replace(/[\u0300-\u036f]/g, ""));
        }
    });
    
    $("#apaterno").on('input',function(){
        var regex = /^[a-zA-z\u00C0-\u00ff\s]+$/;
        var apaterno = $('#apaterno').val();
        if(apaterno == "")
            $("#span_apaterno").text("Campo obligatorio");
        else if(!regex.test(apaterno))
             $("#span_apaterno").text("Solo se aceptan letras");
        else
            $("#span_apaterno").text("");
    });
    
    $("#apaterno").on('change',function(){
        var regex = /^[a-zA-z\u00C0-\u00ff\s]+$/;
        var apaterno = $('#apaterno').val()
        if(apaterno == "")
            $("#span_apaterno").text("Campo obligatorio");
        else if(!regex.test(apaterno)){
             $("#span_apaterno").text("Solo se aceptan letras");
             $('#apaterno').val("");
        }
        else{
            $("#span_apaterno").text("");
            $("#apaterno").val(apaterno.toUpperCase().normalize('NFD').replace(/[\u0300-\u036f]/g, ""));
        }
    });
    
    $("#amaterno").on('input',function(){
        var regex = /^[a-zA-z\u00C0-\u00ff\s]+$/;
        var amaterno = $('#amaterno').val();
        if(amaterno == "")
            $("#span_amaterno").text("Campo obligatorio");
        else if(!regex.test(amaterno))
             $("#span_amaterno").text("Solo se aceptan letras");
        else
            $("#span_amaterno").text("");
    });    
    
    $("#amaterno").on('change',function(){
        var regex = /^[a-zA-z\u00C0-\u00ff\s]+$/;
        var amaterno = $('#amaterno').val()
        if(amaterno == "")
            $("#span_amaterno").text("Campo obligatorio");
        else if(!regex.test(amaterno)){
             $("#span_amaterno").text("Solo se aceptan letras");
             $('#amaterno').val("");
        }
        else{
            $("#span_amaterno").text("");
            $("#amaterno").val(amaterno.toUpperCase().normalize('NFD').replace(/[\u0300-\u036f]/g, ""));
        }
    });
    
    $("#email").on('input',function(){
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var email = $('#email').val();
        if(email == "")
            $("#span_email").text("Campo obligatorio");
        else if(!regex.test(email))
             $("#span_email").text("Formato de correo inválido");
        else
            $("#span_email").text("");
    });
    
    $("#email").on('change',function(){
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var email = $('#email').val();
        if(email == "")
            $("#span_email").text("Campo obligatorio");
        else if(!regex.test(email)){
             $("#span_email").text("Formato de correo inválido");
             $("#email").val("");
        }
        else
            $("#span_email").text("");
    });
    
    $("#movil").on('input',function(){
        var movil = $('#movil').val();
        if(movil == "")
            $("#span_movil").text("Campo obligatorio");
        else if(!($.isNumeric(movil)))
             $("#span_movil").text("Sólo se admiten números");
        else if(movil.length < 12)
             $("#span_movil").text("Deben ser al menos 12 dígitos");
        else
            $("#span_movil").text("");
    });
    
    $("#movil").on('change',function(){
        var movil = $('#movil').val();
        if(movil == "")
            $("#span_movil").text("Campo obligatorio");
        else if(!($.isNumeric(movil))){
             $("#span_movil").text("Sólo se admiten números");
             $('#movil').val("");
        }
        else if(movil.length < 12){
             $("#span_movil").text("Deben ser al menos 12 dígitos");
             $('#movil').val("");
        }
        else
            $("#span_movil").text("");
    });
    
    $("#grupo").on('change',function(){
        var grupo = $('#grupo').val();
        if(grupo == "")
            $("#span_grupo").text("Campo obligatorio");
        else
            $("#span_grupo").text("");
    });
      
});