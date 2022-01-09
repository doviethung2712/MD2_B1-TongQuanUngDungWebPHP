<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ứng dụng Future Value Calculator</title>
</head>
<body>
<form action="" method="post">
    <label>
        Tiền Ban Đầu:
        <input type="text" name="money" placeholder="Số Tiền">
    </label> <br>
    <label>
        Lãi Suất Năm:
        <input type="text" name="year" placeholder="Lãi Suất">
    </label> <br>
    <label>
        Số Năm Đầu Tư:
        <input type="text" name="namYear" placeholder="Số Năm Đầu Tư">
    </label> <br>
    <input type="submit" value="Tính">
</form>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $money = $_POST['money'];
    $year = $_POST['year'];
    $namYear = $_POST['namYear'];

    $aYear = $money + ($money * ($year / 100));
    $uoctinh = $aYear;
    for ($i = 1; $i <= $namYear; $i++) {
        if ($i > 1) {
            $uoctinh = $uoctinh + ($uoctinh * ($year / 100));
        } else if ($namYear == 1) {
            $uoctinh ;
        }
    }
    echo $uoctinh;
}
?>
</body>
</html>
