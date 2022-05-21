<?php
session_start();
require "phimtat.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\style_dang_ky.css">
</head>

<body>
    <div class="footer">
        <div class="left--footer">
            <div class="shopee--icon">
                <a href="" style="text-decoration: none;">
                    <div id="shopee--icon1" style="background-image: url('image/shopee-icon/shopee-logo.png');">

                    </div>
                </a>
            </div>
            <div class="signup--icon" style="padding: 0;">
                <p style="font-size: 25px;font-family: Arial, Helvetica, sans-serif;">Đăng ký</p>
            </div>
        </div>
        <div class="right--footer">
            <a href="" style="text-decoration: none;color:#ee4d2d;font-family: Arial, Helvetica, sans-serif;">Bạn cần giúp đỡ?</a>
        </div>
    </div>
    <div class="_JKQqwndf">
        <div class="_wQBsdQA">
            <div class="_qwejwqA">
                <div class="_oiqeQW">
                    <p style="margin: 10px;font-size: 20px;font-family: Helvetica Neue,Helvetica,Arial,文泉驛正黑,WenQuanYi Zen Hei,Hiragino Sans GB,儷黑 Pro,LiHei Pro,Heiti TC,微軟正黑體,Microsoft JhengHei UI,Microsoft JhengHei,sans-serif;">Thiết Lập Mật Khẩu</p>
                </div>
                <div class="_oiqweQW">
                    <p style="margin: 10px;width: 300px;font-family: Helvetica Neue,Helvetica,Arial,文泉驛正黑,WenQuanYi Zen Hei,Hiragino Sans GB,儷黑 Pro,LiHei Pro,Heiti TC,微軟正黑體,Microsoft JhengHei UI,Microsoft JhengHei,sans-serif;">Bước cuối! Thiết lập mật khẩu để hoàn tất việc đăng ký</p>
                </div>
            </div>
            <div class="_whQWfnw">
                <form action="" method="POST" style="width: 300px;">
                    <div class="_ioWEwer">
                        <p style="margin: 10px 0;">Nhập mật khẩu</p>
                        <input type="text" name="password" id="set_password">
                    </div>
                    <div class="_ioWEwer">
                        <p style="margin: 10px 0;">Nhập họ và tên</p>
                        <input type="text" name="name" id="set_name">
                        <?php
                        if (isset($_POST["click"])) {
                            if ($_POST["name"] == "" && $_POST["password"] == "") {
                                echo "<div class='error--message' style='padding: 5px 0;color:red;'><span>*Họ và tên không được để trống</span></div>";
                                echo "<div class='error--message' style='padding: 5px 0;color:red;'><span>*Mật khẩu không được để trống</span></div>";
                            } else if ($_POST["name"] == "") {
                                echo "<div class='error--message' style='padding: 5px 0;color:red;'><span>*Họ và tên không được để trống</span></div>";
                            } else if ($_POST["password"] == "") {
                                echo "<div class='error--message' style='padding: 5px 0;color:red;'><span>*Mật khẩu không được để trống</span></div>";
                            } else {
                                $ID = $_SESSION["ID"];
                                $name = $_POST["name"];
                                $password = $_POST["password"];
                                $q_add = "INSERT INTO `thongtinkhachhang`(`SDT`, `hovaten`, `Matkhau`) VALUES ('$ID','$name','$password')";
                                $add = mysqli_query($connection, $q_add);
                                header("Location: login.php");
                            }
                        }
                        ?>
                    </div>
                    <p style="margin: 10px;">*Ít nhất một kí tự viết thường</p>
                    <p style="margin: 10px;">*Ít nhất một kí tự viết hoa</p>
                    <p style="margin: 10px;">*8-16 kí tự</p>
                    <p style="margin: 10px;">*Chỉ các chữ cái, số và ký tự phổ biến mới có thể được sử dụng</p>
                    <input id="continue" type="submit" name="click" value="Đăng ký">
                </form>
            </div>
        </div>
    </div>
</body>

</html>