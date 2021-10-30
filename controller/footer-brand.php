<?php
$sql = 'select * from brand';
$result = readDatabase($sql, array());
foreach ($result as $brand) {
    echo '<li><a href="' . $brand[1] . '" target="_blank">' . $brand[0] . '</a></li>';
}
