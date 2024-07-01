<?php
function adddm($tendm)
{
    $sql = "insert into danhmuc(name) values('$tendm')";
    pdo_execute($sql);
}
function loadalldm()
{
    $sql = 'select * from danhmuc order by id desc';
    $listdm = pdo_query($sql);
    return $listdm;
}
function xoadm($id)
{
    $sql = "delete from danhmuc where id=" . $id;
    pdo_execute($sql);
}
function loadonedm($id)
{
    $sql = 'select * from danhmuc where id=' . $id;
    $listdm = pdo_query_one($sql);
    return $listdm;
}
function updatedm($id, $tendm)
{
    $sql = "update danhmuc set name ='" . $tendm . "' where id=" . $id;
    pdo_execute($sql);
}
