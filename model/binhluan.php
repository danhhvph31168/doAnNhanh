<?php
function loadbl($idsp)
{
$sql = "
SELECT binhluan.noidung,binhluan.ngaybinhluan,taikhoan.tenkh FROM `binhluan`
LEFT JOIN taikhoan ON binhluan.iduser=taikhoan.id
LEFT JOIN sanpham ON binhluan.idsp=sanpham.id
WHERE sanpham.id=$idsp
";
    $result = pdo_query($sql);
    return $result;
}
function thembl($idsp, $noidung, $iduser)
{
    $date = date('Y-m-d');
    $sql = "
    INSERT INTO binhluan(noidung,iduser,idsp,ngaybinhluan)
    VALUES('$noidung','$iduser','$idsp','$date');
    ";
    pdo_execute($sql);
}
