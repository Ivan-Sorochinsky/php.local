<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/lesson3.css">
    <title>HomeWork</title>
    </head>
</head>
<body>
<div>
<?php
echo '<center>';
$a = 5;
$b = $a;
$c = 6;
$c = "b";
    echo "a = ".$a."</br>";
echo "Жесткая ссылка: b = ".$b."</br>";
echo "Символьная ссылка: c = ".$$c."</br>";
echo '</center>';
?>
</div>
</body>
</html>