<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="trangchu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <script src="dualeo.js"></script>
    <title>fruitSHOP</title>
    <style>
        .dry-food__child{
            transition: all 0.9s ease;
        }
        .dry-food__child button {
    border-radius: 5px;
    background-color: #61ff5c;
    padding: 5px 10px;
    border: 0.5px solid grey;
    }
    .dry-food__child:hover{
    box-shadow:   -8px 10px 16px 5px rgba(0, 0, 0, 0.5);
    height: 245px;
    transition: transform 0.9s ease;
    }
    .dry-food__child:hover button{
        margin-top: 10px;
        display: block;
    }
    .dry-food__child img{
        min-width: 230px;
        max-width: 230px;
        margin-bottom: 10px;
    }
    a{
        text-decoration: none;
        color: black;
    }
    </style>
</head>
<body>
<?php
        include('connect.php');
        session_start();
        if (!isset($_SESSION['userName']) ) { 
            header("location: Loginform.php");
            exit();
        }

    ?>
    <div class="header">
         <div class="header header__topbar">
            <div class="header header__topbar--hotline">
                <p>Hotline : <a href="#">00862026898</a></p>
                <p>Địa chỉ :<a href="#"> Mễ Trì Thượng</a> </p>
            </div>
            <!-- <div class="header header__topbar--log-">
              <img src="img/persion.png">
              <button onclick="goToLogin()">Đăng Nhập </button>
              <button onclick="goToRegister()"> Đăng Ký</button>
            </div> -->
            <form action="logout.php" method="POST" class="header header__topbar--log-">
                  <img src="img/persion.png">
                  <button type="submit">Đăng xuất</button>
            </form>
         </div>
         <div class="header header__container">
            <img src="img/Group 2 (1).png" id="home">
            <div class="header header__container--logo">
                <img src="img-Webinar/Green and White Circle Modern Organic Shop Logo (2).png">
            </div>
            <div class="header header__container--service">
                <div  class="container__child">
                    <img src="img/Untitled.png">
                    <div>
                        <a>Miễn phí vận chuyển</a>
                        <p>Bán kính 5km</p>
                    </div>
                </div>
            </div>
            <div  class="header header__container--service">
                <div  class="container__child">
                    <img src="img/suport.png">
                    <div>
                        <a>Hỗ trợ khách hàng</a>
                        <p>Hotline :00862026898</p>
                    </div>
                </div>
            </div>
            <div  class="header header__container--service"> 
                <div  class="container__child">
                    <img src="img/Vector.png">
                    <div>
                        <a>Hoạt động</a>
                        <p>24/7</p>
                    </div>
                </div>
            </div>  
            <a id="shoping_cart" href="giohang.php">
                <img src="img/1170627.png" style="width: 25px;">
                <p>Giỏ Hàng</p>
            </a>           
       </div>
         <nav  class="header header__menubar" >
            <div class="header header__menubar--link" >
                <a href="#"> Trang chủ</a>
                <a href="sanpham.php"> Sản phẩm</a>
                <a href="#"> Giới Thiệu</a>
                <a href="ghichu.php"> Ghi chú</a>
                <a href="#"> Liên hệ</a>
                <a href="#"> Chỉ đường</a>
            </div>
            <input type="seach" placeholder="   Tìm kiếm sản phẩm" >
         </nav>
    </div>
    <hr>
    <div class="menu">
        <div class="menu menu__category">
            <h2>
                <span>Danh mục</span>
            </h2>
            <ul class="menu menu__list">
                <li><a href="#">Gà rán</a></li>
                <li><a href="#">Combo</a></li>
                <li><a href="#">Salad</a></li>
                <li><a href="#">Đồ xào</a></li>
                <li><a href="#">Đồ tráng miệng</a></li>
                <li><a href="#">Nước uống</a></li>
                <li><a href="#">Đồ ăn nhanh</a></li>
                <li><a href="#">Đồ ăn nhanh</a></li>
                <li><a href="#">Đồ ăn nhanh</a></li>
            </ul>
        </div>
        <div class="menu menu__banner">
            <img src="img/Link.png">
        </div>
    </div>
    <div class="menu_hidden" >
             <form action="logout.php" method="POST"class="login_hidden">
                  <img src="img/persion.png">
                  <button type="submit">Đăng xuất</button>
            </form>
        <!-- <div class="login_hidden">
            <img src="img/persion.png">
            <button onclick="goToLogin()">Đăng Nhập </button>
            <button> Đăng Ký</button>
        </div>     -->
        <strong id="tab_hidden">X</strong>
            <input type="seach" placeholder=" Tìm kiếm sản phẩm" class="seach"> 
            <hr>
            <div class="list_menu" >
                <a href="#"> Trang chủ</a>
                <a href="#"> Sản phẩm</a>
                <a href="#"> Giới Thiệu</a>
                <a href="#"> Ghi chú</a>
                <a href="#"> Liên hệ</a>
                <a href="#"> Chỉ đường</a>
            </div>
    </div>
    <div class="products">
        <img src="img/banner1.jpg.png">
        <img src="img/link1.png">
        <img src="img/link1.png">
    </div>
    <div class="content" id="food">
        <h3> Thục phẩm tươi</h3>
        <nav>
            <a href="#">Đồ ăn nhanh</a>
            <a href="#">Đồ xào</a>
            <a href="#">Nước uống</a>
            <a href="#">Soda</a>
            <hr>
        </nav>
    </div>
    <div class="hidden-block" id="hiddenBlock">
        <ul>
            <li><img src="img/icon-rau.webp"><br></li>
            <hr>
            <li><img src="img/icon-cachua.webp"><br></li>
            <hr>
            <li>  <img src="img/icon-catim.webp"><br></li>
            <hr>
            <li><img src="img/icon-rau.webp"></li>
        </ul>
    </div>
    <iframe name="hidden_iframe" style="display: none;"></iframe>
    <div class="dry-food" >
          <form action="handle_giohang.php" method="post" target="hidden_iframe">
          <div class="dry-food dry-food__child">
            <img src="img/vai.png">
            <input type="hidden" name="img" value="img/vai.png">
            <a href="#">Vải thiều</a>
            <input type="hidden" name="tenSP" value="Vải thiều">
            <span class="money">80.000₫</span>
            <input type="hidden" name="giaSP" value="80000">
            <button type="submit" name="datHang" value="datHang" hidden>Add SP</button>
        </div>
          </form>
        <form action="handle_giohang.php" method="post" target="hidden_iframe">
        <div class="dry-food dry-food__child">
            <img src="img/Background.png">
            <input type="hidden" name="img" value="img/Background.png">
            <a href="#">Hồng đỏ</a>
            <input type="hidden" name="tenSP" value="Hồng đỏ">
            <span class="money">150.000₫</span>
            <input type="hidden" name="giaSP" value="150000">
            <button type="submit" name="datHang" value="datHang" hidden >Add SP</button>
        </div>
        </form>
         <form action="handle_giohang.php" method="post" target="hidden_iframe">
         <div class="dry-food dry-food__child">
            <img src="img/duachuot.png">
            <input type="hidden" name="img" value="img/duachuot.png">
            <a href="#">Dưa chuột</a>
            <input type="hidden" name="tenSP" value="Dưa chuột">
            <span class="money">65.000₫</span>
            <input type="hidden" name="giaSP" value="65000">
            <button type="submit" name="datHang" value="datHang" hidden>Add SP</button>
        </div>
         </form>
        <form action="handle_giohang.php" method="post" target="hidden_iframe">
        <div class="dry-food dry-food__child">
            <img src="img/cachua.png">
            <input type="hidden" name="img" value="img/cachua.png">
            <a href="#">Cà chua</a>
            <input type="hidden" name="tenSP" value="Dưa chuột">
            <span class="money">30.000₫</span>
            <input type="hidden" name="giaSP" value="30000">
            <button type="submit" name="datHang" value="datHang" hidden>Add SP</button>
        </div>
        </form>
        
          <form action="handle_giohang.php" method="post" target="hidden_iframe">
          <div class="dry-food dry-food__child">
            <img src="img/nho.png">
            <input type="hidden" name="img" value="img/nho.png">
            <a href="#">Nho </a>
            <input type="hidden" name="tenSP" value="Nho">
            <span class="money">30.000₫</span>
            <input type="hidden" name="giaSP" value="30000">
            <button type="submit" name="datHang" value="datHang" hidden>Add SP</button>
        </div>
          </form>
        <form action="handle_giohang.php" method="post" target="hidden_iframe">
        <div class="dry-food dry-food__child">
            <img src="img/dautay.png">
            <input type="hidden" name="img" value="img/dautay.png">
            <a href="#">Dâu tây </a>
            <input type="hidden" name="tenSP" value="Dâu tây">
            <span class="money">250.000₫</span>
            <input type="hidden" name="giaSP" value="250000">
            <button type="submit" name="datHang" value="datHang" hidden>Add SP</button>
        </div>
        </form>
       <form action="handle_giohang.php" method="post" target="hidden_iframe">
       <div class="dry-food dry-food__child">
            <img src="img/kiwwi.png">
            <input type="hidden" name="img" value="img/kiwwi.png">
            <a href="#"> kiwi </a>
            <input type="hidden" name="tenSP" value="Kiwi">
            <span class="money">200.000₫</span>
            <input type="hidden" name="giaSP" value="200000">
            <button type="submit" name="datHang" value="datHang" hidden>Add SP</button>
        </div>
       </form>
       <form action="handle_giohang.php" method="post" target="hidden_iframe">
       <div class="dry-food dry-food__child">
            <img src="img/chanhleo.png">
            <input type="hidden" name="img" value="img/chanhleo.png">
            <a href="#">Chanh leo</a>
            <input type="hidden" name="tenSP" value="Chanh leo">
            <span class="money">400.000₫</span>
            <input type="hidden" name="giaSP" value="400000">
            <button type="submit" name="datHang" value="datHang" hidden>Add SP</button>
        </div>
       </form>
       <?php
        include("connect.php");
            $sql = "SELECT * FROM `addthucpham` WHERE 1";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){   
        ?>
       <form action="handle_giohang.php" method="post" target="hidden_iframe">
      
       <div class="dry-food dry-food__child"> 
            <img src="<?php echo $row['anh_mh'];?>">
            <input type="hidden" name="img" value="<?php echo $row['anh_mh'];?>">
            <a href="#"><?php echo $row['ten_mon'];?> </a>
            <input type="hidden" name="tenSP" value="<?php echo $row['ten_mon'];?>">
            <span class="money"><?php echo $row['gia_ban'];?> đ</span>
            <input type="hidden" name="giaSP" value="<?php echo $row['gia_ban'];?>">
            <button type="submit" name="datHang" value="datHang" hidden>Add SP</button>
          
        </div> 
       </form>
       <?php } ?>
    </div>
    <div class="banner">
        <img src="img/banner_coltab2_1.png.png">
    </div>
    <div class="content">
        <h3> Nước giải khát</h3>
        <nav>
            <a href="#">Rau tươi</a>
            <a href="#">Hoa quả tươi</a>
            <a href="#">Hoa quả khô</a>
            <a href="#">Rau sống</a>
            <hr>
        </nav>
    </div>
    <div class="dry-food">
          <form action="handle_giohang.php" method="post" target="hidden_iframe">
          <div class="dry-food dry-food__child">
            <img src="img/nuockhoqua.jpg">
            <input type="hidden" name="img" value="img/nuockhoqua.jpg">
            <a href="#">Sinh tố Khổ qua</a>
            <input type="hidden" name="tenSP" value="Sinh tố khổ qua">
            <span class="money">80.000₫</span>
            <input type="hidden" name="giaSP" value="80000">
            <button type="submit" name="datHang" value="datHang" hidden>Add SP</button>
        </div>
          </form>
        <form action="handle_giohang.php" method="post" target="hidden_iframe">
        <div class="dry-food dry-food__child">
            <img src="img/nuocepcarot.jfif">
            <input type="hidden" name="img" value="img/nuocepcarot.jfif">
            <a href="#">Nước ép Cà Rốt</a>
            <input type="hidden" name="tenSP" value="Nước ép Cà Rốt">
            <span class="money">45.000₫</span>
            <input type="hidden" name="giaSP" value="45000">
            <button type="submit" name="datHang" value="datHang" hidden >Add SP</button>
        </div>
        </form>
         <form action="handle_giohang.php" method="post" target="hidden_iframe">
         <div class="dry-food dry-food__child">
            <img src="img/sinhtoduahau.jpg">
            <input type="hidden" name="img" value="img/sinhtoduahau.jpg">
            <a href="#">sinh tố dưa hấu</a>
            <input type="hidden" name="tenSP" value="sinh tố dưa hấu">
            <span class="money">65.000₫</span>
            <input type="hidden" name="giaSP" value="65000">
            <button type="submit" name="datHang" value="datHang" hidden>Add SP</button>
        </div>
         </form>
        <form action="handle_giohang.php" method="post" target="hidden_iframe">
        <div class="dry-food dry-food__child">
            <img src="img/nuocepbuoi.jpg">
            <input type="hidden" name="img" value="img/nuocepbuoi.jpg">
            <a href="#">Nước ép bưởi</a>
            <input type="hidden" name="tenSP" value="Nước ép bưởi">
            <span class="money">45.000₫</span>
            <input type="hidden" name="giaSP" value="45000">
            <button type="submit" name="datHang" value="datHang" hidden>Add SP</button>
        </div>
        </form>
        
          <form action="handle_giohang.php" method="post" target="hidden_iframe">
          <div class="dry-food dry-food__child">
            <img src="img/nuocepdautay.jfif">
            <input type="hidden" name="img" value="img/nuocepdautay.jfif">
            <a href="#">Nước ép dâu tây </a>
            <input type="hidden" name="tenSP" value="Nước ép dâu tây">
            <span class="money">80.000₫</span>
            <input type="hidden" name="giaSP" value="80000">
            <button type="submit" name="datHang" value="datHang" hidden>Add SP</button>
        </div>
          </form>
        <form action="handle_giohang.php" method="post" target="hidden_iframe">
        <div class="dry-food dry-food__child">
            <img src="img/sinhtocachua.jpg">
            <input type="hidden" name="img" value="img/sinhtocachua.jpg">
            <a href="#">Sinh tố cà chua </a>
            <input type="hidden" name="tenSP" value="sinh tố KIwwi">
            <span class="money">45.000₫</span>
            <input type="hidden" name="giaSP" value="45000">
            <button type="submit" name="datHang" value="datHang" hidden>Add SP</button>
        </div>
        </form>
       <form action="handle_giohang.php" method="post" target="hidden_iframe">
       <div class="dry-food dry-food__child">
            <img src="img/sinhtobo.jpg">
            <input type="hidden" name="img" value="img/sinhtobo.jpg">
            <a href="#"> Sinh tố bơ </a>
            <input type="hidden" name="tenSP" value="Sinh tố bơ">
            <span class="money">45.000₫</span>
            <input type="hidden" name="giaSP" value="45000">
            <button type="submit" name="datHang" value="datHang" hidden>Add SP</button>
        </div>
       </form>
       <form action="handle_giohang.php" method="post" target="hidden_iframe">
       <div class="dry-food dry-food__child">
            <img src="img/sinhtochuoi.png">
            <input type="hidden" name="img" value="img/sinhtochuoi.png">
            <a href="#">dinh tố chuối</a>
            <input type="hidden" name="tenSP" value="sinh tố chuối">
            <span class="money">45.000₫</span>
            <input type="hidden" name="giaSP" value="45000">
            <button type="submit" name="datHang" value="datHang" hidden>Add SP</button>
        </div>
       </form>
       <?php
        include("connect.php");
            $sql = "SELECT * FROM `add_sinh_to` WHERE 1";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){   
        ?>
       <form action="handle_giohang.php" method="post" target="hidden_iframe">
      
       <div class="dry-food dry-food__child"> 
            <img src="<?php echo $row['anh_mh'];?>">
            <input type="hidden" name="img" value="<?php echo $row['anh_mh'];?>">
            <a href="#"><?php echo $row['ten_mon'];?> </a>
            <input type="hidden" name="tenSP" value="<?php echo $row['ten_mon'];?>">
            <span class="money"><?php echo $row['gia_ban'];?> đ</span>
            <input type="hidden" name="giaSP" value="<?php echo $row['gia_ban'];?>">
            <button type="submit" name="datHang" value="datHang" hidden>Add SP</button>
          
        </div> 
       </form>
       <?php } ?>
    </div>
    <div class="dry-food">
          <form action="handle_giohang.php" method="post" target="hidden_iframe">
          <div class="dry-food dry-food__child">
            <img src="img/nuoctao.jfif">
            <input type="hidden" name="img" value="img/nuoctao.jfif">
            <a href="#">Nước táo</a>
            <input type="hidden" name="tenSP" value="Nước táo">
            <span class="money">45.000₫</span>
            <input type="hidden" name="giaSP" value="45000">
            <button type="submit" name="datHang" value="datHang" hidden>Add SP</button>
        </div>
          </form>
        <form action="handle_giohang.php" method="post" target="hidden_iframe">
        <div class="dry-food dry-food__child">
            <img src="img/nuoccam.jfif">
            <input type="hidden" name="img" value="img/nuoccam.jfif">
            <a href="#">Nước cam ép</a>
            <input type="hidden" name="tenSP" value="Nước cam ép">
            <span class="money">45.000₫</span>
            <input type="hidden" name="giaSP" value="45000">
            <button type="submit" name="datHang" value="datHang" hidden >Add SP</button>
        </div>
        </form>
         <form action="handle_giohang.php" method="post" target="hidden_iframe">
         <div class="dry-food dry-food__child">
            <img src="img/thom.png">
            <input type="hidden" name="img" value="img/thom.png">
            <a href="#">Nước thơm</a>
            <input type="hidden" name="tenSP" value="Nước thom">
            <span class="money">45.000₫</span>
            <input type="hidden" name="giaSP" value="45000">
            <button type="submit" name="datHang" value="datHang" hidden>Add SP</button>
        </div>
         </form>
        <form action="handle_giohang.php" method="post" target="hidden_iframe">
        <div class="dry-food dry-food__child">
            <img src="img/dautay.jfif">
            <input type="hidden" name="img" value="img/dautay.jfif">
            <a href="#">Sinh tố dâu</a>
            <input type="hidden" name="tenSP" value="sinh tố dâu">
            <span class="money">45.000₫</span>
            <input type="hidden" name="giaSP" value="45000">
            <button type="submit" name="datHang" value="datHang" hidden>Add SP</button>
        </div>
        </form>
        
          <form action="handle_giohang.php" method="post" target="hidden_iframe">
          <div class="dry-food dry-food__child">
            <img src="img/nuoccam.png">
            <input type="hidden" name="img" value="img/nuoccam.png">
            <a href="#">Nước cam </a>
            <input type="hidden" name="tenSP" value="Nước cam">
            <span class="money">45.000₫</span>
            <input type="hidden" name="giaSP" value="45000">
            <button type="submit" name="datHang" value="datHang" hidden>Add SP</button>
        </div>
          </form>
        <form action="handle_giohang.php" method="post" target="hidden_iframe">
        <div class="dry-food dry-food__child">
            <img src="img/nuocnho.jfif">
            <input type="hidden" name="img" value="img/nuocnho.jfif">
            <a href="#">Nước nho </a>
            <input type="hidden" name="tenSP" value="Nước nho">
            <span class="money">45.000₫</span>
            <input type="hidden" name="giaSP" value="45000">
            <button type="submit" name="datHang" value="datHang" hidden>Add SP</button>
        </div>
        </form>
       <form action="handle_giohang.php" method="post" target="hidden_iframe">
       <div class="dry-food dry-food__child">
            <img src="img/luu.jfif">
            <input type="hidden" name="img" value="img/lưu.jfif">
            <a href="#"> sinh tố lựu </a>
            <input type="hidden" name="tenSP" value="Sinh tố lựu">
            <span class="money">45.000₫</span>
            <input type="hidden" name="giaSP" value="45000">
            <button type="submit" name="datHang" value="datHang" hidden>Add SP</button>
        </div>
       </form>
       <form action="handle_giohang.php" method="post" target="hidden_iframe">
       <div class="dry-food dry-food__child">
            <img src="img/nuoceple.jfif">
            <input type="hidden" name="img" value="img/nuoceple.jfif">
            <a href="#">Lê ép</a>
            <input type="hidden" name="tenSP" value="Lê ép ">
            <span class="money">45.000₫</span>
            <input type="hidden" name="giaSP" value="45000">
            <button type="submit" name="datHang" value="datHang" hidden>Add SP</button>
        </div>
       </form>
       <?php
        include("connect.php");
            $sql = "SELECT * FROM `add_nuoc` WHERE 1";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){   
        ?>
       <form action="handle_giohang.php" method="post" target="hidden_iframe">
      
       <div class="dry-food dry-food__child"> 
            <img src="<?php echo $row['anh_mh'];?>">
            <input type="hidden" name="img" value="<?php echo $row['anh_mh'];?>">
            <a href="#"><?php echo $row['ten_mon'];?> </a>
            <input type="hidden" name="tenSP" value="<?php echo $row['ten_mon'];?>">
            <span class="money"><?php echo $row['gia_ban'];?> đ</span>
            <input type="hidden" name="giaSP" value="<?php echo $row['gia_ban'];?>">
            <button type="submit" name="datHang" value="datHang" hidden>Add SP</button>
          
        </div> 
       </form>
       <?php } ?>
    </div>
    <div class="banner banner__item">
        <img src="img/banner2.png">
        <img src="img/banner3.png">
    </div>
    <div class="news">
        <h2>
            <a title="news" href="#">Tin Tức Mới</a>
        </h2>
        <hr>
        <div class="news news__text">
            <p>Tin tức vệ sinh an toàn thực phẩm mới nhất
            an toàn dành cho bạn</p>
        </div>
    </div>
    <div class="inf">
        <div class="inf inf__1">
            <img src="img/organic.png">
            <h4>Kỹ thuật tròng rau sạch bằng thùng xốp <br>tại nhà đơn giản</h4>
            <p>Tự trồng rau trong thùng xốp tại nhà là lựa chọn của rất nhiều gia đình
                ở thành phố bởi phương pháp trồng rau đơn giản , dễ trồng
                dễ quản lý ,an toàn và tiện lợi ... 
            </p>
            <a href="ct1.html">chi tiết</a>
        </div>
        <div class="inf inf__1">
            <img src="img/suadau.png">
            <h4> Tự hế món thạch sữa thanh long lung linh sắc màu</h4>
            <p> Thạch sữa chua thanh long là món ăn tráng miệng tuyệt vời
                cho mẹ và các bé . Món ăn này rất thanh mát , dễ ăn , đẹp da và 
                trông rất bắt mắt ....
            </p>
            <a href="ct2.html">chi tiết</a>
        </div>
        <div class="inf inf__1">
            <img src="img/taodo.png">
            <h4>Những dòng trái cây đắt như vàng ròng ở Nhật <br>đổ bộ về 
                Việt Nam
            </h4>
            <p> Nhật Bản là đất nước có nhiều loại hoa quả có chất lượng
                thuộc hàng ngon nhất thế giới nhưng cũng vô cùng đắt đỏ .
                Đáng chú ý , nhiều loại hoa quả nông dân Nhật trồng được đem
                 bán...
            </p>
            <a href="ct3.html">chi tiết</a>
        </div>
   </div>   
   <div class="news">
    <h2>
        <a title="news" href="#">Phản hồi của khách</a>
    </h2>
    <hr>
    <div class="news news__text">
        <p>Phản hồi của những khách đã sử dụng
        an toàn dành cho bạn</p>
    </div>
