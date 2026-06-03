<?php
    if(!empty($_POST['ten_mon']) && 
    !empty($_POST['gia_ban']) &&
    !empty($_POST['mo_ta']) &&
    !empty($_POST['anh_mh'])){

        $tenSP = $_POST['ten_mon'];
        $giaSP = $_POST['gia_ban'];
        $mota = $_POST['mo_ta'];
        $anh_mh = $_POST['anh_mh'];
            include('connect.php');
            $sql = "INSERT INTO `add_sinh_to`(`ten_mon`, `anh_mh`, `gia_ban`, `mo_ta`) VALUES ('$tenSP','$anh_mh','$giaSP','$mota')";
            mysqli_query($conn, $sql);
            header('location: trangchu.php');
    }
    else{
        echo "Vui lòng nhập đầy đủ thông tin!";
    }
