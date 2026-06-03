<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>login</title>
    <style>
        .warning{
            color: red;
        }
    </style>
</head>
<body>
    <form action="loginquanli.php" method = "post">
        <div>
            <input type="text" name="username" placeholder = "Ten dang nhap">
        </div>
        <div>
            <input type="password" name="password" placeholder="Mat khau">
        </div>
        <div>
            <input type="submit" value="Dang nhap">
        </div>
    </form>
    <?php
    include('connect.php');
        if(isset($_POST['username']) && isset($_POST['password'])){           
            $username = $_POST['username'];
            $password = $_POST['password'];
            if ($username == '' || $password == '') {
                echo "<p class='warning'>Vui lòng nhập đủ thông tin đăng nhập.</p>";
            } elseif($username == "vuvietquan" && $password == "1884" ){
                session_start();  
                $_SESSION["username"] = $username;
                header('location: quanli.php'); 
            }else{
                echo "<p class = 'warning'>Thông tin đăng nhập không chính xác</p> ";
            }
        }
    ?>
</body>
</html>