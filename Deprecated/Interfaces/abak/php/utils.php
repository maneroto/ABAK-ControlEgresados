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
    * La función select_student_by_name regresa la consulta de todos los datos de los estudiantes que concidan con el nombre dado
    * La función select_student_by_flname regresa la consulta de todos los datos de los estudiantes que concidan con el apellido paterno dado
    * La función select_student_by_mlname regresa la consulta de todos los datos de los estudiantes que concidan con el apellido materno dado
    * La función select_student_by_status regresa la consulta de todos los datos de los estudiantes que concidan con el estatus dado
    * La función select_group_all regresa la consulta de todos los datos de todos los grupos
    * La función select_group_by_name regresa la consulta de todos los datos de los grupos que coincidan con el nombre dado
    * La función select_group_by_speciality regresa la consulta de todos los datos de los grupos que coincidan con la especialidad dada
    * La función select_group_by_turn regresa la consulta de todos los datos de los grupos que coincidan con el turno dado
    * La función select_group_by_name regresa la consulta de todos los datos de los grupos que coincidan con el semestre dado
    * La función select_report_all regresa la consulta de todos los datos de todos los reportes
    * La función select_group_by_date regresa la consulta de todos los datos de los reportes que coincidan con la fecha dada
*/

function connect()
{
    $servername = "localhost";
    $username = "a01703171";
    $password = "";
    $dbname = "controlegresados";
    $SQLconnection = mysqli_connect($servername, $username, $password, $dbname);
    if($SQLconnection == null) die("Connection failed: ".mysqli_connect_error());
    $SQLconnection->set_charset = " ";
    return $SQLconnection;
}

function close ($conn)
{
    mysqli_close($conn);
}

function retrieveLogin($username, $password)
{
    $conn = connect();
    $query = "SELECT idrol, nombre FROM UsuarioRol ur, Usuario u WHERE ur.idusuario = u.idusuario ";
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
        $answer= "";
        $statement->bind_result($answer['idrol'], $answer['nombre']);
        $statement->fetch();
        if ($answer['idrol'] == "") $answer = 0;
    }
    $statement->close();
    close($conn);
    return $answer;
}

function select_student_table_info($especialidad = "", $search = "", $order = "", $dir = "", $length = 1, $start)
{
    $conn = connect();
    $query = "SELECT a.idusuario, u.nombre, g.especialidad, e.idestatus, a.fechanacimientoa, a.areainteres ";
    $query .= "FROM Usuario u, Alumno a, Grupo g, AlumnoEstatus e ";
    $query .= "WHERE u.idusuario = a.idusuario AND a.idgrupo = g.idgrupo AND u.idusuario = e.idestatus ";
    if ($especialidad != "")
    {
        $query .= "AND g.especialidad = '".$especialidad."' ";
    }
    if($search != "")
    {
        $query .= "AND (a.idusuario like '%".$search."%' OR ".
        "u.nombre like '%".$search."%' OR"." g.especialidad like '%".$search."%' OR ".
        "e.idestatus like '%".$search."%' OR "."a.fechanacimiento like '%".$search."%' OR ".
        "a.areainteres like '%".$search."%')";
    }
    if($order != "" && $dir != "")
    {
        $query .= " ORDER BY ".$order." ".$dir;
    }
    else 
    {
        $query .= " ORDER BY a.idusuario DESC";
    }
    if($length != 1)
    {
        $query1 = " LIMIT ".$start.", ".$length;
    }
    $result = mysqli_query($conn, $query . $query1);
    close($conn);
    return $result;
}

function select_student_consultData()
{
    $conn = connect();
    $query = "SELECT u.nombre, u.apaterno, u.amaterno, g.especialidad, g.grado, a.estatus";
    $query.= "";
}

function select_student_all()
{
    $conn = connect();
    $query = "SELECT * FROM alumno a, usuario u WHERE a.idusuario = u.idusuario";
    $result = $conn->query($query);
    close($conn);
    return $result;
}

