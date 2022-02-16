<?php
require_once("../model/servidor/conexao.php");
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
            <div class="w3-container w3-center w3-margin-bottom w3-card w3-black">
                <h3 class="w3-monospace">Todas as imagens</h3>
                <a class="w3-border-top w3-border-blue w3-button w3-hover-blue w3-black w3-round" href="../index.php">Cadastrar Imagem</a>
            </div>
        </section>
        <section>
            <?php
            $sql = "SELECT id,nome, nome_img FROM dados";
            $result = $conn_bd->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="efeito w3-text-black">
                        <input readonly type="hidden" value="<?php echo $row["id"]; ?>">
                        <img id="efeito" class="box-img w3-round w3-card-4 "  src="../model/crud/uploads/<?php echo $row["nome"]; ?>">
                        <p class="w3-round-large w3-text w3-black w3-border-bottom w3-padding">
                            <?php echo $row["nome_img"]; ?>
                        </p>
                        <div class="w3-margin-bottom">
                            <a href="confirmadel.php?id=<?php echo $row["id"] ?>" class="w3-button w3-red w3-round w3-hover-orange">Deletar</a>
                            <a href="confirmaup.php?id=<?php echo $row["id"] ?>" class="w3-button w3-yellow w3-round w3-hover-amber">Editar</a>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo "Nenhuma imagen salva na galeria";
            }
            ?>
        </section>
        <script src="../assets/js/main.js"></script>
</body>
</html>