<?php 
$connect = mysqli_connect("localhost", "root", "", "ejemplobd");
$query = "SELECT * FROM category ORDER BY category_name ASC";
$result = mysqli_query($connect, $query);
?>