<div class="maintc">
    <div class="main-dky">
        <form action="" method="POST" class="form" id="form-1">
            <h3 class="heading"> Đổi mật khẩu</h3>
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
                            <label>Mật khẩu cũ</label>
                        </div><br>
                        <div class="form-control">
                            <input id="password-old" name="pass_cu" type="password">
                        </div>
                        <span id="erro3" class="form-message"></span>
                    </div>

                    <div class="form-group">
                        <div class="form-label">
                            <label>Mật khẩu mới</label>
                        </div><br>
                        <div class="form-control">
                            <input id="password-new" name="pass_moi" type="password">
                        </div>
                        <span id="erro3" class="form-message"></span>
                    </div>

                    <div class="form-group">
                        <div class="form-label">
                            <label>Nhập lại mật khẩu mới</label>
                        </div><br>
                        <div class="form-control">
                            <input id="password-new-confirm" name="pass_moi_confirm" type="password">
                        </div>
                        <span id="erro3" class="form-message"></span>
                    </div>
                </div>
            </div>
            <input type="hidden" name="id" value="<?= $id; ?>">
            <input name="doimatkhau" type="submit" class="form-submit" value="Cập nhật">

        </form>
    </div>
</div>