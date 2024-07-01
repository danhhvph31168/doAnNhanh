<?php
// include "../../model/taikhoan.php";
session_start();
ob_start();
?>


<div class="maintc">
    <div class="main">
        <form action="" method="POST" class="form" id="form-1" enctype="multipart/form-data">
            <h2 class="heading">Đăng ký thành viên </h2>
            <span class="thongbao">
                <?php
                if (isset($thongbao) && ($thongbao != ""))
                    echo $thongbao;
                ?>
            </span>
            <div class="col">
                <div class="form-group-col">

                    <div class="form-group">
                        <div class="form-label">
                            <label>Tên tài khoản</label>
                        </div><br>
                        <div class="form-control">
                            <input id="user" name="user" type="text" placeholder="Nhập tên đăng nhập" class="">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-label">
                            <label>Họ và tên</label>
                        </div><br>
                        <div class="form-control">
                            <input id="tenKH" name="tenKH" type="text" placeholder="Họ và tên" class="">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-label">
                            <label>Email</label>
                        </div><br>
                        <div class="form-control">
                            <input id="email" name="email" type="text" placeholder="Nhập email" class="">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-label">
                            <label>Mật khẩu</label>
                        </div><br>
                        <div class="form-control">
                            <input id="password" name="pass" type="password" placeholder="Nhập mật khẩu" class="">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-label">
                            <label>Nhập lại mật khẩu</label>
                        </div><br>
                        <div class="form-control">
                            <input id="password_confirmation" name="password_confirmation"
                                placeholder="Nhập lại mật khẩu" type="password" class="">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-label">
                            <label>Số điện thoại</label>
                        </div><br>
                        <div class="form-control">
                            <input id="tel" name="tel" type="text" placeholder="Nhập số điện thoại" class="">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-label">
                            <label>Địa chỉ</label>
                        </div><br>
                        <div class="form-control">
                            <input id="address" name="address" type="text" placeholder="Nhập địa chỉ" class="">
                        </div>
                    </div>
                </div>

                <div class="form-group-col">
                    <div class="chinhsach">
                        <p>Thông qua việc đăng ký, bạn xác nhận rằng bạn đồng ý với <a class="rules" href="#">Điều khoản
                                sử
                                dụng</a> và đã đọc, hiểu
                            <a class="rules" href="#">Chính sách Quyền riêng tư</a> của chúng tôi.
                        </p>
                    </div>
                </div>
            </div>


            <input name="dangky" type="submit" class="form-submit" value="Đăng ký">

            <hr class="hr-text" data-content="Hoặc">

            <div class="validater-switch" style="width: 100%; text-align: center;">
                <span class="label-account">Bạn đã có tài khoản?</span>
                <a href="index.php?act=dangnhap" class="btn-switch">Đăng nhập</a>
            </div>
        </form>
    </div>
</div>