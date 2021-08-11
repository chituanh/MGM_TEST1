<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <h1>ĐÂY LÀ TRANG CHỦ</h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">idSubjects</th>
                <th scope="col">Name</th>
                <th scope="col">Số lượng hiện tại</th>
                <th scope="col">Số Lượng tối đa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $connect  = mysqli_connect('localhost', 'root', 'chituanh121', 'de1_mgm');
            if (!$connect) {
                die("Kết nối không thành công");
            }

            $sql = "SELECT * FROM subjects";
            $result = mysqli_query($connect, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr   >
                    <th scope="row">' . $row["idSubjects"] . '</th>
                    <td>' . $row["nameSubject"] . ' </td>
                    <td> ' .  $row["soLuong"] . ' </td>
                    <td> ' .  $row['soLuongMax'] . ' </td>
                </tr>';
                }
            } else {
                // echo "0 results";
            }

            mysqli_close($connect);
            ?>
        </tbody>
    </table>

</body>

</html>