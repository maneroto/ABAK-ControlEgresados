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
    
    $('.js-example-basic-single').select2();
    
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
});

$(window).on('load',function() {
    $('#preloader').fadeOut('slow');
});

