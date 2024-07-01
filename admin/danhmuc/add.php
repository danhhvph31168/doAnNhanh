<div class="boxphaiadd">
    <form class="formadd" action="index.php?act=adddm" method="post">
        <div class="tieude">
            <h2>Thêm Danh Mục</h2>
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
            <input type="text" name="name" required>
        </div>
        <div class="cnang">
            <input type="submit" name="themdm" value="Thêm danh mục">
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