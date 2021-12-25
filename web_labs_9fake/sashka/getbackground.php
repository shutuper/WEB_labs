<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','1234','weblab9');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"weblab9");
$sql="SELECT url FROM background WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
    if ($row['url'] == 'https://live.staticflickr.com/65535/50219992978_a59e46945d_b.jpg')
        echo '<h4 style="color:#d91414; text-align: center; font: italic small-caps bold 24px/2 cursive">Ajax bezeichnet ein Konzept der asynchronen Datenübertragung zwischen einem Browser und dem Server.</h4>';
    if ($row['url'] == 'https://wallpaperboat.com/wp-content/uploads/2019/08/1366X768-Blue-Blue-Background-Techno.jpg')
        echo '<h4 style="color:#1445d9; text-align: center; font: small-caps bold 24px/1 sans-serif", serif">Ajax bezeichnet ein Konzept der asynchronen Datenübertragung zwischen einem Browser und dem Server.</h4>';
    if ($row['url'] == 'https://24wallpapers.com/app-gateway/wallpaper-uploads/wallpapers/legacyUploads/wi316952a088d-1d4c-469a-a186-21da6ad5a0ae1.jpg')
        echo '<h4 style="color:#490061; text-align: center; font: italic bold 24px/2 monospace">Ajax bezeichnet ein Konzept der asynchronen Datenübertragung zwischen einem Browser und dem Server.</h4>';
    if ($row['url'] == 'https://c4.wallpaperflare.com/wallpaper/606/80/969/light-background-color-wallpaper-preview.jpg')
        echo '<h4 style="color:#a9ffe2; text-align: center; font: small-caps bold 24px/1 sans-serif", serif">Ajax bezeichnet ein Konzept der asynchronen Datenübertragung zwischen einem Browser und dem Server.</h4>';
}


$sql2="SELECT url FROM text WHERE id = '".$q."'";
$result2 = mysqli_query($con,$sql2);

while($row = mysqli_fetch_array($result2)) {
    if ($row['url'] == 'https://live.staticflickr.com/65535/50219992978_a59e46945d_b.jpg')
        echo "<style> body, html { background:url(https://wallpapercave.com/wp/wp5230816.jpg) no-repeat center center fixed;}</style>";
    if ($row['url'] == 'https://wallpaperboat.com/wp-content/uploads/2019/08/1366X768-Blue-Blue-Background-Techno.jpg')
        echo "<style> body, html { background:url(https://wallpaperaccess.com/full/6762967.png) no-repeat center center fixed;}</style>";
    if ($row['url'] == 'https://24wallpapers.com/app-gateway/wallpaper-uploads/wallpapers/legacyUploads/wi316952a088d-1d4c-469a-a186-21da6ad5a0ae1.jpg')
        echo "<style> body, html { background:url(https://wallpapercave.com/wp/wp6927395.png) no-repeat center center fixed;}</style>";
    if ($row['url'] == 'https://c4.wallpaperflare.com/wallpaper/606/80/969/light-background-color-wallpaper-preview.jpg')
        echo "<style> body, html { background:url(https://i.pinimg.com/originals/a8/ba/70/a8ba7092d107629def0177b35816ad06.jpg) no-repeat center center fixed;}</style>";
}


$sql3="SELECT url FROM text WHERE id = '".$q."'";
$result3 = mysqli_query($con,$sql3);

while($row = mysqli_fetch_array($result3)) {
    if ($row['url'] == 'https://live.staticflickr.com/65535/50219992978_a59e46945d_b.jpg')
        echo '<h5 style="color:#d91414; text-align: center; font: italic small-caps bold 20px/2 cursive">Dieses ermöglicht es, HTTP-Anfragen durchzuführen, während eine HTML-Seite angezeigt wird, und die Seite zu verändern, ohne sie komplett neu zu laden. Ajax-Anwendungen erwecken den Eindruck, dass sie gänzlich auf dem Computer des Anwenders ausgeführt werden.
        Der Prozessfluss einer traditionellen Webanwendung wird hingegen durch die zustandslose Natur einer HTTP-Anfrage bestimmt. </h5>';
    if ($row['url'] == 'https://wallpaperboat.com/wp-content/uploads/2019/08/1366X768-Blue-Blue-Background-Techno.jpg')
        echo '<h5 style="color:#1445d9; text-align: center; font: small-caps bold 20px/1 sans-serif", serif">Dieses ermöglicht es, HTTP-Anfragen durchzuführen, während eine HTML-Seite angezeigt wird, und die Seite zu verändern, ohne sie komplett neu zu laden. Ajax-Anwendungen erwecken den Eindruck, dass sie gänzlich auf dem Computer des Anwenders ausgeführt werden.
         Der Prozessfluss einer traditionellen Webanwendung wird hingegen durch die zustandslose Natur einer HTTP-Anfrage bestimmt. </h4>';
    if ($row['url'] == 'https://24wallpapers.com/app-gateway/wallpaper-uploads/wallpapers/legacyUploads/wi316952a088d-1d4c-469a-a186-21da6ad5a0ae1.jpg')
        echo '<h5 style="color:#490061; text-align: center; font: italic bold 20px/2 monospace">Dieses ermöglicht es, HTTP-Anfragen durchzuführen, während eine HTML-Seite angezeigt wird, und die Seite zu verändern, ohne sie komplett neu zu laden. Ajax-Anwendungen erwecken den Eindruck, dass sie gänzlich auf dem Computer des Anwenders ausgeführt werden.
         Der Prozessfluss einer traditionellen Webanwendung wird hingegen durch die zustandslose Natur einer HTTP-Anfrage bestimmt. </h5>';
    if ($row['url'] == 'https://c4.wallpaperflare.com/wallpaper/606/80/969/light-background-color-wallpaper-preview.jpg')
        echo '<h5 style="color:#a9ffe2; text-align: center; font: small-caps bold 20px/1 sans-serif", serif">Dieses ermöglicht es, HTTP-Anfragen durchzuführen, während eine HTML-Seite angezeigt wird, und die Seite zu verändern, ohne sie komplett neu zu laden. Ajax-Anwendungen erwecken den Eindruck, dass sie gänzlich auf dem Computer des Anwenders ausgeführt werden.
         Der Prozessfluss einer traditionellen Webanwendung wird hingegen durch die zustandslose Natur einer HTTP-Anfrage bestimmt. </h4>';
}



mysqli_close($con);
?>
</body>
</html>