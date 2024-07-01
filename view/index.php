<?php
session_start();
include 'gobal.php';
include '../model/pdo.php';
include '../model/danhmuc.php';
include '../model/sanpham.php';
include '../model/tintuc.php';
include '../model/giohang.php';
include '../model/binhluan.php';
if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];
$listdm = loadalldm();
include 'header.php';
$douong = loaddouong();
$combo = loadcombo();
$tintuc = loadtintuc();
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            if (isset($_POST['kywtop']) && ($_POST['kywtop'] != "")) {
                $kyw = $_POST['kywtop'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadallsp($kyw, $iddm);
            $listten = load_ten_dm($iddm);
            include 'sanpham.php';
            break;
        case 'ctspham':
            if (isset($_POST['okbl'])) {
                $iduser = $_SESSION['tenkh']['id'];
                thembl($_POST['idsp'], $_POST['noidung'], $iduser);
            }
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadonesp($_GET['idsp']);
                extract($onesp);
                $sp_cungloai = load_sanpham_cungloai($id, $iddm);
                $binhluan = loadbl($_GET['idsp']);
                include 'ctspham.php';
            } else {
                include 'home.php';
            }
            break;
            //-----------------------------tài khoản--------------------------------
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $user = $_POST['user'];
                $name = $_POST['tenKH'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $password_confirmation = $_POST['password_confirmation'];
                $tel = $_POST['tel'];
                $address = $_POST['address'];
                $checktk = checktk($user);
                if (empty($user) || empty($tel) || empty($name) || empty($email) || empty($pass) || empty($address) || empty($password_confirmation)) {
                    $thongbao = "Bạn hãy điền đầy đủ thông tin !!!";
                } else if ((strlen($user) < 6) || (strlen($user) > 15)) {
                    $thongbao = "Tên tài khoản từ 6 đến 10 ký tự !!!";
                } else if (is_numeric($user)) {
                    $thongbao = "Tên tài khoản không hợp lệ !!!";
                } else if ((strlen($pass) < 8) || (strlen($pass) > 15)) {
                    $thongbao = "Độ dài mật khẩu từ 8 đến 15 ký tự !!!";
                } else if (is_array($checktk)) {
                    $thongbao = "Tài khoản đã tồn tại !!!";
                } else if ($pass != $password_confirmation) {
                    $thongbao = "Mật khẩu không khớp !!!";
                } else {
                    insert_taikhoan($user, $pass, $name, $email, $tel, $address);
                    $thongbao = "Bạn đã đăng ký thành công.<br> Vui lòng đăng nhập!";
                }
            }
            include "taikhoan/dangky.php";
            break;
        case "dangnhap":
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser) || ($pass == $checkuser['password'])) {
                    $_SESSION['user'] = $checkuser;
                    header("location: index.php");
                } else {
                    $thongbao = "Tài khoản hoặc mật khẩu không đúng !!! <br> Vui lòng kiểm tra lại !";
                }
            }
            include "taikhoan/dangnhap.php";
            break;
        case "updatetk":
            if (isset($_POST["capnhat"]) && ($_POST["capnhat"])) {
                $id = $_POST["id"];
                $user = $_POST["user"];
                $name = $_POST['tenKH'];
                $email = $_POST["email"];
                $pass = $_POST["pass"];
                $tel = $_POST["tel"];
                $address = $_POST["address"];
                $checktk = checktk($user);
                if ((strlen($pass) < 8) || (strlen($pass) > 15)) {
                    $thongbao = "Độ dài mật khẩu từ 8 đến 15 ký tự !!!";
                } else {
                    update_taikhoan($id, $user, $pass, $name, $email, $tel, $address);
                    $thongbao = "Cập nhật thông tin tài khoản thành công !!!";
                }
            }
            include "taikhoan/updatetk.php";
            break;
        case 'tintuc':
            if (isset($_POST['kywtt']) &&  $_POST['kywtt']) {
                $kywtt = $_POST['kywtt'];
            } else {
                $kywtt = "";
            }
            $listttuc = loadallttuc($kywtt);
            include 'tintuc.php';
            break;

        case 'giohang':
            if (isset($_POST['addgh']) && $_POST['addgh']) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $sluong = 1;
                $ttien = $price * $sluong;
                $addsp = [$id, $name, $img, $price, $sluong, $ttien];
                array_push($_SESSION['mycart'], $addsp);
            }
            include 'giohang.php';
            break;
        case 'xoagh':
            if (isset($_GET['idcart'])) {
                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            header("Location:index.php?act=giohang");
            break;
        case 'lienhe':
            include 'lienhe.php';
            break;
        default:
            include 'home.php';
            break;
    }
} else {
    include 'home.php';
}
include 'footer.php';
