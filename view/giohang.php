<main class="maingh">
    <div class="cart">
        <div class="tieude">
            <h2>Giỏ hàng của bạn</h2>
        </div>
        <div class="ttgh">
            <table>
                <?php
                viewgh(1);
                ?>
            </table>
            <div class="cartbotom">
                <div class="ttdh">
                    <h3></h3>
                </div>
                <div class="tieude">
                    <a href="#">Thanh toán</a>
                    <a href="index.php">Đặt thêm món</a>
                </div>
            </div>
        </div>
    </div>
</main>
<style>
.top{
    cursor: pointer;
    background: #F99539;
    padding: 5px 8px;
    border: none;
    border-radius: 100%;
    color: white;
}
.top:hover{
    background: red;
    color: white;
}
.duoi{
    background: white;
    padding: 5px;
    border: 1px #ccc solid;
    color: #F99539;
    border-radius: 5px;
    cursor: pointer;
}
.duoi:hover{
    background: #F99539;
    color: white;
}
</style>
