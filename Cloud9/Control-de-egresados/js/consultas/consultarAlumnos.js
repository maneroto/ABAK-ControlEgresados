$(document).on("ready", function(){
    listar();
    guardar();
    eliminar();
    $('#preloader').fadeOut('slow');
    M.AutoInit();
    $('.modal1').modal();
});

var obtener_data_editar = function(tbody, table){
    $(tbody).on("click", "button.editar", function(){
        var data = table.row($(this).parents("tr")).data();
        console.log(data);
        var idusuario = $("#idusuario").val(data.idusuario),
            nombre = $("#nombre").val(data.nombre),
            apaterno = $("#apaterno").val(data.apaterno),
            amaterno = $("#amaterno").val(data.amaterno),
            email = $("#email").val(data.email),
            telefono = $("#telefono").val(data.telefono),
            idgrupo = $("#idgrupo").val(data.idgrupo);
            if($("#telefono").val() == '') $("#telefono").val('52');
    });
}

var obtener_id_eliminar = function(tbody, table){
    $(tbody).on("click", "button.eliminar", function(){
        var data = table.row($(this).parents("tr")).data();
        console.log(data);
        var idusuario = $("#frmEliminarUsuario #idusuario").val(data.idusuario);
    });
}

var guardar = function(){
    $("form").on("submit", function(e){
        e.preventDefault();
        var frm = $(this).serialize();
        $.ajax({
            method: "POST",
            url:"../php/consultas/guardarCambios",
            data: frm
        }).done(function(info){
           console.log(info);
           var json_info = JSON.parse(info);
           console.log(json_info);
           mostrar_mensaje(json_info);
           limpiar_datos();
           listar();
           M.AutoInit();
        });
    });
}

var eliminar = function(){
    $("#eliminar-alumno").on("click",function() {
        var idusuario = $("#frmEliminarUsuario #idusuario").val(),
            opcion = $("#frmEliminarUsuario #opcion").val();
        $.ajax({
            method:"POST",
            url:"../php/consultas/guardarCambios",
            data:{"idusuario": idusuario, "opcion": opcion}
        }).done(function(info){
            var json_info = JSON.parse(info);
            mostrar_mensaje_eliminar(info);
            limpiar_datos();
            listar();
            M.AutoInit();
        });
    });
}

var mostrar_mensaje = function( informacion ){
    var texto = "", color = "";
    if( informacion.respuesta == "BIEN" ){
    alert("¡Éxito al modificar informacion de alumno!");
    }else if( informacion.respuesta == "ERROR"){
    alert("¡Error al modificar informacion de alumno!");
    }else if( informacion.respuesta == "EXISTE" ){

    }else if( informacion.respuesta == "VACIO" ){

}

$(".mensaje").html( texto ).css({"color": color });
$(".mensaje").fadeOut(5000, function(){
$(this).html("");
$(this).fadeIn(3000);
}); 
}

var mostrar_mensaje_eliminar = function( informacion ){
    var texto = "", color = "";
    if( informacion.respuesta == "BIEN" ){
    alert("¡Éxito al eliminar alumno!");
    }else if( informacion.respuesta == "ERROR"){
    alert("¡Error al eliminar alumno!");
    }else if( informacion.respuesta == "EXISTE" ){

    }else if( informacion.respuesta == "VACIO" ){

}

$(".mensaje").html( texto ).css({"color": color });
$(".mensaje").fadeOut(5000, function(){
$(this).html("");
$(this).fadeIn(3000);
}); 
}

var limpiar_datos = function(){
$("#opcion").val("modificar");
$("#idusuario").val("");
$("#nombre").val("");
$("#apaterno").val("");
$("#amaterno").val("");
$("#email").val("");
$("#telefono").val("");
$("#idgrupo").val("");
}

var limpiar_datos_eliminar = function(){
$("#opcion").val("eliminar");
$("#idusuario").val("");
}

var print_table = function(){
    $('#printable').click(function () {
        var pageTitle = 'CBTis 145 - Control de Egresados',
            stylesheet = '//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css',
            win = window.open('', 'Print', 'width=1280,height=800');
        win.document.write('<html><head><title>' + pageTitle + '</title>' +
            '<link rel="stylesheet" href="' + stylesheet + '">' +
            '</head><body>' + $('.table')[0].outerHTML + '</body></html>');
        win.document.close();
        win.print();
        win.close();
        return false;
    });
}

