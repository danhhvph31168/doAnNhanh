<?php
function viewgh($del)
{
    global $img_path;
    $tong = 0;
    $i = 0;
    if ($del == 1) {
        $xoaghtop = '<td>xoa</td>';
    } else {
        $xoaghtop = "";
        $xoaghduoi = "";
    }
    echo '
        <tr>
            <th></th></th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
            ' . $xoaghtop . '
        </tr>';
    foreach ($_SESSION['mycart'] as $cart) {
        $hinh = $img_path . $cart[2];
        $tong += $cart[5];
        $cart[5] = $cart[3] * $cart[4];
        if ($del == 1) {
            $xoaghduoi = '<td><a href="index.php?act=xoagh&idcart=' . $i . '"><input class="top" type="button" value="x"></a></td>';
        } else {
            $xoaghduoi = "";
        }
        echo '
        <tr>
            <td><img src="' . $hinh . '" width="100px" height="100px"></td>
            <td>' . $cart[1] . '</td>
            <td>' . $cart[3] . '</td>
            <td>' . $cart[4] . '</td>
            <td>' . $cart[5] . '</td>
            ' . $xoaghduoi . '
        </tr>';
        $i += 1;
    }
    echo '
    <tr>
        <th>Tổng đơn hàng</th>
        <th></th>
        <th></th>
        <th></th>
        <th>' . $tong . '</th>
        <th><a href="index.php?act=xoagh"><input class="duoi" type="button" value="Xóa"></a></th>
    </tr>
    ';
}