function select_student_by_name($name)
{
    $conn = connect();
    $query = "SELECT * FROM alumno a, usuario u WHERE a.idusuario = u.idusuario AND u.nombre like ?";
    $result = "No se han encontrado alumnos con ese nombre";
    if(!($statement = $conn->prepare($query)))
    {
        echo "<span style = 'color:red;'>";
        die("Preparation failed: ".$conn->errno.": ".$conn->error);
        echo "</span>";
    }
    $name = $conn->real_escape_string($name);
    if(!($statement->bind_param("s", $name)))
    {
        echo "<span style = 'color:red;'>";
        die("Parameter vinculation failed: ".$statement->errno.": ".$statement->error);
        echo "</span>";
    }
    if(!($statement->execute()))
    {
        echo "<span style = 'color:red;'>";
        die("Execution failed: ".$statement->errno.": ".$statement->error);
        echo "</span>";
    }
    else{
        $result = $statement->get_result();
    }
    $statement->close();
    close($conn);
    return $result;
}

function select_student_by_flname($flname)
{
    $conn = connect();
    $query = "SELECT * FROM alumno a, usuario u WHERE a.idusuario = u.idusuario AND u.apatreno like ?";
    $result = "No se han encontrado alumnos con ese apellido paterno";
    if(!($statement = $conn->prepare($query)))
    {
        echo "<span style = 'color:red;'>";
        die("Preparation failed: ".$conn->errno.": ".$conn->error);
        echo "</span>";
    }
    $flname = $conn->real_escape_string($flname);
    if(!($statement->bind_param("s", $flname)))
    {
        echo "<span style = 'color:red;'>";
        die("Parameter vinculation failed: ".$statement->errno.": ".$statement->error);
        echo "</span>";
    }
    if(!($statement->execute()))
    {
        echo "<span style = 'color:red;'>";
        die("Execution failed: ".$statement->errno.": ".$statement->error);
        echo "</span>";
    }
    else{
        $result = $statement->get_result();
    }
    $statement->close();
    close($conn);
    return $result;
}

function select_student_by_mlname($mlname)
{
    $conn = connect();
    $query = "SELECT * FROM alumno a, usuario u WHERE a.idusuario = u.idusuario AND u.amaterno like ?";
    $result = "No se han encontrado alumnos con ese apellido materno";
    if(!($statement = $conn->prepare($query)))
    {
        echo "<span style = 'color:red;'>";
        die("Preparation failed: ".$conn->errno.": ".$conn->error);
        echo "</span>";
    }
    $mlname = $conn->real_escape_string($mlname);
    if(!($statement->bind_param("s", $mlname)))
    {
        echo "<span style = 'color:red;'>";
        die("Parameter vinculation failed: ".$statement->errno.": ".$statement->error);
        echo "</span>";
    }
    if(!($statement->execute()))
    {
        echo "<span style = 'color:red;'>";
        die("Execution failed: ".$statement->errno.": ".$statement->error);
        echo "</span>";
    }
    else{
        $result = $statement->get_result();
    }
    $statement->close();
    close($conn);
    return $result;
}

function select_student_by_status($status)
{
    $conn = connect();
    $query = "SELECT * FROM alumno a, usuario u, estatus e WHERE a.idusuario = u.idusuario AND e.idusuario = a.idusuario AND e.nombre like ?";
    $result = "No se han encontrado estatus con ese estatus";
    if(!($statement = $conn->prepare($query)))
    {
        echo "<span style = 'color:red;'>";
        die("Preparation failed: ".$conn->errno.": ".$conn->error);
        echo "</span>";
    }
    $status = $conn->real_escape_string($status);
    if(!($statement->bind_param("s", $status)))
    {
        echo "<span style = 'color:red;'>";
        die("Parameter vinculation failed: ".$statement->errno.": ".$statement->error);
        echo "</span>";
    }
    if(!($statement->execute()))
    {
        echo "<span style = 'color:red;'>";
        die("Execution failed: ".$statement->errno.": ".$statement->error);
        echo "</span>";
    }
    else{
        $result = $statement->get_result();
    }
    $statement->close();
    close($conn);
    return $result; 
}

function select_group_all()
{
    $conn = connect();
    $query = "SELECT * FROM grupo";
    $result = $conn->query($query);
    close($conn);
    return $result;
}

function select_group_by_name($name)
{
    $conn = connect();
    $query = "SELECT * FROM grupo g WHERE g.nombre = ?";
    $result = "No se han encontrado grupos con ese nombre";
    if(!($statement = $conn->prepare($query)))
    {
        echo "<span style = 'color:red;'>";
        die("Preparation failed: ".$conn->errno.": ".$conn->error);
        echo "</span>";
    }
    $name = $conn->real_escape_string($name);
    if(!($statement->bind_param("s", $name)))
    {
        echo "<span style = 'color:red;'>";
        die("Parameter vinculation failed: ".$statement->errno.": ".$statement->error);
        echo "</span>";
    }
    if(!($statement->execute()))
    {
        echo "<span style = 'color:red;'>";
        die("Execution failed: ".$statement->errno.": ".$statement->error);
        echo "</span>";
    }
    else{
        $result = $statement->get_result();
    }
    $statement->close();
    close($conn);
    return $result;
}

