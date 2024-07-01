<div class="banner">
    <div class="inbanner">
        <img src="images/baner/banner1.jpg" alt="">
    </div>
    <div class="inbanner">
        <img src="images/baner/banner2.jpg" alt="">
    </div>
    <div class="inbanner">
        <img src="images/baner/banner3.jpg" alt="">
    </div>
</div>
<main class="maintc">
    <div class="sale">
        <div class="tieude">
            <h3>Đồ uống</h3>
        </div>
        <div class="listpost">
            <?php
            foreach ($douong as $du) {
                extract($du);
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
    <div class="sale">
        <div class="tieude">
            <h3>Combo</h3>
        </div>
        <div class="listpost">
            <?php
            foreach ($combo as $cb) {
                extract($cb);
                $hinh = $img_path . $img;
                $linksp = "index.php?act=ctspham&idsp=" . $id;
                echo '
                <div class="post">
                    <a href="' . $linksp . '"><img src="' . $hinh . '" alt=""></a>
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
    <div class="banner2">
        <div class="inbanner2">
            <img src="images/baner/shipperbanner.jpg" alt="">
        </div>
        <div class="inbanner2">
            <img src="images/baner/shiperbanner2.png" alt="">
        </div>
        <div class="inbanner2">
            <img src="images/baner/shiperbanner3.png" alt="">
        </div>
    </div>
    <!-- tin tức của trang chủ------------------------- -->
    <div class="sale">
        <div class="tieude">
            <h3>Tin tức mới nhất</h3>
        </div>
        <div class="listtintuc">
            <?php
            foreach ($tintuc as $tt) {
                extract($tt);
                $hinh = $img_path . $img;
                echo '
                <div class="tintuc">
                    <img src="' . $hinh . '" alt="">
                    <div class="chutintuc">
                        <h4>' . $tieude . '</h4>
                        <p>' . $noidung . '</p>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
</main>