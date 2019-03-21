$(document).ready(function(){
    $("#4tostatus").click(function(){
        if ($("#4tostatus").is(':checked')) {
            alert("La encuesta se abrió");
        }
        else{
             alert("La encuesta se cerró");
        }
    });
    $("#6tostatus").click(function(){
        if ($("#6tostatus").is(':checked')) {
            alert("La encuesta se abrió");
        }
        else{
             alert("La encuesta se cerró");
        }
    });
    $("#egrstatus").click(function(){
        if ($("#egrstatus").is(':checked')) {
            alert("La encuesta se abrió");
        }
        else{
             alert("La encuesta se cerró");
        }
    });
});