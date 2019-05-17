$(document).ready(function(){
    
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
});