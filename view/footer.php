<link rel="stylesheet" href="css/footer.css">
<style>
    li {
        list-style-type: none;
    }
</style>
<!-- -----------------------------------FOOTER----------------------------------- -->
<div class="row footer">
    <div class="footer-col location">
        <div class="row mr" style="padding-top: 10%;">
            <img src="images/logo/logo (1).png" alt="" width="40%">
        </div>
        <table>
            <tr class="footer-infor">
                <td>
                    <div class="footer-icon">
                        <img class="icon-footer" src="images/logo/located.png" alt="">
                    </div>
                </td>
                <td>
                    <div class="login-text">Địa chỉ: Trịnh Văn Bô - Nam Từ Liêm - Hà Nội</div>
                </td>
            </tr>
            <tr class="footer-infor">
                <td>
                    <div class="footer-icon">
                        <img class="icon-footer" src="images/logo/tel.jpg" alt="">
                    </div>
                </td>
                <td>
                    <div class="login-text">Mr.Tuấn : 0981208891 - Mr.Danh: 0987654321</div>
                </td>
            </tr>
            <tr class="footer-infor">
                <td>
                    <div class="footer-icon">
                        <img class="icon-footer" src="images/logo/email.png" alt="">
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
            <li><a href=""><img src="images/logo/fb.png"></a></li>
            <li style="margin: 0 10px;"><a href=""><img src="images/logo/zalo.png"></a></li>
            <li><a href=""><img src="images/logo/zalo.png"></a></li>
        </ul>
        <div class="mg chungnhan">
            <a><img src="images/logo/chungnhan.png" alt=""></a>
        </div>

    </div>

    <div class="footer-col mg mb10 payment">
        <p>PHƯƠNG THỨC THANH TOÁN</p>
        <ul class="payment-list">
            <li><a href="#"><img src="images/logo/img_payment_item_1.webp"></a></li>
            <li><a href="#"><img src="images/logo/img_payment_item_2.webp"></a></li>
            <li><a href="#"><img src="images/logo/img_payment_item_3.webp"></a></li>
            <li><a href="#"><img src="images/logo/img_payment_item_4.webp"></a></li>
            <li><a href="#"><img src="images/logo/img_payment_item_5.webp"></a></li>
        </ul>
    </div>
</div>

<div class=" row mb copyright">
    Copyright © 2023 DTQ FASTFOOD
</div>
</div>
</body>
<script>
    let auto;
    let index = 0;

    function start1() {
        let inbanner = document.getElementsByClassName('inbanner');
        if (index >= inbanner.length) {
            index = 0;
        }
        if (index < 0) {
            index = inbanner.length - 1;
        }
        for (let i = 0; i < inbanner.length; i++) {
            inbanner[i].style.display = 'none';
        }
        inbanner[index].style.display = 'block';
        index++
        auto = setTimeout(start1, 3000);
    }

    function start2() {
        let inbanner2 = document.getElementsByClassName('inbanner2');
        if (index >= inbanner2.length) {
            index = 0;
        }
        if (index < 0) {
            index = inbanner2.length - 1;
        }
        for (let i = 0; i < inbanner2.length; i++) {
            inbanner2[i].style.display = 'none';
        }
        inbanner2[index].style.display = 'block';
        index++
        auto = setTimeout(start2, 3000);
    }
    start1()
    start2()
</script>
<script>
    // Lấy ra các phần tử DOM
    const decreaseButton = document.getElementById('decrease');
    const increaseButton = document.getElementById('increase');
    const quantityInput = document.getElementById('quantity');

    // Xử lý sự kiện nút giảm
    decreaseButton.addEventListener('click', () => {
        const currentValue = parseInt(quantityInput.value);
        if (currentValue > 0) {
            quantityInput.value = currentValue - 1;
        }
    });

    // Xử lý sự kiện nút tăng
    increaseButton.addEventListener('click', () => {
        const currentValue = parseInt(quantityInput.value);
        quantityInput.value = currentValue + 1;
    });
</script>

</html>