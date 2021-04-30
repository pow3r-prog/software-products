<?php
$server = "127.0.0.1";
$login = "Pow3r";
$pass = "Volodya2436";
$name_db = "async";

$link = mysqli_connect($server, $login, $pass, $name_db);

if ($link == false) {
    die ("Error");
}
?>