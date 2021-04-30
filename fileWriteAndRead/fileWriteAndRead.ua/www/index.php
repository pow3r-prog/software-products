<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<style>
body {
    color: white;
}
</style>
<form action="index.php">
    Write new some text:
   <input name="user_text"/>
   <button type="submit">Send</button>
</form>
<?php
   $fileOpen = fopen("hello.txt", 'w') or die("не вдалось створити файл");
   $textWrite = $_GET['user_text'];
   fwrite($fileOpen, $textWrite);
   echo 'Text result: ' . $textWrite;
   fclose($fileOpen);
    ?>
</body>
</html>