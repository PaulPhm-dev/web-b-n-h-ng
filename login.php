<?php
   include('connect.php');      
       
        if(isset($_POST['userName']) && isset($_POST['password'])){
            session_start();
            $userName = $_POST['userName'];
            $passWord = $_POST['password'];
            $sql = "SELECT * FROM `thongtindangnhap` where `userName` = '$userName' and `passWord` = '$passWord'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                $_SESSION['userName'] = $userName;
                header('location:Trangchu.php');
            }    
            else{
                echo "<p class='warning'>Tên đăng nhập hoặc mật khẩu không chính xác</p>";
            }
        }  
?>