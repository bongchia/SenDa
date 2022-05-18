<?php
require("../../bootstrap.php");
if (!isset($_COOKIE['user'])) {
    header('Location: ../pages/welcome.php');
}
require('../curd/executeUser.php');
$user = findUser($_COOKIE['user']);
$avt = $user['avt'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bộ sưu tập của tôi</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>

<body>
    <div class="container-fuild">
        <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
            <a class="navbar-brand" href="../pages/home.php">SenDa</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mr-5">
                    <li class="nav-item dropdown mr-5">
                        <a class="nav-link dropdown-toggle" style="width: 50px;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                            <img class="rounded-circle w-100 mr-2" src="<?php echo $avt ? $avt : "../../assets/avt/default.png" ?>" alt="avt"><?php echo $_COOKIE['user'] ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="create.php">Add</a>
                            <a class="dropdown-item" href="stored.php">Stored</a>
                            <a class="dropdown-item" href="../curd/profile.php">Edit Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../../logout.php">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="mt-4">
            <h3>Album Của tôi</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tên cây</th>
                        <th scope="col">Kích thước</th>
                        <th scope="col">Đặc tính</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    require('../config/connect.php');
                    $sql = "SELECT * FROM senda";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '
                    <tr>
                        <th scope="row">' . $row['id'] . '</th>
                        <td>' . $row['ten'] . '</td>
                        <td>' . $row['kich_thuoc'] . '</td>
                        <td>' . $row['dac_tinh'] . '</td>
                        <td colspan="2"> <a href="delete.php?id=' . $row['id'] . '" class="btn btn-danger btn-delete">
                        Xóa</a>
                        <a href="process.php?id=' . $row['id'] . '" class="btn btn-primary">Sửa</a>
                        </td>
                    </tr>
                    ';
                        }
                    } else {
                        echo '
                <p>Album trống <a href="create.php">Thêm mới</a></p>
                ';
                    }

                    ?>
                    <!--  -->
                </tbody>
            </table>
        </div>
    </div>

    <script>
        var curentUrl;
        const btnDelete = document.querySelectorAll('.btn-delete');
        btnDelete.forEach(item => item.addEventListener('click', function(e) {
            curentUrl = e.target.href;
            e.target.href = "#";
            Swal.fire({
                title: 'Bạn chắc chắn?',
                text: "Việc này sẽ không thể khôi phục!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Hủy',
                confirmButtonText: 'Vâng, Xóa nó!'
            }).then((result) => {
                if (result.isConfirmed) {
                    e.target.href = curentUrl;
                    window.location.href = curentUrl;
                }
            })
        }))

        <?php
        if (isset($_COOKIE['status'])) { ?>

            Swal.fire({
                position: 'top-end',
                icon: '<?php echo $_COOKIE['status'] ?>',
                title: '<?php echo $_COOKIE['message'] ?>',
                showConfirmButton: false,
                timer: 1500
            })

        <?php }
        ?>
    </script>


</body>

</html>