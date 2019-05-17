$(document).ready(function(){
    
    $("select[required]").css({display: "block", height: 0, padding: 0, width: 0, position: 'absolute'});
    
    $("#idusuario").on('input',function(){
        var regex = /^[a-zA-Z0-9\u00C0-\u00ff\s]+$/;
        var idusuario = $('#idusuario').val();
        if(idusuario == "")
            $("#span_idusuario").text("Campo obligatorio");
        else if(!regex.test(idusuario))
             $("#span_idusuario").text("Solo se aceptan letras y números");
        else if(idusuario.length != 13)
             $("#span_idusuario").text("Deben ser 13 dígitos");
        else
            $("#span_idusuario").text("");
    });
    
    $("#idusuario").on('change',function(){
        var regex = /^[a-zA-Z0-9\u00C0-\u00ff\s]+$/;
        var idusuario = $('#idusuario').val();
        if(idusuario == "")
            $("#span_idusuario").text("Campo obligatorio");
        else if(!regex.test(idusuario)){
             $("#span_idusuario").text("Solo se aceptan letras y números");
             $('#idusuario').val("");
        }
        else if(idusuario.length != 13){
             $("#span_idusuario").text("Deben ser 13 dígitos");
             $('#idusuario').val("");
        }
        else{
            $("#span_idusuario").text("");
            var idusuario = $('#idusuario').val().toUpperCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "")
            $("#idusuario").val(idusuario);
        }
    });
    
    $("#sexo").on('change',function(){
        var sexo = $('#sexo').val();
        if(sexo == "")
            $("#span_sexo").text("Campo obligatorio");
        else
            $("#span_sexo").text("");
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
    
    $("#correo").on('input',function(){
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var correo = $('#correo').val();
        if(correo == "")
            $("#span_correo").text("Campo obligatorio");
        else if(!regex.test(correo))
             $("#span_correo").text("Formato de correo inválido");
        else
            $("#span_correo").text("");
    });
    
    $("#correo").on('change',function(){
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var correo = $('#correo').val();
        if(correo == "")
            $("#span_correo").text("Campo obligatorio");
        else if(!regex.test(correo)){
             $("#span_correo").text("Formato de correo inválido");
             $("#correo").val("");
        }
        else
            $("#span_correo").text("");
    });
    
     $("#lada_movil").on('input',function(){
        var lada_movil = $('#lada_movil').val();
        if(lada_movil == "")
            $("#span_lada_movil").text("Campo obligatorio");
        else if(!($.isNumeric(lada_movil)))
             $("#span_lada_movil").text("Sólo se admiten números");
        else if(lada_movil.length < 2)
             $("#span_lada_movil").text("Deben ser al menos 2 dígitos");
        else
            $("#span_lada_movil").text("");
    });
    
    $("#lada_movil").on('change',function(){
        var lada_movil = $('#lada_movil').val();
        if(lada_movil == "")
            $("#span_lada_movil").text("Campo obligatorio");
        else if(!($.isNumeric(lada_movil))){
             $("#span_lada_movil").text("Sólo se admiten números");
             $('#lada_movil').val("");
        }
        else if(lada_movil.length < 2){
             $("#span_lada_movil").text("Deben ser al menos 2 dígitos");
             $('#lada_movil').val("");
        }
        else
            $("#span_lada_movil").text("");
    });
    
    $("#movil").on('input',function(){
        var movil = $('#movil').val();
        if(movil == "")
            $("#span_movil").text("Campo obligatorio");
        else if(!($.isNumeric(movil)))
             $("#span_movil").text("Sólo se admiten números");
        else if(movil.length != 7)
             $("#span_movil").text("Deben ser 7 dígitos");
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
        else if(movil.length != 7){
             $("#span_movil").text("Deben ser 7 dígitos");
             $('#movil').val("");
        }
        else
            $("#span_movil").text("");
    });
    
    $('#registrarAdministrador').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: '../php/registrarAdmin',
            data: $(this).serialize(),
            success: function(data){
                alert(data);
                location.reload();
            }
        });
    });
});