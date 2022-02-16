<?php
require_once("../servidor/conexao.php");
$nome_img = $_POST['nome'];
$img = $_FILES['img'];
$dir = "uploads/";
$extensao = strtolower
(substr($_FILES['img']['name'], -4));
$novo_nome = uniqid().$extensao;
move_uploaded_file
($_FILES['img']['tmp_name'], $dir.$novo_nome);
if (isset($nome_img) || isset($img)) {
    $sql = "INSERT INTO dados(nome_img, nome) VALUES('$nome_img', '$novo_nome')";
    if (mysqli_query($conn_bd, $sql)) {
echo "<script>document.location.href = '../../templates/galeria.php';
</script>";
echo "Imagem adicionada";
    } else {
        echo "Erro: " . $sql . "<br>" . mysqli_error($conn_bd);
    }
} else {
    echo "Preencha os campos";
}
?>
