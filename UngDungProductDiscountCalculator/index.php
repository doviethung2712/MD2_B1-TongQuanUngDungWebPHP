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
    <table>
        <tr>
            <td>Product Description:</td>
            <td><input type="text" name="sanPham" placeholder="Mô Tả Sản Phẩm"></td>
        </tr>
        <tr>
            <td>List Price:</td>
            <td> <input type="text" name="giaNiemYet" placeholder="Giá Niêm Yết"></td>
        </tr>
        <tr>
            <td>Discount Percent:</td>
            <td><input type="text" name="phanTram" placeholder="Tỷ Lệ Chiết Khấu"></td>
        </tr>
        <tr>
            <th colspan="2"><input type="submit" value="Calculate Discount"></th>
        </tr>
    </table>

</form>
</body>
</html>
