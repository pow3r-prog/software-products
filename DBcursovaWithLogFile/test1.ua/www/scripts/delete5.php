<?php 
require_once '../config/databases.php';
$id = $_GET['id'];

mysqli_query($link, "DELETE FROM `kursovabd`.`sql_dml` WHERE `sql_dml`.`id` = '$id'");
header("Location: ../index5.php");

?>