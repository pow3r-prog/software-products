<?php 
require_once '../config/databases.php';

$id = $_POST['id'];
$operator  = $_POST['operator'];
$description = $_POST['description'];
$example = $_POST['example'];

mysqli_query($link, "UPDATE `kursovabd`.`sql_arithmetic_operators` SET `operator` = '$operator',`description` = '$description',`example` = '$example' WHERE `sql_arithmetic_operators`.`id` = '$id'");
header("Location: ../index.php");

?>