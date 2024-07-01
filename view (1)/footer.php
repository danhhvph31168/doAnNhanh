<!-- -----------------------------------FOOTER----------------------------------- -->
<div class="row footer">
    <div class="footer-col location">
        <div class="row mr" style="padding-top: 10%;">
            <img src="view/images/logo/logo (1).png" alt="" width="40%">
        </div>
        <table>
            <tr class="footer-infor">
                <td>
                    <div class="footer-icon">
                        <img class="icon-footer" src="view/images/logo/located.png" alt="">
                    </div>
                </td>
                <td>
                    <div class="login-text">Địa chỉ: Trịnh Văn Bô - Nam Từ Liêm - Hà Nội</div>
                </td>
            </tr>
            <tr class="footer-infor">
                <td>
                    <div class="footer-icon">
                        <img class="icon-footer" src="view/images/logo/tel.jpg" alt="">
                    </div>
                </td>
                <td>
                    <div class="login-text">Mr.Tuấn : 0981208891 - Mr.Danh: 0987654321</div>
                </td>
            </tr>
            <tr class="footer-infor">
                <td>
                    <div class="footer-icon">
                        <img class="icon-footer" src="view/images/logo/email.png" alt="">
                    </div>
                </td>
                <td>
                    <div class="login-text">Email: DTQ.id.vn</div>
                </td>
            </tr>
        </table>
    </div>

    <div class="footer-col mg guide-title">
        <p>HƯỚNG DẪN</p>
        <ul class="row guide-list">
            <li><a href="#">Giới thiệu</a></li>
            <li><a href="#">Chính sách đổi trả</a></li>
            <li><a href="#">Chính sách bảo mật</a></li>
            <li><a href="#">Điều khoản dịch vụ</a></li>
            <li><a href="index.php?act=lien-he">Liên hệ</a></li>
            <li><a href="#">Chính sách vận chuyển</a></li>
            <li><a href="#">Chính sách thanh toán</a></li>
        </ul>
    </div>

    <div class="footer-col mg mb connect">
        <p>Kết nối với chúng tôi</p>
        <ul class="logo-fb-zalo">
            <li><a href=""><img src="view/images/logo/fb.png"></a></li>
            <li><a href=""><img src="view/images/logo/zalo.png"></a></li>
            <li><a href=""><img src="view/images/logo/zalo.png"></a></li>
        </ul>
        <div class="mg chungnhan">
            <a><img src="view/images/logo/chungnhan.png" alt=""></a>
        </div>

    </div>

    <div class="footer-col mg mb10 payment">
        <p>PHƯƠNG THỨC THANH TOÁN</p>
        <ul class="payment-list">
            <li><a href="#"><img src="view/images/logo/img_payment_item_1.webp"></a></li>
            <li><a href="#"><img src="view/images/logo/img_payment_item_2.webp"></a></li>
            <li><a href="#"><img src="view/images/logo/img_payment_item_3.webp"></a></li>
            <li><a href="#"><img src="view/images/logo/img_payment_item_4.webp"></a></li>
            <li><a href="#"><img src="view/images/logo/img_payment_item_5.webp"></a></li>
        </ul>
    </div>
</div>

<div class=" row mb copyright">
    Copyright © 2023 DTQ FASTFOOD
</div>
</div>

<script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1 }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
</script>
</body>

</html>