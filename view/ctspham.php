<style>
    .textct {
        flex: 175%;
    }
</style>
<main class="mainct">
    <div class="ctsp">
        <div class="anhct">
            <?php
            $hinh = $img_path . $img;
            echo '<img src="' . $hinh . '">';
            ?>
        </div>
        <div class="textct">
            <div class="texttop">
                <?php
                extract($onesp);
                echo '
                <h3>' . $name . '</h3>
                <p>' . $mota . '</p>
                ';
                ?>
                <p class="dcct">Tình trạng : 24/24h</p>
            </div>
            <hr class="thanhngangct">
            <div class="sizect">
                <p>Size</p>
                <div class="chonsize">
                    <input type="radio" value="1">
                    <input type="radio" value="1">
                    <input type="radio" value="1">
                </div>
            </div>
            <div class="giact">
                <p>Giá sản phẩm</p>
                <p>
                    <?php
                    echo '<span>' . $price . 'đ</span>';
                    ?>
                </p>
            </div>
            <div class="soluongct">
                <p>Số lượng</p>
                <div class="chucnangsl">
                    <button id="decrease" class="decrease sz">-</button>
                    <input type="number" id="quantity" class="number" value="0" readonly>
                    <button id="increase" class="increase sz">+</button>
                </div>
            </div>
            <div class="buttonct">
                <button class="muangayct">MUA NGAY</button><br><br>
                <button class="addghct">THÊM GIỎ HÀNG</button>
            </div>
        </div>
        <!-- thanh tư vấn -->
        <div class="tuvanct">
            <div class="intuvan">
                <p>TƯ VẤN BÁN HÀNG</p>
                <hr>
                <div class="anhtuvan">
                    <img src="images/logo/icontv-removebg-preview.png" alt="">
                    <div class="anhtuvan-p">
                        <p>0987.654.321
                            0987.654.321</p>
                    </div>
                </div>
                <p style="font-size: 15px;text-align: center;">(Từ 8h00 Thứ 2 đến Chủ nhật 21h )</p>
                <div class="anhtuvan">
                    <img src="images/logo/iconxm-removebg-preview.png" alt="">
                    <div class="anhtuvan-p">
                        <p class="anhtuvan_pduoi">Giao hàng tận nơi</p>
                    </div>
                </div>
                <div class="anhtuvan">
                    <img src="images/logo/xm2.png" alt="">
                    <div class="anhtuvan-p">
                        <p class="anhtuvan_pduoi">Miễn phí giao hàng đối với đơn hàng trên 500k</p>
                    </div>
                </div>
                <div class="anhtuvan">
                    <img src="images/logo/iconvt-removebg-preview.png" alt="">
                    <div class="anhtuvan-p">
                        <p class="anhtuvan_pduoi">Mọi nơi đều có thể sử dụng</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bluan">
        <div class="hienthibl">
            <table>
                <tr>
                    <td style="width: 40px;"><img src="images/logo/images.png" width="30px"></td>
                    <?php
                    foreach ($binhluan as $bl) {
                        extract($bl);
                        echo '
                        <td>' . $tenkh . '</td>
                        <td>' . $noidung . '</td>
                        <td>' . date("d/m/Y", strtotime($ngaybinhluan)) . '</td>
                        ';
                    }
                    ?>
                </tr>
            </table>
        </div>
        <form action="index.php?act=ctspham&idsp=<?= $id ?>" method="post">
            <input type="hidden" name="idsp" value="<?= $id ?>">
            <input type="text" name="noidung" placeholder="Viết bình luận..." required>
            <button name="okbl" value="okbl">Đăng</button>
        </form>
    </div>
    <div class="sale">
        <div class="tieude">
            <h3 style="text-align: center;">Sản phẩm liên quan</h3>
        </div>
        <div class="listpost">
            <?php 
            foreach ($sp_cungloai as $spcl) {
                extract($spcl);
                $hinh = $img_path . $img;
                $linksp = "index.php?act=ctspham&idsp=" . $id;
                echo '
                <div class="post">
                    <a href="' . $linksp . '"><img src="' . $hinh . '"></a>
                        <div class="chupost">
                            <p>' . $name . '</p>
                            <p class="">
                                <span>' . $price . 'đ</span>
                                <span class="sale-product giacu">' . $priceold . 'đ</span>
                            </p>
                            <div class="nutcart">
                                <form action="index.php?act=giohang" method="post">
                                    <input type="hidden" name="id" value="' . $id . '">
                                    <input type="hidden" name="name" value="' . $name . '">
                                    <input type="hidden" name="img" value="' . $img . '">
                                    <input type="hidden" name="price" value="' . $price . '">
                                    <button name="addgh" value="addgh">Thêm giỏ hàng
                                        <i class="icongh ti-shopping-cart"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                </div>';
            }
            ?>
        </div>
    </div>
</main>