</div>
<div class="inf">
    <div class="inf inf__1">
        <img src="img/organic.png">
        <h4>Người mẫu - Ngọc Trinh</h4>
        <p>Là một người khá kỹ tính, tôi luôn luôn lựa chọn
           những thực phẩm sạch nhất. Và đây là nơi tôi đặt
           trọng niềm tin
        </p>
        <a href="#">chi tiết</a>
    </div>
    <div class="inf inf__1">
        <img src="img/suadau.png">
        <h4> Ca sĩ - Jack</h4>
        <p> Là một người khá kỹ tính, tôi luôn luôn lựa chọn
            những thực phẩm sạch nhất. Và đây là nơi tôi đặt
            trọng niềm tin
        </p>
        <a href="#">chi tiết</a>
    </div>
    <div class="inf inf__1">
        <img src="img/taodo.png">
        <h4>Ca sĩ - Hoàng Yến
        </h4>
        <p> Là một người khá kỹ tính, tôi luôn luôn lựa chọn
            những thực phẩm sạch nhất. Và đây là nơi tôi đặt
            trọng niềm tin
        </p>
        <a href="#">chi tiết</a>
    </div>
</div>   
<div class="img">
        <img src="img/brand1.png.png">
        <img src="img/brand2.png.png">
        <img src="img/brand1.png.png">
        <img src="img/brand2.png.png">
        <img src="img/brand1.png.png">
        <img src="img/brand2.png.png">
