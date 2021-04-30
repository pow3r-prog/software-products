<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
#create_form {
    background-color: darkslategray;
    height: 300px;
    width: 330px;
    border-radius: 10%;
}
#create_form h3 {
  margin-top: 5px;
}
#button1 {
    height: 20px;
    width: 50px;
    padding: 13px 30px;
    margin: 5px 0 20px 0;
    font-size: 15px;
    color: #fff;
    background-color:  darkslategray;
    border: none;
    cursor: pointer;
}
#button1:hover {
    transition: all 0.5s;
    background: red;
}
#button2 {
    color: #fff;
    background-color:  darkslategray;
    border: none;
    cursor: pointer;
}
#button2:hover {
    transition: all 0.5s;
    background: red;
}
</style>

<a href="index.php" id="button1">
TABLE1
</a>
<a href="index2.php" id="button1">
TABLE2
</a>
<a href="index3.php" id="button1">
TABLE3
</a>
<a href="index4.php" id="button1">
TABLE4
</a>
<a href="index5.php" id="button1">
TABLE5
</a>
<br>
<br>
<h1>sql_ddl</h1>
<table class="table">

    <tr id="top">
    <th>ID</th> 
    <th>COMMAND</th>
    <th>DESCRIPTION</th>
    <th>EXAMPLE</th>
    </tr>
<?php 
include "config/databases.php";
$results_ddls = mysqli_query($link,"SELECT *FROM `sql_ddl`LIMIT 0 , 30");
$results_ddls = mysqli_fetch_all($results_ddls);
foreach($results_ddls as $result_ddl ) {
?>
<tr id="body">
<td><?= $result_ddl[0]?></td>
<td><?= $result_ddl[1]?></td>
<td><?= $result_ddl[2]?></td>
<td><?= $result_ddl[3]?></td>
<td><?= $result_ddl[4]?></td>
<td><?= $result_ddl[5]?></td>
<td><?= $result_ddl[6]?></td>
<td><?= $result_ddl[7]?></td>
<td><a id="button2" href="update4.php?id=<?= $result_ddl[0]?>">UPDATE</a></td>
<td><a id="button2" href="scripts/delete4.php?id=<?= $result_ddl[0]?>">DELETE</a></td>

</tr>
<?php
}
?>
</table>

<div id="create_form">
<center>
<h3>ADD NEW ELEMENT</h3>
<form action="scripts/create4.php" method="post">
<p>COMMAND</p>
<input type="text" name="command">
<p>DESCRIPTION</p>
<textarea name="description"></textarea>
<p>EXAMPLE</p>
<textarea name="example"></textarea>
<br>
<button type="submit">add new element</button>
</form>
</center>
</div>
<br>
<br>


<?php
$history = file_get_contents('logfile.log');
echo 'Result: ' . $history;
?>
</body>
</center>
</html>