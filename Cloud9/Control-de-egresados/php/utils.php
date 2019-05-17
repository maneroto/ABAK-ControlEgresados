<?php
/*
    CONVENCIONES A UTILIZAR PARA LAS FUNCIONES DENTRO DEL MODELO
    
    En caso de que el nombre de las funciones consten de más de una palabra, las palabras serán separadas por guión bajo "_"
    
    Todas las funciones deberán denotar primero lo que hacen, luego la tabla en la que lo hacen y 
    finalmente los datos requeridos (generalizar), ejemplos:
        function insert_into_student_id_name: significa que solo se van a ingresar el id y el nombre
        function insert into_student_all: significa que se van a ingresar todos los datos del estudiante
        function select_student_all: significa que se va a consultar toda la info del estudiante
        function select_student_full_name: significa que se va a consultar el nombre completo del estudiante
    
    Toda función deberá ser documentada en la sección del comentario de DESCRIPCIÓN DE FUNCIONES
    
    Toda función que reciba información como parámetro deberá de funcionar bajo consultas preparadas
*/

/*
    DESCRIPCIÓN DE FUNCIONES
    
    * La función connect realiza la conexión con la base de datos
    * La función close cierrra la conexión con la base de datos
    * La función select_student_all regresa la consulta de todos los datos de todos los estudiantes
*/

function connect()
{
    $servername = "localhost:3306";
    $username = "cbtisco1_ABAK";
    $password = "A'BAKteam2019";
    $dbname = "cbtisco1_Control-de-egresados";
    $SQLconnection = mysqli_connect($servername, $username, $password, $dbname);
    if($SQLconnection == null) die("Connection failed: ".mysqli_connect_error());
    $SQLconnection->set_charset = " ";
    return $SQLconnection;
}

function close ($conn)
{
    mysqli_close($conn);
}

function get_password($idusuario){
    $conn = connect();
    $idusuario = $conn->real_escape_string($idusuario);
    $sql = "SELECT contrasena FROM Usuario WHERE idusuario='$idusuario'";
    $result = $conn->query($sql);
    if(mysqli_num_rows($result) > 0)
    {
      while($row = mysqli_fetch_array($result))
      {
          $passwod = $row['contrasena'];
      }
    }
    close($conn);
    return $passwod;
}

function delete_admin($nocontrol){
    $conn = connect();
    
    $sql = "DELETE FROM UsuarioRol WHERE idusuario = ?";
    
    $result = false;
    
    if(!($statement = $conn->prepare($sql))){
        die("Preparation failed " .$conn->errno.": ".$conn->error);
    }
    
    $nocontrol = $conn->real_escape_string($nocontrol);

    if(!($statement->bind_param("s", $nocontrol))){
        die("Parameter vinculation failed " .$statement->errno.": ".$statement->error);
    }  
    
    if(!($statement->execute())){
        die("Execution failed " .$statement->errno.": ".$statement->error);
    } 
    if(!($statement->affected_rows)){
        die("No rows affected" .$statement->errno.": ".$statement->error);
    } 
    
    $sql = "DELETE FROM Usuario WHERE idusuario = ?";
    
    $result = false;
    
    if(!($statement = $conn->prepare($sql))){
        die("Preparation failed " .$conn->errno.": ".$conn->error);
    }
    if(!($statement->bind_param("s", $nocontrol))){
        die("Parameter vinculation failed " .$statement->errno.": ".$statement->error);
    } 
    if(!($statement->execute())){
        die("Execution failed " .$statement->errno.": ".$statement->error);
    } 
    if(!($statement->affected_rows)){
        die("No rows affected" .$statement->errno.": ".$statement->error);
    } 
    else
    {
        $result=true;
    }
    
    $statement->close();
    close($conn);
    return $result;
}

function recover_mail($idusuario){
    $conn = connect();
    $idusuario = $conn->real_escape_string($idusuario);
    $sql = "SELECT email FROM Usuario WHERE idusuario='$idusuario'";
    $result = $conn->query($sql);
    if(mysqli_num_rows($result) > 0)
    {
      while($row = mysqli_fetch_array($result))
      {
          $storedMail = $row['email'];
      }
    }
    close($conn);
    return $storedMail;
}

