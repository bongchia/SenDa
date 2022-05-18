<?php
require_once('../../bootstrap.php');
// connect db
require('../config/connect.php');
require('./executeUser.php');
if (!isset($_COOKIE['user'])) {
    header('Location: ../pages/welcome.php');
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM senda where `id` = $id ";
    $result = $conn->query($sql)->fetch_assoc();
    echo '<div class="container">
        <div class="mt-4">
            <h3>Thay đổi</h3>
            <form action="update.php?id=' . $_GET['id'] . '" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tên cây</label>
                <input type="text" class="form-control" id="" name="ten" value="' . $result['ten'] . '">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Màu sắc</label>
                    <input type="text" class="form-control" name="mau_sac" id="" value="' . $result['mau_sac'] . '">
                </div>
                <div class="mb-3">
                    <img src="' . $result['avt'] . '" />
                    <input type="file" name="avt" value="' . $result['avt'] . '">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Đặc tính</label>
                    <textarea type="text" class="form-control" name="dac_tinh" id="" rows="3">' . $result['dac_tinh'] . '</textarea>
                </div>
                <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Kích thước</label>
                    <input type="text" class="form-control" name="kich_thuoc" id=""value="' . $result['kich_thuoc'] . '">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Hình dáng</label>
                    <input type="text" class="form-control" name="hinh_dang" id=""value="' . $result['hinh_dang'] . '">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Ý nghĩa</label>
                    <input type="text" class="form-control" name="y_nghia" id=""value="' . $result['y_nghia'] . '">
                </div>
                <button class="btn-primary btn">Lưu chỉnh sửa</button>
                <a href="stored.php" class="btn-danger btn">Quay về</a>
            </form>
        </div>
        
    </div>';
} else {
    $data = $_POST;
    $file = $_FILES['avt'];
    $fileUrl = "../../uploads/" . $file['name'];

    $sql = "INSERT INTO senda (avt,ten,mau_sac,kich_thuoc,hinh_dang,dac_tinh,y_nghia) 
    VALUES('" . $fileUrl . "','" . $data['ten'] . "','" . $data['mau_sac'] . "','" . $data['kich_thuoc'] . "',
    '" . $data['hinh_dang'] . "','" . $data['dac_tinh'] . "','" . $data['y_nghia'] . "')";

    if (empty($data['ten']) || empty($file['name']) || empty($data['dactinh'])) {

        setcookie("status", "error", time() + 1, '/');
        setcookie("message", "Cần phải nhập đầy đủ thông tin", time() + 1, '/');

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {
        mysqli_query($conn, $sql);

        setcookie("status", "success", time() + 1, '/');
        setcookie("message", "Tạo thành công", time() + 1, '/');

        header('Location: ../pages/home.php');
    }
}
