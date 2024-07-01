<?php
// include "../../model/taikhoan.php";
session_start();
ob_start();
?>

<div class="maindk">
    <div class="main-dky">
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
                            <input id="password_confirmation" name="password_confirmation" placeholder="Nhập lại mật khẩu" type="password" class="">
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
<style>
    .main-dky {
        justify-content: center;
        background-color: #eee;
        padding-top: 140px;
        margin-bottom: 50px;
    }
    html {
        color: #333;
        font-size: 1vw;
        font-family: 'Open Sans', sans-serif;
    }

    .back_home {
        margin: 30px;
        width: 150px;
        height: 50px;
    }

    .back_home a img {
        cursor: pointer;
    }

    .form {
        width: 500px;
        padding: 40px 20px;
        text-align: center;
        background: #fff;
        border-radius: 10px;
        align-self: center;
        box-shadow: 0 0px 10px rgb(0 0 0 / 70%);
    }

    .form .desc {
        text-align: center;
        color: #636d77;
        font-size: 1.6rem;
        font-weight: lighter;
        line-height: 2.4rem;
        margin-top: 16px;
        font-weight: 300;
    }

    .col {
        display: grid;
        grid-template-rows: 4fr 1fr;
    }


    .form-group-col {
        float: left;
    }

    .form-group {
        float: left;
        margin-left: 20px;
    }

    .form-label {
        font-weight: 700;
        font-size: 1vw;
        width: 100%;
        padding-top: 10px;
    }

    .form-label>label {
        float: left;
    }

    .form-control {
        height: 40px;
        width: 430px;
        padding-top: 10px;
    }

    .form-control>input {
        width: 100%;
        padding: 10px 10px;
        border-radius: 5px;
    }

    .form-control:hover {
        border-color: #1dbfaf;
    }

    .form-group.invalid .form-control {
        border-color: #f33a58;
    }

    .form-group.invalid .form-message {
        color: #f33a58;
    }

    .form-message {
        font-size: 1.2rem;
        line-height: 1.6rem;
        padding: 4px 0 0;
    }

    .form-submit {
        outline: none;
        background-color: rgb(247, 148, 29);
        padding: 12px 10px;
        font-weight: 600;
        color: #fff;
        border: none;
        width: 92%;
        font-size: 14px;
        border-radius: 4px;
        cursor: pointer;
        margin-top: 10px;
    }

    .form-submit:hover {
        background-color: rgb(247, 148, 29);
        box-shadow: 0 2px 6px rgb(0 0 0 / 20%);
    }

    .form-submit-2 {
        outline: none;
        background-color: rgb(247, 148, 29);
        padding: 12px 16px;
        font-weight: 600;
        color: #fff;
        border: none;
        width: 20%;
        font-size: 14px;
        border-radius: 4px;
        cursor: pointer;
        margin-top: 20px;
    }

    .form-submit-2:hover {
        background-color: rgb(247, 148, 29);
        box-shadow: 0 2px 6px rgb(0 0 0 / 20%);
    }

    .spacer {
        margin-top: 36px;
    }

    .rules {
        color: rgb(247, 148, 28);
        text-decoration: none;
        font-size: 1vw;
    }

    .hr-text {
        line-height: 1em;
        position: relative;
        outline: 0;
        border: 0;
        color: #000;
        text-align: center;
        height: 1.5em;
        opacity: .5;
        width: 100%;
        margin: 15px 0;
    }

    .hr-text:before {
        content: "";
        background: linear-gradient(90deg, #caced5, #caced5, #caced5);
        position: absolute;
        left: 0;
        top: 50%;
        width: 100%;
        height: 1px;
    }

    .hr-text:after {
        content: attr(data-content);
        position: relative;
        display: inline-block;
        padding: 0 .5em;
        line-height: 1.5em;
        color: #4f4d5b;
        font-weight: 700;
        background-color: #f6f6f7;
    }

    .validater-switch {
        font-size: 1.1vw;
        padding-bottom: 20px;
    }

    .btn-switch {
        font-size: 1..vư;
        text-decoration: none;
        color: #707070;
    }

    .btn-switch:hover {
        color: rgb(247, 148, 28);
    }
</style>