function modify_pass($idusuario, $newPassCon){
    $conn = connect();
    
    $sql = "UPDATE Usuario SET contrasena=? WHERE idusuario=?";
    
    $result = false;
    
    if(!($statement = $conn->prepare($sql))){
        die("Preparation failed " .$conn->errno.": ".$conn->error);
    }
    
    $newPassCon = $conn->real_escape_string($newPassCon);
    $idusuario = $conn->real_escape_string($idusuario);

    if(!($statement->bind_param("ss", $newPassCon, $idusuario))){
        die("Parameter vinculation failed " .$statement->errno.": ".$statement->error);
    }  
    if(!($statement->execute())){
        die("Execution failed " .$statement->errno.": ".$statement->error);
    } 
    else
    {
        $result=true;
    }
    
    $statement->close();
    close($conn);
    return $result;
}

function modify_profile($idusuario, $nombre, $apaterno, $amaterno, $correo, $telefono_movil){
    $conn = connect();
    
    $sql = "UPDATE Usuario SET nombre=?, apaterno=?, amaterno=?, email=?, telefono=? WHERE idusuario=?";
    
    $result = false;
    
    if(!($statement = $conn->prepare($sql))){
        die("Preparation failed " .$conn->errno.": ".$conn->error);
    }
    
    $idusuario = $conn->real_escape_string($idusuario);
    $nombre = $conn->real_escape_string($nombre);
    $apaterno = $conn->real_escape_string($apaterno);
    $amaterno = $conn->real_escape_string($amaterno);
    $correo = $conn->real_escape_string($correo);
    $telefono_movil = $conn->real_escape_string($telefono_movil);

    if(!($statement->bind_param("ssssss", $nombre, $apaterno, $amaterno, $correo, $telefono_movil, $idusuario))){
        die("Parameter vinculation failed " .$statement->errno.": ".$statement->error);
    }  
    if(!($statement->execute())){
        die("Execution failed " .$statement->errno.": ".$statement->error);
    } 
    else
    {
        $result=true;
    }
    
    $statement->close();
    close($conn);
    return $result;
}

function register_survey($idusuario, $correo, $telefono_movil, $telefono_fijo, $fechanacimiento, $domicilio, $area_interes, $grado_academico_obtenido){
    $conn = connect();
    
    $sql = "UPDATE Usuario U, Alumno A 
    SET U.email=?, U.telefono=?, A.fechanacimiento=?, A.telefonocasa=?, A.areainteres=?, A.gradoacademicoobtenido=?, A.domicilio=?, A.respuesta=1
    WHERE U.idusuario=? and U.idusuario=A.idusuario";
    
    $result = false;
    
    if(!($statement = $conn->prepare($sql))){
        die("Preparation failed " .$conn->errno.": ".$conn->error);
    }
    
    $idusuario = $conn->real_escape_string($idusuario);
    $correo = $conn->real_escape_string($correo);
    $telefono_movil = $conn->real_escape_string($telefono_movil);
    $telefono_fijo = $conn->real_escape_string($telefono_fijo);
    $fechanacimiento = $conn->real_escape_string($fechanacimiento);
    $domicilio = $conn->real_escape_string($domicilio);
    $area_interes = $conn->real_escape_string($area_interes);
    $grado_academico_obtenido = $conn->real_escape_string($grado_academico_obtenido);
    
    if(!($statement->bind_param("ssssssss", $correo, $telefono_movil, $fechanacimiento, $telefono_fijo, $area_interes, $grado_academico_obtenido, $domicilio, $idusuario))){
        die("Parameter vinculation failed " .$statement->errno.": ".$statement->error);
    }  
    if(!($statement->execute())){
        die("Execution failed " .$statement->errno.": ".$statement->error);
    } 
    else $result=true;
    
    $statement->close();
    close($conn);
    return $result;
}

function register_ocupation($idusuario, $estatus, $nombre, $descripcion, $area_ocupacion, $lugar_ocupacion){
    $conn = connect();
    
    $result = false;
    
    $sql = "INSERT INTO Ocupacion VALUES(?,?,?,?,?)";
    
    if(!($statement = $conn->prepare($sql))){
        die("Preparation failed " .$conn->errno.": ".$conn->error);
    }
    
    $timestamp = round(microtime(true) * 1000);
    $idusuario = $conn->real_escape_string($idusuario);
    $estatus = $conn->real_escape_string($estatus);
    $idocupacion = $idusuario.$timestamp;
    $nombre = $conn->real_escape_string($nombre);
    $descripcion = $conn->real_escape_string($descripcion);
    $area_ocupacion = $conn->real_escape_string($area_ocupacion);
    $lugar_ocupacion = $conn->real_escape_string($lugar_ocupacion);
    
    if(!($statement->bind_param("sssss", $idocupacion, $nombre, $descripcion, $area_ocupacion,  $lugar_ocupacion))){
        die("Parameter vinculation failed " .$statement->errno.": ".$statement->error);
    }  
    if(!($statement->execute())){
        die("Execution failed " .$statement->errno.": ".$statement->error);
    } 
    
    $sql = "INSERT INTO AlumnoEstatusOcupacion VALUES (?,?,?)";
    
    if(!($statement = $conn->prepare($sql))){
        die("Preparation failed " .$conn->errno.": ".$conn->error);
    }
    if(!($statement->bind_param("sss", $idusuario, $estatus, $idocupacion))){
        die("Parameter vinculation failed " .$statement->errno.": ".$statement->error);
    }  
    if(!($statement->execute())){
        die("Execution failed " .$statement->errno.": ".$statement->error);
    } 
    
    else $result=true;
    
    $statement->close();
    close($conn);
    return $result;
}

