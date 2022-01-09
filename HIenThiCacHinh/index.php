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
for ($i = 0; $i < 3; $i++) {
    $x = "";
    for ($j = 0; $j < 7; $j++) {
        $x .= "*";
    }
    echo $x . "<br/>";
}
$y = "";
for ($i = 0; $i < 6; $i++) {
    for ($j = 0; $j < 1; $j++) {
        $y .= "*";
    }
    echo $y . "<br/>";
}
for ($i = 7; $i >= 1; $i--) {
    $z = "";
    for ($j = 1; $j <= $i; $j++) {
        $z .= "*";
    }
    echo $z . "<br/>";
}


?>


</body>
</html>