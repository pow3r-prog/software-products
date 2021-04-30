<?php 
require_once '../config/databases.php';

$id = $_POST['id'];
$command  = $_POST['command'];
$description = $_POST['description'];
$example = $_POST['example'];

mysqli_query($link, "UPDATE `kursovabd`.`sql_ddl` SET `command` = '$command',`description` = '$description',`example` = '$example' WHERE `sql_ddl`.`id` = '$id'");
header("Location: ../index4.php");

?>