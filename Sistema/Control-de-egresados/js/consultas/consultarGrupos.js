$(document).on("ready", function(){
    listar();
    guardar();
    eliminar();
    egresar();
    $('#preloader').fadeOut('slow');
    M.AutoInit();
    $('.modal1').modal();
});

var obtener_data_editar_grupo = function(tbody, table){
    $(tbody).on("click", "button.editar", function(){
        var data = table.row($(this).parents("tr")).data();
        console.log(data);
        var idgrupo = $("#idgrupo").val(data.idgrupo),
            nombre = $("#nombre").val(data.nombre),
            especialidad = $("#especialidad").val(data.especialidad),
            turno = $("#turno").val(data.turno),
            semestre = $("#semestre").val(data.semestre)
            generacion = $("#generacion").val(data.generacion);
    });
}

var obtener_id_eliminar_grupo = function(tbody, table){
    $(tbody).on("click", "button.eliminar", function(){
        var data = table.row($(this).parents("tr")).data();
        console.log(data);
        var idgrupo = $("#frmEliminarGrupo #idgrupo").val(data.idgrupo);
    });
}

var obtener_id_egresar_grupo = function(tbody, table){
    $(tbody).on("click", "button.egresar", function(){
        var data = table.row($(this).parents("tr")).data();
        console.log(data);
        var idgrupo = $("#frmEgresarGrupo #idgrupo").val(data.idgrupo);
    });
}

var guardar = function(){
    $("form").on("submit", function(e){
        e.preventDefault();
        var frm = $(this).serialize();
        $.ajax({
            method: "POST",
            url:"../php/consultas/guardarCambiosGrupos",
            data: frm
        }).done(function(info){
            var json_info = JSON.parse(info);
            mostrar_mensaje(json_info);
            limpiar_datos();
            listar();
            M.AutoInit();
        });
    });
}

var eliminar = function(){
    $("#eliminar-grupo").on("click",function() {
        var idgrupo = $("#frmEliminarGrupo #idgrupo").val(),
            opcion = $("#frmEliminarGrupo #opcion").val();
        $.ajax({
            method:"POST",
            url:"../php/consultas/guardarCambiosGrupos",
            data:{"idgrupo": idgrupo, "opcion": opcion}
        }).done(function(info){
            console.log(info);
            var json_info = JSON.parse(info);
            console.log(json_info);
            mostrar_mensaje_eliminar(info);
            limpiar_datos();
            listar();
            M.AutoInit();
        });
    });
}

var egresar = function(){
    $("#egresar-grupo").on("click",function() {
        var idgrupo = $("#frmEgresarGrupo #idgrupo").val(),
            opcion = $("#frmEgresarGrupo #opcion").val();
        $.ajax({
            method:"POST",
            url:"../php/consultas/guardarCambiosGrupos",
            data:{"idgrupo": idgrupo, "opcion": opcion}
        }).done(function(info){
            console.log(info);
            var json_info = JSON.parse(info);
            console.log(json_info);
            mostrar_mensaje_egresar(info);
            limpiar_datos();
            listar();
            M.AutoInit();
        });
    });
}

var mostrar_mensaje = function( informacion ){
    var texto = "", color = "";
    if( informacion.respuesta == "BIEN" ){
    alert("¡Éxito al modificar informacion del grupo!");
    }else if( informacion.respuesta == "ERROR"){
    alert("¡Error al modificar informacion del grupo!");
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
    alert("¡Éxito al eliminar el grupo!");
    }else if( informacion.respuesta == "ERROR"){
    alert("¡Error al eliminar el grupo!");
    }else if( informacion.respuesta == "EXISTE" ){

    }else if( informacion.respuesta == "VACIO" ){

}

$(".mensaje").html( texto ).css({"color": color });
$(".mensaje").fadeOut(5000, function(){
$(this).html("");
$(this).fadeIn(3000);
}); 
}

var mostrar_mensaje_egresar = function( informacion ){
    var texto = "", color = "";
    if( informacion.respuesta == "BIEN" ){
    alert("¡Éxito al egresar el grupo!");
    }else if( informacion.respuesta == "ERROR"){
    alert("¡Error al egresar el grupo!");
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
$("#idgrupo").val("");
$("#nombre").val("");
$("#especialidad").val("");
$("#turno").val("");
$("#semestre").val("");
$("#generacion").val("");
}

var limpiar_datos_eliminar = function(){
$("#opcion").val("modificar");
$("#idgrupo").val("");
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
   document.getElementById('frmModificarGrupo').style.display = "block";
}
function mostrar_forma_eliminar() {
   document.getElementById('frmEliminarGrupo').style.display = "block";
}
function mostrar_forma_egresar() {
    document.getElementById('frmEgresarGrupo').style.display = "block";
 }
function ocultar_forma_modificar() {
   document.getElementById('frmModificarGrupo').style.display = "none";
}
function ocultar_forma_eliminar() {
   document.getElementById('frmEliminarGrupo').style.display = "none";
}
function ocultar_forma_egresar() {
    document.getElementById('frmEgresarGrupo').style.display = "none";
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
      "sSearch":         "Buscar grupo:",
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
        dom: 'lfrtipB',
        "language": spanishlang,//Cambia el idioma de la tabla a spanish.
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
        "ajax":{
            "method":"POST",
            "url":"../php/verGrupos"
        },
        "columns":[
            {"data":"idgrupo"},
            {"data":"nombre"},
            {"data":"especialidad"},
            {"data":"turno"},
            {"data":"semestre"},
            {"data":"generacion"},
            {"defaultContent": "<a  href='#frmModificarGrupo'><button  onclick='mostrar_forma_modificar()' type='button' class='btn waves-effect waves-light editar amber accent-4'><i class='large material-icons'>edit</i></button></a><br><br><a href='#frmEliminarGrupo'><button onclick='mostrar_forma_eliminar()' type='button' class='eliminar waves-effect waves-light btn red darken-1'><i class='large material-icons'>delete</i></button></a><br><br><a  href='#frmEgresarGrupo'><button  onclick='mostrar_forma_egresar()' type='button' class='btn waves-effect waves-light egresar indigo darken-3'><i class='large material-icons'>school</i></button></a>"}
        ]//Se obtienen los datos de cada una de las columnas desde la base de datos.
    });
    obtener_data_editar_grupo("#student_data tbody", table);
    obtener_id_eliminar_grupo("#student_data tbody", table);
    obtener_id_egresar_grupo("#student_data tbody", table);
    print_table();
}