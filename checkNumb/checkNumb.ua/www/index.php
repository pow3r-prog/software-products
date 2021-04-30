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
    User number:
   <input name="user_number"/>
   <button type="submit">Send</button>
</form>
<?php
    $number = file_get_contents('text.txt');
    echo 'Notepad: ' . $number . '<br>';
    $randNumber = rand(1, 5);
    echo 'Random: ' . $randNumber . '<br>';
    $result = $randNumber + $number;
    $userNum = $_GET['user_number'];
    echo 'User Result: ' . $userNum;
    echo '<br>';
    echo 'Result: ' . $result;
    echo '<br>';
    if ($userNum == $result) {
        echo " Number done ";
    }
    else {
        echo " Number bad ";
    }



    ?>
</body>
</html>