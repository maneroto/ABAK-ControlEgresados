var d = new Date();
var month = ['01','02','03','04','05','06','07','08','09','10','11','12'];
var date = d.getFullYear() + "-" + month[d.getMonth()] + "-" + d.getDate();
/*Iniciliza los componentes a utilizar*/
$(document).ready(function(){
    
    M.AutoInit();
    
    $('.datepicker').datepicker({
        autoClose: true,
        format: 'yyyy-mm-dd',
        yearRange: [d.getFullYear()-50, d.getFullYear()-10],
        maxDate: new Date(date),
        i18n: {
            months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
            monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
            weekdays: ["Domingo","Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"],
            weekdaysShort: ["Dom","Lun", "Mar", "Mie", "Jue", "Vie", "Sab"],
            weekdaysAbbrev: ["D","L", "M", "M", "J", "V", "S"],
            cancel:'Cancelar',
            done:'Listo'
        }
    });
    
    $("#academico_switch").click(function(){
        $("#academico").toggle();
    });
    
    $("#practicas_switch").click(function(){
        $("#practicas").toggle();
    });
    
    $("#laboral_switch").click(function(){
        $("#laboral").toggle();
    });
    
    $("#laboral_switch2").click(function(){
        $("#laboral2").toggle();
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
    
    $("#lada_movil").on('change',function(){
        var lada_movil = $('#lada_movil').val();
        if(movil == "")
            $("#span_lada_movil").text("Campo obligatorio");
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
    
    $("#lada_fijo").on('change',function(){
        var lada_fijo = $('#lada_fijo').val();
        if(movil == "")
            $("#span_lada_fijo").text("Campo obligatorio");
        else
            $("#span_lada_fijo").text("");
    });
    
    $("#fijo").on('input',function(){
        var movil = $('#fijo').val();
        if(movil == "")
            $("#span_fijo").text("Campo obligatorio");
        else if(!($.isNumeric(movil)))
             $("#span_fijo").text("Sólo se admiten números");
        else if(movil.length != 7)
             $("#span_fijo").text("Deben ser 7 dígitos");
        else
            $("#span_fijo").text("");
    });
    
    $("#domicilio").on('change',function(){
        var domicilio = $('#domicilio').val().toUpperCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "")
        $("#domicilio").val(domicilio);
        if(domicilio == "")
            $("#span_domicilio").text("Campo obligatorio");
        else
            $("#span_domicilio").text("");
    });
    
    $("#fechanacimiento").on('change',function(){
        var fechanacimiento = $('#fechanacimiento').val();
        if(fechanacimiento == "")
            $("#span_fechanacimiento").text("Campo obligatorio");
        else
            $("#span_fechanacimiento").text("");
    });
    
    $("#area_interes").on('change',function(){
        var area_interes = $('#area_interes').val();
        if(area_interes == "")
            $("#span_area_interes").text("Campo obligatorio");
        else
            $("#span_area_interes").text("");
    });
    
    $("#grado_academico_obtenido").on('change',function(){
        var grado_academico_obtenido = $('#grado_academico_obtenido').val();
        if(grado_academico_obtenido == "")
            $("#span_grado_academico_obtenido").text("Campo obligatorio");
        else
            $("#span_grado_academico_obtenido").text("");
    });
    
    $("#ocupacion").on('change',function(){
        var ocupacion = $('#ocupacion').val().toUpperCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "")
        $("#ocupacion").val(ocupacion);
    });
    
    $("#ocupacion2").on('change',function(){
        var ocupacion2 = $('#ocupacion2').val().toUpperCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "")
        $("#ocupacion2").val(ocupacion2);
    });
    
    $("#ocupacion3").on('change',function(){
        var ocupacion3 = $('#ocupacion3').val().toUpperCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "")
        $("#ocupacion3").val(ocupacion3);
    });
});

$(window).on('load',function() {
    $('#preloader').fadeOut('slow');
});

