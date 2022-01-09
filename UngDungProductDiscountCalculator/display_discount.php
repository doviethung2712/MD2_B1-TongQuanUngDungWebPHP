<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $sanPham = $_POST["sanPham"];
    $gia = $_POST["giaNiemYet"];
    $phanTram = $_POST["phanTram"];

    $soTienCK = $gia * $phanTram * 0.01;


    $soTienConLai = $gia - $soTienCK;

    echo $sanPham . " - " . $gia . "VND" . " - " . $phanTram . "%" . '<br/>';
    echo "Lượng Chiết Khấu:" . " " . $soTienCK . "VND" . '<br/>';
    echo "Giá Sau Khi Chiết Khấu:" ." ". $soTienConLai . "VND";
}