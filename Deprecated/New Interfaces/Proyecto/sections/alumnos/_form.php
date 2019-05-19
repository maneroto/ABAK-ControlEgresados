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
                  <input disabled value="+52" id="disabled" type="text">
                  <label for="disabled">Lada nacional</label>
                </div>
                <div class="input-field col s4">
                    <select id="lada_movil" name="lada_movil" required>
                      <option value="" disabled selected>Lada regional</option>
                      <option value="744">744</option>
                      <option value="449">449</option>
                      <option value="241">241</option>
                      <option value="244">244</option>
                      <option value="981">981</option>
                      <option value="998">998</option>
                      <option value="461">461</option>
                      <option value="625">625</option>
                      <option value="55">55</option>
                      <option value="938">938</option>
                      <option value="639">639</option>
                      <option value="341">341</option>
                      <option value="656">656</option>
                      <option value="753">753</option>
                      <option value="831">831</option>
                      <option value="644">644</option>
                      <option value="481">481</option>
                      <option value="834">834</option>
                      <option value="921">921</option>
                      <option value="312">312</option>
                      <option value="271">271</option>
                      <option value="735">735</option>
                      <option value="777">777</option>
                      <option value="667">667</option>
                      <option value="983">983</option>
                      <option value="614">614</option>
                      <option value="747">747</option>
                      <option value="922">922</option>
                      <option value="618">618</option>
                      <option value="646">646</option>
                      <option value="493">493</option>
                      <option value="33">33</option>
                      <option value="473">473</option>
                      <option value="622">622</option>
                      <option value="662">662</option>
                      <option value="462">462</option>
                      <option value="971">971</option>
                      <option value="228">228</option>
                      <option value="878">878</option>
                      <option value="612">612</option>
                      <option value="352">352</option>
                      <option value="474">474</option>
                      <option value="477">477</option>
                      <option value="728">728</option>
                      <option value="668">668</option>
                      <option value="314">314</option>
                      <option value="868">868</option>
                      <option value="733">733</option>
                      <option value="669">669</option>
                      <option value="999">999</option>
                      <option value="686">686</option>
                      <option value="866">866</option>
                      <option value="81">81</option>
                      <option value="443">443</option>
                      <option value="445">445</option>
                      <option value="642">642</option>
                      <option value="631">631</option>
                      <option value="867">867</option>
                      <option value="951">951</option>
                      <option value="392">392</option>
                      <option value="272">272</option>
                      <option value="771">771</option>
                      <option value="627">627</option>
                      <option value="427">427</option>
                      <option value="782">782</option>
                      <option value="222">222</option>
                      <option value="322">322</option>
                      <option value="442">442</option>
                      <option value="899">899</option>
                      <option value="861">861</option>
                      <option value="353">353</option>
                      <option value="464">464</option>
                      <option value="844">844</option>
                      <option value="624">624</option>
                      <option value="444">444</option>
                      <option value="653">653</option>
                      <option value="594">594</option>
                      <option value="248">248</option>
                      <option value="415">415</option>
                      <option value="775">775</option>
                      <option value="833">833</option>
                      <option value="962">962</option>
                      <option value="762">762</option>
                      <option value="238">238</option>
                      <option value="378">378</option>
                      <option value="773">773</option>
                      <option value="311">311</option>
                      <option value="595">595</option>
                      <option value="664">664</option>
                      <option value="246">246</option>
                      <option value="722">722</option>
                      <option value="871">871</option>
                      <option value="783">783</option>
                      <option value="961">961</option>
                      <option value="452">452</option>
                      <option value="229">229</option>
                      <option value="993">993</option>
                      <option value="492">492</option>
                      <option value="734">734</option>
                      <option value="351">351</option>
                      <option value="755">755</option>;
                    </select>
                    <label>Lada regional</label>
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
                  <input disabled value="+52" id="disabled" type="text">
                  <label for="disabled">Lada nacional</label>
                </div>
                <div class="input-field col s4">
                    <select id="lada_fijo" name="lada_fijo" required>
                      <option value="" disabled selected>Lada regional</option>
                      <option value="744">744</option>
                      <option value="449">449</option>
                      <option value="241">241</option>
                      <option value="244">244</option>
                      <option value="981">981</option>
                      <option value="998">998</option>
                      <option value="461">461</option>
                      <option value="625">625</option>
                      <option value="55">55</option>
                      <option value="938">938</option>
                      <option value="639">639</option>
                      <option value="341">341</option>
                      <option value="656">656</option>
                      <option value="753">753</option>
                      <option value="831">831</option>
                      <option value="644">644</option>
                      <option value="481">481</option>
                      <option value="834">834</option>
                      <option value="921">921</option>
                      <option value="312">312</option>
                      <option value="271">271</option>
                      <option value="735">735</option>
                      <option value="777">777</option>
                      <option value="667">667</option>
                      <option value="983">983</option>
                      <option value="614">614</option>
                      <option value="747">747</option>
                      <option value="922">922</option>
                      <option value="618">618</option>
                      <option value="646">646</option>
                      <option value="493">493</option>
                      <option value="33">33</option>
                      <option value="473">473</option>
                      <option value="622">622</option>
                      <option value="662">662</option>
                      <option value="462">462</option>
                      <option value="971">971</option>
                      <option value="228">228</option>
                      <option value="878">878</option>
                      <option value="612">612</option>
                      <option value="352">352</option>
                      <option value="474">474</option>
                      <option value="477">477</option>
                      <option value="728">728</option>
                      <option value="668">668</option>
                      <option value="314">314</option>
                      <option value="868">868</option>
                      <option value="733">733</option>
                      <option value="669">669</option>
                      <option value="999">999</option>
                      <option value="686">686</option>
                      <option value="866">866</option>
                      <option value="81">81</option>
                      <option value="443">443</option>
                      <option value="445">445</option>
                      <option value="642">642</option>
                      <option value="631">631</option>
                      <option value="867">867</option>
                      <option value="951">951</option>
                      <option value="392">392</option>
                      <option value="272">272</option>
                      <option value="771">771</option>
                      <option value="627">627</option>
                      <option value="427">427</option>
                      <option value="782">782</option>
                      <option value="222">222</option>
                      <option value="322">322</option>
                      <option value="442">442</option>
                      <option value="899">899</option>
                      <option value="861">861</option>
                      <option value="353">353</option>
                      <option value="464">464</option>
                      <option value="844">844</option>
                      <option value="624">624</option>
                      <option value="444">444</option>
                      <option value="653">653</option>
                      <option value="594">594</option>
                      <option value="248">248</option>
                      <option value="415">415</option>
                      <option value="775">775</option>
                      <option value="833">833</option>
                      <option value="962">962</option>
                      <option value="762">762</option>
                      <option value="238">238</option>
                      <option value="378">378</option>
                      <option value="773">773</option>
                      <option value="311">311</option>
                      <option value="595">595</option>
                      <option value="664">664</option>
                      <option value="246">246</option>
                      <option value="722">722</option>
                      <option value="871">871</option>
                      <option value="783">783</option>
                      <option value="961">961</option>
                      <option value="452">452</option>
                      <option value="229">229</option>
                      <option value="993">993</option>
                      <option value="492">492</option>
                      <option value="734">734</option>
                      <option value="351">351</option>
                      <option value="755">755</option>;
                    </select>
                    <label>Lada regional</label>
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
                  <input id="fechanacimiento" type="text" name="fechanacimiento" class="datepicker" required>
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
                    <option value="PREPARATORIA">Preparatoria</option>
                    <option value="UNIVERSIDAD">Universidad</option>
                    <option value="MAESTRIA">Maestría</option>
                    <option value="DOCTORADO">Doctorado</option>
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
                <div class="input-field col s4 center">
                  ¿Universidad?
                  <div class="switch">
                    <label right-align>
                      No
                      <input id="academico_switch" type="checkbox">
                      <span class="lever"></span>
                      Sí
                    </label>
                  </div>
                </div>
                <div class="input-field col s4 center">
                  ¿Prácticas?
                  <div class="switch">
                    <label right-align>
                      No
                      <input id="practicas_switch" type="checkbox">
                      <span class="lever"></span>
                      Sí
                    </label>
                  </div>
                </div>
                <div class="input-field col s4 center">
                  ¿Empleo?
                  <div class="switch">
                    <label right-align>
                      No
                      <input id="laboral_switch" type="checkbox">
                      <span class="lever"></span>
                      Sí
                    </label>
                  </div>
                </div>
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
            <button class="btn waves-effect waves-light" type="submit">Enviar
              <i class="material-icons right">send</i>
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>