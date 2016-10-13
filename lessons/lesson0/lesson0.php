<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $var=34;
    echo $var;
    if ($var==34)
        echo "naxuy";
$array = array();
for ($i=0;$i<=5;$i++){
    $array[$i]=$i;
}

print_r($array);
$array1 = array(2, "gjkkd", true, 4.5, "fdkfkdk", 4774);
foreach ($array1 as $value){
    echo  $value;
    echo "<br>";
}
?>
</body>
</html>