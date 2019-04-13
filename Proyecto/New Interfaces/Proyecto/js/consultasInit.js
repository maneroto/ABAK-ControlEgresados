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
    
    load_data();
      
   function load_data(is_category)
   {
      var spanishlang = {
      "sProcessing":     "Por favor espere...",
      "sLengthMenu":     "Mostrar _MENU_ registros",
      "sZeroRecords":    "No se encontraron resultados",
      "sEmptyTable":     "Ningún dato disponible en esta tabla",
      "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
      "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
      "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
      "sInfoPostFix":    "",
      "sSearch":         "Buscar:",
      "sUrl":            "",
      "sInfoThousands":  ",",
      "sLoadingRecords": "Cargando...",
      "oPaginate": {
          "sFirst":    "Primero",
          "sLast":     "Último",
          "sNext":     "Siguiente",
          "sPrevious": "Anterior"
      },
      "oAria": {
          "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
          "sSortDescending": ": Activar para ordenar la columna de manera descendente"
      }
      }
    var dataTable = $('#consultas').DataTable({
     "language": spanishlang,
      dom: 'lfrtipB',
     //"bLengthChange": false,
     "processing":true,
     "serverSide":true,
     "order":[],
     "ajax":{
      url:"../sections/_fetch.php",
      //url:"../php/alumnoTableInfo.php",
      type:"POST",
      data:{is_category:is_category}
     },
      buttons: [
            {
                extend: 'csv', text: '<i class="material-icons left">assessment</i>CSV', className: 'waves-effect waves-light btn',
                customize: function (csv) {
                    var csvRows = csv.split('\n');
                    //csvRows[0] = csvRows[0].replace('"No. Serie"', '"Prro"')
                    //csvRows[2] = csvRows[2].replace((csvRows[2].toString()), '"Prro"')
                    return csvRows.join('\n');
                }
            },
            {
                extend: 'excel', text: '<i class="material-icons left">assessment</i>Excel', className: 'waves-effect waves-light btn'
            },
            {
                extend: 'pdf', text: '<i class="material-icons left">assessment</i>PDF', className: 'waves-effect waves-light btn'
            },
            {
                extend: 'print', text: '<i class="material-icons left">assessment</i>Imprimir', className: 'waves-effect waves-light btn'
            }
          ],
     "lengthMenu": [ [10, 25, 50, 1], [10, 25, 50, "All"] ],
     "columnDefs":[
      {
       "targets":[2],
       "orderable":false,
      },
     ],
    });
   }
  
   $(document).on('change', '#category', function(){
    var category = $(this).val();
    $('#consultas').DataTable().destroy();
    if(category != '')
    {
     load_data(category);
    }
    else
    {
     load_data();
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


