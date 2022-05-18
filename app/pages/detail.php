<!DOCTYPE html>
<html lang="en">
<?php
if (isset($_COOKIE['user'])) {
    require('../curd/executeUser.php');
    $user = findUser($_COOKIE['user']);
    $avt = $user['avt'];
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết Cây</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/icon/fontawesome-free-6.0.0-web/css/all.min.css">
</head>

<body>
    <div class="container-fuild">
        <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
            <a class="navbar-brand" href="home.php">SenDa</a>
            <form class="form-inline my-2 my-lg-0 ml-16 w-75" action="home.php?ten" method="get">
                <input class="form-control mr-sm-2 mw-custom" type="search" placeholder="Search" aria-label="Search" name="ten" id="search">
                <button class="icon-search btn btn-outline-success my-2 my-sm-0" type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-3">
                    <?php if (isset($_COOKIE['user'])) { ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" style="width: 50px;" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                <img class="rounded-circle w-100" src="<?php echo $avt ? $avt : "../../assets/avt/default.png" ?>" alt="avt"><?php echo $_COOKIE['user'] ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="../curd/create.php">Thêm</a>
                                <a class="dropdown-item" href="../curd/stored.php">Album</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../../logout.php">Đăng xuất</a>
                            </div>
                        </li>
                    <?php } else  echo '<a class="btn btn-info" href="welcome.php">Đăng nhập</a>' ?>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-12 col-md-6">
                <a href="home.php"><i class="fas fa-angle-double-left"></i>Back to home</a>
            </div>
        </div>
        <h2 class="text-center mt-4">Thông tin chi tiết</h2>
        <div class="mt-4">
            <div class="row">
                <div class="col-lg-10 col-md-6 mx-auto">
                    <?php
                    if (isset($_GET['id'])) {
                        require('../config/connect.php');
                        $id = $_GET['id'];
                        $sql = "SELECT * FROM senda WHERE id = $id";
                        $result = $conn->query($sql);
                        if ($row = $result->fetch_assoc()) {
                            echo '
            <div class="card">
                    <img src="' . $row['avt'] . '" class="img-fuild" alt="' . $row['ten'] . '">
                    <div class="card-body">
                        <h5 class="card-title">' . $row['ten'] . '</h5>
                        <p class="card-text">Màu sắc : ' . $row['mau_sac'] . '</p>
                        <p class="card-text">Kích thước : ' . $row['kich_thuoc'] . '</p>
                        <p class="card-text">Hình dáng : ' . $row['hinh_dang'] . '</p>
                    </div>
                </div>
                <div class="desc mt-4">
                    <h4 class="text-title text-success">Mô tả</h4>
                    <div class="dropdown-divider"></div>
                    <div class="desc-dt mt-4">
                        <h5 class="text-title">Đặc tính</h5>
                        <p class="fs-5">' . $row['dac_tinh'] . '</p>
                    </div>
                    <div class="desc-dt mt-4">
                        <h5 class="text-title">Ý nghĩa</h5>
                        <p class="fs-5">' . $row['y_nghia'] . '</p>
                    </div>
                </div>
            ';
                        }
                    }
                    require('../config/close.php');
                    ?>


                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>

</html>