<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/w3.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Adicionar Imagen</title>
    <style>
        .loader {
            display: none;
        }
    </style>
</head>

<body>
    <main class="w3-monospace">
        <div class="w3-container w3-margin-bottom w3-card w3-blue name-box">
            <h3 class="w3-monospace">Enviar imagen</h3>
        </div>
        <section class=" w3-card w3-container box">
            <form enctype="multipart/form-data" id="formImg" class="w3-padding w3-margin-bottom form-box">
                <label class="w3-text-blue" for="nome"><b> Nome da imagen:</b> </label><input autocomplete="off" type="text" id="nome" class="w3-input w3-border" name="nome" placeholder="Escreva o nome da imagen">
                <div id="ErroNome" class="w3-padding w3-round w3-panel w3-red">
                    <p class="">
                        Você precisa adicionar um nome para a imagen
                    </p>
                </div>
                <label class="w3-text-blue" for="img"><b> Imagen:</b> </label><input  accept="image/*" type="file" id="img" class="w3-input w3-border" name="img">
                <div id="ErroImg" class="w3-round w3-padding w3-panel w3-red">
                    <p class="">
                        Você precisa adicionar uma imagen
                    </p>
                </div>
                <div class="loader w3-center w3-margin-top">
                    <img src="assets/img/gif/loader.gif">
                </div>
                <div class="w3-center">
                    <input name="enviar" class="w3-margin w3-button w3-blue w3-hover-green" type="submit">
                </div>
            </form>
        </section>

        <section class="w3-margin-top w3-center">
            <a class="w3-button w3-hover-purple  w3-black" href="templates/galeria.php">Galeria</a>
        </section>
    </main>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        ErroNome = document.getElementById("ErroNome");
        ErroImg = document.getElementById("ErroImg");
        ErroNome.style.display = "none";
        ErroImg.style.display = "none";
    </script>
</body>

</html>