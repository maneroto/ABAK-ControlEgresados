$(document).ready(function(){
    
    M.AutoInit();
    
    $('#viewsRegistros').addClass('active');
    $("select[required]").css({display: "block", height: 0, padding: 0, width: 0, position: 'absolute'});
    $('.tabs').tabs();
    
    
    //De grupo
    
    $.ajax({
      type: "GET",
      url: '../php/selectGeneracion',
      success: function(data)
      {
          $('#generacion').append(data);
          $('#generacion').formSelect();
      }
    });
    
    $("#nombreg").on('change',function(){
        var nombreg = $('#nombreg').val();
        if(nombreg == "")
            $("#span_nombreg").text("Campo obligatorio");
        else
            $("#span_nombreg").text("");
    });
    
    $("#especialidad").on('change',function(){
        var especialidad = $('#especialidad').val();
        if(especialidad == "")
            $("#span_especialidad").text("Campo obligatorio");
        else
            $("#span_especialidad").text("");
    });
    
    $("#turno").on('change',function(){
        var turno = $('#turno').val();
        if(turno == "")
            $("#span_turno").text("Campo obligatorio");
        else
            $("#span_turno").text("");
    });
    
    $("#semestre").on('change',function(){
        var semestre = $('#semestre').val();
        if(semestre == "")
            $("#span_semestre").text("Campo obligatorio");
        else
            $("#span_semestre").text("");
    });
    
    $("#generacion").on('change',function(){
        var generacion = $('#generacion').val();
        if(generacion == "")
            $("#span_generacion").text("Campo obligatorio");
        else
            $("#span_generacion").text("");
    });
    
    $('#registrarGrupo').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: '../php/registrarGrupo',
            data: $(this).serialize(),
            success: function(data){
                alert(data);
                location.reload();
            }
        });
    }); 
    
    //De alumnos
    
    $.ajax({
      type: "GET",
      url: '../php/selectGrupo',
      success: function(data)
      {
          $('#grupoAlumnos').append(data);
          $('#grupoAlumnos').formSelect();
      }
    });
    
    $("#grupoAlumnos").on('change',function(){
        var grupos = $('#grupos').val();
        if(grupos == "")
            $("#span_grupos").text("Campo obligatorio");
        else
            $("#span_grupos").text("");
    });
    
    $("#archivo").on('change',function(){
        var archivo = $('#archivo').val();
        if(archivo == "")
            $("#span_archivo").text("Campo obligatorio");
        else
            $("#span_archivo").text("");
    });
    
    $('#registrarAlumnos').submit(function(e) {
        e.preventDefault();
        var fileType = ".csv";
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+("+ fileType + ")$");
        if (!regex.test($("#alumnosFile").val().toLowerCase())) {
            alert("Archivo inválido. Subir solo: " + fileType+ ".");
        }
        else
        {
            $.ajax({
                type: "POST",
                url: '../php/registrarAlumnos',
                data:  new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success: function(data){
                    alert(data);
                }
            });
        }
    });
    
    //De alumno
    
    $.ajax({
      type: "GET",
      url: '../php/selectGrupo',
      success: function(data)
      {
          $('#grupo').append(data);
          $('#grupo').formSelect();
      }
    });
    
    $("#nocontrol").on('input',function(){
        var nocontrol = $('#nocontrol').val();
        if(nocontrol == "")
            $("#span_nocontrol").text("Campo obligatorio");
        else if(!($.isNumeric(nocontrol)))
             $("#span_nocontrol").text("Sólo se admiten números");
        else if(nocontrol.length != 14)
             $("#span_nocontrol").text("Deben ser 14 dígitos");
        else
            $("#span_nocontrol").text("");
    });
    
    $("#nocontrol").on('change',function(){
        var nocontrol = $('#nocontrol').val();
        if(nocontrol == "")
            $("#span_nocontrol").text("Campo obligatorio");
        else if(!($.isNumeric(nocontrol))){
            $("#span_nocontrol").text("Sólo se admiten números");
            $("#nocontrol").val("");
        }
        else if(nocontrol.length != 14){
            $("#span_nocontrol").text("Deben ser 14 dígitos");
            $("#nocontrol").val("");
        }
        else
            $("#span_nocontrol").text("");
    });    
    
    $("#sexo").on('change',function(){
        var sexo = $('#sexo').val();
        if(sexo == "")
            $("#span_sexo").text("Campo obligatorio");
        else
            $("#span_sexo").text("");
    });
    
    $("#grupo").on('change',function(){
        var grupo = $('#grupo').val();
        if(grupo == "")
            $("#span_grupo").text("Campo obligatorio");
        else
            $("#span_grupo").text("");
    });
    
    $("#nombre").on('input',function(){
        var regex = /^[a-zA-Z\u00C0-\u00ff\s]+$/;
        var nombre = $('#nombre').val();
        if(nombre == "")
            $("#span_nombre").text("Campo obligatorio");
        else if(!regex.test(nombre))
             $("#span_nombre").text("Solo se aceptan letras");
        else
            $("#span_nombre").text("");
    });
    
    $("#nombre").on('change',function(){
        var regex = /^[a-zA-z\u00C0-\u00ff\s]+$/;
        var nombre = $('#nombre').val()
        if(nombre == "")
            $("#span_nombre").text("Campo obligatorio");
        else if(!regex.test(nombre)){
             $("#span_nombre").text("Solo se aceptan letras");
             $('#nombre').val("");
        }
        else{
            $("#span_nombre").text("");
            $("#nombre").val(nombre.toUpperCase().normalize('NFD').replace(/[\u0300-\u036f]/g, ""));
        }
    });
    
    $("#apaterno").on('input',function(){
        var regex = /^[a-zA-z\u00C0-\u00ff\s]+$/;
        var apaterno = $('#apaterno').val();
        if(apaterno == "")
            $("#span_apaterno").text("Campo obligatorio");
        else if(!regex.test(apaterno))
             $("#span_apaterno").text("Solo se aceptan letras");
        else
            $("#span_apaterno").text("");
    });
    
    $("#apaterno").on('change',function(){
        var regex = /^[a-zA-z\u00C0-\u00ff\s]+$/;
        var apaterno = $('#apaterno').val()
        if(apaterno == "")
            $("#span_apaterno").text("Campo obligatorio");
        else if(!regex.test(apaterno)){
             $("#span_apaterno").text("Solo se aceptan letras");
             $('#apaterno').val("");
        }
        else{
            $("#span_apaterno").text("");
            $("#apaterno").val(apaterno.toUpperCase().normalize('NFD').replace(/[\u0300-\u036f]/g, ""));
        }
    });
    
    $("#amaterno").on('input',function(){
        var regex = /^[a-zA-z\u00C0-\u00ff\s]+$/;
        var amaterno = $('#amaterno').val();
        if(amaterno == "")
            $("#span_amaterno").text("Campo obligatorio");
        else if(!regex.test(amaterno))
             $("#span_amaterno").text("Solo se aceptan letras");
        else
            $("#span_amaterno").text("");
    });    
    
    $("#amaterno").on('change',function(){
        var regex = /^[a-zA-z\u00C0-\u00ff\s]+$/;
        var amaterno = $('#amaterno').val()
        if(amaterno == "")
            $("#span_amaterno").text("Campo obligatorio");
        else if(!regex.test(amaterno)){
             $("#span_amaterno").text("Solo se aceptan letras");
             $('#amaterno').val("");
        }
        else{
            $("#span_amaterno").text("");
            $("#amaterno").val(amaterno.toUpperCase().normalize('NFD').replace(/[\u0300-\u036f]/g, ""));
        }
    });   
    
    $('#registrarAlumno').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: '../php/registrarAlumno',
            data: $(this).serialize(),
            success: function(data){
                alert(data);
                location.reload();
            }
        });
    });        
      
    $('#eliminarAlumno').submit(function(e){
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: '../php/eliminarAlumno',
            data: $(this).serialize(),
            success: function(data){
                alert(data);
            }
        });
    });
    
    $('#modificarAlumno').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: '../php/modificarAlumno',
            data: $(this).serialize(),
            success: function(data){
                alert(data);
            }
        });
    }); 
    
});
