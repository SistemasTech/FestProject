<?php

# pdo_testdb_connect.php - função para testar a conexão









function testdb_connect() {
    $db = new PDO("mysql:host=localhost;dbname=bibilioteca;charset=utf8", "root", "",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    return ($db);
}
?>