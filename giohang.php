<?php
include('connect.php');
session_start();
if (!isset($_SESSION['userName'])) {
    header('location: Loginform.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="trangchu.css">
    <link rel="stylesheet" href="style2.css">
    <script src="dualeo.js"></script>
    <style>
        .cart-table {
            width: 92%;
            max-width: 1200px;
            margin: 16px auto 24px;
            border-collapse: collapse;
            text-align: center;
            border-radius: 5px;
            border: 0.5px solid grey;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            table-layout: fixed;
            overflow: hidden;
        }
        th, td {
            padding: 12px 10px;
            border: 0.5px solid #ddd;
            vertical-align: middle;
            word-wrap: break-word;
        }
        th {
            background-color: #f7f7f7;
            font-weight: 600;
        }
        .cart-table th:nth-child(1) { width: 6%; }
        .cart-table th:nth-child(2) { width: 22%; }
        .cart-table th:nth-child(3) { width: 20%; }
        .cart-table th:nth-child(4) { width: 12%; }
        .cart-table th:nth-child(5) { width: 10%; }
        .cart-table th:nth-child(6) { width: 12%; }
        .cart-table th:nth-child(7) { width: 14%; }
        .cart-table th:nth-child(8) { width: 12%; }
        .cart-actions {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
        }
        .cart-actions button {
            background-color: transparent;
            border: 1px solid #999;
            border-radius: 4px;
            width: 34px;
            height: 34px;
            cursor: pointer;
        }
        .cart-actions button:hover {
            background-color: #eee;
        }
        .cart-table img {
            width: 120px;
            max-width: 100%;
            height: auto;
            object-fit: cover;
        }
        .no-items {
            text-align: center;
            color: #666;
            font-size: 1rem;
            padding: 32px 0;
        }
        .page-title {
            text-align: center;
            margin: 24px 0 16px;
            color: #333;
        }
        .cart-summary {
            text-align: center;
            font-size: 1.1rem;
            margin-bottom: 20px;
        }
        .cart-actions-bar {
            display: flex;
            justify-content: center;
            gap: 16px;
            flex-wrap: wrap;
            margin-bottom: 24px;
        }
        .cart-actions-bar a,
        .cart-actions-bar button[type="submit"] {
            display: inline-block;
            padding: 10px 18px;
            border-radius: 6px;
            border: none;
            background-color: #80bb35;
            color: white;
            text-decoration: none;
            cursor: pointer;
        }
        .cart-actions-bar a {
            background-color: #333;
        }
        .cart-actions-bar a:hover,
        .cart-actions-bar button[type="submit"]:hover {
            opacity: 0.9;
        }
        .cart-form {
            text-align: center;
            margin-bottom: 40px;
        }
        .cart-form label,
        .cart-form input {
            display: block;
            margin: 10px auto;
        }
        .cart-form input[type="email"] {
            padding: 8px 10px;
            width: 280px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="header header__topbar">
            <div class="header header__topbar--hotline">
                <p>Hotline : <a href="#">0388952524</a></p>
                <p>Địa chỉ :<a href="#">79 Mễ Trì Thượng</a></p>
            </div>
            <form action="logout.php" method="POST" class="header header__topbar--log-">
                <img src="img/persion.png" alt="User">
                <button type="submit">Đăng xuất</button>
            </form>
        </div>
        <div class="header header__container">
            <img src="img/Group 2 (1).png" id="home" alt="Logo">
            <div class="header header__container--logo">
                <img src="img-Webinar/Green and White Circle Modern Organic Shop Logo (2).png" alt="Brand Logo">
            </div>
            <div class="header header__container--service">
                <div class="container__child">
                    <img src="img/Untitled.png" alt="Service">
                    <div>
                        <a>Miễn phí vận chuyển</a>
                        <p>Bán kính 5km</p>
                    </div>
                </div>
            </div>
            <div class="header header__container--service">
                <div class="container__child">
                    <img src="img/suport.png" alt="Support">
                    <div>
                        <a>Hỗ trợ khách hàng</a>
                        <p>Hotline :0388952524</p>
                    </div>
                </div>
            </div>
            <div class="header header__container--service">
                <div class="container__child">
                    <img src="img/Vector.png" alt="24/7">
                    <div>
                        <a>Hoạt động</a>
                        <p>24/7</p>
                    </div>
                </div>
            </div>
            <a id="shoping_cart" href="giohang.php">
                <img src="img/1170627.png" style="width: 25px;" alt="Cart">
                <p>Giỏ Hàng</p>
            </a>
        </div>
        <nav class="header header__menubar">
            <div class="header header__menubar--link">
                <a href="Trangchu.php">Trang chủ</a>
                <a href="sanpham.php">Sản phẩm</a>
                <a href="#">Giới Thiệu</a>
                <a href="ghichu.php">Ghi chú</a>
                <a href="#">Liên hệ</a>
                <a href="#">Chỉ đường</a>
            </div>
            <input type="search" placeholder="   Tìm kiếm sản phẩm">
        </nav>
    </div>

    <h1 class="page-title">Trang giỏ hàng</h1>
    <iframe name="hidden_giohang" style="display: none;"></iframe>
    <table class="cart-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Sản Phẩm</th>
                <th>Ảnh minh họa</th>
                <th>Giá thành</th>
                <th>Số lượng</th>
                <th>Điều chỉnh</th>
                <th>Tổng giá</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("handle_giohang.php");
            $sql = "SELECT `ma_nguoi_dung`, `tenSP`, `soLuong`, `giaSP`, `anhSP` FROM `giohang` WHERE 1";
            $result = mysqli_query($conn, $sql);
            $total = 0;
            if (mysqli_num_rows($result) === 0) {
                echo '<tr><td colspan="8" class="no-items">Giỏ hàng của bạn hiện chưa có sản phẩm.</td></tr>';
            } else {
                while ($row = mysqli_fetch_array($result)) {
                    $itemTotal = $row['giaSP'] * $row['soLuong'];
                    $total += $itemTotal;
            ?>
            <tr>
                <td><?php echo $row['ma_nguoi_dung']; ?></td>
                <td><?php echo $row['tenSP']; ?></td>
                <td><img src="<?php echo $row['anhSP']; ?>" alt="Product Image"></td>
                <td><?php echo $row['giaSP']; ?> đ</td>
                <td><?php echo $row['soLuong']; ?></td>
                <td>
                    <div class="cart-actions">
                        <form action="handle_reduce.php" method="POST" target="hidden_giohang">
                            <input type="hidden" name="id" value="<?php echo $row['ma_nguoi_dung']; ?>">
                            <input type="hidden" name="soLuong" value="<?php echo $row['soLuong']; ?>">
                            <button type="submit" name="action" value="increase">&#9650;</button>
                        </form>
                        <form action="handle_reduce.php" method="POST" target="hidden_giohang">
                            <input type="hidden" name="id" value="<?php echo $row['ma_nguoi_dung']; ?>">
                            <input type="hidden" name="soLuong" value="<?php echo $row['soLuong']; ?>">
                            <button type="submit" name="action" value="decrease">&#9660;</button>
                        </form>
                    </div>
                </td>
                <td><?php echo $itemTotal; ?> đ</td>
                <td>
                    <a class="delete" href="Delete.php?id=<?php echo $row['ma_nguoi_dung']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không?');">Xoá</a>
                </td>
            </tr>
            <?php }
            }
            ?>
        </tbody>
    </table>

    <div class="cart-summary">Tổng thanh toán: <?php echo $total; ?> đ</div>

    <div class="cart-actions-bar">
        <a href="trangchu.php#food">Thêm sản phẩm</a>
        <form class="cart-form" method="POST" action="handle_checkout.php">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <input type="hidden" name="total" value="<?php echo $total; ?>">
            <button type="submit">Thanh toán</button>
        </form>
    </div>
</body>
</html>