<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','mysqlroot','WEB9');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"WEB9");
$sql="SELECT Content FROM files WHERE Name = '".$q."'";
$result = mysqli_query($con,$sql);

if (mysqli_num_rows($result) > 0) {
    while($rowData = mysqli_fetch_array($result)){
        echo $rowData["Content"].'<br>';
    }
}
mysqli_close($con);
?>
