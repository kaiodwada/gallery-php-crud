
$('#formImg').submit(function (e){
    e.preventDefault();

    let nameImg = $('#nameImg').val();
    let file = $('#img').val();
    let Erro = $('#Erro');

    if(nameImg == ''){
        Erro.focus();
        Erro.css({
            display: 'block'
        })
    }if(file == ''){
        Erro.focus();
        Erro.css({
            display: 'block'
        })
    }else{
        console.log(nameImg, file);
    }
    
});