function update_gen(){
    $conn = connect();
    $query = "ALTER TABLE Generacion AUTO_INCREMENT = 1";
    $conn->query($query);
    $year = date('Y');
    $yearEnd = $year+3;
    $query = "INSERT INTO Generacion (fechainicio, fechafin)
    SELECT * FROM (SELECT '$year', '$yearEnd') AS tmp
    WHERE NOT EXISTS (SELECT fechainicio FROM Generacion WHERE fechainicio = '$year') LIMIT 1";
    $conn->query($query);
    close($conn);
}

function select_gen(){
    $conn = connect();
    $result = "";
    $year = date('Y');
    $yearPrv = $year-3;
    $query = "SELECT idgeneracion, CONCAT(fechainicio, '-', fechafin) AS generacion 
    FROM Generacion
    WHERE (fechainicio >= '$yearPrv' and fechainicio <= '$year')";
    $result = $conn->query($query);
    close($conn);
    return $result;
}

function select_all_permissions(){
    $conn = connect();
    $result = "";
    $query = "SELECT idpermiso FROM Permiso";
    $result = $conn->query($query);
    close($conn);
    return $result;
}

function add_permission($permiso){
    $conn = connect();
    
    $sql = "INSERT INTO RolPermiso VALUES('ADMINISTRADOR', ?)";
    
    $result = false;
    
    if(!($statement = $conn->prepare($sql))){
        die("Preparation failed " .$conn->errno.": ".$conn->error);
    }
    
    $permiso = $conn->real_escape_string($permiso);
    
    if(!($statement->bind_param("s", $permiso))){
        die("Parameter vinculation failed " .$statement->errno.": ".$statement->error);
    }  
    if(!($statement->execute())){
        die("Execution failed " .$statement->errno.": ".$statement->error);
    } 
    if(!($statement->affected_rows)){
        die("No rows affected" .$statement->errno.": ".$statement->error);
    } 
    else
    {
        $result=true;
    }
    $statement->close();
    close($conn);
    return $result;
}

function delete_permission($permiso){
    $conn = connect();
    
    $sql = "DELETE FROM RolPermiso WHERE idrol='ADMINISTRADOR' AND idpermiso=?";
    
    $result = false;
    
    if(!($statement = $conn->prepare($sql))){
        die("Preparation failed " .$conn->errno.": ".$conn->error);
    }
    
    $permiso = $conn->real_escape_string($permiso);

    if(!($statement->bind_param("s", $permiso))){
        die("Parameter vinculation failed " .$statement->errno.": ".$statement->error);
    }  
    if(!($statement->execute())){
        die("Execution failed " .$statement->errno.": ".$statement->error);
    } 
    if(!($statement->affected_rows)){
        die("No rows affected" .$statement->errno.": ".$statement->error);
    } 
    else
    {
        $result=true;
    }
    $statement->close();
    close($conn);
    return $result;
}

function select_admin_permissions(){
    $conn = connect();
    $result = "";
    $query = "SELECT idpermiso FROM RolPermiso WHERE idrol='ADMINISTRADOR'";
    $result = $conn->query($query);
    close($conn);
    return $result;
}

function val_group($nombreg, $especialidad, $turno, $semestre, $generacion){
    $conn = connect();
    
    $nombreg = $conn->real_escape_string($nombreg);
    $especialidad = $conn->real_escape_string($especialidad);
    $turno = $conn->real_escape_string($turno);
    $semestre = $conn->real_escape_string($semestre);
    $generacion = $conn->real_escape_string($generacion);
    
    $sql = "SELECT nombre, especialidad, turno, semestre, idgeneracion FROM Grupo 
    WHERE nombre='$nombreg' AND especialidad='$especialidad' AND turno='$turno' AND semestre='$semestre' AND idgeneracion='$generacion'";
    
    $result = $conn->query($sql);
    return $result->num_rows;
    close($conn);
}

