<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        b{
            color: red;
        }

        form{
            margin: 20px auto;
            /* width: 400px;
            height: 450px; */
            /* background-color: antiquewhite; */
            display: flex;
            justify-content: center;
            flex-direction: column;
            

        }
        .add{
            alig-item: center;
            padding: 10px 20px;
            color: white;
            background-color: green;

        }
    </style>
</head>
<body>
    <?php
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
    <!-- <?php
    include("connect.php");
        $id = $_GET['id'];
        $sql= "select * from `add_sinh_to` where ma_sinh_to = '$id'";
        $result = mysqli_query($conn, $sql);
        $student = mysqli_fetch_assoc($result);
    ?>  -->
     <form action="process-sinhTo.php" method="post">
        <label>Tên Sản Phẩm</label>
        <input type="text" name="ten_mon" required>
        <label> Ảnh Minh Họa</label>
        <input type="text" name="anh_mh" required>
        <label > Giá thành</label>
        <input type="number" name="gia_ban" required>
        <label > Mô tả</label>
        <textarea name="mo_ta"></textarea>
        <!-- <label >Trạng thái</label>
        <label>
         Hết   <input type="radio" name="trangThai" value="0" > 
        </label>
        <label>
          Còn  <input type="radio" name="trangThai" value="1" checked> 
        </label> -->
        
        <button type="submit" name="sp">submit</button>
     </form>
</body>
</html>