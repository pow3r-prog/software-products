<?php 
require_once '../config/databases.php';
$id = $_GET['id'];

mysqli_query($link, "DELETE FROM `kursovabd`.`sql_ddl` WHERE `sql_ddl`.`id` = '$id'");
header("Location: ../index4.php");

?>