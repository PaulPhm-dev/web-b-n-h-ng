<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="jslogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="dualeo.js"></script>
    <title>Đăng ký-FOODSHOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .header__topbar{
    /* display: flex; */
    background-color:rgb(122, 250, 124);
    justify-content: space-between;
    padding: 10px;
    /* align-items: center; */
}
.header__topbar--hotline{
    display: flex;
}
.header__topbar--hotline p{
    font-weight: 200;
    font-size: 15px;
    color: black;
    margin-left: 20px;
}
.header__topbar--hotline a{
    color: black;
    text-decoration: none;
}
.header__topbar--log-{
    display: flex;
    align-items: center
}
/* .header__topbar--log- button{
    background-color: transparent;
    border-color: transparent ;
    margin-right: 15px;
    font-size: 13px;
    font-weight: 300;
} */

.login_out{
    text-decoration: none;
    font-weight: 500;
}
.header__container{
    display: flex;  
    justify-content: space-between;
    align-items: center;
    padding:10px;
    background-color:rgb(215, 255, 255);
    box-sizing: border-box;
}
.header__container--service{
    display: flex;
    flex-grow: 1;
    margin-left: 50px;
}
.container__child{
    margin-right: 30px;
    display: flex;
    align-items: center;
    }
.container__child a{
    font-size: 15px;
    font-weight: 600;
}
.container__child img{
    margin-right: 15px;
    max-width: 40px;
    height: auto;
}
.header__container--logo{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    /* flex-grow: 1;
    flex-basis: 100%; */
}
.header__container--logo p a{ 
    text-decoration: none;
    color: #0ff64d;
}
.header__container{
    display: flex;
    flex-wrap: wrap; 
    justify-content: space-between;
    align-items: center;
    padding: 10px;
    box-sizing: border-box;
}
@media(max-width :1000px){
    .header__container{
        flex: 1 1 100%;
        flex-direction: row;
        align-items: flex-start;
        justify-content: space-between;
    }
    .header__container--logo{
        margin-bottom: 10px;
        flex-basis: 100%;
        /* align-items: center; */
        justify-content: center;
    }
    .header__container--service{
        flex-basis: calc(33,33% -10px);        /* display: flex; */
    }
}
.header__container--logo p{
    font-size: 1.5rem;
    font-family:cursive ;
    font-weight: 900;
    margin-left: 30px;
}
.header__menubar {
    background-color: aquamarine;
    padding: 5px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.header__menubar a{
    text-decoration: none;
    margin-right: 15px;
    color: #585151;
    margin-left: 25px;
    white-space: nowrap;
}
.header__menubar input{
    border-radius: 20px;
    height: 25px;
    min-width: 200px;
    background-image: url(img/search.png);
    background-repeat: no-repeat;
    background-position: 165px center;
    border-color: transparent;
    margin-right: 15px;
}
@media (max-width :1000px) {
    .header__menubar{
        display: none;
    }
}
.header__menubar--link  :hover{
    color: black;
    background-color: #0ff64d;
    height: 100%;
    font-weight: 200;
}
.footer{
    display: flex;
    margin-top: 15px;
    padding-left: 20px;
    background-color: #0ff64d;
    flex-wrap:wrap;
}
.footer__item{
    display: flex;
    flex-direction: column;
    width: 300px;
    color: #fff;
    margin-right: 10px;
}
.footer__item h2{
    padding: 15px 0px;
}
.footer__item li{
    font-size: 18px;
}
.footer__item li:hover{
    color: orange;
}
/* Phần đki, đăngnhap */
.body_login{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}
.main_login{
    position: relative;
    width: 400px;
    height: 500px;
    background:linear-gradient(aquamarine,rgb(215, 255, 255),rgb(215, 255, 255));
    border-radius: 20px;
    padding: 40px;
}
.form_main_login{
    display: flex;
    align-items: center;
    width: 100%;
    height: 100%;
    transition: 0s ease-in-out;
}
.main_login.active .form_main_register.sign_up{
    transform: scale(0);
}
.main_login .form_main_login.sign_in{
    position: absolute;
    top: 0;
    transform: scale(0);
}
.main_login.active .form_main_login.sign_in{
    transform: scale(1);
}

.form_main_login h2 {
    font-size: 25px;
    text-align: center;
}
.input_group{
    position: relative;
    margin: 20px 0;
    border-bottom: 2px solid #fff;
}
.input_group label {
    position: absolute;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    pointer-events: none;
    transition: .3s;
}
.input_group input{
    width: 320px;
    height: 40px;
    font-size: 16px;
    padding: 0 5px;
    background: transparent;
    border: none;
    color: #0ff64d;
    outline: none;
}
.input_group input:focus~label,
.input_group input:valid~label {
    top: -5px;
}
.remember{
    margin: -5px 0 15px 5px;
}
.remember label{
    font-size: 14px;
}
.remember label input{
    accent-color: #0ff64d;
}
button {
    position: relative;
    width: 100%;
    height: 40px;
    background: #0ff64d;
    font-size: 16px;
    color: #fff;
    cursor: pointer;
    border-radius: 30px;
    border: none;
    outline: none;
}
.signup_link{
    font-size: 14px;
    text-align: center;
    margin: 15px 0;
}
.signup_link p a {
    color: #0ff64d;
    text-decoration: none;
    font-weight: 500;
}
.signup_link p a:hover {
    text-decoration: underline;
}
.mxh_login{
    font-size: 14px;
    text-align: center;
}
.mxh_login a{
    display: inline-block;
    width: 35px;
    height: 35px;
    background: transparent;
    border: 1px solid #0ff64d;
    border-radius: 50%;
    text-align: center;
    line-height: 35px;
    margin: 15px 6px 0;
    transition: .3s;
}
.mxh_login a:hover{
    background: #fff;
}
.mxh_login a i {
    font-size: 14px;
    color: #0ff64d;
    transition: .3s;
}
.mxh_login a:hover i{
    color: rgba(0, 0, 0, .3);
}
.main_register{
    position: relative;
    width: 400px;
    height: 500px;
    background:linear-gradient(aquamarine,rgb(215, 255, 255),rgb(215, 255, 255));
    border-radius: 20px;
    padding: 40px;
}
.form_main_register{
    display: flex;
    align-items: center;
    width: 100%;
    height: 100%;
}
.form_main_register h2 {
    font-size: 25px;
    text-align: center;
}
    </style>
</head>
<body>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <div class="header">
    
<div class="body_login">
    <div class="main_login">
        <div class="form_main_register sign_up">
            <form action="handle_dangki.php" method="post">
                <h2>Đăng ký</h2>
                <div class="input_group">
                    <input type="text" name="userName" required>
                    <label for="">Tên đăng nhập</label>
                </div>
                <div class="input_group">
                    <input type="email" name="Email" required>
                    <label for="">Email</label>
                </div>
                <div class="input_group">
                    <input type="password"  name="password" required>
                    <label for="">Mật khẩu</label>
                </div>
                <div class="input_group">
                    <input type="password" name="re-enter_password" required>
                    <label for="">Nhập Lại Mật Khẩu</label>
                </div>
                <div class="remember">
                    <label><input type="checkbox"> Lưu đăng nhập</label>
                </div>
                <button type="submit">Đăng ký</button>
                <div class="signup_link">
                    <p>Đã có tài khoản rồi <a href="#" class="signinbtn_link">Đăng nhập</a></p>
                </div>
            </form>
        </div>
        <div class="form_main_login sign_in">
        <form action="login.php" method="post">
                    <h2>Đăng nhập</h2>
                    <div class="input_group">
                        <input type="text" name="userName" required>
                        <label for="">Tên đăng nhập</label>
                    </div>
                    <div class="input_group">
                        <input type="password" name="password" required>
                        <label for="">Mật khẩu</label>
                    </div>
                    <div class="remember">
                        <label><input type="checkbox"> Tôi đồng ý với các điều khoản và điều kiện</label>
                    </div>
                    <button type="submit" name="btn-login" value="Đăng nhập">Đăng nhập</button>
                    <div class="signup_link">
                        <p>Không có tài khoản <a href="#" class="signupbtn_link"onclick="goToLogin">Đăng kí</a></p>
                    </div>
                    <div class="mxh_login">
                        <p>Hoặc đăng nhập bằng </p>
                        <div class="social_icon">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-google"></i></a>
                            <a href="#"><i class="fa-solid fa-phone"></i></a>
                        </div>
                    </div>
                </form>
        </div>
    </div>
</div>    

<script>
    const singUpbtnLink = document.querySelector('.signupbtn_link');
    const singInbtnLink = document.querySelector('.signinbtn_link');
    const main_login = document.querySelector('.main_login');
    singUpbtnLink.addEventListener('click',() => {
        main_login.classList.toggle('active');
    });
    singInbtnLink.addEventListener('click',() => {
        main_login.classList.toggle('active');
    });
</script>
</body>
</html>
