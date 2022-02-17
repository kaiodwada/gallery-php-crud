
$('#formImg').submit(function (e) {
    e.preventDefault();
    let nome = $('#nome').val();
    let img = $('#img').val();
    let formdata = new FormData();
    formdata.append('imagem', img);
    formdata.append('name', nome);

    if (nome == "") {
        ErroNome.style.display = "block";
        formImg.nome.focus();
        return false;
    }
    if (img == "") {
        ErroImg.style.display = "block";
        formImg.img.focus();
        return false;
    }
    $.ajax({
        url: 'model/crud/create.php',
        method: 'POST',
        data: formdata,
        dataType: 'json',
        enctype: "multpart/form-data",
        processData: false,
        contentType: false,
        beforeSend: function () {
            $('.loader').css({ display: "block" });
        },
        complete: function () {
            $('.loader').css({ display: "none" });
        }
    }).done(function (result) {
        $('#nome').val('');
        $('#img').val('');
        console.log(result);
    });
});