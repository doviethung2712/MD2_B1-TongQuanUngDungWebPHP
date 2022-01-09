<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usernamepost = $_POST["username"];
    $passwordpost = $_POST['password'];
    if ($usernamepost === "admin" && $passwordpost === "admin") {
        echo "<h3>Welcome <span style='color: cornflowerblue'>" . $usernamepost . "</span> to website</h3>";
    } else {
        echo "<h3><span style='color: dodgerblue'>Login Error</span></h3>";
    }
}
