<?php
if (is_array($suasp)) {
    extract($suasp);
}
$hinh = "../upload/" . $img;
if (is_file($hinh)) {
    $hinh = '<img src="' . $hinh . '" height="80">';
} else {
    $hinh = 'no photo';
}
?>
<div class="boxphaiadd">
    <form class="formadd" action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
        <div class="tieude">
            <h2>Thêm Sản Phẩm</h2>
        </div>
        <div class="row mb20 form">
            <p>DANH MỤC</p><br>
            <select name="iddm">
                <?php
                foreach ($listdm as $key => $value) {
                    if ($iddm == $value['id']) {
                        echo '<option value="' . $value['id'] . '" selected>' . $value['name'] . '</option>';
                    } else {
                        echo '<option value="' . $value['id'] . '">' . $value['name'] . '</option>';
                    }
                }
                ?>
            </select>
        </div>
        <div class="row mb20 form">
            <label for="">Tên Sản Phẩm</label><br><br>
            <input type="text" name="name" value="<?= $name ?>">
        </div>
        <div class="row mb20 form">
            <label for="">Giá Sản Phẩm</label><br><br>
            <input type="number" name="price" value="<?= $price ?>">
        </div>
        <div class="row mb20 form">
            <label for="">Giá Sản Cũ Phẩm</label><br><br>
            <input type="number" name="priceold" value="<?= $priceold ?>">
        </div>
        <div class="row mb20 formanh">
            <label for="">Ảnh Sản Phẩm</label><br><br>
            <input type="file" name="image">
            <?= $hinh ?>
        </div>
        <div class="row mb20 form">
            <label for="">Mô tả</label><br><br>
            <textarea name="des" cols="55" rows="8"><?= $mota ?></textarea>
        </div>
        <div class="cnang">
            <input type="hidden" name="id" value="<?= $id ?>">
            <input type="submit" name="capnhatsp" value="Cập nhật sản phẩm">
            <input type="reset" value="Nhập lại">
        </div><br>
        <?php
        if (isset($tb) && ($tb != "")) echo $tb;
        ?>
    </form>
</div>
<style>
    .boxphaiadd {
        background-image: url(css/img/baner/bground.jpg);
    }
</style>