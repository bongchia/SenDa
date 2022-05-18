<?php
function showAll()
{
    require "../config/connect.php";
    $sql = "SELECT * FROM senda ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo '
                    <div class="col-lg-3 col-md-12 mb-2">
                        <div class="card card-' . $row['id'] . '">
                            <img src=" ' . $row['avt'] . '" class="img-fuild" style="height:20%" alt=" ' . $row['ten'] . '">
                            <div class="card-body">
                                <h5 class="card-title text-fix-title"> ' . $row['ten'] . ' </h5>
                                <p class="card-text text-fix">' . $row['dac_tinh'] . '</p>
                                <a href="detail.php?id=' . $row['id'] . '" class="btn btn-primary">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>  
                ';
        }
    } else {
        echo '<p>Album trống <a href="../curd/create.php">Thêm mới</a></p>';
    }
    // Xu li search
    require('../config/close.php');
}
function showSearch($data)
{
    require "../config/connect.php";
    $sql = "SELECT * FROM senda WHERE ten like '%$data%' ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo '
                    <div class="col-lg-3 col-md-12 mb-2">
                        <div class="card card-' . $row['id'] . '">
                            <img src=" ' . $row['avt'] . '" class="img-fuild" style="height:20%" alt=" ' . $row['ten'] . '">
                            <div class="card-body">
                                <h5 class="card-title text-fix-title"> ' . $row['ten'] . ' </h5>
                                <p class="card-text text-fix">' . $row['dac_tinh'] . '</p>
                                <a href="detail.php?id=' . $row['id'] . '" class="btn btn-primary">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>  
                ';
        }
        echo '<div class="row">
                    <div class="col-md-12 col-lg-12 text-center "><p class=""><a href="home.php">Quay về</a></p></div>
            </div>';
    } else {
        echo '<p>Không có kêt quả cần tìm <a href="home.php">Quay về</a></p>';
    }

    // Xu li search
    require('../config/close.php');
}
