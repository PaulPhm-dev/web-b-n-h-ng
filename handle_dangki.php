<?php
    if(!empty($_POST['userName']) && 
    !empty($_POST['Email']) &&
    !empty($_POST['password']) &&
    !empty($_POST['re-enter_password'])){

        $hoTen = $_POST['userName'];
        $Email = $_POST['Email'];
        $matKhau = $_POST['password'];
        $nhapLaiMatKhau = $_POST['re-enter_password'];
        $role = 0 ;
        if($matKhau !== $nhapLaiMatKhau){
            echo "Vui lòng nhập lại mật khẩu";
        }
        else{
            include('connect.php');
            $sql = "INSERT INTO `thongtindangnhap`(`userName`, `Email`, `password`,`role` ) VALUES ('$hoTen','$Email','$matKhau' ,'$role')";
            mysqli_query($conn, $sql);
            header('location: loginform.php');
        }
    }
    else{
        echo "Vui lòng nhập đầy đủ thông tin!";
    }
?>