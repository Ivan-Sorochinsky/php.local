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
$file = fopen("files/torpeda.txt","a+");
$text = "Водка твой друг! Ебашь Альбина!\r\n";
fwrite($file, $text);
fclose($file);

$file_1 = fopen("files/torpeda.txt","r");
$content = fread($file_1, 2048);
echo $content;
fclose($file_1);


?>
</body>
</html>