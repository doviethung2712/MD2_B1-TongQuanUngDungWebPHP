<!doctype html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng Nhập</title>
    <style>
        .login {
            display: block;
            border: 1px solid #000000;
            width: 250px;
            padding: 10px;
            margin: auto;
        }

        .login input {
            padding: 5px;
            margin: 5px;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
<form action="data.php" method="post">
    <div class="login">
        <h2>Login (post)</h2>
        <label>
            Username:
            <input type="text" name="username" size="30" placeholder="username">
        </label>
        <label>
            Password:
            <input type="password" name="password" size="30" placeholder="password">
        </label>
        <input type="submit" value="Sgin in">
    </div>
</form>
<br>
<form method="get">
    <div class="login">
        <h2>Login (get)</h2>
        <label>
            Username:
            <input type="text" name="username" size="30" placeholder="username">
        </label>
        <label>
            Password:
            <input type="password" name="password" size="30" placeholder="password">
        </label>
        <input type="submit" value="Sgin in">
    </div>
</form>

</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $usernameget = $_GET["username"];
    $passwordget = $_GET['password'];
    echo "<h3> Hello <span style='color: red'>".$usernameget."</span> hi </h3>";
}
