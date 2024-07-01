<?php
if (is_array($suatk)) {
    extract($suatk);
}
?>
<div class="boxphaiadd">
    <form class="formadd" action="index.php?act=updatetk" method="post">
        <div class="tieude">
            <h2>Cập Nhật Tài Khoản</h2>
        </div>
        <div class="row mb20 form">
            <label for="">User</label><br><br>
            <input type="text" name="user" value="<?= $user ?>">
        </div>
        <div class="row mb20 form">
            <label for="">Tên Khách Hàng</label><br><br>
            <input type="text" name="tenkh" value="<?= $tenkh ?>">
        </div>
        <div class="row mb20 form">
            <label for="">Mật khẩu</label><br><br>
            <input type="text" name="pass" value="<?= $pass ?>">
        </div>
        <div class="row mb20 form">
            <label for="">Email</label><br><br>
            <input type="email" name="email" value="<?= $email ?>">
        </div>
        <div class="row mb20 form">
            <label for="">Số Điện Thoại</label><br><br>
            <input type="number" name="tel" value="<?= $tel ?>">
        </div>
        <div class="row mb20 form">
            <label for="">Địa Chỉ</label><br><br>
            <input type="text" name="address" value="<?= $address ?>">
        </div>
        <div class="role">
            <label for="">Phân Quyền:</label><br><br>
            <select name="role">
                <?php
                if($role=="User"){
                    echo '<option value="'.$role.'">"'.$role.'"</option>';
                    echo '<option value="Admin">Admin</option>';
                }else if($role=="Admin"){
                    echo '<option value="'.$role.'">"'.$role.'"</option>';
                    echo '<option value="User">User</option>';
                }
                ?>
            </select>
        </div>
        <div class="cnang">
            <input type="hidden" name="id" value="<?= $id ?>">
            <input type="submit" name="capnhattk" value="Cập nhật tài khoản">
            <input type="reset" value="Nhập lại">
        </div><br>
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