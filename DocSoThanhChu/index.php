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
<div class="search">
    <form method="post">
        <input name="num" type="text">
        <button>Click</button>
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["num"];
//    gan gia tri cho ben $num tu o nhap co ten = name
}
function checkNum($num)
{
    if ($num < 20) {
        echo checkNum0_19($num);
    } else if ($num < 100) {
        echo checkNum20_99($num);
    } else if ($num < 1000) {
        echo checkNum100_999($num);
    }
}

checkNum($number);
function checkNum0_19($num)
{
    $arr019 = ["zero", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten",
        "eleven", "twelve", "thirteen", "fourteen", "fifteen", "sixteen", "seventeen", "eighteen", "nineteen"];
    if ($num >= 0 && $num <= 19) {
        return $arr019[$num];
    }

}

function checkNum20_99($num)
{
    $arr10 = [2 => "twenty", 3 => "thirty", 4 => "forty", 5 => "fifty", 9 => "ninety", 7 => "seventy", 8 => "eighty", 6 => "sixty"];
    if ($num % 10 == 0) {
        return $arr10[$num[0]];
    } else {
        return $arr10[$num[0]] . " " . checkNum0_19($num[1]);
    }
}

function checkNum100_999($num)
{
    if ($num % 100 == 0) {
        return checkNum0_19($num[0]) . " hundred ";
    } else if ($num[1] == 0) {
        return checkNum0_19($num[0]) . " hundred and " . checkNum0_19($num[2]);
    } else {
        return checkNum0_19($num[0]) . " hundred " . checkNum20_99($num[1]) . checkNum0_19($num[2]);
    }
}

?>

</body>
</html>