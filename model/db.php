<?php
$servername = "gg-server.mysql.database.azure.com";
$dbusername = "ggadmin";
$dbpassword = "u92LfhRWqpVV7fj";
$dbname = "grid-gaming-gear";

// $servername = "localhost";
// $dbusername = "root";
// $dbpassword = "";
// $dbname = "grid-gaming-gear";

// $servername = "fdb34.awardspace.net";
// $dbusername = "4015136_gridgg";
// $dbpassword = "3T[lQAHo0sTX7?B_";
// $dbname = "4015136_gridgg";

function readDatabase($sql, $parameter)
{
    global $servername, $dbusername, $dbpassword, $dbname;
    $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );
    try {
        $connection = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname . '', $dbusername, $dbpassword, $options);
        // echo "Connected successfully";
        $prepare_sql = $connection->prepare($sql);
        $prepare_sql->execute($parameter);
        $result = $prepare_sql->fetchAll();
        // $result = $connection->query($sql);
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

function writeDatabase($sql, $parameter)
{
    global $servername, $dbusername, $dbpassword, $dbname;
    $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );

    $connection = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname . '', $dbusername, $dbpassword, $options);

    try {
        $connection->beginTransaction();

        $prepare_sql = $connection->prepare($sql);
        $prepare_sql->execute($parameter);
        // $connection->exec($sql);

        $connection->commit();
    } catch (PDOException $e) {
        $connection->rollBack();
        return -1;
    }
}
