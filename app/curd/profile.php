<?php
require "../../bootstrap.php";
if (!isset($_COOKIE['user'])) {
    header('Location: welcome.php');
}
require('../curd/executeUser.php');
$user = findUser($_COOKIE['user']);
$avt = $user['avt'];
$id_user = $user['id'];


if (isset($_POST['username']) || isset($_FILES['avatar'])) {
    $username = $_POST['username'] ? $_POST['username'] : $_COOKIE['user'];
    setcookie("user", $username, 0, '/');
    $file = $_FILES['avatar'];
    $fileUrl = $file['name'] ? "../../uploads/" . $file['name'] : $avt;
    EditUser($username, $fileUrl, $id_user);
    header("Refresh:0");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>

<body>
    <div class="main">
        <div class="row">
            <div class="col">
                <section class="profile">
                    <div class="profile__current">
                        <div class="profile__frame">
                            <img src="<?php echo $avt ? $avt : "../../assets/avt/default.png" ?>" alt="" class="profile__img">
                        </div>
                        <span class="profile__name">
                            <?php echo $_COOKIE['user'] ?>
                        </span>
                    </div>
                    <div class="profile__setting">
                        <h3 class="profile__title">
                            Profile Settings
                        </h3>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="profile__group">
                                <label for="username" class="profile__lable">Username</label>
                                <input type="text" class="profile__input" name="username" value="<?php echo $_COOKIE['user'] ?>" required>
                            </div>
                            <div class="profile__group">
                                <label for="username" class="profile__lable">Avatar</label>
                                <input type="file" class="profile__input" name="avatar">
                            </div>
                            <div class="profile__controls">
                                <button type="submit" class="btn btn-update">Cập nhật</button>
                                <a href="../pages/home.php" class="btn btn-cancel">Quay về</a>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>

</html>