<div id="main">
  <section id="content">
    <div class="container">
      <div class="section">
        <div class="row">
          <form id="registrarEncuesta" class="col s12" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div id="contacto">
              <p class="caption">Datos de contacto</p>
              <hr>
              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">email</i>
                  <input id="correo" type="email" name="correo" required maxlength="100">
                  <label for="correo">Correo eléctronico</label>
                  <span id="span_correo" class="error">Campo obligatorio</span>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s4">
                  <i class="material-icons prefix">smartphone</i>
                  <input disabled value="52" id="disabled" type="text">
                  <label for="disabled">Lada nacional</label>
                </div>
                <div class="input-field col s4">
                  <input id="lada_movil" type="text" name="lada_movil" maxlength="3" required>
                  <label for="lada_movil">Lada regional</label>
                  <span id="span_lada_movil" class="error">Campo obligatorio</span>
                </div>
                <div class="input-field col s4">
                  <input id="movil" type="text" name="movil" maxlength="7" required>
                  <label for="movil">Teléfono Móvil</label>
                  <span id="span_movil" class="error">Campo obligatorio</span>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s4">
                  <i class="material-icons prefix">phone</i>
                  <input disabled value="52" id="disabled" type="text">
                  <label for="disabled">Lada nacional</label>
                </div>
                <div class="input-field col s4">
                  <input id="lada_fijo" type="text" name="lada_fijo" maxlength="3" required>
                  <label for="lada_fijo">Lada regional</label>
                  <span id="span_lada_fijo" class="error">Campo obligatorio</span>
                </div>
                <div class="input-field col s4">
                  <input id="fijo" type="text" name="fijo" maxlength="7" required>
                  <label for="fijo">Teléfono Fijo</label>
                  <span id="span_fijo" class="error">Campo obligatorio</span>
                </div>
              </div>
            </div>
            <div id="personal">
              <p class="caption">Datos personales</p>
              <hr>
              <div class="row">
                <div class="input-field col s6">
                  <i class="material-icons prefix">today</i>
                  <input id="fechanacimiento" type="text" name="fechanacimiento" class="datepicker no-autoinit" required>
                  <label for="fechanacimiento">Fecha de nacimiento</label>
                  <span id="span_fechanacimiento" class="error">Campo obligatorio</span>
                </div>
                <div class="input-field col s6">
                  <i class="material-icons prefix">place</i>
                  <input id="domicilio" type="text" name="domicilio" maxlength="100" required>
                  <label for="domicilio">Dirección del domicilio</label>
                  <span id="span_domicilio" class="error">Campo obligatorio</span>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s6">
                  <i class="material-icons prefix">work</i>
                  <select id="area_interes" name="area_interes" required>
                    <option value="" disabled selected>Área de interés</option>
                    <option value="ADMINISTRACION">Administración</option>
                    <option value="BIOLOGIA">Biología</option>
                    <option value="COMUNICACION">Comunicación</option>
                    <option value="CONSTRUCCION">Construcción</option>
                    <option value="CONTABILIDAD">Contabilidad</option>
                    <option value="CREATIVIDAD, PRODUCCION Y DISENO COMERCIAL">Creatividad, procucción y diseño comercial</option>
                    <option value="DERECHO Y LEYES">Derecho y leyes</option>
                    <option value="EDUCACION">Educación</option>
                    <option value="INGENIERIA">Ingeniería</option>
                    <option value="LOGISTICA, TRANSPORTE Y DISTRIBUCION">Logística, transporte y distribución</option>
                    <option value="MANUFACTURA, PRODUCCION Y OPERACION">Manufactura, producción y operación</option>
                    <option value="MERCADOTECNIA, PUBLICIDAD Y RELACIONES PUBLICAS">Mercadotecnia, publicidad y relaciones públicas</option>
                    <option value="RECURSOS HUMANOS">Recursos humanos</option>
                    <option value="SALUD Y BELLEZA">Salud y belleza</option>
                    <option value="SECTOR SALUD">Sector salud</option>
                    <option value="SEGURO Y REASEGURO">Seguro y reaseguro</option>
                    <option value="TECNOLOGIAS DE LA INFORMACION O SISTEMAS">Tecnologías de la información o sistemas</option>
                    <option value="TURISMO, HOSPITALIDAD Y GASTRONOMIA">Turismo, hospitalidad y gastronomía</option>
                    <option value="VENTAS">Ventas</option>
                    <option value="VETERINARIA O ZOOLOGIA">Veterinaria o zoología</option>
                  </select>
                  <label>Área de interés</label>
                  <span id="span_area_interes" class="error">Campo obligatorio</span>
                </div>
                <div class="input-field col s6">
                  <i class="material-icons prefix">school</i>
                  <select id="grado_academico_obtenido" name="grado_academico_obtenido" required>
                    <option value="" disabled selected>Grado académico obtenido</option>
                    <option value="SECUNDARIA">Secundaria</option>
                    <?php
                    include("../../php/checkGraduated.php");
                    if($semestre == NULL)
                    {
                      echo '<option value="PREPARATORIA">Preparatoria</option>
                            <option value="UNIVERSIDAD">Universidad</option>
                            <option value="MAESTRIA">Maestría</option>
                            <option value="DOCTORADO">Doctorado</option>';
                    }
                    ?>
                  </select>
                  <label>Grado académico obtenido</label>
                  <span id="span_grado_academico_obtenido" class="error">Campo obligatorio</span>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  De las siguientes actividades, selecciona las que actualmente estés realizando:
                </div>
              </div>
              <div class="row">
                <?php
                    include('../php/checkGraduated.php');
                    if($semestre == NULL)
                    {
                      echo '<div class="input-field col s4 left-align">
                  ¿Estudias la Universidad?
                  <div class="switch">
                    <label right-align>
                      No
                      <input id="academico_switch" type="checkbox">
                      <span class="lever"></span>
                      Sí
                    </label>
                  </div>
                </div>
                <div class="input-field col s4 center-align">
                  ¿Realizas Prácticas?
                  <div class="switch">
                    <label right-align>
                      No
                      <input id="practicas_switch" type="checkbox">
                      <span class="lever"></span>
                      Sí
                    </label>
                  </div>
                </div>
                <div class="input-field col s4 right-align">
                  ¿Tienes Empleo?
                  <div class="switch">
                    <label right-align>
                      No
                      <input id="laboral_switch" type="checkbox">
                      <span class="lever"></span>
                      Sí
                    </label>
                  </div>
                </div>';
                    }else{
                      echo '
                <div class="input-field col s4 offset-s1 left-align">
                  ¿Realizas Prácticas?
                  <div class="switch">
                    <label right-align>
                      No
                      <input id="practicas_switch" type="checkbox">
                      <span class="lever"></span>
                      Sí
                    </label>
                  </div>
                </div>
                <div class="input-field col s4 offset-s2 right-align">
                  ¿Tienes Empleo?
                  <div class="switch">
                    <label right-align>
                      No
                      <input id="laboral_switch" type="checkbox">
                      <span class="lever"></span>
                      Sí
                    </label>
                  </div>
                </div>';
                    }
                    ?>
              </div>
            </div>
            <div id="academico">
              <p class="caption">Datos académicos</p>
              <hr>
              <div class="row">
                <div class="input-field col s6">
                  <i class="material-icons prefix">school</i>
                  <select id="nombre1" name="nombre1">
                    <option value="" disabled selected>Grado académico en estudio</option>
                    <option value="PROFESIONAL">Profesional</option>
                    <option value="MAESTRIA">Maestría</option>
                    <option value="DOCTORADO">Doctorado</option>
                  </select>
                  <label>Grado académico en estudio</label>
                  <span id="span_nombre1" class="error">Campo obligatorio</span>
                </div>
                <div class="input-field col s6">
                  <i class="material-icons prefix">format_list_numbered</i>
                  <select id="descripcion1" name="descripcion1">
                    <option value="" disabled selected>Semestre actual</option>
                    <option value="PRIMERO">Primero</option>
                    <option value="SEGUNDO">Segundo</option>
                    <option value="TERCERO">Tercero</option>
                    <option value="CUARTO">Cuarto</option>
                    <option value="QUINTO">Quinto</option>
                    <option value="SEXTO">Sexto</option>
                    <option value="SEPTIMO">Séptimo</option>
                    <option value="OCTAVO">Octavo</option>
                    <option value="NOVENO">Noveno</option>
                    <option value="DECIMO">Décimo o mayor</option>
                  </select>
                  <label>Semestre actual</label>
                  <span id="span_descripcion1" class="error">Campo obligatorio</span>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s6">
                  <i class="material-icons prefix">subject</i>
                  <select id="area_ocupacion1" name="area_ocupacion1">
                    <option value="" disabled selected>Área de especialidad</option>
                    <option value="ADMINISTRACION">Administración</option>
                    <option value="BIOLOGIA">Biología</option>
                    <option value="COMUNICACION">Comunicación</option>
                    <option value="CONSTRUCCION">Construcción</option>
                    <option value="CONTABILIDAD">Contabilidad</option>
                    <option value="CREATIVIDAD, PRODUCCION Y DISENO COMERCIAL">Creatividad, procucción y diseño comercial</option>
                    <option value="DERECHO Y LEYES">Derecho y leyes</option>
                    <option value="EDUCACION">Educación</option>
                    <option value="INGENIERIA">Ingeniería</option>
                    <option value="LOGISTICA, TRANSPORTE Y DISTRIBUCION">Logística, transporte y distribución</option>
                    <option value="MANUFACTURA, PRODUCCION Y OPERACION">Manufactura, producción y operación</option>
                    <option value="MERCADOTECNIA, PUBLICIDAD Y RELACIONES PUBLICAS">Mercadotecnia, publicidad y relaciones públicas</option>
                    <option value="RECURSOS HUMANOS">Recursos humanos</option>
                    <option value="SALUD Y BELLEZA">Salud y belleza</option>
                    <option value="SECTOR SALUD">Sector salud</option>
                    <option value="SEGURO Y REASEGURO">Seguro y reaseguro</option>
                    <option value="TECNOLOGIAS DE LA INFORMACION O SISTEMAS">Tecnologías de la información o sistemas</option>
                    <option value="TURISMO, HOSPITALIDAD Y GASTRONOMIA">Turismo, hospitalidad y gastronomía</option>
                    <option value="VENTAS">Ventas</option>
                    <option value="VETERINARIA O ZOOLOGIA">Veterinaria o zoología</option>
                  </select>
                  <label>Área de especialidad</label>
                  <span id="span_area_ocupacion1" class="error">Campo obligatorio</span>
                </div>
                <div class="input-field col s6">
                  <i class="material-icons prefix">location_city</i>
                  <input name="lugar_ocupacion1" id="lugar_ocupacion1" type="text">
                  <label for="lugar_ocupacion1">Nombre de la universidad</label>
                  <span id="span_lugar_ocupacion1" class="error">Campo obligatorio</span>
                </div>
              </div>
            </div>
            <div id="practicas">
              <p class="caption">Datos practicante</p>
              <hr>
              <div class="row">
                <div class="input-field col s6">
                  <i class="material-icons prefix">work</i>
                  <select id="nombre2" name="nombre2">
                    <option value="" disabled selected>Cargo actual</option>
                    <option value="ABOGADO">Abogado</option>
                    <option value="ADMINISTRADOR">Administrador</option>
                    <option value="ANALISTA">Analista</option>
                    <option value="ARQUITECTO">Arquitecto</option>
                    <option value="ASESOR">Asesor</option>
                    <option value="ASISTENTE">Asistente</option>
                    <option value="AUXILIAR">Auxiliar</option>
                    <option value="CONTADOR">Contador</option>
                    <option value="CONSULTOR">Consultor</option>
                    <option value="DISENADOR">Diseñador</option>
                    <option value="EJECUTIVO">Ejecutivo</option>
                    <option value="ENCARGADO">Encargado</option>
                    <option value="GERENTE">Gerente</option>
                    <option value="INGENIERO">Ingeniero</option>
                    <option value="INVESTIGADOR">Investigador</option>
                    <option value="JEFE">Jefe</option>
                    <option value="MEDICO">Médico</option>
                    <option value="PROFESOR">Profesor</option>
                    <option value="PROGRAMADOR">Programador</option>
                    <option value="QUIMICO">Químico</option>
                    <option value="SECRETARIO">Secretario</option>
                    <option value="SUPERVISOR">Supervisor</option>
                    <option value="TECNICO">Técnico</option>
                    <option value="VENDEDOR">Vendedor</option>
                    <option value="OTRO">Otro</option>
                  </select>
                  <label>Cargo actual</label>
                  <span id="span_nombre2" class="error">Campo obligatorio</span>
                </div>
                <div class="input-field col s6">
                  <i class="material-icons prefix">description</i>
                  <select id="descripcion2" name="descripcion2">
                    <option value="" disabled selected>Contratación</option>
                    <option value="COMPLETO">Tiempo completo</option>
                    <option value="MEDIO">Medio tiempo</option>
                    <option value="HONORARIOS">Honorarios</option>
                  </select>
                  <label>Contratación</label>
                  <span id="span_descripcion2" class="error">Campo obligatorio</span>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s6">
                  <i class="material-icons prefix">subject</i>
                  <select id="area_ocupacion2" name="area_ocupacion2">
                    <option value="" disabled selected>Área de ocupación</option>
                    <option value="ADMINISTRACION">Administración</option>
                    <option value="BIOLOGIA">Biología</option>
                    <option value="COMUNICACION">Comunicación</option>
                    <option value="CONSTRUCCION">Construcción</option>
                    <option value="CONTABILIDAD">Contabilidad</option>
                    <option value="CREATIVIDAD, PRODUCCION Y DISENO COMERCIAL">Creatividad, procucción y diseño comercial</option>
                    <option value="DERECHO Y LEYES">Derecho y leyes</option>
                    <option value="EDUCACION">Educación</option>
                    <option value="INGENIERIA">Ingeniería</option>
                    <option value="LOGISTICA, TRANSPORTE Y DISTRIBUCION">Logística, transporte y distribución</option>
                    <option value="MANUFACTURA, PRODUCCION Y OPERACION">Manufactura, producción y operación</option>
                    <option value="MERCADOTECNIA, PUBLICIDAD Y RELACIONES PUBLICAS">Mercadotecnia, publicidad y relaciones públicas</option>
                    <option value="RECURSOS HUMANOS">Recursos humanos</option>
                    <option value="SALUD Y BELLEZA">Salud y belleza</option>
                    <option value="SECTOR SALUD">Sector salud</option>
                    <option value="SEGURO Y REASEGURO">Seguro y reaseguro</option>
                    <option value="TECNOLOGIAS DE LA INFORMACION O SISTEMAS">Tecnologías de la información o sistemas</option>
                    <option value="TURISMO, HOSPITALIDAD Y GASTRONOMIA">Turismo, hospitalidad y gastronomía</option>
                    <option value="VENTAS">Ventas</option>
                    <option value="VETERINARIA O ZOOLOGIA">Veterinaria o zoología</option>
                  </select>
                  <label>Área de ocupación</label>
                  <span id="span_area_ocupacion2" class="error">Campo obligatorio</span>
                </div>
                <div class="input-field col s6">
                  <i class="material-icons prefix">business</i>
                  <input name="lugar_ocupacion2" type="text" id="lugar_ocupacion2">
                  <label for="lugar_ocupacion2">Lugar de ocupación</label>
                  <span id="span_lugar_ocupacion2" class="error">Campo obligatorio</span>
                </div>
              </div>
            </div>
            <div id="laboral">
              <p class="caption">Datos laborales</p>
              <hr>
              <div class="row">
                <div class="input-field col s6">
                  <i class="material-icons prefix">work</i>
                  <select id="nombre3" name="nombre3">
                    <option value="" disabled selected>Cargo actual</option>
                    <option value="ABOGADO">Abogado</option>
                    <option value="ADMINISTRADOR">Administrador</option>
                    <option value="ANALISTA">Analista</option>
                    <option value="ARQUITECTO">Arquitecto</option>
                    <option value="ASESOR">Asesor</option>
                    <option value="ASISTENTE">Asistente</option>
                    <option value="AUXILIAR">Auxiliar</option>
                    <option value="CONTADOR">Contador</option>
                    <option value="CONSULTOR">Consultor</option>
                    <option value="DISENADOR">Diseñador</option>
                    <option value="EJECUTIVO">Ejecutivo</option>
                    <option value="ENCARGADO">Encargado</option>
                    <option value="GERENTE">Gerente</option>
                    <option value="INGENIERO">Ingeniero</option>
                    <option value="INVESTIGADOR">Investigador</option>
                    <option value="JEFE">Jefe</option>
                    <option value="MEDICO">Médico</option>
                    <option value="PROFESOR">Profesor</option>
                    <option value="PROGRAMADOR">Programador</option>
                    <option value="QUIMICO">Químico</option>
                    <option value="SECRETARIO">Secretario</option>
                    <option value="SUPERVISOR">Supervisor</option>
                    <option value="TECNICO">Técnico</option>
                    <option value="VENDEDOR">Vendedor</option>
                    <option value="OTRO">Otro</option>
                  </select>
                  <label>Cargo actual</label>
                  <span id="span_nombre3" class="error">Campo obligatorio</span>
                </div>
                <div class="input-field col s6">
                  <i class="material-icons prefix">description</i>
                  <select id="descripcion3" name="descripcion3">
                    <option value="" disabled selected>Contratación</option>
                    <option value="COMPLETO">Tiempo completo</option>
                    <option value="MEDIO">Medio tiempo</option>
                    <option value="HONORARIOS">Honorarios</option>
                  </select>
                  <label>Contratación</label>
                  <span id="span_descripcion3" class="error">Campo obligatorio</span>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s6">
                  <i class="material-icons prefix">subject</i>
                  <select id="area_ocupacion3" name="area_ocupacion3">
                    <option value="" disabled selected>Área de ocupación</option>
                    <option value="ADMINISTRACION">Administración</option>
                    <option value="BIOLOGIA">Biología</option>
                    <option value="COMUNICACION">Comunicación</option>
                    <option value="CONSTRUCCION">Construcción</option>
                    <option value="CONTABILIDAD">Contabilidad</option>
                    <option value="CREATIVIDAD, PRODUCCION Y DISENO COMERCIAL">Creatividad, procucción y diseño comercial</option>
                    <option value="DERECHO Y LEYES">Derecho y leyes</option>
                    <option value="EDUCACION">Educación</option>
                    <option value="INGENIERIA">Ingeniería</option>
                    <option value="LOGISTICA, TRANSPORTE Y DISTRIBUCION">Logística, transporte y distribución</option>
                    <option value="MANUFACTURA, PRODUCCION Y OPERACION">Manufactura, producción y operación</option>
                    <option value="MERCADOTECNIA, PUBLICIDAD Y RELACIONES PUBLICAS">Mercadotecnia, publicidad y relaciones públicas</option>
                    <option value="RECURSOS HUMANOS">Recursos humanos</option>
                    <option value="SALUD Y BELLEZA">Salud y belleza</option>
                    <option value="SECTOR SALUD">Sector salud</option>
                    <option value="SEGURO Y REASEGURO">Seguro y reaseguro</option>
                    <option value="TECNOLOGIAS DE LA INFORMACION O SISTEMAS">Tecnologías de la información o sistemas</option>
                    <option value="TURISMO, HOSPITALIDAD Y GASTRONOMIA">Turismo, hospitalidad y gastronomía</option>
                    <option value="VENTAS">Ventas</option>
                    <option value="VETERINARIA O ZOOLOGIA">Veterinaria o zoología</option>
                  </select>
                  <label>Área de ocupación</label>
                  <span id="span_area_ocupacion3" class="error">Campo obligatorio</span>
                </div>
                <div class="input-field col s6">
                  <i class="material-icons prefix">business</i>
                  <input name="lugar_ocupacion3" type="text" id="lugar_ocupacion3">
                  <label for="lugar_ocupacion3">Lugar de ocupación</label>
                  <span id="span_lugar_ocupacion3" class="error">Campo obligatorio</span>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  ¿Tienes otro empleo?
                  <div class="switch">
                    <label right-align>
                      No
                      <input id="laboral_switch2" type="checkbox">
                      <span class="lever"></span>
                      Sí
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div id="laboral2">
              <p class="caption">Datos laborales</p>
              <hr>
              <div class="row">
                <div class="input-field col s6">
                  <i class="material-icons prefix">work</i>
                  <select id="nombre4" name="nombre4">
                    <option value="" disabled selected>Cargo actual</option>
                    <option value="ABOGADO">Abogado</option>
                    <option value="ADMINISTRADOR">Administrador</option>
                    <option value="ANALISTA">Analista</option>
                    <option value="ARQUITECTO">Arquitecto</option>
                    <option value="ASESOR">Asesor</option>
                    <option value="ASISTENTE">Asistente</option>
                    <option value="AUXILIAR">Auxiliar</option>
                    <option value="CONTADOR">Contador</option>
                    <option value="CONSULTOR">Consultor</option>
                    <option value="DISENADOR">Diseñador</option>
                    <option value="EJECUTIVO">Ejecutivo</option>
                    <option value="ENCARGADO">Encargado</option>
                    <option value="GERENTE">Gerente</option>
                    <option value="INGENIERO">Ingeniero</option>
                    <option value="INVESTIGADOR">Investigador</option>
                    <option value="JEFE">Jefe</option>
                    <option value="MEDICO">Médico</option>
                    <option value="PROFESOR">Profesor</option>
                    <option value="PROGRAMADOR">Programador</option>
                    <option value="QUIMICO">Químico</option>
                    <option value="SECRETARIO">Secretario</option>
                    <option value="SUPERVISOR">Supervisor</option>
                    <option value="TECNICO">Técnico</option>
                    <option value="VENDEDOR">Vendedor</option>
                    <option value="OTRO">Otro</option>
                  </select>
                  <label>Cargo actual</label>
                  <span id="span_nombre4" class="error">Campo obligatorio</span>
                </div>
                <div class="input-field col s6">
                  <i class="material-icons prefix">description</i>
                  <select id="descripcion4" name="descripcion4">
                    <option value="" disabled selected>Contratación</option>
                    <option value="COMPLETO">Tiempo completo</option>
                    <option value="MEDIO">Medio tiempo</option>
                    <option value="HONORARIOS">Honorarios</option>
                  </select>
                  <label>Contratación</label>
                  <span id="span_descripcion4" class="error">Campo obligatorio</span>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s6">
                  <i class="material-icons prefix">subject</i>
                  <select id="area_ocupacion4" name="area_ocupacion4">
                    <option value="" disabled selected>Área de ocupación</option>
                    <option value="ADMINISTRACION">Administración</option>
                    <option value="BIOLOGIA">Biología</option>
                    <option value="COMUNICACION">Comunicación</option>
                    <option value="CONSTRUCCION">Construcción</option>
                    <option value="CONTABILIDAD">Contabilidad</option>
                    <option value="CREATIVIDAD, PRODUCCION Y DISENO COMERCIAL">Creatividad, procucción y diseño comercial</option>
                    <option value="DERECHO Y LEYES">Derecho y leyes</option>
                    <option value="EDUCACION">Educación</option>
                    <option value="INGENIERIA">Ingeniería</option>
                    <option value="LOGISTICA, TRANSPORTE Y DISTRIBUCION">Logística, transporte y distribución</option>
                    <option value="MANUFACTURA, PRODUCCION Y OPERACION">Manufactura, producción y operación</option>
                    <option value="MERCADOTECNIA, PUBLICIDAD Y RELACIONES PUBLICAS">Mercadotecnia, publicidad y relaciones públicas</option>
                    <option value="RECURSOS HUMANOS">Recursos humanos</option>
                    <option value="SALUD Y BELLEZA">Salud y belleza</option>
                    <option value="SECTOR SALUD">Sector salud</option>
                    <option value="SEGURO Y REASEGURO">Seguro y reaseguro</option>
                    <option value="TECNOLOGIAS DE LA INFORMACION O SISTEMAS">Tecnologías de la información o sistemas</option>
                    <option value="TURISMO, HOSPITALIDAD Y GASTRONOMIA">Turismo, hospitalidad y gastronomía</option>
                    <option value="VENTAS">Ventas</option>
                    <option value="VETERINARIA O ZOOLOGIA">Veterinaria o zoología</option>
                  </select>
                  <label>Área de ocupación</label>
                  <span id="span_area_ocupacion4" class="error">Campo obligatorio</span>
                </div>
                <div class="input-field col s6">
                  <i class="material-icons prefix">business</i>
                  <input name="lugar_ocupacion4" type="text" id="lugar_ocupacion4">
                  <label for="lugar_ocupacion4">Lugar de ocupación</label>
                  <span id="span_lugar_ocupacion4" class="error">Campo obligatorio</span>
                </div>
              </div>
            </div>
            <?php
            if(in_array(array('CONTESTAR ENCUESTA'), $_SESSION['permisos']))
            {
              echo '<div class="center-align">
                      <button class="btn waves-effect waves-light" type="submit">Terminar
                      <i class="material-icons right">send</i>
                    </button></div>';
            }
            ?>
            
          </form>
        </div>
      </div>
    </div>
  </section>
</div>

<?php $js .= '<script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/alumnos_js/surveyInit.js"></script>'; ?>