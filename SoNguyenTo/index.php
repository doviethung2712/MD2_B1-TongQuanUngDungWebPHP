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
<form action="" method="post">
    <input type="text" name="snt">
    <input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['snt'];
    function checkSNT($j)
    {
//        for ($i = 2; $i < $j; $i++) {
//            if ($j % $i == 0) {
//                return false;
//            }
//        }
//        return true;

        $i = 2;
        while ($i < $j) {
            if ($j % $i == 0) {
                return false;
            }
            $i++;
        }
        return true;
    }

//    for ($j = 2; $j <= $number; $j++) {
//        if (checkSNT($j)) {
//            echo $j . ' ';
//        }
//    }


    $j = 2;
    while ($j <= $number) {
        if (checkSNT($j)) {
            echo $j . " ";
        }
        $j++;
    }


}


?>
</body>
</html>