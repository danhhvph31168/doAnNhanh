<div class="boxphai">
    <div class="tieude">
        <div class="top">
            <h2>Quản Lý Sản Phẩm</h2>
            <form action="#" method='post'>
                <input type="text" name="kyw" id="" placeholder="Tìm kiếm sản phẩm">
                <select name="iddm" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listdm as $dm) {
                        extract($dm);
                        echo '<option value="' . $id . '">"' . $name . '"</option>';
                    }
                    ?>
                </select>
                <input class="go" type="submit" name="listok" value="Go">
            </form>
        </div>
    </div>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Price Old</th>
            <th>Image</th>
            <th style="width: 33%;">Description</th>
            <th style="width: 15%;"></th>
        </tr>
        <?php
        foreach ($listsp as $sp) {
            extract($sp);
            $xoasp = 'index.php?act=xoasp&id=' . $id;
            $suasp = 'index.php?act=suasp&id=' . $id;
            $hinh = "../upload/" . $img;
            if (is_file($hinh)) {
                $hinh = '<img src="' . $hinh . '" height="80">';
            } else {
                $hinh = 'no photo';
            }
            echo '<tr>
                    <td>' . $id . '</td>
                    <td>' . $name . '</td>
                    <td>' . $price . '</td>
                    <td>' . $priceold . '</td>
                    <td>' . $hinh . '</td>
                    <td>' . $mota . '</td>
                    <td class="cnang">
                    <a href="' . $suasp . '"><input type="button" value="Update"></a> 
                    <a href="' . $xoasp . '"><input onclick="return confirm(\'Are you sure you can delete it?\')" type="button" value="Delete"></a>
                    </td>
                </tr>';
        }
        ?>
    </table>
    <div class="tieude">
        <a href="index.php?act=addsp">Add Products</a>
    </div>
</div>
<style>
    form input {
        border: 1px #ccc solid;
        padding: 5px;
        border-radius: 5px;
    }

    .top {
        display: inline-flex;
    }

    form {
        margin-left: 400px;
    }

    select {
        border-radius: 5px;
        border: 1px #ccc solid;
        padding: 4.5px;
        padding-top: 4px;
    }
    .go{
        padding: 5px 10px;
        border-radius: 5px;
    }
    .go:hover{
        background: #F99539;
        color: white;
        border: #F99539;
    }
</style>