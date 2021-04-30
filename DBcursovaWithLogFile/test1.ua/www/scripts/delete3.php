<?php 
require_once '../config/databases.php';
$id = $_GET['id'];

mysqli_query($link, "DELETE FROM `kursovabd`.`sql_logical_operators` WHERE `sql_logical_operators`.`id` = '$id'");
header("Location: ../index3.php");

?>