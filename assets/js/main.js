/* 
$('#formImg').submit(function (e){
    e.preventDefault();

    let nameImg = $('#nameImg').val();
    let file = document.getElementById('img').files[0];
    let Erro = $('#Erro');

    
   formData.append('name', $('#nameImg').val());

    if(nameImg == ''){
        Erro.focus();
        Erro.css({
            display: 'block'
        })
    } if(file == ''){
        Erro.focus();
        Erro.css({
            display: 'block'
        })
    }
 if(file){
        let formData = new FormData(this);
        formData.append('image', file);
        let xhr = new XMLHttpRequest();
        xhr.open("POST","http://localhost/gallery-php-crud/cadastro/addImage");
        xhr.onload = function (){
            console.log(this.response);
        };
        xhr.send(formData); 

         $.ajax({
            url:'http://localhost/gallery-php-crud/cadastro/addImage',
            method:'POST',
            data:formData,
            processData: false,
            contentType: false,
            success: function(){
                console.log('concluido');
            }
        }); 
    }
 
    
});
 */
$('#nameImg').val('');
    $('#img').val('');