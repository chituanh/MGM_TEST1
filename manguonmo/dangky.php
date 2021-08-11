<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Trang đăng lý</title>
</head>

<body>
    <h1>Trang đăng ký thành viên</h1>
    <form action="xuly.php" method="POST">
        <table cellpadding="0" cellspacing="0" border="1">
            <tr>
                <td>
                    idMembers :
                </td>
                <td>
                    <input type="text" name="txtidMembers" size="50" />
                </td>
            </tr>
            <tr>
                <td>
                    name :
                </td>
                <td>
                    <input type="text" name="txtname" size="50" />
                </td>
            </tr>
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
            <tr>
                <td>
                    idClass :
                </td>
                <td>
                    <input type="text" name="txtidClass" size="50" />
                </td>
            </tr>
        </table>
        <input type="submit" value="Đăng ký" />
        <input type="reset" value="Nhập lại" />
    </form>
</body>

</html>