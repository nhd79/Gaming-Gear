<?php
$sql = 'SELECT `order`.id,order_date,full_name,payment_method,`order`.`status` FROM `order`';
$sql2 = 'SELECT sum(total) FROM order_detail GROUP BY id';

$result = readDatabase($sql, array());
$result2 = readDatabase($sql2, array());

$count = 0;
foreach ($result as $row) {
    $count++;
}

for ($i = 0; $i < $count; $i++) {
    $result[$i][5] = $result2[$i][0];
}

foreach ($result as $order) {
    echo '<tr onclick="window.location=' . "'" . '../view/dashboard-product.php' . "'" . ';">
    <td>' . $order[0] . '</td>
    <td>' . $order[1] . '</td>
    <td>' . $order[2] . '</td>
    <td>' . $order[3] . '</td>
    <td>' . number_format($order[5]) . '</td>
    <td><span class="status ';
    if ($order[4] == 1)
        echo 'pending';
    if ($order[4] == 2)
        echo 'inprogress';
    if ($order[4] == 3)
        echo 'delivered';
    if ($order[4] == 4)
        echo 'return';
    echo '">';
    if ($order[4] == 1)
        echo 'Đang xử lý';
    if ($order[4] == 2)
        echo 'Đang giao hàng';
    if ($order[4] == 3)
        echo 'Đã giao hàng';
    if ($order[4] == 4)
        echo 'Trả hàng';
    echo '</span></td>
  </tr>';
}
