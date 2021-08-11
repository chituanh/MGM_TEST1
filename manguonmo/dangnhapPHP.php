<?php

$connect  = mysqli_connect('localhost', 'root', 'chituanh121', 'de1_mgm');
if (!$connect) {
    die("Kết nối không thành công");
}
$taiKhoan  = addslashes($_POST['txttaiKhoan']);
$matKhau   = addslashes($_POST['txtmatKhau']);

if (!$taiKhoan || !$matKhau) {
    echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}

if (mysqli_num_rows(mysqli_query($connect, "SELECT * FROM members WHERE taiKhoan='$taiKhoan' AND matKhau = '$matKhau' ")) == 1) {
    echo "Quá trình đăng nhập thành công. <a href='trangchu.php'>Về trang chủ</a>";
} else
    echo "Có lỗi xảy ra trong quá trình đăng nhập. <a href='dangnhap.php'>Thử lại</a>";
