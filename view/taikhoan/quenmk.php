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
                            <label>Nhập email</label>
                        </div><br>
                        <div class="form-control">
                            <input id="email" name="email" type="text">
                        </div>
                        <span id="erro2" class="form-message"></span>
                    </div>

                </div>
            </div>
            <input name="quenmk" type="submit" class="form-submit" value="Gửi">

            <hr class="hr-text" data-content="Hoặc">

            <div class="validater-switch" style="width: 100%; text-align: center;">
                <span class="label-account">Bạn chưa có tài khoản?</span>
                <a href="index.php?act=dangky" class="btn-switch">Đăng Ký</a>
            </div>
        </form>
    </div>
</div>