function register_group($nombreg, $especialidad, $turno, $semestre, $generacion){
    $conn = connect();
    
    $query = "ALTER TABLE Grupo AUTO_INCREMENT = 1";
    $conn->query($query);
    
    $sql = "INSERT INTO Grupo (nombre, especialidad, turno, semestre, idgeneracion) VALUES(?,?,?,?,?);";
    
    $result = false;
    
    if(!($statement = $conn->prepare($sql))){
        die("Preparation failed " .$conn->errno.": ".$conn->error);
    }
    
    $nombreg = $conn->real_escape_string($nombreg);
    $especialidad = $conn->real_escape_string($especialidad);
    $turno = $conn->real_escape_string($turno);
    $semestre = $conn->real_escape_string($semestre);
    $generacion = $conn->real_escape_string($generacion);
    
    if(!($statement->bind_param("sssss", $nombreg, $especialidad, $turno, $semestre,  $generacion))){
        die("Parameter vinculation failed " .$statement->errno.": ".$statement->error);
    }  
    if(!($statement->execute())){
        die("Execution failed " .$statement->errno.": ".$statement->error);
    } 
    if(!($statement->affected_rows)){
        die("No rows affected" .$statement->errno.": ".$statement->error);
    } 
    else $result=true;
    
    $statement->close();
    close($conn);
    return $result;
}

function select_group(){
    $conn = connect();
    $result = "";
    $year = date('Y');
    $yearPrv = $year-3;
    $query = "SELECT G.idgrupo, CONCAT(G.nombre,' ',substr(G.especialidad,1,4),' ',G.turno,' ',G.semestre,' ',fechainicio,'-',fechafin) AS grupo 
    FROM Grupo G, Generacion Gen
    WHERE (fechainicio >= '$yearPrv' and fechainicio <= '$year' and Gen.idgeneracion=G.idgeneracion and G.semestre IS NOT NULL)";
    $result = $conn->query($query);
    close($conn);
    return $result;
}

function select_groups()
{
    $conn = connect();
    $result = "";
    $year = date('Y');
    $yearPrv = $year-3;
    $query = "SELECT G.idgrupo, G.nombre, G.especialidad, G.turno, G.semestre, CONCAT(fechainicio,' a ',fechafin) as generacion
    FROM Grupo G, Generacion Gen
    WHERE Gen.idgeneracion=G.idgeneracion";
    $result = $conn->query($query);
    close($conn);
    return $result;
}



function val_student($nocontrol){
    $conn = connect();

    $nocontrol = $conn->real_escape_string($nocontrol);

    $sql = "SELECT * FROM Usuario WHERE idusuario='$nocontrol'";
    
    $result = $conn->query($sql);
    return $result->num_rows;
    close($conn);
}

function register_student($nocontrol, $sexo, $grupo, $nombre, $apaterno, $amaterno){
    $conn = connect();
    
    $sql = "INSERT INTO Usuario (idusuario, nombre, apaterno, amaterno, sexo, contrasena) VALUES(?,?,?,?,?,?);";
    
    $result = false;
    
    if(!($statement = $conn->prepare($sql))){
        die("Preparation failed " .$conn->errno.": ".$conn->error);
    }
    
    $nocontrol = $conn->real_escape_string($nocontrol);
    $sexo = $conn->real_escape_string($sexo);
    $grupo = $conn->real_escape_string($grupo);
    $nombre = $conn->real_escape_string($nombre);
    $apaterno = $conn->real_escape_string($apaterno);
    $amaterno = $conn->real_escape_string($amaterno);
    $contrasena = $nocontrol;
    
    if(!($statement->bind_param("ssssss", $nocontrol, $nombre, $apaterno, $amaterno,  $sexo, $contrasena))){
        die("Parameter vinculation failed " .$statement->errno.": ".$statement->error);
    }  
    if(!($statement->execute())){
        die("Execution failed " .$statement->errno.": ".$statement->error);
    } 
    if(!($statement->affected_rows)){
        die("No rows affected" .$statement->errno.": ".$statement->error);
    } 
    
    $sql = "INSERT INTO UsuarioRol VALUES(?,'ALUMNO');";
    
    if(!($statement = $conn->prepare($sql))){
        die("Preparation failed " .$conn->errno.": ".$conn->error);
    }
    
    if(!($statement->bind_param("s", $nocontrol))){
        die("Parameter vinculation failed " .$statement->errno.": ".$statement->error);
    }  
    if(!($statement->execute())){
        die("Execution failed " .$statement->errno.": ".$statement->error);
    } 
    if(!($statement->affected_rows)){
        die("No rows affected" .$statement->errno.": ".$statement->error);
    } 
    
    $sql = "INSERT INTO Alumno (idusuario, idgrupo) VALUES(?,?);";
    
    if(!($statement = $conn->prepare($sql))){
        die("Preparation failed " .$conn->errno.": ".$conn->error);
    }
    
    if(!($statement->bind_param("ss", $nocontrol, $grupo))){
        die("Parameter vinculation failed " .$statement->errno.": ".$statement->error);
    }  
    if(!($statement->execute())){
        die("Execution failed " .$statement->errno.": ".$statement->error);
    } 
    if(!($statement->affected_rows)){
        die("No rows affected" .$statement->errno.": ".$statement->error);
    } 
    
    $sql = "INSERT INTO AlumnoEstatusOcupacion VALUES(?,'ALUMNO','DEFAULT');";
    
    if(!($statement = $conn->prepare($sql))){
        die("Preparation failed " .$conn->errno.": ".$conn->error);
    }
    
    if(!($statement->bind_param("s", $nocontrol))){
        die("Parameter vinculation failed " .$statement->errno.": ".$statement->error);
    }  
    if(!($statement->execute())){
        die("Execution failed " .$statement->errno.": ".$statement->error);
    } 
    if(!($statement->affected_rows)){
        die("No rows affected" .$statement->errno.": ".$statement->error);
    } 
    else
    {
        $result=true;
    }
    
    $statement->close();
    close($conn);
    return $result;
}

