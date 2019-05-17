var d = new Date();
var month = ['01','02','03','04','05','06','07','08','09','10','11','12'];
var date = d.getFullYear() + "-" + month[d.getMonth()] + "-" + d.getDate();
var today = d.getFullYear() + "-" + month[d.getMonth()] + "-" + (d.getDate()+1);
/*Iniciliza los componentes a utilizar*/
$(document).ready(function(){
    M.AutoInit();
    
    $("#fechas_cuarto").hide();
    
    $("#cuarto_switch").click(function(){ 
          $("#fechas_cuarto").toggle();
    });
    
    $('#fecha_apertura_4').datepicker({
        autoClose: true,
        format: 'yyyy-mm-dd',
        yearRange: 0,
        minDate: new Date(today),
        i18n: {
            months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
            monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
            weekdays: ["Domingo","Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"],
            weekdaysShort: ["Dom","Lun", "Mar", "Mie", "Jue", "Vie", "Sab"],
            weekdaysAbbrev: ["D","L", "M", "M", "J", "V", "S"],
            cancel:'Cancelar',
            done:'Listo'
        },
        onSelect: function (selected) {
            var dt = new Date(selected);
            dt.setDate(dt.getDate() + 1);
            $("#fecha_cierre_4").datepicker("option", "minDate", dt);
        }
    });
    
    $('#fecha_cierre_4').datepicker({
        autoClose: true,
        format: 'yyyy-mm-dd',
        yearRange: 0,
        minDate: new Date(today),
        i18n: {
            months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
            monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
            weekdays: ["Domingo","Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"],
            weekdaysShort: ["Dom","Lun", "Mar", "Mie", "Jue", "Vie", "Sab"],
            weekdaysAbbrev: ["D","L", "M", "M", "J", "V", "S"],
            cancel:'Cancelar',
            done:'Listo'
        },
        onSelect: function (selected) {
            var dt = new Date(selected);
            dt.setDate(dt.getDate() - 1);
            $("#fecha_apertura_4").datepicker("option", "maxDate", dt);
        }
    });
      
      $("#encuesta4").submit(function(){
        event.preventDefault();
    
        if($("#cuarto_switch").is(':checked')) {  
          if (($("#fecha_apertura_4").val() != "") && ($("#fecha_cierre_4").val() != "")) {
            console.log("Proceder");
            $.ajax({
                type: "POST",
                url: '../php/statusEncuesta.php',
                data: $(this).serialize(),
                success: function(data)
                {
                  alert('Cambios guardados con exito');
                }
            });
          } else {
            console.log("No proceder");
            alert('Por favor llena todas las fechas');
          }
        } else {  
            console.log("Proceder");
            $.ajax({
                type: "POST",
                url: '../php/statusEncuesta.php',
                data: $(this).serialize(),
                success: function(data)
                {
                  alert('Cambios guardados con exito');
                }
            }); 
        }  
      });
  
});