<div class="boxphai">
    <div class="tieude">
        <div class="top">
            <h2>Quản Lý Tin Tức</h2>
            <form action="index.php?act=listttuc" method='post'>
                <input type="text" name="kywtt" id="" placeholder="Tìm kiếm sản phẩm">
                <input class="go" type="submit" name="listoktt" value="Go">
            </form>
        </div>
    </div>
    <table>
        <tr>
            <th>ID</th>
            <th>Tiêu Đề</th>
            <th>Image</th>
            <th style="width: 33%;">Nội Dung</th>
            <th style="width: 15%;"></th>
        </tr>
        <?php
        foreach ($listttuc as $tt) {
            extract($tt);
            $xoattuc = 'index.php?act=xoattuc&id=' . $id;
            $suattuc = 'index.php?act=suattuc&id=' . $id;
            $hinh = "../upload/" . $img;
            if (is_file($hinh)) {
                $hinh = '<img src="' . $hinh . '" height="80">';
            } else {
                $hinh = 'no photo';
            }
            echo '<tr>
                    <td>' . $id . '</td>
                    <td>' . $tieude . '</td>
                    <td>' . $hinh . '</td>
                    <td>' . $noidung . '</td>
                    <td class="cnang">
                    <a href="' . $suattuc . '"><input type="button" value="Update"></a> 
                    <a href="' . $xoattuc . '"><input onclick="return confirm(\'Are you sure you can delete it?\')" type="button" value="Delete"></a>
                    </td>
                </tr>';
        }
        ?>
    </table>
    <div class="tieude">
        <a href="index.php?act=addttuc">Thêm tin tức</a>
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
