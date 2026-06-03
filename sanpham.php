<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dưa leo</title>
    <link rel="stylesheet" href="./style2.css">
    <link rel="stylesheet" href="./trangchu.css">
    <link rel="stylesheet" href="./font/fontawesome-free-6.6.0-web/css/all.min.css">
   
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
    <script src="./main.js"></script>
    <div class="header">
        <div class="header header__topbar">
           <div class="header header__topbar--hotline">
               <p>Hotline : <a href="#">0561516144646</a></p>
               <p>Địa chỉ :<a href="#"> Mễ Trì Thượng</a> </p>
           </div>
           <!-- <div class="header header__topbar--log-">
             <img src="img/persion.png">
             <button onclick="goToLogin()">Đăng Nhập </button>
             <button onclick="goToRegister()"> Đăng Ký</button>
           </div> -->
           <form action="logout.php" method="POST" class="header header__topbar--log-">
                 <img src="./img/persion.png">
                 <button type="submit">Đăng xuất</button>
           </form>
        </div>
        <div class="header header__container">
           <img src="./img/Group 2 (1).png" id="home">
           <div class="header header__container--logo">
               <img src="./img-Webinar/Green and White Circle Modern Organic Shop Logo (2).png">
           </div>
           <div class="header header__container--service">
               <div  class="container__child">
                   <img src="./img/Untitled.png">
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
                       <p>Hotline :0561516144646</p>
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
   <div class="page">
    <li><a href="">Trang chủ </a></li>
    <span>></span>
    <span style="color: #80bb35;">Sản phẩm</span>
   </div>
   <nav class="main" style = "display: flex;">
   
   <div class="content">
    <div class="lcontent">
        <div class="category">
            <h2>
                <span>Danh mục tin</span>
            </h2>
            <ul class="menulist">
                    <li><a href="Trangchu.php">Trang chủ </a></li>
                    <li><a href="sanpham.php">Sản phẩm </a></li>
                    <li><a href="">Giới thiệu</a></li>
                    <li><a href="ghichu.php">Ghi chú </a></li>
                    <li><a href="">Liên hệ </a></li>
                    <li><a href="">Chỉ đường </a></li>
                </ul>
        </div>
            <div class="tags">
            <h2>
                    <span>Tags</span>
            </h2>
                    <li><a href="">Hoa quả</a></li>
                    <li><a href="">Rau củ</a></li>
                   
            </div>
     </div>
            
        <div class="rcontent">
            <div class="box-heading ">
                <h1 class="title-head page_title">Sản phẩm</h1>
               
            </div>
            <div class="page-content" data-page="1">
                <div class="col1">
                    <a href="" class="anhcontent4">
                        <img src="./img1/ảnh sản phẩm của linh/Hoa quả/Vải thiều.jpg" alt="" width="246px" height="140px">
                        
                    </a>
                    <div class="minicol1">
                        <a href="" class="text4">
                            <h3>Vải thiều</h3>
                        </a>
                        <p>30.000</p>
                    </div>
                    
                </div>
                <div class="col2">
                    <a href="" class="anhcontent4">
                        <img src="./img1/ảnh sản phẩm của linh/Hoa quả/Hồng đỏ.jpg" alt=""  width="246px" height="140px">
                    </a>
                    <div class="minicol2">
                        <a href="" class="text5">
                            <h3>Hồng đỏ</h3>
                        </a>
                        <div>
                            <p>40.000</p>
                        </div>
                    </div>
                </div>
                <div class="col3">
                    <a href="" class="anhcontent5">
                        <img src="./img1/ảnh sản phẩm của linh/Hoa quả/Dưa hấu.jpg" alt=""  width="246px" height="140px">
                    </a>
                    <div class="minicol3">
                        <a href="" class="text6">
                            <h3>Dưa hấu</h3>
                        </a>
                        <div>
                            <p>50.000</p>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="page-content" data-page="2" style="display: none;">
            <div class="col4">
                    <a href="" class="anhcontent6">
                        <img src="./img1/ảnh sản phẩm của linh/Hoa quả/Dưa lưới hoàng kim.jpg" alt=""  width="246px" height="140px">
                    </a>
                    <div class="minicol4">
                        <a href="" class="text7">
                            <h3>Dưa lưới hòng kim</h3>
                        </a>
                        <div>
                            <p>60.000</p>
                        </div>
                    </div>
                </div>
                <div class="col5">
                    <a href="" class="anhcontent7">
                        <img src="./img1/ảnh sản phẩm của linh/Hoa quả/Táo.jpg" alt=""  width="246px" height="140px">
                    </a>
                    <div class="minicol5">
                        <a href="" class="text8">
                            <h3>Táo đỏ</h3>
                        </a>
                        <div>
                            <p>70.000</p>
                        </div>
                    </div>
                </div>
                <div class="col6">
                    <a href="" class="anhcontent8">
                        <img src="./img1/ảnh sản phẩm của linh/Hoa quả/Lê.jpg" alt=""  width="246px" height="140px">
                    </a>
                    <div class="minicol6">
                        <a href="" class="text9">
                            <h3>Lê</h3>
                        </a>
                        <div>
                            <p>80.000</p>
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
        <a href="" class="img1"></a>    
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