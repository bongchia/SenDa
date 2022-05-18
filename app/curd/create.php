<?php
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
    <title>Create Item</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> -->
    <?php require "../../bootstrap.php" ?>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/icon/fontawesome-free-6.0.0-web/css/all.min.css">
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
                            <a class="dropdown-item" href="create.php">Thêm</a>
                            <a class="dropdown-item" href="stored.php">Album</a>
                            <a class="dropdown-item" href="../curd/profile.php">Thông tin</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../../logout.php">Đăng xuất</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="mt-4">
            <h3>Thêm Cây</h3>
            <form action="process.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tên cây</label>
                    <input type="text" class="form-control" id="" name="ten">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Màu sắc</label>
                    <input type="text" class="form-control" name="mau_sac" id="">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Hình ảnh</label>
                    <input type="file" name="avt" id="">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Đặc tính</label>
                    <textarea type="text" class="form-control" name="dac_tinh" id="" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Kích thước</label>
                    <input type="text" class="form-control" name="kich_thuoc" id="">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Hình dáng</label>
                    <input type="text" class="form-control" name="hinh_dang" id="">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Ý nghĩa</label>
                    <input type="text" class="form-control" name="y_nghia" id="">
                </div>
                <button class="btn-primary btn">Thêm mới</button>
                <a href="../pages/home.php" class="btn-danger btn">Quay về</a>
            </form>
        </div>

    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script> -->
    <script>
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