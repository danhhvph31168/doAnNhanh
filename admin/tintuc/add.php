<div class="boxphaiadd">
    <form class="formadd" action="index.php?act=addttuc" method="post" enctype="multipart/form-data">
        <div class="tieude">
            <h2>Thêm Tin Tức</h2>
        </div>
        <div class="row mb20 form">
            <p>DANH MỤC</p><br>
            <select name="iddmtt">
                <?php
                foreach ($listdm as $dm) {
                    extract($dm);
                    echo '<option value="' . $id . '">"' . $name . '"</option>';
                }
                ?>
            </select>
        </div>
        <div class="row mb20 form">
            <label for="">Tiêu Đề</label><br><br>
            <input type="text" name="tieude">
        </div>
        <div class="row mb20 formanh">
            <label for="">Ảnh Tin Tức</label><br><br>
            <input type="file" name="img">
        </div>
        <div class="row mb20 form">
            <label for="">Nội Dung</label><br><br>
            <textarea name="noidung" cols="55" rows="8"></textarea>
        </div>
        <div class="cnang">
            <input type="submit" name="themttuc" value="Thêm tin tức">
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