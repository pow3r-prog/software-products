<?php 
require_once '../config/databases.php';

$id = $_POST['id'];
$operator  = $_POST['operator'];
$description = $_POST['description'];
$example = $_POST['example'];

mysqli_query($link, "UPDATE `kursovabd`.`sql_logical_operators` SET `operator` = '$operator',`description` = '$description',`example` = '$example' WHERE `sql_logical_operators`.`id` = '$id'");
header("Location: ../index3.php");

?>