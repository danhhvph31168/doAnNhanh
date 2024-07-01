<div class="boxphai">
    <div class="tieude">
        <h2>Quản Lý Danh Mục</h2>
    </div>
    <form action="" method="post">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th style="width: 140px;">Chức năng</th>
            </tr>
            <?php
            foreach ($listdm as $dm) {
                extract($dm);
                $xoadm="index.php?act=xoadm&id=".$id;
                $suadm="index.php?act=suadm&id=".$id;
                echo '<tr>
                <td>'.$id.'</td>
                <td>'.$name.'</td>
                <td class="cnang">
                <a href="'.$suadm.'"><input type="button" value="Update"></a> 
                <a href="'.$xoadm.'"><input onclick="return confirm(\'Are you sure you can delete it?\')" type="button" value="Delete"></a> 
                </td>
            </tr>';
            }
            ?>
        </table>
        <div class="tieude">
            <a href="index.php?act=adddm">Thêm Danh Mục</a>
        </div>
    </form>
</div>