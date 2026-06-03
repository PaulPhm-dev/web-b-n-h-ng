<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./trangchu.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <script src="./main.js"></script>
    <title>fruitSHOP</title>
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
                <p>Hotline : <a href="#">0388952524</a></p>
                <p>Địa chỉ :<a href="#">79 Mễ Trì Thượng</a> </p>
            </div>
            <!-- <div class="header header__topbar--log-">
              <img src="img/persion.png">
              <button onclick="goToLogin()">Đăng Nhập </button>
              <button onclick="goToRegister()"> Đăng Ký</button>
            </div> -->
            <form action="logout.php" method="POST" class="header header__topbar--log-">
                  <img src="./img1/persion.png">
                  <button type="submit">Đăng xuất</button>
            </form>
         </div>
         <div class="header header__container">
            <img src="./img1/Group 2 (1).png" id="home">
            <div class="header header__container--logo">
                <img src="./img-Webinar/Green and White Circle Modern Organic Shop Logo (2).png">
            </div>
            <div class="header header__container--service">
                <div  class="container__child">
                    <img src="./img1/Untitled.png">
                    <div>
                        <a>Miễn phí vận chuyển</a>
                        <p>Bán kính 5km</p>
                    </div>
                </div>
            </div>
            <div  class="header header__container--service">
                <div  class="container__child">
                    <img src="./img/suport.png">
                    <div>
                        <a>Hỗ trợ khách hàng</a>
                        <p>Hotline :0388952524</p>
                    </div>
                </div>
            </div>
            <div  class="header header__container--service"> 
                <div  class="container__child">
                    <img src="./img/Vector.png">
                    <div>
                        <a>Hoạt động</a>
                        <p>24/7</p>
                    </div>
                </div>
            </div>  
            <button id="shoping_cart">
                <img src="./img/1170627.png" style="width: 25px;">
                <p>Giỏ Hàng</p>
            </button>           
       </div>
         <nav  class="header header__menubar" >
            <div class="header header__menubar--link" >
                <a href="Trangchu.php"> Trang chủ</a>
                <a href="sanpham.php"> Sản phẩm</a>
                <a href="#"> Giới Thiệu</a>
                <a href="ghichu.php"> Ghi chú</a>
                <a href="#"> Liên hệ</a>
                <a href="#"> Chỉ đường</a>
            </div>
            <input type="seach" placeholder="   Tìm kiếm sản phẩm" >
         </nav> 
        </div>
    <nav class="main" style = "display: flex;">
        <div class="leftcontent">
            <div class="tags">
                <h2>
                    <span>Tags</span>
                </h2>
                <li><a href="">Rau sạch</a></li>
            </div>

            <div class="Featurednews">
                <h2>
                    <span>Tin nổi bật </span>
                </h2>
                <div class="content1">
                    <a href="" class="anhcontent1">
                        <img src="./img1/anhcontent1.webp" alt="">
                    </a>
                    <a href="" class="text1">Kỹ thuật trồng <br> rau sạch trong <br> chậu xốp tại nhà <br> đơn giản <br></a>
                </div>
                <div class="content2">
                    <a href="" class="anhcontent2">
                        <img src="./img1/blog-img-7.webp" alt="" width ="100px;" height="57px;"  >
                    </a>
                    <a href="" class="text2">Tự chế món <br> thạch sữa chua <br>thanh long lung <br> linh sắc màu <br></a>
                </div>
                <div class="content3">
                    <a href="" class="anhcontent3">
                        <img src="./img1/anhcontent3.webp" alt="">
                    </a>
                    <a href="" class="text3">Những loại trái <br>cây Nhật đắt như <br> vàng ròng đồng bộ <br> về Việt Nam <br></a>
                </div>
            </div>          
        </div>
           
            
        <div class="rcontent">
            <div class="box-heading ">
                <h1 class="title-head page_title">Tin tức</h1>
                <span> ( Có tất cả 8 bài viết ) </span>
            </div>
            <div class="page-content" data-page="1">
                <div class="col1">
                    <a href="" class="anhcontent4">
                        <img src="./img1/anhcontent4.webp" alt="" width="246px" height="140px">
                    </a>
                    <div class="minicol1">
                        <a href="" class="text4">
                            <h3>Kỹ thuật trồng rau sạch trong chậu xốp tại nhà đơn giản</h3>
                        </a>
                        <div>
                            <p>24/04/2018</p> <br>
                            <p>Tự trồng rau trong thùng xốp tại nhà là sự lựa chọn của rất nhiều gia đình trong thành phố bởi phương pháp trồng rau đơn giản, dễ trồng, dễ quản lý, an toàn và tiện lợi. Nhưng người trồng cũng...</p>
                        </div>
                    </div>
                    
                </div>
                <div class="col2">
                    <a href="" class="anhcontent4">
                        <img src="./img1/anhcontent5.webp" alt=""  width="246px" height="140px">
                    </a>
                    <div class="minicol2">
                        <a href="" class="text5">
                            <h3>Vì sao hoa quả Việt thất thế trước “cơn lốc” hàng nhập ngoại?</h3>
                        </a>
                        <div>
                            <p>24/04/2018</p> <br>
                            <p>Thạch sữa chua thanh long là món ăn tráng miệng tuyệt vời cho các mẹ. Đặc biệt là các bạn trẻ. Bởi vì món ăn này rất thanh mát, dễ ăn, đẹp da và trông rất màu sắc bắt mắt nữa. Nguyên...</p>
                        </div>
                    </div>
                </div>
                <div class="col3">
                    <a href="" class="anhcontent5">
                        <img src="./img1/anhcontent6.webp" alt=""  width="246px" height="140px">
                    </a>
                    <div class="minicol3">
                        <a href="" class="text6">
                            <h3>Những loại trái cây Nhật đắt như vàng ròng đổ bộ về Việt Nam</h3>
                        </a>
                        <div>
                            <p>24/04/2018</p> <br>
                            <p>Nhật Bản là đất nước có nhiều loại hoa quả có chất lượng thuộc hàng ngon nhất thế giới nhưng cũng vô cùng đắt đỏ. Đáng chú ý, nhiều loại quả do nông dân Nhật Bản trồng được đem bán...</p>
                        </div>
                    </div>
                </div>
                <div class="col4">
                    <a href="" class="anhcontent6">
                        <img src="./img1/anhcontent7.webp" alt=""  width="246px" height="140px">
                    </a>
                    <div class="minicol4">
                        <a href="" class="text7">
                            <h3>Vì sao hoa quả Việt thất thế trước “cơn lốc” hàng nhập ngoại?</h3>
                        </a>
                        <div>
                            <p>24/04/2018</p> <br>
                            <p>Rau củ quả Việt Nam đang dần khẳng định tên tuổi của mình trên thị trường quốc tế khi nhiều mặt hàng đã có “visa” vào các thị trường khó tính như Mỹ, Nhật Bản, Australia… Nhưng hiện có một...</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-content" data-page="2" style="display: none;">
                <div class="col5">
                    <a href="" class="anhcontent7">
                        <img src="./img1/anhcontent8.webp" alt=""  width="246px" height="140px">
                    </a>
                    <div class="minicol5">
                        <a href="" class="text8">
                            <h3>Nhập khẩu rau quả vượt mốc 1 tỷ USD, Thái Lan chiếm 60% thị phần</h3>
                        </a>
                        <div>
                            <p>24/04/2018</p> <br>
                            <p>Theo báo cáo từ Bộ NN&PTNT, giá trị xuất khẩu hàng rau quả tháng 9 năm 2017 ước đạt 294 triệu USD, đưa giá trị xuất khẩu hàng rau quả 9 tháng đầu năm 2017 ước đạt 2,64 tỷ USD,...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </nav>    
     
   <div class="pagination">
        <a href="#" class="prev disabled">&laquo;</a> <!-- Trang trước -->
        <a href="#" class="page-number active" data-page="1">1</a> <!-- Trang hiện tại -->
        <a href="#" class="page-number" data-page="2">2</a> <!-- Trang 2 -->
        <a href="#" class="next">&raquo;</a> <!-- Trang kế -->
   </div>
   <div class="section" style="justify-content: center;">
        <div class="brand-items" >
            <a href="" class="img1">
                <img src="./img1/brand1.webp" alt="">
            </a>
            <a href="" class="img2">
                <img src="./img1/brand2.webp" alt="">
            </a>
            <a href="" class="img3">
                <img src="./img1/brand3.webp" alt="">
            </a>
            <a href="" class="img4">
                <img src="./img1/brand4.webp" alt="">
            </a>
            <a href="" class="img5">
                <img src="./img1/brand5.webp" alt="">
            </a>
            <a href="" class="img6">
                <img src="./img1/brand6.webp" alt="">
            </a>
        </div>
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