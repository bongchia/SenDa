<?php
require '../curd/executeUser.php';
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        setcookie("status", "error", time() + 1, '/');
        setcookie("message", "username or password incorrect", time() + 1, '/');
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
    $result = checkUser($username, $password);

    if (!$result) {
        setcookie("status", "error", time() + 1, '/');
        setcookie("message", "username or password incorrect", time() + 1, '/');

        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    } else {
        setcookie("status", "success", time() + 1, '/');
        setcookie("message", "Login successfully!", time() + 1, '/');
        setcookie("user", $username, 0, '/');

        header("Location: home.php");
    }
}
