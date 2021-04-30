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

<?php
$disk_num = shell_exec('wmic DISKDRIVE GET SerialNumber 2>&1');
$fileOpen = fopen("disk.txt", 'w') or die("не вдалось створити файл");
fwrite($fileOpen, $disk_num);
echo 'Disk: ' . $disk_num;
fclose($fileOpen);
$detection = file_get_contents('disk.txt');
if ($detection == "SerialNumber      
WD-WCC6Y6SAA4Z8   
50026B7678030CBD  

") {
    echo " good ";
}
else {
    echo " bad ";
}
    ?>
</body>
</html>