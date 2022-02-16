ErroNome = document.getElementById("ErroNome");
ErroImg = document.getElementById("ErroImg");
ErroNome.style.display = "none";
ErroImg.style.display = "none";
function validar() {
    let nome = formImg.nome.value;
    let img = formImg.img.value;

    if (nome == "") {
        event.preventDefault();
        ErroNome.style.display = "block";
        formImg.nome.focus();
        return false;
    }
    if (img == "") {
        event.preventDefault();
        ErroImg.style.display = "block";
        formImg.img.focus();
        return false;
    }
 
};
