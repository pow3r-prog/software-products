<?php 
require_once '../config/databases.php';

$id = $_POST['id'];
$command  = $_POST['command'];
$description = $_POST['description'];
$example = $_POST['example'];

mysqli_query($link, "UPDATE `kursovabd`.`sql_dml` SET `command` = '$command',`description` = '$description',`example` = '$example' WHERE `sql_dml`.`id` = '$id'");
header("Location: ../index5.php");

?>