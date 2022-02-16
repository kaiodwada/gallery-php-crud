<?php
require_once("../model/servidor/conexao.php");
$id_img = $_GET["id"];
$sql = "SELECT * FROM dados WHERE id = $id_img";
$result = $conn_bd->query($sql);
$row = mysqli_fetch_assoc($result);
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
            <div class="w3-container w3-center w3-margin-bottom w3-card w3-red">
                <h3 class="w3-monospace">Deletar imagem?</h3>
            </div>
        </section>
        <section>
            <div class="">
                <form class="efeito w3-text-black">
                    <input readonly type="hidden" value="<?php echo $row["id"]; ?>">
                    <img id="efeito" class="box-upd-img w3-round w3-card-4 " src="../model/crud/uploads/<?php echo $row["nome"]; ?>">
                    <p class="w3-round-large w3-text w3-black w3-border-bottom w3-padding">
                        <?php echo $row["nome_img"]; ?>
                    </p>
                    <div class="w3-margin-bottom">
                        <a class="w3-button w3-red w3-round w3-hover-orange" href="../model/crud/delete.php?id=<?php echo $row["id"] ?>">Sim</a>
                        <a href="galeria.php" class="w3-button w3-yellow w3-round w3-hover-amber">Não</a>
                    </div>
                </form>
            </div>
        </section>
        <script src="../assets/js/main.js"></script>
</body>
</html>