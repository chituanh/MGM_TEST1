<?php

// Nếu không phải là sự kiện đăng ký thì không xử lý
if (!isset($_POST['txtidMembers'])) {
    die('');
}

//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');

//Lấy dữ liệu từ file dangky.php
$idMembers   = addslashes($_POST['txtidMembers']);
$name   = addslashes($_POST['txtname']);
$taiKhoan      = addslashes($_POST['txttaiKhoan']);
$matKhau   = addslashes($_POST['txtmatKhau']);
$idClass   = addslashes($_POST['txtidClass']);

//Kiểm tra người dùng đã nhập liệu đầy đủ chưa
if (!$idMembers || !$name || !$taiKhoan || !$matKhau || !$idClass) {
    echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}

// Mã khóa mật khẩu
// $password = md5($password);
$connect  = mysqli_connect('localhost', 'root', 'chituanh121', 'de1_mgm');
if (!$connect) {
    die("Kết nối không thành công");
}

//Kiểm tra email đã có người dùng chưa
if (mysqli_num_rows(mysqli_query($connect, "SELECT taiKhoan FROM members WHERE taiKhoan='$taiKhoan'")) > 0) {
    echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}

//Lưu thông tin thành viên vào bảng
$addmember = mysqli_query($connect, "
        INSERT INTO members (
            idmembers,
            name,
            taiKhoan,
            matKhau,
            idClass
        )
        VALUE (
            '{$idmembers}',
            '{$name}',
            '{$taiKhoan}',
            '{$matKhau}',
            '{$idClass}'
        )
    ");

//Thông báo quá trình lưu
if ($addmember)
    echo "Quá trình đăng ký thành công. <a href='trangchu.php'>Về trang chủ</a>";
else
    echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.php'>Thử lại</a>";
