<?php
require_once 'config/databases.php';
$element_id = $_GET['id'];
$element = mysqli_query($link, "SELECT * FROM `sql_arithmetic_operators` WHERE `id` = '$element_id'");
$element = mysqli_fetch_assoc($element);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update table element</title>
    <link rel="stylesheet" href="style.css">
</head>
<center>
<body>
<style>
body {
    background: #59575c;
    color: white;
}
.table #body {
  background-color: darkslategray;
  height: 50px;
}
#update_form {
    background-color: darkslategray;
    height: 300px;
    width: 330px;
    border-radius: 10%;
}
#update_form h3 {
  margin-top: 5px;
}
</style>
<div id="update_form">
<center>
<h3>UPDATE TABLE ELEMENT</h3>
<form action="scripts/update.php" method="post">
<input type="hidden" name="id" value="<?= $element['id'] ?>">
<p>OPERATOR</p>
<input type="text" name="operator" value="<?= $element['operator'] ?>">
<p>DESCRIPTION</p>
<textarea name="description"><?= $element['description'] ?></textarea>
<p>EXAMPLE</p>
<textarea name="example"><?= $element['example'] ?></textarea>
<br>
<button type="submit">UPDATE</button>
</form>
</center>
</div>
</body>
</center>
</html>