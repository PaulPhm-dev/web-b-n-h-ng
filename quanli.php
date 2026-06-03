<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        nav{
            background-color:rgb(142, 218, 192);
            padding: 10px;
        }
        #menu a {
         text-decoration: none;
         color: black;
         padding: 15px;
         display: inline-block;
         border: 1px solid transparent;
         border-radius: 4px;
         transition: background-color 0.3s, color 0.3s;
       }

    #menu a:hover {
    background-color: #f0f0f0;
    color: #007bff;
    }

    #menu a.active {
          background-color: #007bff;
          color: white;
          border-color: #0056b3;
}
    </style>
  
</head>
<body>
     <?php
        
        //   include('connect.php');      
              
        //        if(isset($_POST['userName']) && isset($_POST['password'])){
        //            session_start();
        //            $role = 1;
        //            $userName = $_POST['userName'];
        //            $passWord = $_POST['password'];
        //            $sql = "SELECT * FROM `thongtindangnhap` where `userName` = '$userName' and `passWord` = '$passWord' and `role` = '$role'";
        //            $result = mysqli_query($conn, $sql);
        //            if (mysqli_num_rows($result) > 0) {
        //                $_SESSION['userName'] = $userName;
        //                header('location:quanli.php');
        //            }    
        //            else{
        //                echo "<p class='warning'>Tên đăng nhập hoặc mật khẩu không chính xác</p>";
        //            }
        //        }  
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Kiểm tra xem người dùng đã đăng nhập chưa
        if (isset($_SESSION['username'])) {
            echo "Chào mừng, " . $_SESSION['username'];
        } else {
            echo "Bạn chưa đăng nhập.";
            echo "<script>
                setTimeout(function() {
                    window.location.href = 'loginquanli.php';
                }, 3000);
            </script>";
            exit();
        }
      
     ?>
    <h1 style="text-align: center;"> Trang chủ</h1>
    <nav id="menu">
        <a href="quanli.php?page=add_nuoc"> Thêm nước giải khát</a>
        <a href="quanli.php?page=add_sp"> Thêm hoa quả</a>
        <a href="quanli.php?page=add_st"> Thêm sinh tố</a>
        <a href="info.php"> Thông tin khách hàng</a>
    </nav>
    <?php
    include("connect.php");
        if(isset(($_GET['page']))){
            switch($_GET['page']){
                case "add_nuoc":
                    include("add_nuoc.php");
                    break;
                case "add_sp":
                    include("add_sp.php");
                    break;
                case "add_st":
                    include('add_st.php');
                    break;
                case "delete":
                    include("delete.php");
                    break;
            }
        }
    ?>
</body>
<script>
   document.addEventListener('DOMContentLoaded', () => {
    // Lấy tất cả các thẻ <a> trong <nav>
    const navLinks = document.querySelectorAll('#menu a');

    // Lấy URL hiện tại (bao gồm pathname và search query)
    const currentURL = window.location.pathname + window.location.search;

    // In ra console để kiểm tra giá trị của currentURL
    console.log('Current URL:', currentURL);

    // Lặp qua từng thẻ <a>
    navLinks.forEach(link => {
        // So sánh href của thẻ <a> với URL hiện tại
        const linkURL = link.getAttribute('href');
        console.log('Comparing:', linkURL, currentURL);

        if (currentURL.includes(linkURL)) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
});

    </script>
</html>