<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<style>
body {
    background: #59575c;
    color: white;
}
.table #body {
  background-color: darkslategray;
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
</style>

<table class="table">

    <tr id="top">
    <th>ID</th> 
    <th>OPERATOR</th>
    <th>DESCRIPTION</th>
    <th>EXAMPLE</th>
    </tr>
<?php 
include "config/databases.php";

$results_arithmetic = mysqli_query($link,"SELECT *FROM `sql_arithmetic_operators`LIMIT 0 , 30");
$results_arithmetic = mysqli_fetch_all($results_arithmetic);
foreach($results_arithmetic as $result_ar ) {
?>
<tr id="body">
<td><?= $result_ar[0]?></td>
<td><?= $result_ar[1]?></td>
<td><?= $result_ar[2]?></td>
<td><?= $result_ar[3]?></td>
</tr>
<?php
}
?>
</table>
<div id="create_form">
<center>
<h3>ADD NEW ELEMENT</h3>
<form action="scripts/create.php" method="post">
<p>OPERATOR</p>
<input type="text" name="operator">
<p>DESCRIPTION</p>
<input type="text" name="description"">
<p>EXAMPLE</p>
<textarea name="example"></textarea>
<br>
<button type="submit">add new element</button>
</form>
</center>
</div>
<br>
<br>

<table class="table">

    <tr id="top">
    <th>ID</th> 
    <th>OPERATOR</th>
    <th>DESCRIPTION</th>
    <th>EXAMPLE</th>
    </tr>
<?php 

$results_comparison = mysqli_query($link,"SELECT *FROM `sql_comparison_operators`LIMIT 0 , 30");
$results_comparison = mysqli_fetch_all($results_comparison);
foreach($results_comparison as $result_co ) {
?>
<tr id="body">
<td><?= $result_co[0]?></td>
<td><?= $result_co[1]?></td>
<td><?= $result_co[2]?></td>
<td><?= $result_co[3]?></td>
<td><?= $result_co[4]?></td>
<td><?= $result_co[5]?></td>
<td><?= $result_co[6]?></td>
<td><?= $result_co[7]?></td>
<td><?= $result_co[8]?></td>

</tr>
<?php
}
?>
</table>



<br>
<br>




<table class="table">

    <tr id="top">
    <th>ID</th> 
    <th>OPERATOR</th>
    <th>DESCRIPTION</th>
    <th>EXAMPLE</th>
    </tr>
<?php 

$results_logical = mysqli_query($link,"SELECT *FROM `sql_logical_operators`LIMIT 0 , 30");
$results_logical = mysqli_fetch_all($results_logical);
foreach($results_logical as $result_log ) {
?>
<tr id="body">
<td><?= $result_log[0]?></td>
<td><?= $result_log[1]?></td>
<td><?= $result_log[2]?></td>
<td><?= $result_log[3]?></td>
<td><?= $result_log[4]?></td>
<td><?= $result_log[5]?></td>
<td><?= $result_log[6]?></td>
<td><?= $result_log[7]?></td>
<td><?= $result_log[8]?></td>
<td><?= $result_log[9]?></td>
<td><?= $result_log[10]?></td>

</tr>
<?php
}
?>
</table>

<br>
<br>


<table class="table">

    <tr id="top">
    <th>ID</th> 
    <th>OPERATOR</th>
    <th>DESCRIPTION</th>
    <th>EXAMPLE</th>
    </tr>
<?php 

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

</tr>
<?php
}
?>
</table>



<br>
<br>



<table class="table">

    <tr id="top">
    <th>ID</th> 
    <th>OPERATOR</th>
    <th>DESCRIPTION</th>
    <th>EXAMPLE</th>
    </tr>
<?php 

$results_dmls = mysqli_query($link,"SELECT *FROM `sql_dml`LIMIT 0 , 30");
$results_dmls = mysqli_fetch_all($results_dmls);
foreach($results_dmls as $result_dml ) {
?>
<tr id="body">
<td><?= $result_dml[0]?></td>
<td><?= $result_dml[1]?></td>
<td><?= $result_dml[2]?></td>
<td><?= $result_dml[3]?></td>
</tr>
<?php
}
?>
</table>

</body>
</html>