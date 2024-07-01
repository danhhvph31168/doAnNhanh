<?php
if (is_array($suattuc)) {
    extract($suattuc);
}
$hinh = "../upload/" . $img;
if (is_file($hinh)) {
    $hinh = '<img src="' . $hinh . '" height="80">';
} else {
    $hinh = 'no photo';
}
?>
<div class="boxphaiadd">
    <form class="formadd" action="index.php?act=updatettuc" method="post" enctype="multipart/form-data">
        <div class="tieude">
            <h2>Cập nhật tin tức</h2>
        </div>
        <div class="row mb20 form">
            <p>DANH MỤC</p><br>
            <select name="iddmtt">
                <?php
                foreach ($listdm as $key => $value) {
                    if ($iddmtt == $value['id']) {
                        echo '<option value="' . $value['id'] . '" selected>' . $value['name'] . '</option>';
                    } else {
                        echo '<option value="' . $value['id'] . '">' . $value['name'] . '</option>';
                    }
                }
                ?>
            </select>
        </div>
        <div class="row mb20 form">
            <label for="">Tiêu đề</label><br><br>
            <input type="text" name="tieude" value="<?= $tieude ?>">
        </div>
        <div class="row mb20 formanh">
            <label for="">Ảnh tin tức</label><br><br>
            <input type="file" name="img">
            <?= $hinh ?>
        </div>
        <div class="row mb20 form">
            <label for="">Nội dung</label><br><br>
            <textarea name="noidung" cols="55" rows="8"><?= $noidung ?></textarea>
        </div>
        <div class="cnang">
            <input type="hidden" name="id" value="<?= $id ?>">
            <input type="submit" name="capnhatttuc" value="Cập nhật tin tức">
            <input type="reset" value="Nhập lại">
        </div><br>
    </form>
</div>
<style>
    .boxphaiadd {
        background-image: url(css/img/baner/bground.jpg);
    }
</style>