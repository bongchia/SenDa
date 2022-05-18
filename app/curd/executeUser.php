<?php
function findUser($username)
{
    require "../config/connect.php";
    $sql = "SELECT * FROM `user` WHERE `username` = '$username'";
    $result = $conn->query($sql);
    $data;
    if ($result) {
        $data = $result->fetch_assoc();
    }
    mysqli_close($conn);
    return $data;
}
function checkUser($username, $password)
{
    require "../config/connect.php";
    $sql = "SELECT * FROM `user` WHERE `username` = '$username' and `password` = '$password'";
    $result = $conn->query($sql);

    return $result;
}
function EditUser($username, $avt, $id)
{
    require "../config/connect.php";

    $sql = "UPDATE `user` SET `username`='$username',`avt`='$avt' WHERE `id` = '$id'";
    $result = $conn->query($sql);

    return $result;
}
