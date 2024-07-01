<?php
function addsp($name, $price, $image, $des, $iddm, $priceold)
{
    $sql = "insert into sanpham(name,price,img,mota,iddm,priceold) values('$name','$price','$image','$des','$iddm','$priceold')";
    pdo_execute($sql);
}
function loadallsp($kyw = "", $iddm = 0)
{
    $sql = "select * from sanpham where 1";
    if ($kyw != "") {
        $sql .= " and name like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and iddm ='" . $iddm . "'";
    }
    $sql .= " order by id desc";
    $listsp = pdo_query($sql);
    return $listsp;
}
function xoasp($id)
{
    $sql = "delete from sanpham where id=" . $id;
    pdo_execute($sql);
}
function loadonesp($id)
{
    $sql = "select * from sanpham where id=" . $id;
    $listsp = pdo_query_one($sql);
    return $listsp;
}
function updatesp($name, $price, $image, $des, $iddm, $id, $priceold)
{
    if ($image != "")
        $sql = "update sanpham set name ='" . $name . "',price ='" . $price . "',img ='" . $image . "',mota ='" . $des . "',iddm ='" . $iddm . "',priceold ='" . $priceold . "' where id=" . $id;
    else
        $sql = "update sanpham set name ='" . $name . "',price ='" . $price . "',mota ='" . $des . "',iddm ='" . $iddm . "',priceold ='" . $priceold . "' where id=" . $id;
    pdo_execute($sql);
}
// view ----------------------------------
function loaddouong()
{
    $sql = 'select * from sanpham where iddm=11 order by price desc limit 0,4';
    $loaddouong = pdo_query($sql);
    return $loaddouong;
}
function loadcombo()
{
    $sql = 'select * from sanpham where iddm=10 order by price desc limit 0,4';
    $loadcombo = pdo_query($sql);
    return $loadcombo;
}
function load_ten_dm($iddm)
{
    if ($iddm > 0) {
        $sql = "SELECT * FROM danhmuc WHERE id =" . $iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name;
    } else {
        return "";
    }
}
function load_sanpham_cungloai($id, $iddm)
{
    $sql = "select * from sanpham where iddm=" . $iddm . " and id <>" .  $id;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}