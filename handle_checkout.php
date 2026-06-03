<?php
include('connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Nhận tổng thanh toán và email từ biểu mẫu
    $total = $_POST['total'];
    $email = $_POST['email'];
    
    // Kiểm tra xem email có được nhập hay không
    if (!empty($email)) {
        // Lưu tổng thanh toán vào bảng `orders`
        $sql = "INSERT INTO orders (total_amount, created_at, email) VALUES ('$total', NOW(), '$email')";
        
        if (mysqli_query($conn, $sql)) {
            echo "Thanh toán thành công! Tổng số tiền: " . $total . " đ";
            
            // Dọn giỏ hàng
            $clear_cart_sql = "DELETE FROM giohang"; // câu lệnh dọn giỏ hàng
            if (mysqli_query($conn, $clear_cart_sql)) {
                echo "<br>Mua hết.";
            } else {
                echo "<br>Lỗi dọn giỏ hàng: " . mysqli_error($conn);
            }
        } else {
            echo "Lỗi khi lưu dữ liệu: " . mysqli_error($conn);
        }
    } else {
        echo "Vui lòng điền email để thực hiện thanh toán!";
    }
}

// mysqli_close($conn);
?>
