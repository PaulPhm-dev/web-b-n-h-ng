<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Đăng nhập</title>
    <style>
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
.main_login.active .form_main_login.sign_in{
    transform: scale(0);
}
.main_login .form_main_register.sign_up{
    position: absolute;
    top: 0;
    transform: scale(0);
}
.main_login.active .form_main_register.sign_up{
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
    <script>
        function goToLogin(){
            window.location.href = 'register.html'
        }
    </script>
</head>
<body>
    <div class="body_login">
        <div class="main_login">
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
<?php

?>