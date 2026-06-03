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

<?php
include('connect.php');  // Đưa thông tin từ file PHP vào

// Hiển thị thông tin thanh toán
$sql = "SELECT * FROM `orders`";  // Sửa lỗi thiếu dấu chấm phẩy
$result = mysqli_query($conn, $sql);

// Lặp qua kết quả và hiển thị thông tin
while ($row = mysqli_fetch_array($result)) { ?>
    <p>Email: <?php echo $row['email']; ?></p>
    <p>Tổng số tiền: <?php echo $row['total_amount']; ?> đ</p>
<?php } ?>
