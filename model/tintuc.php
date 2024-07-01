<?php
function addttuc($tieude, $img, $noidung)
{
    $sql = "insert into tintuc(tieude,img,noidung) values('$tieude','$img','$noidung')";
    pdo_execute($sql);
}
function loadallttuc($kywtt = "")
{
    $sql = "select * from tintuc where 1";
    if ($kywtt != "") {
        $sql .= " and tieude like '%" . $kywtt . "%'";
    }
    $sql .= " order by id desc";
    $listttuc = pdo_query($sql);
    return $listttuc;
}
function xoattuc($id)
{
    $sql = "delete from tintuc where id=" . $id;
    pdo_execute($sql);
}
function loadonettuc($id)
{
    $sql = "select * from tintuc where id=" . $id;
    $listttuc = pdo_query_one($sql);
    return $listttuc;
}
function updatettuc($tieude, $img, $noidung, $id)
{
    if ($img != "")
        $sql = "update tintuc set tieude ='" . $tieude . "',img ='" . $img . "',noidung ='" . $noidung . "' where id=" . $id;
    else
        $sql = "update tintuc set tieude ='" . $tieude . "',noidung ='" . $noidung . "' where id=" . $id;
    pdo_execute($sql);
}
// view ----------------------------------
function loadtintuc()
{
    $sql = 'select * from tintuc where id order by id desc limit 0,3';
    $loadtintuc = pdo_query($sql);
    return $loadtintuc;
}