<?php
function addtk($user, $tenkh, $pass, $email, $tel, $address, $role)
{
    $sql = "insert into taikhoan(user,tenkh,pass,email,tel,address,role) values('$user','$tenkh','$pass','$email','$tel','$address','$role')";
    pdo_execute($sql);
}
function loadalltk($kyw = "")
{
    $sql = "select * from taikhoan where 1";
    if ($kyw != "") {
        $sql .= " and tenkh like '%" . $kyw . "%'";
    }
    $sql .= " order by id desc";
    $listtk = pdo_query($sql);
    return $listtk;
}
function xoatk($id)
{
    $sql = "delete from taikhoan where id=" . $id;
    pdo_execute($sql);
}
function loadonetk($id)
{
    $sql = "select * from taikhoan where id=" . $id;
    $listtk = pdo_query_one($sql);
    return $listtk;
}
function updatetk($user, $tenkh, $pass, $email, $tel, $address, $role, $id)
{
    $sql = "update taikhoan set user ='" . $user . "',tenkh ='" . $tenkh . "',pass ='" . $pass . "',email ='" . $email . "',tel ='" . $tel . "',address ='" . $address . "',role ='" . $role . "' where id=" . $id;
    pdo_execute($sql);
}
/////////////////////////////////////////////////////////////////////////////////////
function insert_taikhoan($user, $pass, $name, $email, $tel, $address)
{
    $sql = "INSERT INTO taikhoan (user, pass, tenKH, email, tel, address) 
    VALUES ('$user', '$pass', '$name', '$email', '$tel', '$address')";
    pdo_execute($sql);
}

function checkuser($user, $pass)
{
    $sql = "SELECT * FROM taikhoan WHERE user='" . $user . "' AND pass = '" . $pass . "'";
    $tk = pdo_query_one($sql);
    return $tk;
}

function checktk($user)
{
    $sql = "SELECT * FROM taikhoan WHERE user='" . $user . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}


function update_taikhoan($id, $user, $pass, $name, $email, $tel, $address)
{
    if ($user == "") {
        $sql = "UPDATE taikhoan SET  pass = '" . $pass . "', tenKH ='" . $name . "', 
        email = '" . $email . "', tel = '" . $tel . "', address = '" . $address . "'  WHERE id=" . $id;
    } else {
        $sql = "UPDATE taikhoan SET  user = '" . $user . "', pass = '" . $pass . "', tenKH ='" . $name . "', 
            email = '" . $email . "', tel = '" . $tel . "', address = '" . $address . "'  WHERE id=" . $id;
    }
    pdo_execute($sql);
}

function update_matkhau($id, $pass_moi)
{
    $sql = "UPDATE taikhoan SET pass = '" . $pass_moi . "' WHERE id = " . $id;
    pdo_execute($sql);
}

function loadall_thongtin()
{
    $sql = "SELECT * FROM taikhoan ORDER BY id";
    $tttk = pdo_query($sql);
    return $tttk;
}