</div>
<div class="footer">
    <div class="footer footer__item">
        <h2> Liên hệ</h2>
        <P> chúng tôi chuyên cung cấp các sản phẩm thực 
            phẩm sạch an toan toàn cho sức khỏe con người
        </P>
    </div>
    <div class="footer footer__item">
        <h2>Danh mục</h2>
        <ul>
            <li>Trang chủ</li>
            <li> Sản phẩm </li>
            <li>Giới thiệu</li>
            <li>Tin tức</li>
            <li>Liên hệ</li>
            <li>Chỉ đường</li>
        </ul>
    </div>
    <div class="footer footer__item">
        <h2>Hỗ trợ khách hàng</h2>
        <ul>
            <li>Trang chủ</li>
            <li> Sản phẩm </li>
            <li>Giới thiệu</li>
            <li>Tin tức</li>
            <li>Liên hệ</li>
            <li>Chỉ đường</li>
        </ul> 
    </div>
    <div class="footer footer__item">
        <h2>
            Kết nối với Food-Shop
        </h2>
        <ul>
            <li>Trang chủ</li>
            <li> Sản phẩm </li>
            <li>Giới thiệu</li>
            <li>Tin tức</li>
            <li>Liên hệ</li>
            <li>Chỉ đường</li>
        </ul> 
    </div>
</div>

</body>
</html>
