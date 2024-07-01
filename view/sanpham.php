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
<style>
    .listpost {
        flex-wrap: wrap;
    }

    .post {
        margin-bottom: 40px;
    }
</style>
<main class="maintc">
    <div class="sale">
        <div class="tieude">
            <?php
            echo '<h3>Tất cả sản phẩm:  ' . $listten . '</h3>';
            ?>
        </div>
        <div class="listpost">
            <?php
            foreach ($dssp as $sp) {
                extract($sp);
                $hinh = $img_path . $img;
                echo '
                <div class="post">
                    <a href="ctspham.html"><img src="' . $hinh . '" alt=""></a>
                        <div class="chupost">
                            <p>' . $name . '</p>
                            <p class="">
                                <span>' . $price . 'đ</span>
                                <span class="sale-product giacu">' . $priceold . 'đ</span>
                            </p>
                            <div class="nutcart">
                                <a href="#">Thêm giỏ hàng
                                    <i class="icongh ti-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                </div>';
            }
            ?>
        </div>
    </div>
</main>