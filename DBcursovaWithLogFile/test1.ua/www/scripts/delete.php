<?php 
require_once '../config/databases.php';
$id = $_GET['id'];

mysqli_query($link, "DELETE FROM `kursovabd`.`sql_arithmetic_operators` WHERE `sql_arithmetic_operators`.`id` = '$id'");
header("Location: ../index.php");

?>