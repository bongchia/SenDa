<?php
if (isset($_COOKIE['user'])) {
    header("Location: home.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
    <div class="inner">
        <div class="container">
            <div class="row pt-5">
                <div class="col-lg-6 col-md-6 mx-auto">
                    <h1 class="inner__title text-center">
                        Hãy tạo ra một bộ sưu tập về sen đá của riêng mình
                    </h1>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6 col-md-6 mx-auto mt-5 login">
                    <h2 class="text-center text-register mb-5">LOGIN</h2>
                    <form action="login.php" method="post" class="form__register">
                        <div class="form__group">
                            <label for="username" class="lable__group">Username</label>
                            <input type="text" class="input__group" name="username" id="username" placeholder="enter username">
                        </div>
                        <div class="form__group">
                            <label for="password" class="lable__group">Password</label>
                            <input type="password" class="input__group" name="password" id="password" placeholder="enter password">
                        </div>

                        <button class="btn-block btn__auth">Login</button>
                    </form>
                    <p class="text-center mt-3"><a href="home.php" class="btn btn-info btn-control-register">Xem với tư cách người dùng</a></p>
                </div>
            </div>
        </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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