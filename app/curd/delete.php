<?php
require('../config/connect.php');
// Get stored/id?
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // handle remove with id
    $select_remove = "DELETE FROM senda Where `id` = $id";
    $conn->query($select_remove);

    setcookie("status", "success", time() + 1, '/');
    setcookie("message", "Xóa thành công", time() + 1, '/');

    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
