<?php
$servername = "gg-server.mysql.database.azure.com";
$dbusername = "ggadmin";
$dbpassword = "u92LfhRWqpVV7fj";
$dbname = "grid-gaming-gear";

// $servername = "localhost";
// $dbusername = "root";
// $dbpassword = "";
// $dbname = "grid-gaming-gear";

$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    // PDO::MYSQL_ATTR_SSL_CA => '\CA-Cert\DigiCertGlobalRootCA.crt.pem'
);
try {
    $connection = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname . '', $dbusername, $dbpassword, $options);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

function readDatabase($sql, $parameter)
{
    global $connection;
    $prepare_sql = $connection->prepare($sql);
    $prepare_sql->execute($parameter);
    $result = $prepare_sql->fetchAll();
    return $result;
}

function writeDatabase($sql, $parameter)
{
    global $connection;
    try {
        $connection->beginTransaction();

        $prepare_sql = $connection->prepare($sql);
        $prepare_sql->execute($parameter);

        $connection->commit();
    } catch (PDOException $e) {
        $connection->rollBack();
        return -1;
    }
}
