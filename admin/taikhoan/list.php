<div class="boxphai">
    <div class="tieude">
        <div class="top">
            <h2>Quản Lý Tài Khoản</h2>
            <form action="#" method='post'>
                <input type="text" name="kyw" id="" placeholder="Tìm kiếm tài khoản">
                <input class="go" type="submit" name="listok" value="Go">
            </form>
        </div>
    </div>
    <table>
        <tr>
            <th>ID</th>
            <th>User</th>
            <th>Tên khách hàng</th>
            <th>Mật khẩu</th>
            <th>Email</th>
            <th>Số Điện Thoại</th>
            <th>Địa Chỉ</th>
            <th>Phân Quyền</th>
            <th style="width: 15%;"></th>
        </tr>
        <?php
        foreach ($listtk as $tk) {
            extract($tk);
            $xoatk = 'index.php?act=xoatk&id=' . $id;
            $suatk = 'index.php?act=suatk&id=' . $id;
            echo '<tr>
                    <td>' . $id . '</td>
                    <td>' . $user . '</td>
                    <td>' . $tenkh . '</td>
                    <td>' . $pass . '</td>
                    <td>' . $email . '</td>
                    <td>' . $tel . '</td>
                    <td>' . $address . '</td>
                    <td>' . $role . '</td>
                    <td class="cnang">
                    <a href="' . $suatk . '"><input type="button" value="Update"></a> 
                    <a href="' . $xoatk . '"><input onclick="return confirm(\'Are you sure you can delete it?\')" type="button" value="Delete"></a>
                    </td>
                </tr>';
        }
        ?>
    </table>
    <div class="tieude">
        <a href="index.php?act=addtk">Thêm tài khoản</a>
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