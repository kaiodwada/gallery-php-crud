<?php
require_once("../servidor/conexao.php");
$id_img = $_GET["id"];
$nome = $_GET["nome_img"];
$sql = "UPDATE dados SET nome_img ='$nome' WHERE id = $id_img";
$update = $conn_bd->query($sql);
echo "<script>location.href='../../templates/galeria.php'</script>";
?>