function select_group_by_speciality($speciality)
{
    $conn = connect();
    $query = "SELECT * FROM grupo g WHERE g.especialidad like ?";
    $result = "No se han encontrado grupos con esa especialidad";
    if(!($statement = $conn->prepare($query)))
    {
        echo "<span style = 'color:red;'>";
        die("Preparation failed: ".$conn->errno.": ".$conn->error);
        echo "</span>";
    }
    $speciality = $conn->real_escape_string($speciality);
    if(!($statement->bind_param("s", $speciality)))
    {
        echo "<span style = 'color:red;'>";
        die("Parameter vinculation failed: ".$statement->errno.": ".$statement->error);
        echo "</span>";
    }
    if(!($statement->execute()))
    {
        echo "<span style = 'color:red;'>";
        die("Execution failed: ".$statement->errno.": ".$statement->error);
        echo "</span>";
    }
    else{
        $result = $statement->get_result();
    }
    $statement->close();
    close($conn);
    return $result;
}

function select_group_by_turn($turn)
{
    $conn = connect();
    $query = "SELECT * FROM grupo g WHERE g.turno = ?";
    $result = "No se han encontrado grupos con ese turno";
    if(!($statement = $conn->prepare($query)))
    {
        echo "<span style = 'color:red;'>";
        die("Preparation failed: ".$conn->errno.": ".$conn->error);
        echo "</span>";
    }
    $turn = $conn->real_escape_string($turn);
    if(!($statement->bind_param("s", $turn)))
    {
        echo "<span style = 'color:red;'>";
        die("Parameter vinculation failed: ".$statement->errno.": ".$statement->error);
        echo "</span>";
    }
    if(!($statement->execute()))
    {
        echo "<span style = 'color:red;'>";
        die("Execution failed: ".$statement->errno.": ".$statement->error);
        echo "</span>";
    }
    else{
        $result = $statement->get_result();
    }
    $statement->close();
    close($conn);
    return $result;
}

function select_group_by_semester($semester)
{
    $conn = connect();
    $query = "SELECT * FROM grupo g WHERE g.semestre = ?";
    $result = "No se han encontrado grupos con ese semestre";
    if(!($statement = $conn->prepare($query)))
    {
        echo "<span style = 'color:red;'>";
        die("Preparation failed: ".$conn->errno.": ".$conn->error);
        echo "</span>";
    }
    $semester = $conn->real_escape_string($semester);
    if(!($statement->bind_param("s", $semester)))
    {
        echo "<span style = 'color:red;'>";
        die("Parameter vinculation failed: ".$statement->errno.": ".$statement->error);
        echo "</span>";
    }
    if(!($statement->execute()))
    {
        echo "<span style = 'color:red;'>";
        die("Execution failed: ".$statement->errno.": ".$statement->error);
        echo "</span>";
    }
    else{
        $result = $statement->get_result();
    }
    $statement->close();
    close($conn);
    return $result;
}

function select_report_all()
{
    $conn = connect();
    $query = "SELECT * FROM reporte";
    $result = $conn->query($query);
    close($conn);
    return $result;
}

function select_report_by_date($date)
{
    $conn = connect();
    $query = "SELECT * FROM reporte r WHERE r.fecha = ?";
    $result = "No se han encontrado reportes con esa fecha";
    if(!($statement = $conn->prepare($query)))
    {
        echo "<span style = 'color:red;'>";
        die("Preparation failed: ".$conn->errno.": ".$conn->error);
        echo "</span>";
    }
    $date = $conn->real_escape_string($date);
    if(!($statement->bind_param("s", $date)))
    {
        echo "<span style = 'color:red;'>";
        die("Parameter vinculation failed: ".$statement->errno.": ".$statement->error);
        echo "</span>";
    }
    if(!($statement->execute()))
    {
        echo "<span style = 'color:red;'>";
        die("Execution failed: ".$statement->errno.": ".$statement->error);
        echo "</span>";
    }
    else{
        $result = $statement->get_result();
    }
    $statement->close();
    close($conn);
    return $result;
}
?>