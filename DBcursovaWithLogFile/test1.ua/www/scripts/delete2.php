<?php 
require_once '../config/databases.php';
$id = $_GET['id'];

mysqli_query($link, "DELETE FROM `kursovabd`.`sql_comparison_operators` WHERE `sql_comparison_operators`.`id` = '$id'");
header("Location: ../index2.php");

?>