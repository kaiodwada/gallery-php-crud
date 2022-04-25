function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
  }
  
  function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
  }
let imagem = document.querySelector('[name=img]')
    imagem.addEventListener('change', e => {
        let file = e.target.files[0]
        let fileReader = new FileReader()
        fileReader.onloadend = () =>{
            document.querySelector('#imgPreview').setAttribute('src', fileReader.result)
        }
        fileReader.readAsDataURL(file)
    })
$('#formImg').submit(function (e) {
    let nameImg = $('#nameImg').val()
    let fileE = $('#img').val()
    let Erro = $('#Erro')

    if (nameImg == '') {
        e.preventDefault()
        Erro.focus()
        Erro.css({
            display: 'block'
        })
        return false
    } if (fileE == '') {
        e.preventDefault()
        Erro.focus()
        Erro.css({
            display: 'block'
        })
        return false
    }
  
})
