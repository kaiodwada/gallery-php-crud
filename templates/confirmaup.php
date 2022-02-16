<?php
require_once("../model/servidor/conexao.php");
$id_img = $_GET["id"];
$sql = "SELECT * FROM dados WHERE id = $id_img";
$result = $conn_bd->query($sql);
$row = mysqli_fetch_assoc($result);
$conn_bd->close();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/css/w3.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Galeria</title>
</head>
<body>
    <main class="w3-monospace">
        <section>
            <div class="w3-container w3-center w3-margin-bottom w3-card w3-green">
                <h3 class="w3-monospace">Editar dados da imagem</h3>
            </div>
        </section>
        <section>
            <div class="">
                <form action="../model/crud/update.php?id=<?php echo $row["id"] ?>" class="efeito w3-text-black">
                    <input name="id" readonly type="hidden" value="<?php echo $row["id"]; ?>">
                    <img name=" nome_img"id="efeito" class="box-upd-img w3-round w3-card-4 "   src="../model/crud/uploads/<?php echo $row["nome"]; ?>">
                <div class="w3-margin-top box-name">
                    <label class=" w3-text-blue" for="img"><b> Nome da Imagen:</b> </label>
                    <input autocomplete="off"type="text" id="nome_upd" class="w3-input w3-border" name="nome_img" value="<?php echo $row["nome_img"] ?>">
                    </div>
                    <div class="w3-margin">
                        <button type="submit" class="w3-button w3-red w3-round w3-hover-orange">Alterar</button>
                        <a href="galeria.php" class="w3-button w3-yellow w3-round w3-hover-amber">Voltar</a>
                    </div>
                </form>
            </div>
        </section>
        <script src="../assets/js/main.js"></script>
    </body>
</html>