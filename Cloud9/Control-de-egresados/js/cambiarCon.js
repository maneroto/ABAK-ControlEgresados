$(document).ready(function(){
    
    $("select[required]").css({display: "block", height: 0, padding: 0, width: 0, position: 'absolute'});
    
    $("#newPass").on('input',function(){
        var regex = /^[a-zA-Z0-9\u00C0-\u00ff\s]+$/;
        var newPass = $('#newPass').val();
        if(newPass == "")
            $("#span_newPass").text("Campo obligatorio");
        else if(!regex.test(newPass))
             $("#span_newPass").text("Solo se aceptan letras y números");
        else
            $("#span_newPass").text("");
    });
    
    $("#newPass").on('change',function(){
        var regex = /^[a-zA-Z0-9\u00C0-\u00ff\s]+$/;
        var newPass = $('#newPass').val()
        if(newPass == "")
            $("#span_newPass").text("Campo obligatorio");
        else if(!regex.test(newPass)){
             $("#span_newPass").text("Solo se aceptan letras y números");
             $('#newPass').val("");
        }
    });
    
    $("#newPassCon").on('input',function(){
        var regex = /^[a-zA-Z0-9\u00C0-\u00ff\s]+$/;
        var newPassCon = $('#newPassCon').val();
        if(newPassCon == "")
            $("#span_newPassCon").text("Campo obligatorio");
        else if(!regex.test(newPassCon))
             $("#span_newPassCon").text("Solo se aceptan letras y números");
        else
            $("#span_newPassCon").text("");
    });
    
    $("#newPassCon").on('change',function(){
        var regex = /^[a-zA-Z0-9\u00C0-\u00ff\s]+$/;
        var newPassCon = $('#newPassCon').val()
        if(newPassCon == "")
            $("#span_newPassCon").text("Campo obligatorio");
        else if(!regex.test(newPassCon)){
             $("#span_newPassCon").text("Solo se aceptan letras y números");
             $('#newPassCon').val("");
        }
        else if (newPassCon != $('#newPass').val()){
            $("#span_newPassCon").text("Las contraseñas no coinciden");
            $('#newPassCon').val("");
        }
    });
    
       
    
});
