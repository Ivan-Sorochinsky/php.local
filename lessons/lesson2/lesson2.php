<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Урок 1</title>
</head>
<body>
<?php
echo time();
echo "<br>";
$datatime = getdate();
foreach ($datatime as $k=>$v)
    echo "$k - $v<br />";
echo $datatime['hours']."^".$datatime['minutes']."^".$datatime['seconds'];
$datatime = getdate(time());
echo $datatime['year'];
echo "<br>";
echo date("Бухай d.m.Y H:i:s");
?>
</body>
</html>