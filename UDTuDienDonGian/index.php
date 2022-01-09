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
    <table>
        <caption>Từ Điển Anh - Việt</caption>
        <tr>
            <td><input type="text" name="tuDien" placeholder="Nhập từ cần tìm"></td>
            <td><input type="submit" value="Tìm"></td>
        </tr>
    </table>
</form>

<?php

$arr = [
    "Hello" => "Xin Chào",
    "Book" => "Quyển Sách",
    "Tea"=>"Trà",
    "Phone"=>"Điện Thoại"
];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $seach = $_POST["tuDien"];
    $bl = false;
    foreach ($arr as $eng => $vn){
        if (strtolower($eng) == strtolower($seach)){
            echo "Từ: ".$eng." Là : ".$vn;
            $bl = true;
        }
    }
    if ($bl == false){
        echo "Từ Này Chưa Có Trong Từ Điển";
    }
}





?>







</body>
</html>
