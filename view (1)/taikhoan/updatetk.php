<!-- <?php
include "../../model/taikhoan.php";
?> -->


<div class="maintc">
    <div class="main">
        <form action="" method="POST" class="form" id="form-1" enctype="multipart/form-data">
            <h2 class="heading"> Cập nhật thông tin tài khoản </h2>
            <span class="thongbao">
                <?php
                if (isset($thongbao) && ($thongbao != ""))
                    echo $thongbao;
                ?>
            </span>
            <?php
            if (isset($_SESSION["user"]) && $_SESSION["user"]) {
                extract($_SESSION["user"]);
            }

            ?>
            <div class="col">
                <div class="form-group-col">

                    <div class="form-group">
                        <div class="form-label">
                            <label>Tên tài khoản</label>
                        </div><br>
                        <div class="form-control">
                            <input id="user" name="user" type="hidden">
                            <input id="user" name="user" type="text" value="<?= $user ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-label">
                            <label>Họ và tên</label>
                        </div><br>
                        <div class="form-control">
                            <input id="tenKH" name="tenKH" type="text" value="<?= $name; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-label">
                            <label>Email</label>
                        </div><br>
                        <div class="form-control">
                            <input id="email" name="email" type="text" value="<?= $email ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-label">
                            <label>Mật khẩu</label>
                        </div><br>
                        <div class="form-control">
                            <input id="password" name="pass" type="password" value="<?= $pass ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-label">
                            <label>Số điện thoại</label>
                        </div><br>
                        <div class="form-control">
                            <input id="tel" name="tel" type="text" value="<?= $tel; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-label">
                            <label>Địa chỉ</label>
                        </div><br>
                        <div class="form-control">
                            <input id="address" name="address" type="text" value="<?= $address; ?>">
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="id" value="<?= $id ?>">
            <input name="capnhat" type="submit" class="form-submit" value="Cập nhật">
            <input name="" type="reset" value="Nhập lại">
        </form>
    </div>
</div>