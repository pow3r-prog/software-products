<?php 
require_once '../config/databases.php';

$id = $_POST['id'];
$operator  = $_POST['operator'];
$description = $_POST['description'];
$example = $_POST['example'];

mysqli_query($link, "UPDATE `kursovabd`.`sql_comparison_operators` SET `operator` = '$operator',`description` = '$description',`example` = '$example' WHERE `sql_comparison_operators`.`id` = '$id'");
header("Location: ../index2.php");

?>