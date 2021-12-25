<?php
$name = intval($_GET['name']);

$con = mysqli_connect('localhost','root','mysqlroot','WEB9');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"WEB9");
$sql="INSERT INTO files (Name) VALUES ('".$name."');";

mysqli_query($con,$sql);
mysqli_close($con);
?>
