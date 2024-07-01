<?php
include "header.php";
include '../model/danhmuc.php';
include '../model/sanpham.php';
include '../model/tintuc.php';
include '../model/thongke.php';
include '../model/taikhoan.php';
include '../model/pdo.php';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            if (isset($_POST['themdm']) && $_POST['themdm']) {
                $tendm = $_POST['name'];
                adddm($tendm);
                $tb = 'Thêm thành công';
            }
            include 'danhmuc/add.php';
            break;
        case 'listdm':
            $listdm = loadalldm();
            include 'danhmuc/list.php';
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                xoadm($_GET['id']);
            }
            $listdm = loadalldm();
            include 'danhmuc/list.php';
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sua = loadonedm($_GET['id']);
            }
            include 'danhmuc/update.php';
            break;
        case 'updatedm':
            if (isset($_POST['capnhatdm']) && $_POST['capnhatdm']) {
                $tendm = $_POST['tendm'];
                $id = $_POST['id'];
                updatedm($id, $tendm);
                $tb = 'Cập nhật thành công';
            }
            $listdm = loadalldm();
            include 'danhmuc/list.php';
            break;

            // ----------------------------sản phẩm---------------------------------------------------

        case 'addsp':
            if (isset($_POST['themsp']) && $_POST['themsp']) {
                $iddm = $_POST['iddm'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $priceold = $_POST['priceold'];
                $image = $_FILES['image']['name'];
                $des = $_POST['des'];
                $target_dir = '../upload/';
                $target_file = $target_dir . basename($_FILES['image']['name']);
                move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
                addsp($name, $price, $image, $des, $iddm, $priceold);
                $tb = 'Thêm thành công';
            }
            $listdm = loadalldm();
            include 'sanpham/add.php';
            break;
        case 'listsp':
            if (isset($_POST['listok']) &&  $_POST['listok']) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = "";
                $iddm = 0;
            }
            $listsp = loadallsp($kyw, $iddm);
            $listdm = loadalldm();
            include 'sanpham/list.php';
            break;
        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                xoasp($_GET['id']);
            }
            $listsp = loadallsp("", 0);
            include 'sanpham/list.php';
            break;
        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $suasp = loadonesp($_GET['id']);
            }
            $listdm = loadalldm();
            include 'sanpham/update.php';
            break;
        case 'updatesp':
            if (isset($_POST['capnhatsp']) && $_POST['capnhatsp']) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $priceold = $_POST['priceold'];
                $des = $_POST['des'];
                $image = $_FILES['image']['name'];
                $target_dir = '../upload/';
                $target_file = $target_dir . basename($_FILES['image']['name']);
                move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
                updatesp($name, $price, $image, $des, $iddm, $id, $priceold);
                $tb = 'Cập nhật thành công';
            }
            $listsp = loadallsp();
            $listdm = loadalldm();
            include 'sanpham/list.php';
            break;

            // ----------------------------Tin tức---------------------------------------------------

        case 'addttuc':
            if (isset($_POST['themttuc']) && $_POST['themttuc']) {
                $tieude = $_POST['tieude'];
                $img = $_FILES['img']['name'];
                $noidung = $_POST['noidung'];
                $target_dir = '../upload/';
                $target_file = $target_dir . basename($_FILES['img']['name']);
                move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
                addttuc($tieude, $img, $noidung);
                $tb = 'Thêm thành công';
            }
            $listdm = loadalldm();
            include 'tintuc/add.php';
            break;
        case 'listttuc':
            if (isset($_POST['listoktt']) &&  $_POST['listoktt']) {
                $kywtt = $_POST['kywtt'];
            } else {
                $kywtt = "";
            }
            $listttuc = loadallttuc($kywtt);
            include 'tintuc/list.php';
            break;
        case 'xoattuc':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                xoattuc($_GET['id']);
            }
            $listttuc = loadallttuc("");
            include 'tintuc/list.php';
            break;
        case 'suattuc':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $suattuc = loadonettuc($_GET['id']);
            }
            $listdm = loadalldm();
            include 'tintuc/update.php';
            break;
        case 'updatettuc':
            if (isset($_POST['capnhatttuc']) && $_POST['capnhatttuc']) {
                $id = $_POST['id'];
                $tieude = $_POST['tieude'];
                $img = $_FILES['img']['name'];
                $noidung = $_POST['noidung'];
                $target_dir = '../upload/';
                $target_file = $target_dir . basename($_FILES['img']['name']);
                move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
                updatettuc($tieude, $img, $noidung, $id);
            }
            $listttuc = loadallttuc();
            $listdm = loadalldm();
            include 'tintuc/list.php';
            break;
            // ----------------------------Thống kê---------------------------------------------------
        case 'bieudo':
            $listtk = loadall_thongke();
            include 'thongke/bieudo.php';
            break;

            // ----------------------------Tài khoản---------------------------------------------------

        case 'addtk':
            if (isset($_POST['themtk']) && $_POST['themtk']) {
                $user = $_POST['user'];
                $tenkh = $_POST['tenkh'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $tel = $_POST['tel'];
                $address = $_POST['address'];
                $role = $_POST['role'];
                addtk($user,$tenkh, $pass, $email, $tel, $address, $role);
                $tb = 'Thêm thành công';
            }
            include 'taikhoan/add.php';
            break;
        case 'listtk':
            if (isset($_POST['listok']) &&  $_POST['listok']) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            $listtk = loadalltk($kyw);
            include 'taikhoan/list.php';
            break;
        case 'xoatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                xoatk($_GET['id']);
            }
            $listtk = loadalltk("");
            include 'taikhoan/list.php';
            break;
        case 'suatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $suatk = loadonetk($_GET['id']);
            }
            include 'taikhoan/update.php';
            break;
        case 'updatetk':
            if (isset($_POST['capnhattk']) && $_POST['capnhattk']) {
                $id = $_POST['id'];
                $user = $_POST['user'];
                $tenkh = $_POST['tenkh'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $tel = $_POST['tel'];
                $address = $_POST['address'];
                $role = $_POST['role'];
                updatetk($user, $tenkh, $pass, $email, $tel, $address, $role, $id);
            }
            $listtk = loadalltk();
            include 'taikhoan/list.php';
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
