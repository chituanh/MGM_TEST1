<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Trang đăng nhập</title>
</head>

<body>

    <h1>Trang đăng Nhập</h1>
    <form action="dangnhapPHP.php" method="POST">
        <table cellpadding="0" cellspacing="0" border="1">
            <tr>
                <td>
                    taiKhoan :
                </td>
                <td>
                    <input type="text" name="txttaiKhoan" size="50" />
                </td>
            </tr>
            <tr>
                <td>
                    mat khau :
                </td>
                <td>
                    <input type="password" name="txtmatKhau" size="50" />
                </td>
            </tr>
        </table>
        <input type="submit" value="Đăng nhập" />
        <input type="reset" value="Nhập lại" />
    </form>
</body>

</html>