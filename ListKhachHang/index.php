<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>list Khach Hang</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>

<table>
    <caption><h1>Danh Sach Khach Hang</h1></caption>
    <thead>
    <tr>
        <th>STT</th>
        <th>Ten</th>
        <th>Ngay sinh</th>
        <th>Dia Chi</th>
        <th>Anh</th>
    </tr>
    </thead>
    <?php
    $customerList = [
        "1" => [
            "ten" => "Mai Văn Hoàn",
            "ngaysinh" => "1983-08-20",
            "diachi" => "Hà Nội",
            "anh" => "img/img-file-document-icon-trendy-260nw-1407027353.jpg"
        ],
        "2" => [
            "ten" => "Nguyễn Văn Nam",
            "ngaysinh" => "1983-08-20",
            "diachi" => "Bắc Giang",
            "anh" => "img/img-file-document-icon-trendy-260nw-1407027353.jpg"
        ],
        "3" => [
            "ten" => "Nguyễn Thái Hòa",
            "ngaysinh" => "1983-08-21",
            "diachi" => "Nam Định",
            "anh" => "img/img-file-document-icon-trendy-260nw-1407027353.jpg"
        ],
        "4" => [
            "ten" => "Trần Đăng Khoa",
            "ngaysinh" => "1983-08-22",
            "diachi" => "Hà Tây",
            "anh" => "img/img-file-document-icon-trendy-260nw-1407027353.jpg"
        ],
        "5" => [
            "ten" => "Nguyễn Đình Thi",
            "ngaysinh" => "1983-08-17",
            "diachi" => "Hà Nội",
            "anh" => "img/img-file-document-icon-trendy-260nw-1407027353.jpg"
        ]
    ];
    ?>
    <tbody>
    <?php foreach ($customerList as $key => $value): ?>
        <tr>
            <td><?php echo $key ?></td>
            <td><?php echo $value['ten'] ?></td>
            <td><?php echo $value['ngaysinh'] ?></td>
            <td><?php echo $value['diachi'] ?></td>
            <td><img src="<?php echo $value['anh'] ?>" alt="" width="200"></td>
        </tr> <br>
    <?php endforeach; ?>
    </tbody>
</table>





</body>
</html>