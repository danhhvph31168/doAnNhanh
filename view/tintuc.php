<main class="mainttuc">
    <div class="sale">
        <div class="tieude tieudett">
            <h5>Tin tức</h5>
            <form action="index.php?act=tintuc" method="post">
                <div class="kyw">
                    <input name="kywtt" type="text" placeholder="Tìm kiếm bài viết" required>
                </div>
                <div class="tk">
                    <button name="listoktt" class="ti-search"> Tìm kiếm</button>
                </div>
            </form>
        </div>
        <div class="listtintuc">
            <?php
            foreach ($listttuc as $tt) {
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
</body>
<script src="banner.js"></script>
<style>
    .menu ul ul {
        display: none;
        position: absolute;
        background: white;
        border: 1px #ccc solid;
        border-top: none;
        padding: 5px 15px;
        margin-top: 10px;
    }

    .menu ul li:hover>ul {
        display: block;
    }
</style>

</html>