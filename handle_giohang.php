<?php 
     include("connect.php");
     if(isset(($_POST['datHang']))){
        $tenSP =$_POST['tenSP'];
        $giaSP =$_POST['giaSP'];
        $img =$_POST['img'];
        $soLuong= 1; 
        $sql_check = "SELECT  `tenSP`, `soLuong`, `giaSP`, `anhSP` FROM `giohang` WHERE `tenSP`=tenSP";
        $result_check = mysqli_query($conn, $sql_check); 

        if (mysqli_num_rows($result_check) > 0) {  
            $sql_update = "UPDATE `giohang` SET soLuong = soLuong + 1 WHERE tenSP = '$tenSP'";  
            mysqli_query($conn, $sql_update);
     }
     else{
        $sql_insert = "INSERT INTO `giohang`( `tenSP`, `soLuong`, `giaSP`, `anhSP`) VALUES ('$tenSP','$soLuong','$giaSP','$img')";
        mysqli_query($conn, $sql_insert);
        
     }
}

?>