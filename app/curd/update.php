<?php
// connect db
require '../config/connect.php';

$param = $_GET;
$data = $_POST;
$file = $_FILES['avt'];
$fileUrl = "../../uploads/" . $file['name'];


if ($file['name']) {

    $sql = " UPDATE senda SET avt = '" . $fileUrl . "',ten = '" . $data['ten'] . "',mau_sac = '" . $data['mau_sac'] . "',kich_thuoc = '" . $data['kich_thuoc'] . "',
    hinh_dang = '" . $data['hinh_dang'] . "',dac_tinh = '" . $data['dac_tinh'] . "',
     y_nghia = '" . $data['y_nghia'] . "' where id = '" . $param['id'] . "' ";
} else {
    $sql = " UPDATE senda SET ten = '" . $data['ten'] . "',mau_sac = '" . $data['mau_sac'] . "',kich_thuoc = '" . $data['kich_thuoc'] . "',
            hinh_dang = '" . $data['hinh_dang'] . "',dac_tinh = '" . $data['dac_tinh'] . "',
            y_nghia = '" . $data['y_nghia'] . "' where id = '" . $param['id'] . "' ";
}

mysqli_query($conn, $sql);

setcookie("status", "success", time() + 1, '/');
setcookie("message", "Cập nhật thành công", time() + 1, '/');

header('Location: ../pages/home.php');
