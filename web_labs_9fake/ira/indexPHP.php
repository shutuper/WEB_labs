<?php
$q = intval($_GET);

$con = mysqli_connect('localhost','root','mysqlroot','WEB9');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"WEB9");
$sql="SELECT Name FROM files";
$result = mysqli_query($con,$sql);

echo "<select id='MYselected'>";
while($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['Name'] . "'>" . $row['Name'] . "</option>";
}
echo "</select>";
mysqli_close($con);
?>