function val_admin($idusuario){
    $conn = connect();

    $idusuario = $conn->real_escape_string($idusuario);

    $sql = "SELECT * FROM Usuario WHERE idusuario='$idusuario'";
    
    $result = $conn->query($sql);
    return $result->num_rows;
    close($conn);
}

function register_admin($idusuario, $sexo, $nombre, $apaterno, $amaterno, $correo, $telefono_movil){
    $conn = connect();
    
    $sql = "INSERT INTO Usuario VALUES(?,?,?,?,?,?,?,?);";
    
    $result = false;
    
    if(!($statement = $conn->prepare($sql))){
        die("Preparation failed " .$conn->errno.": ".$conn->error);
    }
    
    $idusuario = $conn->real_escape_string($idusuario);
    $nombre = $conn->real_escape_string($nombre);
    $apaterno = $conn->real_escape_string($apaterno);
    $amaterno = $conn->real_escape_string($amaterno);
    $sexo = $conn->real_escape_string($sexo);
    $correo = $conn->real_escape_string($correo);
    $telefono_movil = $conn->real_escape_string($telefono_movil);
    $contrasena = password_hash($idusuario, PASSWORD_DEFAULT);
    
    if(!($statement->bind_param("ssssssss", $idusuario, $nombre, $apaterno, $amaterno, $sexo, $correo, $telefono_movil, $contrasena))){
        die("Parameter vinculation failed " .$statement->errno.": ".$statement->error);
    }  
    if(!($statement->execute())){
        die("Execution failed " .$statement->errno.": ".$statement->error);
    } 
    if(!($statement->affected_rows)){
        die("No rows affected" .$statement->errno.": ".$statement->error);
    } 
    
    $sql = "INSERT INTO UsuarioRol VALUES(?,'ADMINISTRADOR');";
    
    if(!($statement = $conn->prepare($sql))){
        die("Preparation failed " .$conn->errno.": ".$conn->error);
    }
    
    if(!($statement->bind_param("s", $idusuario))){
        die("Parameter vinculation failed " .$statement->errno.": ".$statement->error);
    }  
    if(!($statement->execute())){
        die("Execution failed " .$statement->errno.": ".$statement->error);
    } 
    if(!($statement->affected_rows)){
        die("No rows affected" .$statement->errno.": ".$statement->error);
    } 
    else
    {
        $result=true;
    }
    
    $statement->close();
    close($conn);
    return $result;
}

function delete_student($nocontrol){
    $conn = connect();
    
    $sql = "DELETE FROM Usuario WHERE idusuario = ?";
    
    $result = false;
    
    if(!($statement = $conn->prepare($sql))){
        die("Preparation failed " .$conn->errno.": ".$conn->error);
    }
    
    $nocontrol = $conn->real_escape_string($nocontrol);

    if(!($statement->bind_param("s", $nocontrol))){
        die("Parameter vinculation failed " .$statement->errno.": ".$statement->error);
    }  
    
    if(!($statement->execute())){
        die("Execution failed " .$statement->errno.": ".$statement->error);
    } 
    if(!($statement->affected_rows)){
        die("No rows affected" .$statement->errno.": ".$statement->error);
    } 
    else
    {
        $result=true;
    }
    
    $statement->close();
    close($conn);
    return $result;
}

