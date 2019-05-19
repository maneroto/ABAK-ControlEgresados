var d = new Date();
var month = ['01','02','03','04','05','06','07','08','09','10','11','12'];
var date = d.getFullYear() + "-" + month[d.getMonth()] + "-" + d.getDate();
var tomorrow = d.getFullYear() + "-" + month[d.getMonth()] + "-" + (d.getDate()+1);
/*Iniciliza los componentes a utilizar*/
$(document).ready(function(){
    M.AutoInit();
    
    $('.datepicker').datepicker({
        autoClose: true,
        format: 'yyyy-mm-dd',
        yearRange: 0,
        minDate: new Date(tomorrow),
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
});
$(window).on('load',function() {
    $('#preloader').fadeOut('slow');
});

!function(d,s,id){
    var js,fjs=d.getElementsByTagName(s)[0];
      if(!d.getElementById(id)){
          js=d.createElement(s);
          js.id=id;
          js.src='https://weatherwidget.io/js/widget.min.js';
          fjs.parentNode.insertBefore(js,fjs);
      }}
(document,'script','weatherwidget-io-js');


