<?php
    include("connect.php");
    if (isset($_POST['id']) && isset($_POST['soLuong']) && isset($_POST['action'])) {
        $id = $_POST['id'];
        $soLuong = $_POST['soLuong'];
        $action = $_POST['action']; 

        if($action== 'increase'){
            $sql_update = "UPDATE `giohang` SET soLuong = soLuong + 1 WHERE  id = '$id'";  
            mysqli_query($conn, $sql_update);
        }
        else if( $action == 'decrease') {
            $sql_check = "SELECT soLuong FROM `giohang` WHERE id = '$id'";
            $result = mysqli_query($conn, $sql_check);
            $row = mysqli_fetch_assoc($result);
            if($row['soLuong']>1){
                $sql_update = "UPDATE `giohang` SET soLuong = soLuong -1 WHERE  id = '$id'";  
                mysqli_query($conn, $sql_update);

            }
            else if($row['soLuong']==1){
                $sql_delete = "DELETE FROM `giohang` WHERE id = '$id'";  
                mysqli_query($conn, $sql_delete);

            }
        }
    }