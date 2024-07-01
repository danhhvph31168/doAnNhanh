<?php
function loadall_thongke()
{
    $sql = "select danhmuc.id as madm,danhmuc.name as tendm,count(sanpham.id) as sluongsp,min(sanpham.price) as mingia,max(sanpham.price) as maxgia ,avg(sanpham.price) as avggia";
    $sql .= " from sanpham left join danhmuc on danhmuc.id=sanpham.iddm";
    $sql .= " group by danhmuc.id order by danhmuc.id desc";
    $listtk = pdo_query($sql);
    return $listtk;
}

?>