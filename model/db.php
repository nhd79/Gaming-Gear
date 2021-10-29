<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "grid-gaming-gear";

function readDatabase($sql)
{
    global $servername, $dbusername, $dbpassword, $dbname;
    $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );
    try {
        $connection = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname . '', $dbusername, $dbpassword, $options);
        // echo "Connected successfully";
        $result = $connection->query($sql);
        return $result;
        $connection = null;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
// $result = readDatabase('select * from category where 1');
// foreach ($result as $danhmuc) {
//     echo $danhmuc[0];
//     echo $danhmuc[1];
// }

function writeDatabase($sql)
{
    global $servername, $dbusername, $dbpassword, $dbname;
    $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );

    $connection = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname . '', $dbusername, $dbpassword, $options);

    try {
        $connection->beginTransaction();
        $connection->exec($sql);
        $connection->commit();
    } catch (PDOException $e) {
        $connection->rollBack();
        return -1;
    }
}