function modify_student($nocontrol, $sexo, $nombre, $apaterno, $amaterno){
    $conn = connect();
    
    $sql = "UPDATE Usuario SET nombre=?, apaterno=?, amaterno=?, sexo=?, contrasena=? WHERE idusuario=?";
    
    $result = false;
    
    if(!($statement = $conn->prepare($sql))){
        die("Preparation failed " .$conn->errno.": ".$conn->error);
    }
    
    $nocontrol = $conn->real_escape_string($nocontrol);
    $sexo = $conn->real_escape_string($sexo);
    $nombre = $conn->real_escape_string($nombre);
    $apaterno = $conn->real_escape_string($apaterno);
    $amaterno = $conn->real_escape_string($amaterno);
    $contrasena = $nocontrol;
    
    
    if(!($statement->bind_param("ssssss", $nombre, $apaterno, $amaterno,  $sexo, $contrasena, $nocontrol))){
        die("Parameter vinculation failed " .$statement->errno.": ".$statement->error);
    }  
    
    if(!($statement->execute())){
        die("Execution failed " .$statement->errno.": ".$statement->error);
    } 
    if(!($statement->affected_rows)){
        die("No rows affected" .$statement->errno.": ".$statement->error);
    } 
    else
    {
        $result=true;
    }
    
    $statement->close();
    close($conn);
    return $result;
}

function retrieve_login($username, $password)
{
    $conn = connect();
    $query = "SELECT idrol, nombre, u.idusuario FROM UsuarioRol ur, Usuario u WHERE ur.idusuario = u.idusuario ";
    $query.= "AND u.idusuario = ? and contrasena = ?";
    $answer = 0;
    if (!($statement = $conn->prepare($query)))
    {
        echo "<span style='color:red;'>";
        die("Preparation failed: ".$conn->error);
        echo "</span>";
    }
    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);
    if(!($statement->bind_param("ss", $username, $password)))
    {
        echo "<span style='color:red;'>";
        die("Parameter vinculation failed: ".$conn->error);
        echo "</span>";
    }
    if(!($statement->execute()))
    {
        echo "<span style='color:red;'>";
        die("Execution failed: ".$conn->error);
        echo "</span>";
    }
    else
    {
        $answer= (array) $answer;
        $statement->bind_result($answer['idrol'], $answer['nombre'], $answer['idusuario']);
        $statement->fetch();
        if ($answer['idrol'] == "") $answer = 0;
    }
    $statement->close();
    close($conn);
    return $answer;
}

function getSemestre($idusuario){
    $conn = connect();
    $query = "SELECT idgrupo FROM Alumno WHERE idusuario = '$idusuario'";
    $result = $conn->query($query);
    if(mysqli_num_rows($result) > 0)
    {
      while($row = mysqli_fetch_array($result))
      {
          $grupo = $row['idgrupo'];
      }
    }
    
    $query = "SELECT semestre FROM Grupo WHERE idgrupo = '$grupo'";
    $result = $conn->query($query);
    if(mysqli_num_rows($result) > 0)
    {
      while($row = mysqli_fetch_array($result))
      {
          $semestre = $row['semestre'];
      }
    }
    close($conn);
    return $semestre;
}

function select_permissions($rol)
{
    $conn = connect();
    $query = "SELECT idpermiso FROM RolPermiso WHERE idrol = ?";
    $answer = 0;
    if (!($statement = $conn->prepare($query)))
    {
        echo "<span style='color:red;'>";
        die("Preparation failed: ".$conn->error);
        echo "</span>";
    }
    $rol = $conn->real_escape_string($rol);
    if(!($statement->bind_param("s", $rol)))
    {
        echo "<span style='color:red;'>";
        die("Parameter vinculation failed: ".$conn->error);
        echo "</span>";
    }
    if(!($statement->execute()))
    {
        echo "<span style='color:red;'>";
        die("Execution failed: ".$conn->error);
        echo "</span>";
    }
    else
    {
        // $result = mysqli_fetch_all(mysqli_stmt_get_result($stmt));
        $answer= mysqli_fetch_all($statement->get_result());
        if ($answer == "") $answer = 0;
    }
    $statement->close();
    close($conn);
    return $answer;
}

