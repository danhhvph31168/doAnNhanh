<div class="boxphaiadd">
    <form class="formadd" action="index.php?act=addsp" method="post" enctype="multipart/form-data">
        <div class="tieude">
            <h2>Thêm Sản Phẩm</h2>
        </div>
        <div class="row mb20 form">
            <p>DANH MỤC</p><br>
            <select name="iddm">
                <?php
                foreach ($listdm as $dm) {
                    extract($dm);
                    echo '<option value="' . $id . '">"' . $name . '"</option>';
                }
                ?>
            </select>
        </div>
        <div class="row mb20 form">
            <label for="">Tên Sản Phẩm</label><br><br>
            <input type="text" name="name" required>
            <p class="tb"></p>
        </div>
        <div class="row mb20 form">
            <label for="">Giá Sản Phẩm</label><br><br>
            <input type="number" name="price" required>
        </div>
        <div class="row mb20 form">
            <label for="">Giá Cũ Sản Phẩm</label><br><br>
            <input type="number" name="priceold">
        </div>
        <div class="row mb20 formanh">
            <label for="">Ảnh Sản Phẩm</label><br><br>
            <input type="file" name="image" required>
        </div>
        <div class="row mb20 form">
            <label for="">Mô tả</label><br><br>
            <textarea name="des" cols="55" rows="8"></textarea>
        </div>
        <div class="cnang">
            <input type="submit" name="themsp" value="Thêm sản phẩm">
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
<script src="../js/addsp.js"></script>