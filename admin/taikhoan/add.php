<div class="boxphaiadd">
    <form class="formadd" action="index.php?act=addtk" method="post" enctype="multipart/form-data">
        <div class="tieude">
            <h2>Thêm Tài Khoản</h2>
        </div><br><br>
        <div class="row mb20 form">
            <label for="">User</label><br><br>
            <input type="text" name="user">
        </div>
        <div class="row mb20 form">
            <label for="">Tên Khách Hàng</label><br><br>
            <input type="text" name="tenkh">
        </div>
        <div class="row mb20 form">
            <label for="">Mật khẩu</label><br><br>
            <input type="text" name="pass">
        </div>
        <div class="row mb20 form">
            <label for="">Email</label><br><br>
            <input type="email" name="email">
        </div>
        <div class="row mb20 form">
            <label for="">Số Điện Thoại</label><br><br>
            <input type="number" name="tel">
        </div>
        <div class="row mb20 form">
            <label for="">Địa Chỉ</label><br><br>
            <input type="text" name="address">
        </div>
        <div class="role">
        <label for="">Phân Quyền:</label><br><br>
        <select name="role">
            <option value="User" selected>User</option>
            <option value="Admin">Admin</option>
        </select>
        </div>
        <div class="cnang">
            <input type="submit" name="themtk" value="Thêm tài khoản">
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
    select {
        border-radius: 5px;
        border: 1px #ccc solid;
        padding: 4.5px;
        padding-top: 4px;
        margin-bottom: 20px;
        margin-right: 245px;
    }

</style>