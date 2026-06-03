<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 80%;
            margin-left: 10%;
            border-collapse: collapse;
            text-align: center;
            border-radius: 5px;
            border: 0.5px solid grey;
        }
        th{
            background-color: grey;  
            padding: 10px 2px;
        }
        .button button{ 
            background-color: transparent;
            border: transparent;          
        }
        .button button:hover {
            box-shadow:  -5px 0px 6px rgba(0, 0, 0, 0.3);;
            background-color: #DDDDDD;
            border: 0.5px solid grey;
            border-radius: 4px;
        }
       
        
    </style>
</head>
<body>
    <h1>Menu</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Tên SP</th>
            <th>Giá thành</th>
            <th>Ảnh mih họa</th>
            <th>Mô tả</th>
            <th colspan="2">Sửa</th>
        </tr>
        <tr style="padding :20px">
        <iframe name="hidden_giohang" style="display: none;"></iframe>
        <?php
        include("connect.php");
            $sql = "SELECT * FROM `addthucpham` WHERE 1";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){   
        ?>
        <td style="padding :20px"><?php echo $row['id']; ?></td>
            <td><?php echo $row['ten_mon']; ?></td>
            <td >
                  <?php echo $row['gia']; ?> đ
             </td>
             <td >
             <img src="<?php echo $row['anh_mh']; ?>">  
             </td>
             <td >
                  <?php echo $row['mo_ta']; ?> 
            
             <td colspan="2">
                  <a href="quanli.php<?php echo $row['id']; ?><" style="color:black">Cập nhật</a> |
                  <a href="quanli.php<?php echo $row['id']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');" style="color :black">Xóa</a>
             </td>
        </tr>
        <?php } ?>
        <tr style="padding :20px">
        <iframe name="hidden_giohang" style="display: none;"></iframe>
        <?php
        include("connect.php");
            $sql = "SELECT * FROM `add_nuoc` WHERE 1";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){   
        ?>
        <td style="padding :20px"><?php echo $row['id']; ?></td>
            <td><?php echo $row['ten_mon']; ?></td>
            <td >
                  <?php echo $row['gia_ban']; ?> đ
             </td>
             <td >
             <img src="<?php echo $row['anh_mh']; ?>">  
             </td>
             <td >
                  <?php echo $row['mo_ta']; ?> 
             </td>
            
             <td colspan="2">
                  <a href="trangchu.php<?php echo $row['id']; ?><" style="color:black">Cập nhật</a> |
                  <a href="trangchu.php?<?php echo $row['id']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');" style="color :black">Xóa</a>
             </td>
        </tr>
        <?php } ?>
        <tr style="padding :20px">
        <iframe name="hidden_giohang" style="display: none;"></iframe>
        <?php
        include("connect.php");
            $sql = "SELECT * FROM `add_sinh_to` WHERE 1";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){   
        ?>
        <td style="padding :20px"><?php echo $row['id']; ?></td>
            <td><?php echo $row['ten_mon']; ?></td>
            <td >
                  <?php echo $row['gia_ban']; ?> đ
             </td>
             <td >
                  <img src="<?php echo $row['anh_mh']; ?>"> 
             </td>
             <td >
                  <?php echo $row['mo_ta']; ?> 
             </td>
           
             <td colspan="2">
                  <a href="trangchu.php?page=update-menu&mamon=<?php echo $row['id']; ?><" style="color:black">Cập nhật</a> |
                  <a href="trangchu.php?page=delete&mamon=<?php echo $row['id']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');" style="color :black">Xóa</a>
             </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
</body>
</html>