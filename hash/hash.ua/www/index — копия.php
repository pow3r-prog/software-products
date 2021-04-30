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
 <form action="index.php" method="GET">
<b>Write your hash</b>
<input type="text" name="ip">
<br>
<input type="submit" value="Hash input">
</form>
<?php

$a=$_GET["ip"];
echo "<br>";
echo "<b> your input text: </b>".$a;
$b=hash_init('sha256');
hash_update($b, $a);
$c=hash_final($b);
echo "<br>";
echo "hash from text: ".$c;
echo "<br>";
echo "Length: ".$e = strlen($c);
echo "<br>";
$fileOpen = fopen("hashRead.txt", 'w') or die("Не вдалось відкрити файл");
fwrite($fileOpen, $c);
fclose($fileOpen);
$filename = 'hashRead.txt';
echo 'Count ' . $filename . ': ' . filesize($filename) . ' bytes';



$buffer = file_get_contents('hashRead.txt');
$length = filesize('hashRead.txt');

if (!$buffer || !$length) {
  die("Reading error\n");
}

$_buffer = '';
for ($i = 0; $i < $length; $i++) {
  $_buffer .= sprintf("%08b", ord($buffer[$i]));
}

var_dump($_buffer);


$fileOpenBits = fopen("bitsRead.txt", 'w') or die("Не вдалось відкрити файл");
fwrite($fileOpenBits, $_buffer);
fclose($fileOpenBits);
$fileOpenBits = 'bitsRead.txt';
echo 'Count ' . $fileOpenBits . ': ' . filesize($fileOpenBits) . ' bytes';

echo "<br>";

// echo json_encode($_buffer);

$f = json_encode(array($_buffer));

echo $f;

echo "<br>";
$dataPoints = array();
for($i = 0; $i < 1000; $i++){
	$c += rand(0, 10) - 5; 
	array_push($dataPoints, array("x" => $i, "y" => $e));
}
    ?>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2",
	animationEnabled: true,
	zoomEnabled: true,
	title: {
		text: "Try Zooming and Panning"
	},
	data: [{
		type: "area",     
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>