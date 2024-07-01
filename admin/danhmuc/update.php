<?php
if (is_array($sua)) {
    extract($sua);
}
?>
<div class="boxphaiadd">
    <form class="formadd" action="index.php?act=updatedm" method="post">
        <div class="tieude">
            <h2>Cập Nhật Danh Mục</h2>
        </div>
        <div class="row mb20 form">
            <p>DANH MỤC</p><br>
        </div>
        <div class="row mb20 form">
            <label for="">Mã Danh Mục</label><br><br>
            <input type="number" name="madm">
        </div>
        <div class="row mb20 form">
            <label for="">Tên Danh Mục</label><br><br>
            <input type="text" name="tendm" value="<?php if (isset($name) && ($name != "")) echo $name ?>">
        </div>
        <div class="cnang">
            <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id ?>">
            <input type="submit" name="capnhatdm" value="Cập nhật danh mục">
            <input type="reset" value="Nhập lại">
        </div><br>
        <?php
        if (isset($tb) && ($tb != "")) echo $tb;
        ?>
    </form>
</div>