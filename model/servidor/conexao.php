<?php
$server = "10.0.0.156:3306";
$server_name = "root";
$server_password = "root";
$dbname = "galeriadb";
$conn_bd = new mysqli($server, $server_name, $server_password, $dbname);
if ($conn_bd->connect_error) {
    die("Falha na conexão: " . $conn_bd->connect_error);
}
?>