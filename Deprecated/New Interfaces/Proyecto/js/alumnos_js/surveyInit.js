var d = new Date();
var month = ['01','02','03','04','05','06','07','08','09','10','11','12'];
var date = d.getFullYear() + "-" + month[d.getMonth()] + "-" + d.getDate();
/*Iniciliza los componentes a utilizar*/
$(document).ready(function(){
    
    M.AutoInit();
    
    $("select[required]").css({display: "block", height: 0, padding: 0, width: 0, position: 'absolute'});
    
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
    
    $('#fechanacimiento').focus(function(e) {
        $(this).blur();
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
    
    $("#fijo").on('change',function(){
        var fijo = $('#fijo').val();
        if(fijo == "")
            $("#span_fijo").text("Campo obligatorio");
        else if(!($.isNumeric(fijo))){
             $("#span_fijo").text("Sólo se admiten números");
             $('#fijo').val("");
        }
        else if(fijo.length != 7){
             $("#span_fijo").text("Deben ser 7 dígitos");
             $('#fijo').val("");
        }
        else
            $("#span_fijo").text("");
    });
    
    $("#domicilio").on('input',function(){
        var regex = /^[a-zA-Z0-9\u00C0-\u00ff\s]+$/;
        var domicilio = $('#domicilio').val();
        if(domicilio == "")
            $("#span_domicilio").text("Campo obligatorio");
        else if(!regex.test(domicilio))
             $("#span_domicilio").text("Solo se aceptan letras y números");
        else
            $("#span_domicilio").text("");
    });
    
    $("#domicilio").on('change',function(){
        var regex = /^[a-zA-Z0-9\u00C0-\u00ff\s]+$/;
        var domicilio = $('#domicilio').val();
        if(domicilio == "")
            $("#span_domicilio").text("Campo obligatorio");
        else if(!regex.test(domicilio)){
             $("#span_domicilio").text("Solo se aceptan letras y números");
             $('#domicilio').val("");
        }
        else{
            $("#span_domicilio").text("");
            var domicilio = $('#domicilio').val().toUpperCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "")
            $("#domicilio").val(domicilio);
        }
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
    
    $("#nombre1").on('change',function(){
        var nombre1 = $('#nombre1').val();
        if(nombre1 == "")
            $("#span_nombre1").text("Campo obligatorio");
        else
            $("#span_nombre1").text("");
    });
    
    $("#descripcion1").on('change',function(){
        var descripcion1 = $('#descripcion1').val();
        if(descripcion1 == "")
            $("#span_descripcion1").text("Campo obligatorio");
        else
            $("#span_descripcion1").text("");
    });
    
    $("#area_ocupacion1").on('change',function(){
        var area_ocupacion1 = $('#area_ocupacion1').val();
        if(area_ocupacion1 == "")
            $("#span_area_ocupacion1").text("Campo obligatorio");
        else
            $("#span_area_ocupacion1").text("");
    });
    
    $("#lugar_ocupacion1").on('input',function(){
        var regex = /^[a-zA-Z0-9\u00C0-\u00ff\s]+$/;
        var lugar_ocupacion1 = $('#lugar_ocupacion1').val();
        if(lugar_ocupacion1 == "")
            $("#span_lugar_ocupacion1").text("Campo obligatorio");
        else if(!regex.test(lugar_ocupacion1))
             $("#span_lugar_ocupacion1").text("Solo se aceptan letras y números");
        else
            $("#span_lugar_ocupacion1").text("");
    });
    
    $("#lugar_ocupacion1").on('change',function(){
        var regex = /^[a-zA-Z0-9\u00C0-\u00ff\s]+$/;
        var lugar_ocupacion1 = $('#lugar_ocupacion1').val();
        if(lugar_ocupacion1 == "")
            $("#span_lugar_ocupacion1").text("Campo obligatorio");
        else if(!regex.test(lugar_ocupacion1)){
             $("#span_lugar_ocupacion1").text("Solo se aceptan letras y números");
             $('#lugar_ocupacion1').val("");
        }
        else{
            $("#span_lugar_ocupacion1").text("");
            var lugar_ocupacion1 = $('#lugar_ocupacion1').val().toUpperCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "")
            $("#lugar_ocupacion1").val(lugar_ocupacion1);
        }
    });
    
    $("#nombre2").on('change',function(){
        var nombre2 = $('#nombre2').val();
        if(nombre2 == "")
            $("#span_nombre2").text("Campo obligatorio");
        else
            $("#span_nombre2").text("");
    });
    
    $("#descripcion2").on('change',function(){
        var descripcion2 = $('#descripcion2').val();
        if(descripcion2 == "")
            $("#span_descripcion2").text("Campo obligatorio");
        else
            $("#span_descripcion2").text("");
    });
    
    $("#area_ocupacion2").on('change',function(){
        var area_ocupacion2 = $('#area_ocupacion2').val();
        if(area_ocupacion2 == "")
            $("#span_area_ocupacion2").text("Campo obligatorio");
        else
            $("#span_area_ocupacion2").text("");
    });
    
    $("#lugar_ocupacion2").on('input',function(){
        var regex = /^[a-zA-Z0-9\u00C0-\u00ff\s]+$/;
        var lugar_ocupacion2 = $('#lugar_ocupacion2').val();
        if(lugar_ocupacion2 == "")
            $("#span_lugar_ocupacion2").text("Campo obligatorio");
        else if(!regex.test(lugar_ocupacion2))
             $("#span_lugar_ocupacion2").text("Solo se aceptan letras y números");
        else
            $("#span_lugar_ocupacion2").text("");
    });
    
    $("#lugar_ocupacion2").on('change',function(){
        var regex = /^[a-zA-Z0-9\u00C0-\u00ff\s]+$/;
        var lugar_ocupacion2 = $('#lugar_ocupacion2').val();
        if(lugar_ocupacion2 == "")
            $("#span_lugar_ocupacion2").text("Campo obligatorio");
        else if(!regex.test(lugar_ocupacion2)){
             $("#span_lugar_ocupacion2").text("Solo se aceptan letras y números");
             $('#lugar_ocupacion2').val("");
        }
        else{
            $("#span_lugar_ocupacion2").text("");
            var lugar_ocupacion2 = $('#lugar_ocupacion2').val().toUpperCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "")
            $("#lugar_ocupacion2").val(lugar_ocupacion2);
        }
    });
    
    $("#nombre3").on('change',function(){
        var nombre3 = $('#nombre3').val();
        if(nombre3 == "")
            $("#span_nombre3").text("Campo obligatorio");
        else
            $("#span_nombre3").text("");
    });
    
    $("#descripcion3").on('change',function(){
        var descripcion3 = $('#descripcion3').val();
        if(descripcion3 == "")
            $("#span_descripcion3").text("Campo obligatorio");
        else
            $("#span_descripcion3").text("");
    });
    
    $("#area_ocupacion3").on('change',function(){
        var area_ocupacion3 = $('#area_ocupacion3').val();
        if(area_ocupacion3 == "")
            $("#span_area_ocupacion3").text("Campo obligatorio");
        else
            $("#span_area_ocupacion3").text("");
    });
    
    $("#lugar_ocupacion3").on('input',function(){
        var regex = /^[a-zA-Z0-9\u00C0-\u00ff\s]+$/;
        var lugar_ocupacion3 = $('#lugar_ocupacion3').val();
        if(lugar_ocupacion3 == "")
            $("#span_lugar_ocupacion3").text("Campo obligatorio");
        else if(!regex.test(lugar_ocupacion3))
             $("#span_lugar_ocupacion3").text("Solo se aceptan letras y números");
        else
            $("#span_lugar_ocupacion3").text("");
    });
    
    $("#lugar_ocupacion3").on('change',function(){
        var regex = /^[a-zA-Z0-9\u00C0-\u00ff\s]+$/;
        var lugar_ocupacion3 = $('#lugar_ocupacion3').val();
        if(lugar_ocupacion3 == "")
            $("#span_lugar_ocupacion3").text("Campo obligatorio");
        else if(!regex.test(lugar_ocupacion3)){
             $("#span_lugar_ocupacion3").text("Solo se aceptan letras y números");
             $('#lugar_ocupacion3').val("");
        }
        else{
            $("#span_lugar_ocupacion3").text("");
            var lugar_ocupacion3 = $('#lugar_ocupacion3').val().toUpperCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "")
            $("#lugar_ocupacion3").val(lugar_ocupacion3);
        }
    });
    
    $("#nombre4").on('change',function(){
        var nombre4 = $('#nombre4').val();
        if(nombre4 == "")
            $("#span_nombre4").text("Campo obligatorio");
        else
            $("#span_nombre4").text("");
    });
    
    $("#descripcion4").on('change',function(){
        var descripcion4 = $('#descripcion4').val();
        if(descripcion4 == "")
            $("#span_descripcion4").text("Campo obligatorio");
        else
            $("#span_descripcion4").text("");
    });
    
    $("#area_ocupacion4").on('change',function(){
        var area_ocupacion4 = $('#area_ocupacion4').val();
        if(area_ocupacion4 == "")
            $("#span_area_ocupacion4").text("Campo obligatorio");
        else
            $("#span_area_ocupacion4").text("");
    });
    
    $("#lugar_ocupacion4").on('input',function(){
        var regex = /^[a-zA-Z0-9\u00C0-\u00ff\s]+$/;
        var lugar_ocupacion4 = $('#lugar_ocupacion4').val();
        if(lugar_ocupacion4 == "")
            $("#span_lugar_ocupacion4").text("Campo obligatorio");
        else if(!regex.test(lugar_ocupacion4))
             $("#span_lugar_ocupacion4").text("Solo se aceptan letras y números");
        else
            $("#span_lugar_ocupacion4").text("");
    });
    
    $("#lugar_ocupacion4").on('change',function(){
        var regex = /^[a-zA-Z0-9\u00C0-\u00ff\s]+$/;
        var lugar_ocupacion4 = $('#lugar_ocupacion4').val();
        if(lugar_ocupacion4 == "")
            $("#span_lugar_ocupacion4").text("Campo obligatorio");
        else if(!regex.test(lugar_ocupacion4)){
             $("#span_lugar_ocupacion4").text("Solo se aceptan letras y números");
             $('#lugar_ocupacion4').val("");
        }
        else{
            $("#span_lugar_ocupacion4").text("");
            var lugar_ocupacion4 = $('#lugar_ocupacion4').val().toUpperCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "")
            $("#lugar_ocupacion4").val(lugar_ocupacion4);
        }
    });
    
    $('#registrarEncuesta').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: '../../php/alumnos_php/registrarEncuesta.php',//antes era:   ../../php/registrarEncuesta.php
            data: $(this).serialize(),
            success: function(data){
                alert(data);
            }
        });
    });
    

});

$(window).on('load',function() {
    $('#preloader').fadeOut('slow');
});

