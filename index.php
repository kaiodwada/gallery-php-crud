
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/w3.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Adicionar Imagen</title>
</head>
<body>
    <main class="w3-monospace">
        <div class="w3-container w3-margin-bottom w3-card w3-blue">
            <h3 class="w3-monospace">Enviar imagen</h3>
        </div>
        <section class=" w3-card w3-container">
            <form enctype="multipart/form-data"action="model/crud/create.php" id="formImg" method="POST" class="w3-padding w3-margin-bottom">
                <label class="w3-text-blue" for="nome"><b> Nome da imagen:</b> </label><input autocomplete="off" type="text" id="nome" class="w3-input w3-border" name="nome" placeholder="Escreva o nome da imagen">
                <div id="ErroNome"class="w3-padding w3-round w3-panel w3-red">
                    <p class="">
                       Você precisa adicionar um nome para a imagen
                    </p>
                </div>
                <label class="w3-text-blue" for="img"><b> Imagen:</b> </label><input autocomplete="off" accept="image/*" type="file" id="img" class="w3-input w3-border" name="img">
                <div id="ErroImg" class="w3-round w3-padding w3-panel w3-red">
                    <p class="">
                        Você precisa adicionar uma imagen
                    </p>
                </div>
                <div class="w3-center">
                    <input onclick="return  validar()" name="enviar" class="w3-margin w3-button w3-blue w3-hover-green" type="submit">
                </div>
            </form>
        </section>

        <section class="w3-margin-top w3-center">
            <a class="w3-button w3-hover-purple  w3-black" href="templates/galeria.php">Galeria</a>
        </section>
    </main>
    <script src="assets/js/jquery.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>