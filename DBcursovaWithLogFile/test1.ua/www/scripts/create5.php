<?php 
require_once '../config/databases.php';

$command  = $_POST['command'];
$description = $_POST['description'];
$example = $_POST['example'];

mysqli_query($link, "INSERT INTO `kursovabd`.`sql_dml` (`id`, `command`, `description`, `example`) VALUES (NULL, '$command', '$description', '$example')");
header("Location: ../index5.php");


?>