function select_profile($idusuario)
{
    $conn = connect();
    $query = "SELECT u.nombre, u.apaterno, u.amaterno, u.idusuario, u.sexo, u.email, u.telefono
            FROM Usuario u WHERE u.idusuario = ?";
    $answer = 0;
    if (!($statement = $conn->prepare($query)))
    {
        echo "<span style='color:red;'>";
        die("Preparation failed: ".$conn->error);
        echo "</span>";
    }
    $idusuario = $conn->real_escape_string($idusuario);
    if(!($statement->bind_param("s", $idusuario)))
    {
        echo "<span style='color:red;'>";
        die("Parameter vinculation failed: ".$conn->error);
        echo "</span>";
    }
    if(!($statement->execute()))
    {
        echo "<span style='color:red;'>";
        die("Execution failed: ".$conn->error);
        echo "</span>";
    }
    else
    {
        $answer= (array) $answer;
        $statement->bind_result($answer['nombre'], $answer['apaterno'], $answer['amaterno'],
        $answer['idusuario'], $answer['sexo'], $answer['email'], $answer['telefono']);
        $statement->fetch();
        if($answer['nombre'] == "")$answer = 0;
    }
    $statement->close();
    close($conn);
    return $answer;
    
}

function select_students()
{
    $conn = connect();
    // $query = "SELECT A.idusuario, U.nombre, U.apaterno, U.amaterno, U.sexo, U.email, U.telefono, G.especialidad";
    // $query .= "FROM Alumno A, Usuario U, Grupo g";
    // $query .= "WHERE A.idusuario = U.idusuario AND A.idgrupo = G.idgrupo";
    // $query .= "ORDER BY U.idusuario DESC";
    //$query = "SELECT A.idusuario, U.nombre, U.apaterno, U.amaterno, U.sexo, U.email, U.telefono, A.idgrupo, G.especialidad FROM Alumno A, Usuario U, Grupo G WHERE A.idusuario = U.idusuario AND A.idgrupo = G.idgrupo ORDER BY U.idusuario DESC";
    $query = "SELECT A.idusuario, U.nombre, U.apaterno, U.amaterno, U.sexo, 
    YEAR(CURDATE())-SUBSTR(A.fechanacimiento,1,4) AS edad, 
    A.areainteres, group_concat(CONCAT(E.idestatus,' ',O.lugarocupacion)) as ocupacion,
    CONCAT(G.nombre,' ',SUBSTR(G.especialidad,1,4),' ',G.turno,' ',G.semestre,' ',Gen.fechainicio,' A ',Gen.fechafin) AS grupo, 
    U.email, U.telefono 
    from Ocupacion O, AlumnoEstatusOcupacion E, Alumno A, Usuario U, Grupo G, Generacion Gen 
    WHERE A.idusuario = U.idusuario AND A.idgrupo = G.idgrupo AND Gen.idgeneracion = G.idgeneracion AND E.idusuario=A.idusuario AND O.idocupacion = E.idocupacion AND O.idocupacion IN(
    select idocupacion from AlumnoEstatusOcupacion WHERE idusuario IN(
    select idusuario from Alumno))
    group by A.idusuario, U.nombre, U.apaterno, U.amaterno, U.sexo, edad, A.areainteres, grupo, U.email, U.telefono 
    ORDER BY U.idusuario DESC";
    $answer = $conn->query($query);
    close($conn);
    return $answer;
}

function select_directors()
{
    $conn = connect();
    $query = "SELECT CONCAT(u.nombre, ' ', u.apaterno, ' ', u.amaterno) AS nombre, u.idusuario, u.sexo, u.email, u.telefono
            FROM Usuario u, UsuarioRol WHERE u.idusuario = UsuarioRol.idusuario AND UsuarioRol.idrol = 'DIRECTOR'";
    $answer = $conn->query($query);
    close($conn);
    return $answer;
}

function select_administrators()
{
    $conn = connect();
    $query = "SELECT CONCAT(u.nombre, ' ', u.apaterno, ' ', u.amaterno) AS nombre, u.idusuario, u.sexo, u.email, u.telefono
            FROM Usuario u, UsuarioRol WHERE u.idusuario = UsuarioRol.idusuario AND UsuarioRol.idrol = 'ADMINISTRADOR'";
    $answer = $conn->query($query);
    close($conn);
    return $answer;
}

function select_name_administrators()
{
    $conn = connect();
    $query = "SELECT U.nombre FROM Usuario U, UsuarioRol UR WHERE U.idusuario = UR.idusuario AND UR.idrol = 'ADMINISTRADOR'";
    $answer = $conn->query($query);
    close($conn);
    return $answer;
}

