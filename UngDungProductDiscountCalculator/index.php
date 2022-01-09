<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ứng dụng Product Discount Calculator</title>
</head>
<body>
<form action="display_discount.php" method="post">
    <label>
        Product Description:
        <input type="text" name="sanPham" placeholder="Mô Tả Sản Phẩm">
    </label> <br>
    <label>
        List Price:
        <input type="text" name="giaNiemYet" placeholder="Giá Niêm Yết">
    </label> <br>
    <label>
        Discount Percent:
        <input type="text" name="phanTram" placeholder="Tỷ Lệ Chiết Khấu">
    </label> <br>

    <input type="submit" value="Calculate Discount">

</form>
</body>
</html>
