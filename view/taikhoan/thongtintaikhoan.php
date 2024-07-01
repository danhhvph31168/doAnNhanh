<!-- <?php
include "../../model/taikhoan.php";
?> -->


<div class="maintc">
    <div class="main-dky">
        <form class="form" id="form-1">
            <h2 class="heading"> Thông tin tài khoản </h2>
            <span class="thongbao">
                <?php
                if (isset($thongbao) && ($thongbao != ""))
                    echo $thongbao;
                ?>
            </span>
            <?php
            if (isset($_SESSION["user"]) && $_SESSION["user"]) {
                extract($_SESSION["user"]);
                // var_dump($_SESSION["user"]);
                // die;
            }

            ?>
            <div class="">
                <div class="form-group-col">
                    <div class="form-group">
                        <div class="form-label">
                            <label>Tên tài khoản</label>
                        </div><br>
                        <div class="form-control">
                            <input id="user" name="user" type="hidden">
                            <input id="user" name="user" type="text" value="<?= $user ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-label">
                            <label>Họ và tên</label>
                        </div><br>
                        <div class="form-control">
                            <input id="tenKH" name="tenKH" type="text" value="<?= $_SESSION['user']['tenKH'] ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-label">
                            <label>Email</label>
                        </div><br>
                        <div class="form-control">
                            <input id="email" name="email" type="text" value="<?= $email ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-label">
                            <label>Mật khẩu</label>
                        </div><br>
                        <div class="form-control">
                            <input id="password" name="pass" type="password" value="<?= $pass ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-label">
                            <label>Số điện thoại</label>
                        </div><br>
                        <div class="form-control">
                            <input id="tel" name="tel" type="text" value="<?= $tel; ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-label">
                            <label>Địa chỉ</label>
                        </div><br>
                        <div class="form-control">
                            <input id="address" name="address" type="text" value="<?= $address; ?>" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="id" value="<?= $id ?>">
            <a href="index.php?act=updatetk"><button type="submit" class="form-submit" value="">Chỉnh sửa</a>
        </form>
    </div>
</div>