function mostrar_forma_modificar() {
   document.getElementById('frmModificarUsuario').style.display = "block";
}
function mostrar_forma_eliminar() {
   document.getElementById('frmEliminarUsuario').style.display = "block";
}
function ocultar_forma_modificar() {
   document.getElementById('frmModificarUsuario').style.display = "none";
}
function ocultar_forma_eliminar() {
   document.getElementById('frmEliminarUsuario').style.display = "none";
}

var listar = function(){
    var spanishlang = {
      "sProcessing":     "Por favor espere...",
      "sLengthMenu":     "Mostrar _MENU_ registros",
      "sZeroRecords":    "No se encontraron resultados",
      "sEmptyTable":     "Ningún dato disponible en esta tabla",
      "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
      "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
      "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
      "sInfoPostFix":    "",
      "sSearch":         "Buscar alumno:",
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
    var table = $("#student_data").DataTable({
        "destroy":true,
        "language": spanishlang,//Cambia el idioma de la tabla a spanish.
        dom: 'lfrtipB',
        //"lengthChange": false,
        "processing":true,
        "order":[],
        buttons: [
        {
            extend: 'csv', text: '<i class="material-icons left">assessment</i>CSV', className: 'waves-effect waves-light btn green darken-3',
            customize: function (csv) {
                var csvRows = csv.split('\n');
                //csvRows[0] = csvRows[0].replace('"No. Serie"', '"Prro"')
                //csvRows[2] = csvRows[2].replace((csvRows[2].toString()), '"Prro"')
                return csvRows.join('\n');
            }
        },
        {
            extend: 'excel', text: '<i class="material-icons left">explicit</i>Excel', className: 'waves-effect waves-light btn green accent-4'
        }
        
        ],
        // "buttons":[ 
        //     { 
        //     extend: 'excelHtml5',
        //     text: '<i class="large material-icons">archive</i>',
        //     titleAttr: 'Excel'
        //     },
        //     {
        //     extend: 'csvHtml5',
        //     text: '<i class="large material-icons">archive</i>',
        //     titleAttr: 'CSV'
            
        //     },
        //     {
        //     extend: 'print',
        //     text: 'Imprimir',
        //     exportOptions: {
        //         modifier: {
        //             page: 'current'
        //             }
        //         },
        //     action: function(){ window.print() }
        //     }
        // ],
        // buttons: [
        //     'csv', 'excel', 'print'
        // ],
        "ajax":{
            "method":"POST",
            "url":"../php/verAlumnos"
        },
        "columns":[
            {"data":"idusuario"},
            {"data":"nombre"},
            {"data":"apaterno"},
            {"data":"amaterno"},
            {"data":"sexo"},
            {"data":"edad"},
            {"data":"areainteres"},
            {"data":"ocupacion"},
            {"data":"grupo"},
            {
            "data":"email"
            },
            {"render": function ( data, type, full, meta ) {
                  return '<a class="waves-effect waves-light btn green accent-4" href="https://api.whatsapp.com/send?phone='+full.telefono+'" target="_blank"><i class="material-icons">message</i></a>';
                }},
            {
            "render": function ( data, type, full, meta ) {
                  return '<a class="btn btn-success" href="mailto:' + full.email + '?"><i class="material-icons">email</i></a>';
                }
            },
            {
                "defaultContent": "<a  href='#frmModificarUsuario'><button  onclick='mostrar_forma_modificar()' type='button' class='btn waves-effect waves-light editar amber accent-4'><i class='large material-icons'>edit</i></button></a><br><br><a href='#frmEliminarUsuario'><button onclick='mostrar_forma_eliminar()' type='button' class='eliminar waves-effect waves-light btn red darken-1'><i class='large material-icons'>delete</i></button></a>"
                
            }
        ]//Se obtienen los datos de cada una de las columnas desde la base de datos.
        
    });
        obtener_data_editar("#student_data tbody", table);
        obtener_id_eliminar("#student_data tbody", table);
        print_table();
}