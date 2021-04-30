<?php 
require_once '../config/databases.php';

$operator  = $_POST['operator'];
$description = $_POST['description'];
$example = $_POST['example'];

mysqli_query($link, "INSERT INTO `kursovabd`.`sql_comparison_operators` (`id`, `operator`, `description`, `example`) VALUES (NULL, '$operator', '$description', '$example')");
header("Location: ../index2.php");


?>