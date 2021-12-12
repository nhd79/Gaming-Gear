<?php
$order_id = 0;

if (isset($_GET["order_id"]))
    $order_id = test_input($_GET["order_id"]);

$sql = 'SELECT address,email,phone FROM `order` WHERE id=?';
$sql2 = 'SELECT product_id,quantity,price,total FROM order_detail WHERE id=?';

$result = readDatabase($sql, array($order_id));
$result2 = readDatabase($sql2, array($order_id));

$count = 0;
foreach ($result2 as $row) {
    $count++;
}

for ($i = 0; $i < $count; $i++) {
    $result[$i][0] = $result[0][0];
    $result[$i][1] = $result[0][1];
    $result[$i][2] = $result[0][2];
    $result[$i][3] = $result2[$i][0];
    $result[$i][4] = $result2[$i][1];
    $result[$i][5] = $result2[$i][2];
    $result[$i][6] = $result2[$i][3];
}

foreach ($result as $order) {
    echo '<tr>
    <td>' . $order[0] . '</td>
    <td>' . $order[1] . '</td>
    <td>' . $order[2] . '</td>
    <td>' . $order[3] . '</td>
    <td>' . $order[4] . '</td>
    <td>' . number_format($order[5]) . '</td>
    <td>' . number_format($order[6]) . '</td>
  </tr?order_id=>';
}
