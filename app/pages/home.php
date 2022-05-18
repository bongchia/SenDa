<?php
require("../../bootstrap.php");
require('../curd/executeUser.php');
if (isset($_COOKIE['user'])) {
    $user = findUser($_COOKIE['user']);
    $avt = $user['avt'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SenDa</title>
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
                            <a class="nav-link dropdown-toggle" style="width: 50px;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                <img class="rounded-circle w-100 mr-2" src="<?php echo $avt ? $avt : "../../assets/avt/default.png" ?>" alt="avt"><?php echo $_COOKIE['user'] ?>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="../curd/create.php">Thêm</a>
                                <a class="dropdown-item" href="../curd/stored.php">Album</a>
                                <a class="dropdown-item" href="../curd/profile.php">Thông tin</a>
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
        <div class="mt-4">
            <div class="row">
                <?php
                require('../curd/search.php');
                if (isset($_GET['ten'])) {
                    $data = $_GET['ten'];

                    showSearch($data);
                } else {

                    showAll();
                }
                ?>

            </div>
        </div>
    </div>

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