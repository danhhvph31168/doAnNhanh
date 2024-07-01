<?php
include "global.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/font-icon/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="view/css/style.css">
    <link rel="stylesheet" href="view/css/footer.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> -->
    <title>DTQ - FastFood</title>
</head>
<style>
    .thongBao {
        color: red;
    }
</style>

<body>
    <div class="container">
        <header>
            <div class="dau">
                <div class="logo">
                    <a href="index.php"><img src="view/images/logo/logo (1).png" alt=""></a>
                </div>
                <form action="">
                    <div class="kyw">
                        <input type="text" placeholder="Tìm kiếm tại đây">
                    </div>
                    <div class="tk">
                        <button class="ti-search"> Tìm kiếm</button>
                    </div>
                </form>
                <?php
                if (isset($_SESSION["user"])) {
                    extract($_SESSION["user"]);
                    ?>
                    <div class="icon">
                        <ul>
                            <li class="gh mb10"><a href="giohang.html" class="ti-shopping-cart"> Giỏ hàng</a></li>
                            <li class="dn mb10"><a class="ti-user"> <span>
                                        <?= $user; ?>
                                    </span>
                                </a>
                                <ul>
                                    <li><a href="index.php?act=updatetk">Thông tin tài khoản</a></li>
                                    <li><a href="">Đổi mật khẩu</a></li>
                                    <?php
                                    if ($role == 1) {
                                        ?>
                                        <li><a href="admin/index.php?act=admin" target="_blank">Trang Admin</a></li>
                                    <?php }
                                    ?>
                                    <li><a href="index.php?act=thoat"> Đăng xuất</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <?php
                } else { ?>
                    <div class="icon">
                        <ul>
                            <li class="gh mb10"><a href="giohang.html" class="ti-shopping-cart"> Giỏ hàng</a></li>
                            <li class="dn mb10"><a class="ti-user"> Tài khoản</a>
                                <ul>
                                    <li><a href="index.php?act=dangnhap">Đăng nhập</a></li>
                                    <li><a href="index.php?act=dangky">Đăng ký</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="mau">
                <div class="menu">
                    <ul>
                        <li><a href="index.php">Trang chủ</a></li>
                        <li><a href="sanpham.html">Sản phẩm</a></li>
                        <li><a href="#">Tin tức</a></li>
                        <li><a href="#">Liên hệ</a></li>
                        <li><a href="#">Giới thiệu</a></li>
                    </ul>
                </div>
            </div>
        </header>