function select_name_directors()
{
    $conn = connect();
    $query = "SELECT U.nombre FROM Usuario U, UsuarioRol UR WHERE U.idusuario = UR.idusuario AND UR.idrol = 'DIRECTOR'";
    $answer = $conn->query($query);
    close($conn);
    return $answer; 
}

function openSurvey($idencuesta) 
{
    $conn = connect();
    $sql = "UPDATE Encuesta SET activa=1 WHERE idencuesta='$idencuesta'";
    
    if(!($statement = $conn->prepare($sql))){
        die("Preparation failed " .$conn->errno.": ".$conn->error);
    }
    if(!($statement->execute())){
        die("Execution failed " .$statement->errno.": ".$statement->error);
    } 
    if(!($statement->affected_rows)){
        die("No rows affectedtoopen" .$statement->errno.": ".$statement->error);
    } 
    $statement->close();
    close($conn);
    echo "open";
}

function closeSurvey($idencuesta) 
{
    $conn = connect();
    $sql = "UPDATE Encuesta SET activa=0 WHERE idencuesta='$idencuesta'";
    
    if(!($statement = $conn->prepare($sql))){
        die("Preparation failed " .$conn->errno.": ".$conn->error);
    }
    if(!($statement->execute())){
        die("Execution failed " .$statement->errno.": ".$statement->error);
    } 
    if(!($statement->affected_rows)){
        die("No rows affectedtoclose" .$statement->errno.": ".$statement->error);
    } 
    $statement->close();
    close($conn);
    echo "closed";
}

function surveyIsActive($idencuesta) 
{
    $conn = connect();
    $sql = "SELECT activa FROM Encuesta WHERE idencuesta='$idencuesta'";
    $result = $conn->query($sql);
    $fila = $result->fetch_array(MYSQLI_ASSOC);
    close($conn);
    return $fila['activa'];
}

function surveysThatAreActive()
{
    $conn = connect();
    $sql = "SELECT idencuesta FROM Encuesta WHERE activa=1";
    $result = $conn->query($sql);
    close($conn);
    return $result;
}

function canAnswerSurvey($idusuario) 
{
    $semestre = getSemestre($idusuario);
    if ($semestre == 4) {
        if (surveyIsActive('Encuesta4oSemestre'))
            return true;
    } else
    if ($semestre == 6) {
        if (surveyIsActive('Encuesta6oSemestre'))
            return true;
    } else
    if ($semestre == NULL) {
        if (surveyIsActive('EncuestaEgresados'))
            return true;
    } else
        return false;
}

function answered($idusuario) //obtener el estatus de respuesta de un alumno (contestado o no)
{
   $conn = connect();
   $sql = "SELECT respuesta 
           FROM Alumno 
           WHERE idusuario='$idusuario'";
   $result = $conn->query($sql);
   $fila = $result->fetch_array(MYSQLI_ASSOC);
   close($conn);
   return $fila['respuesta'];
}

function surveyResponses($semestre) //obtener la cantidad de encuestas contestadas en un determinado semestre
{
    $conn = connect();
    if ($semestre == NULL)
        $sql = "SELECT COUNT(a.idusuario) AS n
                FROM Alumno a, Grupo g 
                WHERE a.idgrupo=g.idgrupo
                AND g.semestre IS NULL 
                AND respuesta=1";
    else
        $sql = "SELECT COUNT(a.idusuario) AS n
                FROM Alumno a, Grupo g 
                WHERE a.idgrupo=g.idgrupo 
                AND g.semestre='$semestre' 
                AND a.respuesta=1";
    $result = $conn->query($sql);
    $fila = $result->fetch_array(MYSQLI_ASSOC);
    close($conn);
    return $fila['n'];
}

function studentsIn($semestre) 
{
    $conn = connect();
    if ($semestre == NULL)
        $sql = "SELECT COUNT(a.idusuario) AS n FROM Alumno a, Grupo g WHERE a.idgrupo=g.idgrupo AND g.semestre IS NULL";
    else
        $sql = "SELECT COUNT(a.idusuario) AS n FROM Alumno a, Grupo g WHERE a.idgrupo=g.idgrupo AND g.semestre='$semestre'";
    $result = $conn->query($sql);
    $fila = $result->fetch_array(MYSQLI_ASSOC);
    close($conn);
    return $fila['n'];
}

function getStudentsIdsAndMails() 
{
    $conn = connect();
    $sql = "SELECT u.idusuario, u.email FROM Usuario u, Alumno a WHERE u.idusuario=a.idusuario";
    $result = $conn->query($sql);
    close($conn);
    return $result;
}
?>