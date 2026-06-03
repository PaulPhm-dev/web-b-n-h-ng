<?php
   include("connect.php");
    if (isset($_GET['id'])) {
        $id = mysqli_real_escape_string($conn, $_GET['id']);
        $sql = "DELETE FROM `giohang` WHERE ma_nguoi_dung = $id";
        if (mysqli_query($conn, $sql)) {
            echo "Xóa thành công.";

            header("Location: giohang.php");
            exit;
        } else {
            echo "Lỗi khi xóa: " . mysqli_error($conn);
        }
    }
?>