<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../qlyda1/font-icon/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="css/giohang.css">
    <title>Trang chủ danh</title>
</head>
<style>
    .menu ul ul {
        display: none;
        position: absolute;
        background: white;
        border: 1px #ccc solid;
        border-top: none;
        padding: 5px 15px;
        margin-top: 10px;
    }

    .menu ul li:hover>ul {
        display: block;
    }
</style>

<body>
    <div class="container">
        <header>
            <div class="dau">
                <div class="logo">
                    <img src="images/logo/logo (1).png" alt="">
                </div>
                <form action="index.php?act=sanpham" method="post">
                    <div class="kyw">
                        <input name="kywtop" type="text" placeholder="Tìm kiếm tại đây" required>
                    </div>
                    <div class="tk">
                        <button name="tktop" class="ti-search"> Tìm kiếm</button>
                    </div>
                </form>
                <div class="icon">
                    <ul>
                        <li class="gh mb10"><a href="index.php?act=giohang" class="ti-shopping-cart"> Giỏ hàng</a></li>
                        <li class="dn mb10"><a class="ti-user"></a>
                            <ul>
                                <li><a href="index.php?act=dangnhap">Đăng nhập</a></li>
                                <li><a href="index.php?act=dangky">Đăng ký</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mau">
                <div class="menu">
                    <ul>
                        <li><a href="index.php">Trang chủ</a></li>
                        <li><a href="index.php?act=sanpham">Sản phẩm</a>
                            <ul>
                                <?php
                                foreach ($listdm as $dm) {
                                    extract($dm);
                                    $linkdm='index.php?act=sanpham&iddm='.$id;
                                    echo '
                                    <li><a href="'.$linkdm.'">'.$name.'</a></li>
                                    ';
                                }
                                ?>
                            </ul>
                        </li>
                        <li><a href="index.php?act=tintuc">Tin tức</a></li>
                        <li><a href="index.php?act=lienhe">Liên hệ</a></li>
                        <li><a href="#">Giới thiệu</a></li>
                    </ul>
                </div>
            </div>
        </header>