<?php
include "../../model/taikhoan.php";
?>


<div class="maintc">
    <div class="main2">
        <form action="" method="POST" class="form" id="form-1">
            <h3 class="heading">Đăng nhập </h3>
            <span class="thongbao">
                <?php
                if (isset($thongbao) && ($thongbao != ""))
                    echo $thongbao;
                ?>
            </span>
            <div class="">
                <div class="form-group-col">
                    <div class="form-group">
                        <div class="form-label">
                            <label>Tên tài khoản</label>
                        </div><br>
                        <div class="form-control">
                            <input id="user" name="user" type="text" placeholder="Nhập tên đăng nhập">
                        </div>
                        <span id="erro2" class="form-message"></span>
                    </div>

                    <div class="form-group">
                        <div class="form-label">
                            <label>Mật khẩu</label>
                        </div><br>
                        <div class="form-control">
                            <input id="password" name="pass" type="password" placeholder="Nhập mật khẩu">
                        </div>

                        <span id="erro3" class="form-message"></span>
                    </div>
                </div>
            </div>
            <div class="quenmk">
                <a href="">Quên mật khẩu</a>
            </div>
            <input name="dangnhap" type="submit" class="form-submit" value="Đăng nhập">

            <hr class="hr-text" data-content="Hoặc">

            <div class="validater-switch" style="width: 100%; text-align: center;">
                <span class="label-account">Bạn chưa có tài khoản?</span>
                <a href="index.php?act=dangky" class="btn-switch">Đăng Ký</a>
            </div>
        </form>
    </div>
</div>