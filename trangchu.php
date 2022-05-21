<?php
session_start();
require "phimtat.php";
$q_imageBanner = "SELECT * FROM `hinhanh_banner` ";
$imageBanner = mysqli_query($connection, $q_imageBanner);
$array_imageBanner = array();
$i = 0;
while ($row = mysqli_fetch_array($imageBanner)) {
    $array_imageBanner[$i] = $row[2];
    $i++;
}
$q_imageDanhMuc = "SELECT `STT`, `product_id`, `product_name`, `URL` FROM `hinhanh_sanpham`";
$imageDanhMuc = mysqli_query($connection, $q_imageDanhMuc);
$chiSoDanhMuc=0;
$array_imageDanhMuc=array();
while($a=mysqli_fetch_array($imageDanhMuc)){
    $array_imageDanhMuc[$chiSoDanhMuc]=$a["URL"];
    $chiSoDanhMuc++;
}
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="header">
        <div class="above">
            <ul class="header_list left_header">
                <li class="list_item list--hover">Kênh Người Bán</li>
                <li class="list_item list--hover">Trở thành Người bán shopee</li>
                <li class="list_item list--hover">Tải ứng dụng</li>
                <li class="list_item list--hover">Kết nối
                    <a href="https://www.facebook.com/ShopeeVN"><i class="fa-brands fa-facebook" style="color: white;"></i></a>
                    <a href="https://www.instagram.com/shopee_vn/"><i class="fa-brands fa-instagram" style="color: white;"></i></a>
                </li>
            </ul>
            <ul class="header_list right_header">
                <li class="list_item list--hover">
                    <i class="fa-solid fa-bell"></i>Thông báo
                </li>
                <li class="list_item list--hover">
                    <i class="fa-solid fa-circle-question"></i>Hỗ trợ
                </li>
                <li class="list_item list--hover language">
                    <i class="fa-solid fa-globe"></i>Ngôn ngữ<i class="fa-solid fa-angle-down"></i>
                </li>
                <?php
                if(isset($_SESSION["ID"])){
                    $ID=$_SESSION["ID"];
                    $q_name="SELECT  `hovaten` FROM `thongtinkhachhang` WHERE SDT=$ID";
                    $name=mysqli_fetch_array(mysqli_query($connection,$q_name));
                    echo "<li class='list_item list--hover'>$name[0]</li>";
                }
                else{
                    echo 
                "<li class='list_item list--hover'><a href='signup.php' style='text-decoration: none;color: white;'>Đăng ký</a></li>
                <li class='list_item list--hover'><a href='login.php' style='text-decoration: none;color: white;'>Đăng nhập</a></li>";
                }
                ?>
            </ul>
        </div>
        <div class="search_stuff">
            <img src="https://1ty.vn/datafiles/3/2019-05-16/64184445-shopee-logo.png" alt="" style="height: 60px;">
            <a href="https://shopee.vn/" style="text-decoration: none;">
                <h1 class="main_icon" style="color: white;"> Shopee</h1>
            </a>
            <div class="searching_space">
                <input type="text" placeholder="Bạn đang tìm gì?" style="height: 40px;width: 700px;margin: 20px;">
                <a class="searching_buttom" href="" "><i class=" fa-solid fa-magnifying-glass "
                    style=" color: white; "></i></a>
            </div>
            <a href=" giohang.php "><i class=" fa-solid fa-cart-shopping " style=" font-size: 25px;color: white;margin-top: 30px; "></i></a>
        </div>
        <div class=" suggestion ">
            <a href=" " class=" suggest ">Tai nghe I12</a>
            <a href=" " class=" suggest ">Đèn Pixar</a>
            <a href=" " class=" suggest ">Đồng Hồ Led</a>
            <a href=" " class=" suggest ">Đèn Bàn</a>
            <a href=" " class=" suggest ">Bóng Led Đổi Màu</a>
            <a href=" " class=" suggest ">Đồng Hồ Đèn</a>
            <a href=" " class=" suggest ">Đèn Bàn Pixar</a>
        </div>
    </div>
    <div class=" under__navbar ">
        <div class=" container--ads ">
            <div class=" first--ads ">
                    <div class=" slide--show ">
                        <div class=" slide--img ">
                            <img src=" https://cf.shopee.vn/file/c894212fa04c76710246c418e5eaa91c_xxhdpi " alt=" "
                            style=" height: 204px; ">
                        </div>
                    </div>
                    <div class=" slide--img ">
                        <img src=" https://cf.shopee.vn/file/227a6d3b3791067c0c235ec92a0b8a8e_xxhdpi " alt=" "
                        style=" height: 204px; ">
                    </div>
                    <div class=" slide--img ">
                        <img src=" https://cf.shopee.vn/file/3b63f3b67a39f225489980d1a5ab81a7_xxhdpi " alt=" "
                        style=" height: 204px; ">
                    </div>
                    <div class=" slide--img ">
                        <img src=" https://cf.shopee.vn/file/b60cb04cb34935495487e7cda4119db7_xxhdpi " alt=" "
                        style=" height: 204px; ">
                    </div>
                    <div class=" slide--img ">
                        <img src=" https://cf.shopee.vn/file/09a18530c60254280df1165505bcf1f2_xxhdpi " alt=" "
                        style=" height: 204px; ">
                    </div>
                    <div class=" slide--img ">
                        <img src=" https://cf.shopee.vn/file/6acf027074e48a2e0a9e0cadda3cd7ed_xxhdpi " alt=" "
                        style=" height: 204px; ">
                    </div>
                    <div class=" slide--img ">
                        <img src=" https://cf.shopee.vn/file/8a1f208117dee9ddc4301476f443e0b7_xxhdpi " alt=" "
                        style=" height: 204px; ">
                    </div>
                    <div class=" slide--img ">
                        <img src=" https://cf.shopee.vn/file/60a9d0a52555e185a309633668cbbe51_xxhdpi " alt=" "
                        style=" height: 204px; ">
                    </div>
            </div>
            <div class=" second--ads ">
                <a href=" ">
                    <img src=" https://cf.shopee.vn/file/add5394e67cb12a9cdfe67798e8361d1_xhdpi " alt=" "
                        style=" height: 100px; ">
                </a>
                <a href=" ">
                    <img src=" https://cf.shopee.vn/file/f3c69a91787acd243041f5f0c574f6ee_xhdpi " alt=" "
                        style=" height: 100px; ">
                </a>
            </div>
        </div>
        <div class=" container--choice " style=" margin-top: 20px; ">
            <div class=" box1">
                    <div class="image ">
                        <img src="https://cf.shopee.vn/file/93c7288443f2cebb1debcb88d47db77a_xhdpi " alt=" " style="height:40px; ">
                    </div>
                    <div class="textZone ">
                        <p style="margin:3px;height:80px ">Bảo vệ sức khỏe</p>
                    </div>
            </div>
            <div class="box2">
                <div class="image ">
                    <img src="https://cf.shopee.vn/file/9df57ba80ca225e67c08a8a0d8cc7b85_xhdpi " alt=" " style="height:40px; ">
                </div>
                <div class="textZone ">
                    <p style="margin:3px;height:80px ">Thế giới di động</p>
                </div>
            </div>
            <div class="box3">
                <div class="image ">
                    <img src="https://cf.shopee.vn/file/96385a65fa50800e096bb790fa5c1dba_xhdpi " alt=" " style="height:40px; ">
                </div>
                <div class="textZone ">
                    <p style="margin:3px;height:80px ">Deal sốc 1K</p>
                </div>
            </div>
            <div class="box4">
                <div class="image ">
                    <img src="https://cf.shopee.vn/file/ed849a82e8c66bbff8ec0f2869c6fbb7_xhdpi " alt=" " style="height:40px; ">
                </div>
                <div class="textZone ">
                    <p style="margin:3px;height:80px ">Nạp thẻ, Hóa Đơn & E-Voucher</p>
                </div>
            </div>
            <div class="box5">

                <div class="image ">
                    <img src="https://cf.shopee.vn/file/07ee4296b0a33885418670f2e3ffeca0_xhdpi " alt=" " style="height:40px; ">
                </div>
                <div class="textZone ">
                    <p style="margin:3px;height:80px ">Freeship Extra</p>
                </div>
            </div>
            <div class="box6">
                <div class="image ">
                    <img src="https://cf.shopee.vn/file/765ca66457ec08802f74c529f71a99b7_xhdpi " alt=" " style="height:40px; ">
                </div>
                <div class="textZone ">
                    <p style="margin:3px;height:80px ">Hàng Hiệu - 50%</p>
                </div>
            </div>
            <div class="box7">
                <div class="image ">
                    <img src="https://cf.shopee.vn/file/29961f92098bc9153b88332110a91c87_xhdpi " alt=" " style="height:40px; ">
                </div>
                <div class="textZone ">
                    <p style="margin:3px;height:80px ">Hàng Quốc Tế - Deal x9K</p>
                </div>
            </div>
            <div class="box8">
                <div class="image ">
                    <img src="https://cf.shopee.vn/file/0a3e3aa16b083d6b7e2c25a8f2c16731_xhdpi " alt=" " style="height:40px; ">
                </div>
                <div class="textZone ">
                    <p style="margin:3px;height:80px ">Shopee Premium</p>
                </div>
            </div>
        </div>
    </div>
    <div class="middle--page ">
        <div class="teaser ">
            <img src="https://cf.shopee.vn/file/fb729f83a02fe1af79bf8521b1347a5c " alt=" " style="padding: 25px; ">
        </div>
        <div class="category ">
            <div class="title--cate ">
                <p style="font-family: Arial, Helvetica, sans-serif; ">DANH MỤC</p>
            </div>
            <div class="list--cate ">
                <div class="row1 ">
                    <div class="item--cate ">
                        <div class="image--cate ">
                            <img class="img--c " src="<?php echo $array_imageBanner[0] ?>" alt=" ">
                        </div>
                        <div class="text--cate ">
                            <p style="text-align:center; ">Thời Trang Nam</p>
                        </div>
                    </div>
                    <div class="item--cate ">
                        <div class="image--cate ">
                            <img class="img--c " src="<?php echo $array_imageBanner[1] ?> " alt=" ">
                        </div>
                        <div class="text--cate ">
                            <p style="text-align:center; ">Điện Thoại & Phụ Kiện</p>
                        </div>
                    </div>
                    <div class="item--cate ">
                        <div class="image--cate ">
                            <img class="img--c " src="<?php echo $array_imageBanner[2] ?>" alt=" ">
                        </div>
                        <div class="text--cate ">
                            <p style="text-align:center; ">Thiết Bị Điện Tử</p>
                        </div>
                    </div>
                    <div class="item--cate ">
                        <div class="image--cate ">
                            <img class="img--c " src="<?php echo $array_imageBanner[3] ?>" alt=" ">
                        </div>
                        <div class="text--cate ">
                            <p style="text-align:center; ">Máy Tính & Laptop</p>
                        </div>
                    </div>
                    <div class="item--cate ">
                        <div class="image--cate ">
                            <img class="img--c " src="<?php echo $array_imageBanner[4] ?>" alt=" ">
                        </div>
                        <div class="text--cate ">
                            <p style="text-align:center; ">Máy Ảnh & Máy Quay Phim</p>
                        </div>
                    </div>
                    <div class="item--cate ">
                        <div class="image--cate ">
                            <img class="img--c " src="<?php echo $array_imageBanner[5] ?>" alt=" ">
                        </div>
                        <div class="text--cate ">
                            <p style="text-align:center; ">Đồng Hồ</p>
                        </div>
                    </div>
                    <div class="item--cate ">
                        <div class="image--cate ">
                            <img class="img--c " src="<?php echo $array_imageBanner[6] ?>" alt=" ">
                        </div>
                        <div class="text--cate ">
                            <p style="text-align:center; ">Giày Dép Nam</p>
                        </div>
                    </div>
                    <div class="item--cate ">
                        <div class="image--cate ">
                            <img class="img--c " src="<?php echo $array_imageBanner[7] ?>" alt=" ">
                        </div>
                        <div class="text--cate ">
                            <p style="text-align:center; ">Thiết Bị Điện Gia Dụng</p>
                        </div>
                    </div>
                    <div class="item--cate ">
                        <div class="image--cate ">
                            <img class="img--c " src="<?php echo $array_imageBanner[8] ?>" alt="">
                        </div>
                        <div class=" text--cate">
                            <p style="text-align:center;">Thể Thao & Du Lịch</p>
                        </div>
                    </div>
                    <div class="item--cate">
                        <div class="image--cate">
                            <img class="img--c" src="<?php echo $array_imageBanner[9] ?>" alt="">
                        </div>
                        <div class="text--cate">
                            <p style="text-align:center;">Ô tô & Xe Máy & Xe Đạp</p>
                        </div>
                    </div>
                </div>
                <div class="row2">
                    <div class="item--cate">
                        <div class="image--cate">
                            <img class="img--c" src="<?php echo $array_imageBanner[10] ?>" alt="">
                        </div>
                        <div class="text--cate">
                            <p style="text-align:center;">Thời Trang Nữ</p>
                        </div>
                    </div>
                    <div class="item--cate">
                        <div class="image--cate">
                            <img class="img--c" src="<?php echo $array_imageBanner[11] ?>" alt="">
                        </div>
                        <div class="text--cate">
                            <p style="text-align:center;">Mẹ & Bé</p>
                        </div>
                    </div>
                    <div class="item--cate">
                        <div class="image--cate">
                            <img class="img--c" src="<?php echo $array_imageBanner[12] ?>" alt="">
                        </div>
                        <div class="text--cate">
                            <p style="text-align:center;">Nhà Cửa & Đời Sống</p>
                        </div>
                    </div>
                    <div class="item--cate">
                        <div class="image--cate">
                            <img class="img--c" src="<?php echo $array_imageBanner[13] ?>" alt="">
                        </div>
                        <div class="text--cate">
                            <p style="text-align:center;">Sắc Đẹp</p>
                        </div>
                    </div>
                    <div class="item--cate">
                        <div class="image--cate">
                            <img class="img--c" src="<?php echo $array_imageBanner[14] ?>" alt="">
                        </div>
                        <div class="text--cate">
                            <p style="text-align:center;">Sức khỏe</p>
                        </div>
                    </div>
                    <div class="item--cate">
                        <div class="image--cate">
                            <img class="img--c" src="<?php echo $array_imageBanner[15] ?>" alt="">
                        </div>
                        <div class="text--cate">
                            <p style="text-align:center;">Túi Ví Nữ</p>
                        </div>
                    </div>
                    <div class="item--cate">
                        <div class="image--cate">
                            <img class="img--c" src="<?php echo $array_imageBanner[16] ?>" alt="">
                        </div>
                        <div class="text--cate">
                            <p style="text-align:center;">Phụ Kiện & Trang Sức Nữ</p>
                        </div>
                    </div>
                    <div class="item--cate">
                        <div class="image--cate">
                            <img class="img--c" src="<?php echo $array_imageBanner[17] ?>" alt="">
                        </div>
                        <div class="text--cate">
                            <p style="text-align:center;">Bách Hóa Online</p>
                        </div>
                    </div>
                    <div class="item--cate">
                        <div class="image--cate">
                            <img class="img--c" src="<?php echo $array_imageBanner[18] ?>" alt="">
                        </div>
                        <div class=" text--cate">
                            <p style="text-align:center;">Giày Dép Nữ</p>
                        </div>
                    </div>
                    <div class="item--cate">
                        <div class="image--cate">
                            <img class="img--c" src="<?php echo $array_imageBanner[19] ?>" alt="">
                        </div>
                        <div class="text--cate">
                            <p style="text-align:center;">Nhà Sách Online</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ads">
            <img src="https://cf.shopee.vn/file/6bddb0e241b7004fc3be1fc4473615ee" style="margin-bottom: 15px;" alt="">
        </div>
        <div class="popular--search">
            <div class="title--search">
                <div style="padding: 10px;">
                    <p style="color: red;">TÌM KIẾM HÀNG ĐẦU</p>
                </div>
                <div style="padding: 10px 20px;">
                    <p style="color: red;">Xem tất cả</p>
                </div>
            </div>
            <div class="image--search">
                <div class="img--s">
                    <div class="li--s">
                        <img src="https://cf.shopee.vn/file/6d1416daa515aaf1a3c1b6c5fc47e07b_tn" alt="" style="height: 200px;">
                        <div class="sold--product">
                            <p style="text-align: center;color:white;margin:0;">Bán 139K+/tháng</p>
                        </div>
                    </div>
                    <div class="text--s">
                        <p style="word-wrap: break-word;font-size:20px;font-family: Arial, Helvetica, sans-serif;text-align: center;">
                            Ốp Lưng Iphone</p>
                    </div>
                </div>
                <div class="img--s">
                    <div class="li--s">
                        <img src="https://cf.shopee.vn/file/82658d73a4cfedb88d501f85327560a8_tn" alt="" style="height: 200px;">
                        <div class="sold--product">
                            <p style="text-align: center;color:white;margin:0;">Bán 200K+/tháng</p>
                        </div>
                    </div>
                    <div class="text--s">
                        <p style="word-wrap: break-word;font-size:20px;font-family: Arial, Helvetica, sans-serif;text-align: center;">
                            Ốp Iphone 5</p>
                    </div>
                </div>
                <div class="img--s">
                    <div class="li--s">
                        <img src="https://cf.shopee.vn/file/9ec433bca2d7e0f8f6fc2ce1c5097882_tn" alt="" style="height: 200px;">
                        <div class="sold--product">
                            <p style="text-align: center;color:white;margin:0;">Bán 50K+/tháng</p>
                        </div>
                    </div>
                    <div class="text--s">
                        <p style="word-wrap: break-word;font-size:20px;font-family: Arial, Helvetica, sans-serif;text-align: center;">
                            Quần Ống Rộng Nữ</p>
                    </div>
                </div>
                <div class="img--s">
                    <div class="li--s">
                        <img src="https://cf.shopee.vn/file/1378b90f69b5e6208e6e4dee751c9093_tn" alt="" style="height: 200px;">
                        <div class="sold--product">
                            <p style="text-align: center;color:white;margin:0;">Bán 87K+/tháng</p>
                        </div>
                    </div>
                    <div class="text--s">
                        <p style="word-wrap: break-word;font-size:20px;font-family: Arial, Helvetica, sans-serif;text-align: center;">
                            Bông Tẩy Trang 3 Lớp Cotton Pads</p>
                    </div>
                </div>
                <div class="img--s">
                    <div class="li--s">
                        <img src="https://cf.shopee.vn/file/874878564caa2dbaf2ac94b18334ecf9_tn" alt="" style="height: 200px;">
                        <div class="sold--product">
                            <p style="text-align: center;color:white;margin:0;">Bán 20K+/tháng</p>
                        </div>
                    </div>
                    <div class="text--s">
                        <p style="word-wrap: break-word;font-size:20px;font-family: Arial, Helvetica, sans-serif;text-align: center;">
                            Bút Kẻ Mắt Chống Nước</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="suggest-items">
            <div class="title-item__first" style="padding: 20px;">
                <span style="margin-right: 40px;color: rgb(248, 99, 41);font-size: larger;">Gợi ý hôm nay</span>
            </div>
            <div class="title-item__second" style="padding: 20px; ">
                <span style="color: rgb(248, 99, 41);align-items: center; "><b style="color: rgb(190, 26, 20);font-family: Arial, Helvetica, sans-serif;margin-right: 5px;font-size: 20px; ">15.3</b>Siêu hội tiêu dùng</span>
            </div>
        </div>
            <div class="list-items2 ">
                <div class="row-items ">
                    <?php
                        $q=0;
                    ?>
                    <div class="each-item ">
                        <img class="img--sug " src="<?php echo $array_imageDanhMuc[$q];$q++;?> " alt=" ">
                        <p class="each-item__details ">Bình Giữ Nhiệu Họa Tiết Xương Rồng Xinh Xắn</p>
                        <div class="price-item">
                            <span class="price">₫139.300</span>
                            <span class="sold">Đã bán 1k</span>
                        </div>
                    </div>
                    <div class="each-item ">
                        <img class="img--sug " src="<?php echo $array_imageDanhMuc[$q];$q++;?>" alt=" ">
                        <p class="each-item__details ">Quần legging nữ lửng nâng mông co dãn 4 chiều biker...</p>
                        <div class="price-item">
                            <span class="price">₫12.000</span>
                            <span class="sold">Đã bán 25,7k</span>
                        </div>
                    </div>
                    <div class="each-item ">
                        <img class="img--sug " src="<?php echo $array_imageDanhMuc[$q];$q++;?>" alt=" ">
                        <p class="each-item__details ">[HCM]Dép Nữ Thời Trang Họa Tiết Gấu Nhỏ Xinh Xắn...</p>
                        <div class="price-item">
                            <span class="price">₫36.000</span>
                            <span class="sold">Đã bán 1,7k</span>
                        </div>
                    </div>
                    <div class="each-item ">
                        <img class="img--sug " src="<?php echo $array_imageDanhMuc[$q];$q++;?> " alt=" ">
                        <p class="each-item__details ">Đầm Polo Nữ Ngắn Tay Cổ Viền Dáng Ôm Siêu Xinh</p>
                        <div class="price-item">
                            <span class="price">₫19.900</span>
                            <span class="sold">Đã bán 534</span>
                        </div>
                    </div>
                    <div class="each-item ">
                        <img class="img--sug " src="<?php echo $array_imageDanhMuc[$q];$q++;?>" alt=" ">
                        <p class="each-item__details ">Áo phông tay lỡ nam nữ Unisex LEET form rộng vải...</p>
                        <div class="price-item">
                            <span class="price">₫69.000</span>
                            <span class="sold">Đã bán 761</span>
                        </div>
                    </div>
                    <div class="each-item ">
                        <img class="img--sug " src="<?php echo $array_imageDanhMuc[$q];$q++;?>" alt=" ">
                        <p class="each-item__details ">Kệ Để Giày Dép Inox 5 Tần Hàn Quốc Cao Cấp - Kệ Để..</p>
                        <div class="price-item">
                            <span class="price">₫13.300</span>
                            <span class="sold">Đã bán 421</span>
                        </div>
                    </div>
                </div>
                <div class="row-items ">
                    <div class="each-item ">
                        <img class="img--sug " src="<?php echo $array_imageDanhMuc[$q];$q++;?>" alt=" ">
                        <p class="each-item__details ">Son nắp xanh A32 đỏ nâu - a31 dỏ đất handmade full mã mà...</p>
                        <div class="price-item">
                            <span class="price">₫10.000</span>
                            <span class="sold">Đã bán 1,1k</span>
                        </div>
                    </div>
                    <div class="each-item ">
                        <img class="img--sug " src="<?php echo $array_imageDanhMuc[$q];$q++;?>" alt=" ">
                        <p class="each-item__details ">Đồng hồ thời trang nam nữ Led phong cách Hàn Quốc</p>
                        <div class="price-item">
                            <span class="price">₫39.000</span>
                            <span class="sold">Đã bán 89</span>
                        </div>
                    </div>
                    <div class="each-item ">
                        <img class="img--sug " src="<?php echo $array_imageDanhMuc[$q];$q++;?>" alt=" ">
                        <p class="each-item__details ">Tai Nghe F9 Pro Bluetooth 5.0 Không Dây Cảm Biến Vân Tay..</p>
                        <div class="price-item">
                            <span class="price">₫5.000</span>
                            <span class="sold">Đã bán 2,6k</span>
                        </div>
                    </div>
                    <div class="each-item ">
                        <img class="img--sug " src="<?php echo $array_imageDanhMuc[$q];$q++;?> " alt=" ">
                        <p class="each-item__details ">Đồ Ngủ Pijama Quần Dài-cánh dơi- Bộ Mặc Nhà Kate Thái...</p>
                        <div class="price-item">
                            <span class="price">₫16.000</span>
                            <span class="sold">Đã bán 5.2k</span>
                        </div>
                    </div>
                    <div class="each-item ">
                        <img class="img--sug " src="<?php echo $array_imageDanhMuc[$q];$q++;?> " alt=" ">
                        <p class="each-item__details ">Free Ship Dép balen Nam Đẹp - Dép Quai Ngang Nam Nữ...</p>
                        <div class="price-item">
                            <span class="price">₫25.000</span>
                            <span class="sold">Đã bán 48</span>
                        </div>
                    </div>
                    <div class="each-item ">
                        <img class="img--sug " src="<?php echo $array_imageDanhMuc[$q];$q++;?>" alt=" ">
                        <p class="each-item__details ">[ Free Ship - Xả kho] Dép Lê Nữ Chữ H Lót Đen May Viền...</p>
                        <div class="price-item">
                            <span class="price">₫2.800</span>
                            <span class="sold">Đã bán 1,9k</span>
                        </div>
                    </div>
                </div>
                <div class="row-items ">
                    <div class="each-item ">
                        <img class="img--sug " src="<?php echo $array_imageDanhMuc[$q];$q++;?> " alt=" ">
                        <p class="each-item__details ">Ví nữ đẹp giá rẻ ngắn cầm tay mini nhỏ gọn dễ thương cute...</p>
                        <div class="price-item">
                            <span class="price">₫8.200</span>
                            <span class="sold">Đã bán 866</span>
                        </div>
                    </div>
                    <div class="each-item ">
                        <img class="img--sug " src="<?php echo $array_imageDanhMuc[$q];$q++;?>" alt=" ">
                        <p class="each-item__details ">[Mã FAMARAL1 giảm 10l đơn 50K] Giày sục NY bata đế bằ...</p>
                        <div class="price-item">
                            <span class="price">₫60.000</span>
                            <span class="sold">Đã bán 648</span>
                        </div>
                    </div>
                    <div class="each-item ">
                        <img class="img--sug " src="<?php echo $array_imageDanhMuc[$q];$q++;?> " alt=" ">
                        <p class="each-item__details ">Bình Giữ Nhiệu Họa Tiết Xương Rồng Xinh Xắn</p>
                        <div class="price-item">
                            <span class="price">₫16.000</span>
                            <span class="sold">Đã bán 2,1k</span>
                        </div>
                    </div>
                    <div class="each-item ">
                        <img class="img--sug " src="<?php echo $array_imageDanhMuc[$q];$q++;?>" alt=" ">
                        <p class="each-item__details ">[Mã FATHANG5 giảm 10K đơn 50K] Guốc cao gót nữ đế...</p>
                        <div class="price-item">
                            <span class="price">₫74.000</span>
                            <span class="sold">Đã bán 10,4k</span>
                        </div>
                    </div>
                    <div class="each-item ">
                        <img class="img--sug " src="<?php echo $array_imageDanhMuc[$q];$q++;?>" alt=" ">
                        <p class="each-item__details ">[Mã FAMARAL1 giảm 10K đơn từ 50K] Dép quai ngang nữ...</p>
                        <div class="price-item">
                            <span class="price">9.000</span>
                            <span class="sold">Đã bán 7,4k</span>
                        </div>
                    </div>
                    <div class="each-item ">
                        <img class="img--sug " src="<?php echo $array_imageDanhMuc[$q];$q++;?>" alt=" ">
                        <p class="each-item__details ">Tai nghe Bluetooth không dây l7s TWS Apple Airpods mới</p>
                        <div class="price-item">
                            <span class="price">₫20.000</span>
                            <span class="sold">Đã bán 16</span>
                        </div>
                    </div>
                </div>
                <div class="row-items ">
                    <div class="each-item ">
                        <img class="img--sug " src="<?php echo $array_imageDanhMuc[$q];$q++;?>" alt=" ">
                        <p class="each-item__details ">[Mã FAMARAL1 giảm 10K đơn từ 50K] giày sục thể thao thê...</p>
                        <div class="price-item">
                            <span class="price">₫34.000</span>
                            <span class="sold">Đã bán 3.4k</span>
                        </div>
                    </div>
                    <div class="each-item ">
                        <img class="img--sug " src="<?php echo $array_imageDanhMuc[$q];$q++;?>" alt=" ">
                        <p class="each-item__details ">Áo Polo tay lỡ, form Oversize, họa tiết hình mặt cười, phon...</p>
                        <div class="price-item">
                            <span class="price">₫12.000</span>
                            <span class="sold">Đã bán 340</span>
                        </div>
                    </div>
                    <div class="each-item ">
                        <img class="img--sug " src="<?php echo $array_imageDanhMuc[$q];$q++;?> " alt=" ">
                        <p class="each-item__details ">(Giá sỉ) Đồng hồ thời trang nam nữ Led phong cách Hàn</p>
                        <div class="price-item">
                            <span class="price">₫340.000</span>
                            <span class="sold">Đã bán 4.5k</span>
                        </div>
                    </div>
                    <div class="each-item ">
                        <img class="img--sug " src="<?php echo $array_imageDanhMuc[$q];$q++;?> " alt=" ">
                        <p class="each-item__details ">Váy ngủ sexy gợi cảm - Đầm ngủ xuyên thấu 2 dây kém...</p>
                        <div class="price-item">
                            <span class="price">₫43.300</span>
                            <span class="sold">Đã bán 4.3k</span>
                        </div>
                    </div>
                    <div class="each-item ">
                        <img class="img--sug " src="<?php echo $array_imageDanhMuc[$q];$q++;?>" alt=" ">
                        <p class="each-item__details ">[GIÁ HỦY DIỆT] Set Bộ Shorts Unisex - Bộ Đùi Thể Thao (c...</p>
                        <div class="price-item">
                            <span class="price">₫34.000</span>
                            <span class="sold">Đã bán 399</span>
                        </div>
                    </div>
                    <div class="each-item ">
                        <img class="img--sug " src="<?php echo $array_imageDanhMuc[$q];$q++;?>" alt=" ">
                        <p class="each-item__details ">Túi Chườm Nóng Chống Nổ Thiết Kế Dễ Thương Dành C...</p>
                        <div class="price-item">
                            <span class="price">₫34.500</span>
                            <span class="sold">Đã bán 223</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="near-last" style="width: 100%;display: flex;justify-content: center;">
                <div class="more">
                    <span>Xem thêm</span>
                </div>
            </div>
            <div class="footer ">
                <div class="main-title ">
                    <h2 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">SHOPEE - GÌ CŨNG CÓ, MUA HẾT Ở SHOPEE</h2>
                    <p>Shopee - ứng dụng mua sắm trực tuyến thú vị, tin cậy, an toàn và miễn phí! Shopee là nền tảng của giao dịch trực tuyến hàng đầu ở Đông Nam Á, Việt Nam, <a href=" ">Singapore</a>,<a href=" ">Malaysia</a> ,
                        <a href=" ">Indonesia</a>,<a href=" ">Thái Lan</a>, <a href=" ">Đài Loan</a> và Brazil.
                    </p>
                    <br>
                    <a href=" ">Xem thêm<i class="fa-solid fa-angle-right "></i></a>
                    <br>
                </div>
                <div class="table-list ">
                    <div class="title-list1 ">
                        <h3>Danh Mục</h3>
                    </div>
                </div>
                <div class="col-split ">
                    <div class="col-list ">
                        <div class="title-list2 ">
                            <h4>THỜI TRANG NAM</h4>
                            <div class="href-list ">
                                <a href=" ">Áo Khoác</a>
                                <a href=" ">Áo Vest và Blazer</a>
                                <a href=" ">Áo Hoodie, Áo Len & Áo Nỉ</a>
                                <a href=" ">Quần Jeans</a>
                                <a href=" ">Quần Dài/Quần Âu</a>
                                <a href=" ">Quần Short</a>
                                <a href=" ">Áo</a>
                                <a href=" ">Áo Ba Lỗ</a>
                                <a href=" ">Đồ Lót</a>
                                <a href=" ">Đồ Ngủ</a>
                                <a href=" ">Đồ Bộ</a>
                                <a href=" ">Vớ/Tất</a>
                                <a href=" ">Trang Phục Truyền Thống</a>
                                <a href=" ">Đồ Hóa Trang</a>
                                <a href=" ">Trang Phục Hành Nghề</a>
                                <a href=" ">Khác</a>
                                <a href=" ">Trang Sức Nam</a>
                                <a href=" ">Kính Mắt Nam</a>
                                <a href=" ">Thắt Lưng Nam</a>
                                <a href=" ">Cà Vạt & Nơ Cổ</a>
                                <a href=" ">Phụ Kiện Nam</a>
                            </div>
                        </div>
                        <div class="title-list2 ">
                            <h4>NHÀ CỬA & ĐỜI SỐNG</h4>
                            <div class="href-list ">
                                <a href=" ">Chăn, Ga, Gối & Nệm</a>
                                <a href=" ">Đồ nội thất</a>
                                <a href=" ">Trang trí nhà cửa</a>
                                <a href=" ">Dụng cụ & nhà bếp và hộp đựng thực phẩm</a>
                                <a href=" ">Đèn</a>
                                <a href=" ">Ngoài trời & Sân vườn</a>
                                <a href=" ">Đồ dùng phòng tắm</a>
                                <a href=" ">Vật phẩm thờ cúng</a>
                                <a href=" ">Đồ trang trí tiệc</a>
                                <a href=" ">Chăm sóc nhà cửa và giặt ủi</a>
                                <a href=" ">Sắp xếp nhà cửa</a>
                                <a href=" ">Dụng cụ pha chế</a>
                                <a href=" ">Tinh dầu thơm phòng</a>
                                <a href=" ">Đồ dùng phòng tắm</a>
                            </div>
                        </div>
                        <div class="title-list2 ">
                            <h4>ĐỒNG HỒ</h4>
                            <div class="href-list ">
                                <a href=" ">Đồng Hồ Nam</a>
                                <a href=" ">Đồng Hồ Nữ</a>
                                <a href=" ">Bộ Đồng Hồ & Đồng Hồ Cặp</a>
                                <a href=" ">Đồng Hồ Trẻ Em</a>
                                <a href=" ">Phụ Kiện Đồng Hồ</a>
                                <a href=" ">Khác</a>
                            </div>
                        </div>
                        <div class="title-list2 ">
                            <h4>PHỤ KIỆN & TRANG SỨC NỮ</h4>
                            <div class="href-list ">
                                <a href=" ">Nhẫn</a>
                                <a href=" ">Bông tai</a>
                                <a href=" ">Khăn Choàng</a>
                                <a href=" ">Găng tay</a>
                                <a href=" ">Phụ kiện tóc</a>
                                <a href=" ">Vòng tay & Lắc tay</a>
                                <a href=" ">Lắc chân</a>
                                <a href=" ">Mũ</a>
                                <a href=" ">Dây chuyền</a>
                                <a href=" ">Kính mắt</a>
                                <a href=" ">Kim loại quý</a>
                                <a href=" ">Thắt Lưng</a>
                                <a href=" ">Cà Vạt & Nơ Cổ</a>
                                <a href=" ">Phụ Kiện Thêm</a>
                                <a href=" ">Bộ Phụ Kiện</a>
                                <a href=" ">Khác</a>
                                <a href=" ">Vớ/ Tất</a>
                                <a href=" ">Ô/ Dù</a>
                            </div>
                        </div>
                        <div class="title-list2 ">
                            <h4>BALO & TÚI VÍ NAM</h4>
                            <div class="href-list ">
                                <a href=" ">Ba Lô Nam</a>
                                <a href=" ">Ba Lô Laptop Nam</a>
                                <a href=" ">Túi & Cặp Đựng Laptop</a>
                                <a href=" ">Túi Chống Sốc Laptop Nam</a>
                                <a href=" ">Túi Tote Nam</a>
                                <a href=" ">Cặp sách Công Sở Nam</a>
                                <a href=" ">Ví Cầm Tay Nam</a>
                                <a href=" ">Túi Đeo Hông & Túi Đeo Ngực Nam</a>
                                <a href=" ">Túi Đeo Chéo nam</a>
                                <a href=" ">Bóp/ Ví Nam</a>
                                <a href=" ">Khác</a>
                            </div>
                        </div>
                        <div class="title-list2 ">
                            <h4>VOUCHER & DỊCH VỤ</h4>
                            <div class="href-list ">
                                <a href=" ">Nhà hàng & Ăn Uống</a>
                                <a href=" ">Sự kiện & Giai trí</a>
                                <a href=" ">Nạp tiền tài khoản</a>
                                <a href=" ">Sức khỏe & Làm đẹp</a>
                                <a href=" ">Gọi xe</a>
                                <a href=" ">Khóa học</a>
                                <a href=" ">Du lịch & Khác sạn</a>
                                <a href=" ">Mua sắm</a>
                                <a href=" ">Mã quà Shopee</a>
                                <a href=" ">Thanh toán hóa đơn</a>
                                <a href=" ">Dịch vụ khác</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-list ">
                        <div class="title-list2 ">
                            <h4>THỜI TRANG NỮ</h4>
                            <div class="href-list ">
                                <a href=" ">Quần</a>
                                <a href=" ">Quần đùi</a>
                                <a href=" ">Chân váy</a>
                                <a href=" ">Quần jeans</a>
                                <a href=" ">Đầm/ Váy</a>
                                <a href=" ">Váy cưới</a>
                                <a href=" ">Đồ liền thân</a>
                                <a href=" ">Áo khoác, Áo choàng & Vest</a>
                                <a href=" ">Áo len & Cardigan</a>
                                <a href=" ">Hoodie và Áo nỉ</a>
                                <a href=" ">Bộ</a>
                                <a href=" ">Đồ lót</a>
                                <a href=" ">Đồ ngủ</a>
                                <a href=" ">Áo</a>
                                <a href=" ">Đồ tập</a>
                                <a href=" ">Đồ Bầu</a>
                                <a href=" ">Đồ truyền thống</a>
                                <a href=" ">Đồ hóa trang</a>
                                <a href=" ">Vải</a>
                                <a href=" ">Vớ/Tất</a>
                                <a href=" ">Khác</a>
                            </div>
                        </div>
                        <div class="title-list2 ">
                            <h4>MÁY TÍNH & LAPTOP</h4>
                            <div class="href-list ">
                                <a href=" ">Máy Tính Bàn</a>
                                <a href=" ">Màn Hình</a>
                                <a href=" ">Linh Kiện Máy Tính</a>
                                <a href=" ">Thiết Bị Lưu Trữ</a>
                                <a href=" ">Thiết Bị Mạng</a>
                                <a href=" ">Máy In, Máy Scan & Máy Chiếu</a>
                                <a href=" ">Phụ Kiện Máy Tính</a>
                                <a href=" ">Laptop</a>
                                <a href=" ">Khác</a>
                                <a href=" ">Gaming</a>
                            </div>
                        </div>
                        <div class="title-list2 ">
                            <h4>GIÀY DÉP NỮ</h4>
                            <div class="href-list ">
                                <a href=" ">Bốt</a>
                                <a href=" ">Giày Thể Thao/Sneaker</a>
                                <a href=" ">Giày đế trắng</a>
                                <a href=" ">Giày Cao Gót</a>
                                <a href=" ">Giày Đế Xuồng</a>
                                <a href=" ">Xăng-đan và Dép</a>
                                <a href=" ">Phụ Kiện Giày</a>
                                <a href=" ">Giày Khác</a>
                            </div>
                        </div>
                        <div class="title-list2 ">
                            <h4>THỂ THAO & DU LỊCH</h4>
                            <div class="href-list ">
                                <a href=" ">Vali</a>
                                <a href=" ">Túi du lịch</a>
                                <a href=" ">Phụ kiện du lịch</a>
                                <a href=" ">Dụng cụ thể thao & Dã ngoại</a>
                                <a href=" ">Giày Thể Thao</a>
                                <a href=" ">Thời Trang Thể Thao & Dã Ngoại</a>
                                <a href=" ">Phụ Kiện Thể Thao & Dã Ngoại</a>
                                <a href=" ">Khác</a>
                            </div>
                        </div>
                        <div class="title-list2 ">
                            <h4>THỜI TRANG TRẺ EM</h4>
                            <div class="href-list ">
                                <a href=" ">Trang phục bé trai</a>
                                <a href=" ">Trang phục bé gái</a>
                                <a href=" ">Giày dép bé trai</a>
                                <a href=" ">Giày dép bé gái</a>
                                <a href=" ">Khác</a>
                                <a href=" ">Quần áo em bé</a>
                                <a href=" ">Giày tập đi & Tất sơ sinh</a>
                                <a href=" ">Phụ kiện trẻ em</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-list ">
                        <div class="title-list2 ">
                            <h4>ĐIỆN THOẠI & PHỤ KIỆN</h4>
                            <div class="href-list ">
                                <a href=" ">Điện thoại</a>
                                <a href=" ">Máy tính bảng</a>
                                <a href=" ">Pin Dự Phòng</a>
                                <a href=" ">Pin Gắn Trong, Cáp và Bộ Sạc</a>
                                <a href=" ">Ốp lưng, bao da, Miếng dán điện thoại</a>
                                <a href=" ">Bảo vệ màn hình</a>
                                <a href=" ">Đế giữ điện thoại & Gậy chụp ảnh</a>
                                <a href=" ">Thẻ nhớ</a>
                                <a href=" ">Sim</a>
                                <a href=" ">Khác</a>
                                <a href=" ">Điện Thoại Bàn</a>
                            </div>
                        </div>
                        <div class="title-list2 ">
                            <h4>SẮC ĐẸP</h4>
                            <div class="href-list ">
                                <a href=" ">Chăm sóc da mặt</a>
                                <a href=" ">Tắm & chăm sóc cơ thể</a>
                                <a href=" ">Trang điểm</a>
                                <a href=" ">Chăm sóc tóc</a>
                                <a href=" ">Dụng cụ & Phụ kiện làm đẹp</a>
                                <a href=" ">Vệ sinh răng miệng</a>
                                <a href=" ">Nước hoa</a>
                                <a href=" ">Chăm sóc nam giới</a>
                                <a href=" ">Khác</a>
                                <a href=" ">Chăm sóc phụ nữ</a>
                                <a href=" ">Bộ sưu tập làm đẹp</a>
                            </div>
                        </div>
                        <div class="title-list2 ">
                            <h4>GIÀY DÉP NAM</h4>
                            <div class="href-list ">
                                <a href=" ">Bốt</a>
                                <a href=" ">Giày thể thao/Sneaker</a>
                                <a href=" ">Giày Sục</a>
                                <a href=" ">Giày Tây Lười</a>
                                <a href=" ">Giày Oxfords & Giày Buộc Dây</a>
                                <a href=" ">Xăng-đan & Dép</a>
                                <a href=" ">Phụ kiện giày dép</a>
                                <a href=" ">Khác</a>
                            </div>
                        </div>
                        <div class="title-list2 ">
                            <h4>BÁCH HÓA ONLINE</h4>
                            <div class="href-list ">
                                <a href=" ">Đồ ăn vặt</a>
                                <a href=" ">Đồ chế biến sẵn</a>
                                <a href=" ">Nhu yếu phẩm</a>
                                <a href=" ">Nguyên liệu nấu ăn</a>
                                <a href=" ">Đồ làm bánh</a>
                                <a href=" ">Sữa - trứng</a>
                                <a href=" ">Đồ uống</a>
                                <a href=" ">Ngũ cốc & mứt</a>
                                <a href=" ">Các loại bánh</a>
                                <a href=" ">Đồ uống có cồn</a>
                                <a href=" ">Bộ quà tặng</a>
                                <a href=" ">Thực phẩm tươi sống và thực phẩm đông lạnh</a>
                                <a href=" ">Khác</a>
                            </div>
                        </div>
                        <div class="title-list2 ">
                            <h4>ĐỒ CHƠI</h4>
                            <div class="href-list ">
                                <a href=" ">Đồ chơi mô hình</a>
                                <a href=" ">Đồ chơi giải trí</a>
                                <a href=" ">Đồ chơi giáo dục</a>
                                <a href=" ">Đồ chơi cho trẻ sơ sinh & trẻ nhỏ</a>
                                <a href=" ">Đồ chơi vận động & ngoài trời</a>
                                <a href=" ">Búp bê & Đồ chơi nhồi bóng</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-list ">
                        <div class="title-list2 ">
                            <h4>MẸ & BÉ</h4>
                            <div class="href-list ">
                                <a href=" ">Đồ dùng du lịch cho bé</a>
                                <a href=" ">Đồ dùng ăn dặm cho bé</a>
                                <a href=" ">Phụ kiện cho mẹ</a>
                                <a href=" ">Chăm sóc sức khỏe mẹ</a>
                                <a href=" ">Đồ dùng phòng tắm & Chăm sóc cơ thể bé</a>
                                <a href=" ">Đồ dùng phòng ngủ cho bé</a>
                                <a href=" ">An toàn cho bé</a>
                                <a href=" ">Thực phẩm cho bé</a>
                                <a href=" ">Chăm sóc sức khỏe bé</a>
                                <a href=" ">Tã & bô em bé</a>
                                <a href=" ">Đồ chơi</a>
                                <a href=" ">Bộ & Gói quà tặng</a>
                                <a href=" ">Khác</a>
                                <a href=" ">Sữa công thức trên 24 tháng</a>
                                <a href=" ">Sữa công thức 0-24 tháng tuổi</a>
                            </div>
                        </div>
                        <div class="title-list2 ">
                            <h4>MÁY ẢNH & MÁY QUAY PHIM</h4>
                            <div class="href-list ">
                                <a href=" ">Máy ảnh - Máy quay phim</a>
                                <a href=" ">Camera giám sát & Camera hệ thống</a>
                                <a href=" ">Thẻ nhớ</a>
                                <a href=" ">Ống kính</a>
                                <a href=" ">Phụ kiện máy ảnh</a>
                                <a href=" ">Máy bay camera & Phụ kiện</a>
                            </div>
                        </div>
                        <div class="title-list2 ">
                            <h4>TÚI VÍ NỮ</h4>
                            <div class="href-list ">
                                <a href=" ">Ba Lô Nữ</a>
                                <a href=" ">Cặp Laptop</a>
                                <a href=" ">Ví Dự Tiệc & Ví Cầm Tay</a>
                                <a href=" ">Túi Đeo Hông & Túi Đeo Ngực</a>
                                <a href=" ">Túi Tote</a>
                                <a href=" ">Tui Quai Xách</a>
                                <a href=" ">Túi Đeo Chéo</a>
                                <a href=" ">Ví/Bóp Nữ</a>
                                <a href=" ">Phụ Kiện Túi</a>
                                <a href=" ">Khác</a>
                            </div>
                        </div>
                        <div class="title-list2 ">
                            <h4>Ô TÔ & XE MÁY & XE ĐẠP</h4>
                            <div class="href-list ">

                            </div>
                        </div>
                        <div class="title-list2 ">
                            <h4>GIẶT GIỮ & CHĂM SÓC NHÀ CỬA</h4>
                            <div class="href-list ">
                                <a href=" ">Xe đạp, xe điện</a>
                                <a href=" ">Mô tô, xe máy</a>
                                <a href=" ">Xe Ô tô</a>
                                <a href=" ">Mũ bảo hiểm</a>
                                <a href=" ">Phụ kiện xe máy</a>
                                <a href=" ">Phụ kiện xe đạp</a>
                                <a href=" ">Phụ kiện bên trong ô tô</a>
                                <a href=" ">Dầu nhớt & dầu nhờn</a>
                                <a href=" ">Phụ tùng ô tô</a>
                                <a href=" ">Phụ tùng xe máy</a>
                                <a href=" ">Phụ kiện bên ngoài ô tô</a>
                                <a href=" ">Chăm sóc ô tô</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-list ">
                        <div class="title-list2 ">
                            <h4>THIẾT BỊ ĐIỆN TỬ</h4>
                            <div class="href-list ">
                                <a href=" ">Thiết bị đeo thông minh</a>
                                <a href=" ">Phụ kiện tivi</a>
                                <a href=" ">Máy Game Console</a>
                                <a href=" ">Phụ kiện Console</a>
                                <a href=" ">Đĩa game</a>
                                <a href=" ">Linh phụ kiện</a>
                                <a href=" ">Tai Nghe</a>
                                <a href=" ">Loa</a>
                                <a href=" ">Tivi</a>
                                <a href=" ">Tivi Box</a>
                                <a href=" ">Headphones</a>
                            </div>
                        </div>
                        <div class="title-list2 ">
                            <h4>SỨC KHỎE</h4>
                            <div class="href-list ">
                                <a href=" ">Vật tư y tế</a>
                                <a href=" ">Chống muỗi & xua đuổi côn trùng</a>
                                <a href=" ">Thực phẩm chức năng</a>
                                <a href=" ">Tã người lớn</a>
                                <a href=" ">Hỗ trợ làm đẹp</a>
                                <a href=" ">Hỗ trợ tình dục</a>
                                <a href=" ">Dụng cụ massage và trị liệu</a>
                                <a href=" ">Khác</a>
                            </div>
                        </div>
                        <div class="title-list2 ">
                            <h4>THIẾT BỊ ĐIỆN DA DỤNG</h4>
                            <div class="href-list ">
                                <a href=" ">Đồ gia dụng nhà bếp</a>
                                <a href=" ">Đồ gia dụng lớn</a>
                                <a href=" ">Máy hút bụi & Thiết bị làm sạch</a>
                                <a href=" ">Quạt & Máy nóng lạnh</a>
                                <a href=" ">Thiết bị chăm sóc quần áo</a>
                                <a href=" ">Khác</a>
                                <a href=" ">Máy xxay, ép, máy đánh trứng trộng bột, máy xay thực phẩm</a>
                                <a href=" ">Bếp điện</a>
                            </div>
                        </div>
                        <div class="title-list2 ">
                            <h4>NHÀ SÁCH ONLINE</h4>
                            <div class="href-list ">
                                <a href=" ">Sách Tiếng Việt</a>
                                <a href=" ">Sách ngoại văn</a>
                                <a href=" ">Gói quà</a>
                                <a href=" ">Bút Viết</a>
                                <a href=" ">Dụng cụ học sinh & văn phòng</a>
                                <a href=" ">Màu, họa cụ và đồ thủ công</a>
                                <a href=" ">Sổ và Giấy các loại</a>
                                <a href=" ">Quà Lưu Niệm</a>
                                <a href=" ">Nhạc cụ và phụ kiện âm nhạc</a>
                            </div>
                        </div>
                        <div class="title-list2 ">
                            <h4>CHĂM SÓC THÚ CƯNG</h4>
                            <div class="href-list ">
                                <a href=" ">Thức ăn cho thú cưng</a>
                                <a href=" ">Phụ kiện cho thú cưng</a>
                                <a href=" ">Vệ sinh cho thú cưng</a>
                                <a href=" ">Quần áo & phụ kiện</a>
                                <a href=" ">Chăm sóc sức khỏe</a>
                                <a href=" ">Khác</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="below">
                <div class="col-list2">
                    <h4>CHĂM SÓC KHÁCH HÀNG</h4>
                    <div class="href-list2">
                        <a href="">Trung Tâm Trợ Giúp</a>
                    </div>
                    <div class="href-list2">
                        <a href="">Shopee Blog</a>
                    </div>
                    <div class="href-list2">
                        <a href="">Shopee Mall</a>
                    </div>
                    <div class="href-list2">
                        <a href="">Hướng dẫn mua hàng</a>
                    </div>
                    <div class="href-list2">
                        <a href="">Hướng dẫn bán hàng</a>
                    </div>
                    <div class="href-list2">
                        <a href="">Thanh Toán</a>
                    </div>
                    <div class="href-list2">
                        <a href="">Shopee Xu</a>
                    </div>
                    <div class="href-list2">
                        <a href="">Vận Chuyển</a>
                    </div>
                    <div class="href-list2">
                        <a href="">Trả Hàng & Hoàn Tiền</a>
                    </div>
                    <div class="href-list2">
                        <a href="">Chăm Sóc Khách Hàng</a>
                    </div>
                    <div class="href-list2">
                        <a href="">Chính Sách Bảo Hành</a>
                    </div>
                </div>
                <div class="col-list2">
                    <h4>VỀ SHOPEE</h4>
                    <div class="href-list2">
                        <a href="">Giới Thiệu Về Shopee Việt Nam</a>
                    </div>
                    <div class="href-list2">
                        <a href="">Tuyển Dụng</a>
                    </div>
                    <div class="href-list2">
                        <a href="">Điều Khoản Shopee</a>
                    </div>
                    <div class="href-list2">
                        <a href="">Chính Sách Bảo Mật</a>
                    </div>
                    <div class="href-list2">
                        <a href="">Chính Hãng</a>
                    </div>
                    <div class="href-list2">
                        <a href="">Kênh Người Bán</a>
                    </div>
                    <div class="href-list2">
                        <a href="">Flash Sale</a>
                    </div>
                    <div class="href-list2">
                        <a href="">Chương Trình Tiếp Thị Liên Kết Shopee</a>
                    </div>
                    <div class="href-list2">
                        <a href="">Liên Hệ Với Truyền Thông</a>
                    </div>
                </div>
                <div class="col-list2">
                    <div class="page">
                        <h4>THEO DÕI CHÚNG TÔI TRÊN</h4>
                        <div class="icon"><i class="fa-brands fa-facebook"></i>&ensp;<a href="">Facebook</a></div>
                        <div class="icon">
                            <i class="fa-brands fa-instagram" "></i>&ensp;<a href=" ">Instagram</a></div>
            <div class=" icon "><i class=" fa-brands fa-linkedin-in "></i>&ensp;<a href=" ">LinkedIn</a></div>
           </div>
        </div>
        <div class=" col-list2 ">
            <h4>TẢI ỨNG DỤNG SHOPEE NGAY THÔI</h4>
           <div class=" app-icon ">
            <div class=" qr-code ">
                <img style=" height: 80px; " src=" https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg//assets/d91264e165ed6facc6178994d5afae79.png " alt=" ">
            </div>
            <div class=" app ">
                <div><img src=" https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg//assets/39f189e19764dab688d3850742f13718.png " alt=" " class=" app-img "></div>
                <div><img src=" https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg//assets/f4f5426ce757aea491dce94201560583.png " alt=" " class=" app-img "></div>
                <div><img src=" https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg//assets/1ae215920a31f2fc75b00d4ee9ae8551.png " alt=" " class=" app-img "></div>
            </div>
           </div>
        </div>
        <div class=" origional ">
            <div class=" ban-quyen ">
                <p>© 2022 Shopee. Tất cả các quyền được bảo lưu.</p>
            </div>
            <div class=" country-area ">
                <div>Quốc gia & Khu vực:</div>
                <div class=" country "><a href=" ">Singapore</a></div>
                <div class=" country "><a href=" ">Indonesia</a></div>
                <div class=" country "><a href=" ">Đài Loan</a></div>
                <div class=" country "><a href=" ">Thái Lan</a></div>
                <div class=" country "><a href=" ">Malaysia</a></div>
                <div class=" country "><a href=" ">Việt Nam</a></div>
                <div class=" country "><a href=" ">Philipines</a></div>
                <div class=" country "><a href=" ">Brazil</a></div>
                <div class=" country "><a href=" ">México</a></div>
                <div class=" country "><a href=" ">Colombia</a></div>
                <div class=" country "><a href=" ">Chile</a></div>
                <div class=" country "><a href=" ">Poland</a></div>
                <div class=" country "><a href=" ">Spain</a></div>
                <div class=" country "><a href=" ">France</a></div>
                <div class=" country "><a href=" ">India</a></div>
                <div class=" country ">
                    <a href=" ">Argentina</a>
                </div>
            </div>
        </div>
    </div>
    <div class=" the-last-one ">
        <div class=" the-last-one-title ">
            <div class=" the-last-one-title-list ">
                <a href=" ">CHÍNH SÁCH BẢO MẬT</a>&emsp;&emsp;&emsp;|&emsp;&emsp;&emsp;
            </div>
            <div class=" the-last-one-title-list ">
                <a href=" ">QUY CHẾ HOẠT ĐỘNG</a>&emsp;&emsp;&emsp;|&emsp;&emsp;&emsp;
            </div>
            <div class=" the-last-one-title-list ">
                <a href=" ">CHÍNH SÁCH VẬN CHUYỂN</a>&emsp;&emsp;&emsp;|&emsp;&emsp;&emsp;
            </div>
            <div class=" the-last-one-title-list ">
                <a href=" ">CHÍNH SÁCH TRẢ HÀNG VÀ HOÀN TIỀN</a>
            </div>
        </div>
        <div class=" the-last-one-checked ">
            <div class=" first-img ">
                <img src=" http://online.gov.vn/Content/EndUser/LogoCCDVSaleNoti/logoCCDV.png " alt=" " style=" height: 40px; ">
            </div>
            <div class=" second-img ">
                <img src=" http://online.gov.vn/Content/EndUser/LogoCCDVSaleNoti/logoCCDV.png " alt=" " style=" height: 40px; ">
            </div>
        </div>
        <div class=" company " style=" width: 100%;text-align: center; ">
            <p>Công ty TNHH Shopee</p>
        </div>
        <div class=" address " style=" margin-top: 20px;text-align: center; ">
            <p>Địa chỉ: Tầng 4-5-6, Tòa nhà Capital Place, số 29 đường Liễu Giai, Phường Ngọc Khánh, Quận Ba Đình, Thành phố Hà Nội, Việt Nam. Tổng đài hỗ trợ: 19001221 - Email: cskh@hotro.shopee.vn</p>
            <p>Chịu Trách Nhiệm Quản Lý Nội Dung: Nguyễn Đức Trí - Điện thoại liên hệ: 024 73081221 (ext 4678)</p>
            <p>Mã số doanh nghiệp: 0106773786 do Sở Kế hoạch & Đầu tư TP Hà Nội cấp lần đầu ngày 10/02/2015</p>
            <p>© 2015 - Bản quyền thuộc về Công ty TNHH Shopee/p>
        </div>
    </div>
</body>

</html>