<?php
    require_once("utils.php");
    $especialidad = "";
    $search = "";
    $order = "";
    $dir = "";
    $length = $_POST["length"];
    $start = $_POST['start'];
    if(isset($_POST["is_category"])) $especialidad = $_POST["is_category"];
    if(isset($_POST["search"]["value"])) $search = $_POST["search"]["value"];
    if(isset($_POST["order"])) $order = $_POST["order"];
    
    $especialidad = htmlspecialchars($especialidad);
    $search = htmlspecialchars($search);
    $order = htmlspecialchars($order);
    $dir = htmlspecialchars($dir);
    $length = htmlspecialchars($length);
    $start = htmlspecialchars($start);
    
    $result = select_student_table_info($especialidad, $search, $order, $dir, $length, $start);
    
    $number_filter_row = mysqli_num_rows($result);
    
    $data = array();

    while($row = mysqli_fetch_array($result))
    {
     $sub_array = array();
     $sub_array[] = $row["idusuario"];
     $sub_array[] = $row["nombre"];
     $sub_array[] = $row["especialidad"];
     $sub_array[] = $row["estatus"];
     $sub_array[] = $row["fechanacimiento"];
     $sub_array[] = $row["areainteres"];
     $data[] = $sub_array;
    }

    $output = array(
     "draw"    => intval($_POST["draw"]),
     "recordsTotal"  =>  get_all_data($connect),
     "recordsFiltered" => $number_filter_row,
     "data"    => $data
    );
    
    echo json_encode($output);
?>