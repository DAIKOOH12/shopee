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
    <div style="width:100%;">
        <div class="content">
            <div class="sasaf" style="background-image: url('image/shopee-icon/5569eb9dc7e09e2dbed5315b8f2ea8ba.png');height: 500px;width: 500px;">
                <div class="img--signup">
                </div>
            </div>
            <div class="form--signup">
                <div class="title--signup">
                    <p style="font-size:20px;">Đăng ký</p>
                </div>
                <div class="form--work">
                    <form action="" method="POST">
                        <div class="input--signup"><input type="text" name="SDT" placeholder="Số điện thoại" style="height: 20px;width: 350px;padding: 10px;"></div>
                        <?php
                        if (isset($_POST["click"])) {
                            $_SESSION["ID"] = $_POST["SDT"];
                            if (!is_numeric($_SESSION["ID"])) {
                                echo "<div class='error--message' style='padding: 5px 0;color:red;'><span>* Số điện thoại không hợp lệ</span></div>";
                            } else {
                                $ID = $_SESSION["ID"];
                                $q_selectkhachhang = "SELECT `SDT` FROM `thongtinkhachhang`";
                                $selectkhachhang = mysqli_query($connection, $q_selectkhachhang);
                                // $array_khachhang=mysqli_fetch_array($selectkhachhang);
                                $bool = 1;
                                while ($row = mysqli_fetch_array($selectkhachhang)) {
                                    if ($ID == $row["SDT"]) {
                                        $bool = 0;            
                                    }
                                }
                                if ($bool == 0) {
                                    echo "<div class='error--message' style='padding: 5px 0;color:red;'><span>* Số điện thoại đã tồn tại</span></div>";
                                }
                                else{
                                echo "<script>alert('Đăng kí thành công')</script>";
                                header('Location: add_password.php');
                                }
                            }
                        }
                        ?>
                        <div class="input--signup"><input id="continue" type="submit" name="click" value="TIẾP THEO"></div>
                    </form>
                </div>
                <div class="or">
                    <div class="lineor"></div>
                    <span class="another">HOẶC</span>
                    <div class="lineor"></div>
                </div>
                <div class="button--choice">
                    <button class="facebook">
                        <div class="logo--facebook">
                            <img style="width: 30px;" src="image\shopee-icon\Facebook_f_logo_(2019).png" alt="">
                        </div>
                        <div class="name--facebook">Facebook</div>
                    </button>
                    <button class="google">
                        <div class="logo--google">
                            <img style="width: 30px;" src="image\shopee-icon\Google__G__Logo.svg.png" alt="">
                        </div>
                        <div class="name--google">Google</div>
                    </button>
                </div>
                <div class="dieukhoan">
                    <span>Bằng việc đăng kí, bạn đã đồng ý với Shopee về</span>
                    <div><a href="">Điều khoản dịch vụ</a>&nbsp & &nbsp<a href="">Chính sách bảo mật</a></div>
                </div>
                <div class="login">
                    <span style="color: rgb(0 0 0 / 26%);">Bạn đã có tài khoản?</span><a style="padding-left:5px;text-decoration:none;color: #ee4d2d;" href="login.php">Đăng nhập</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>