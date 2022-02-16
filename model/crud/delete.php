<?php
require_once("../servidor/conexao.php");
$id_img = $_GET["id"];
$sql = "DELETE FROM dados WHERE id = $id_img";
$deletar = $conn_bd->query($sql) or die($conn_bd->error);
echo "<script>location.href='../../templates/galeria.php'</script>";
$conm_bd->close();
?>