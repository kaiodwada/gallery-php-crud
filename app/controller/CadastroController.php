<?php

use Lib\Server\Connection;

class CadastroController
{
    public function index()
    {
        $loader = new \Twig\Loader\FilesystemLoader('app/view/');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load('adicionar.html');
       
        $parametros = array();
        return $template->render($parametros);
    }
    public function galeria()
    {
        $galeria = new Gallery();
        $galeria->selectImagem();
        $loader = new \Twig\Loader\FilesystemLoader('app/view/');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load('galeria.html');
       
        $galeria->totalP;
        $parametros = array();
        $parametros['galeria'] = $galeria->selectImagem(); 
        $parametros['totalP'] = $galeria->totalP;

        return $template->render($parametros);
    }
    
    public function addImage()
    {
        $galeria = new Gallery();
        $nameRec = filter_input(INPUT_POST, 'nameImg', FILTER_SANITIZE_SPECIAL_CHARS);
        $name = ucfirst($nameRec);
        $extensao = strtolower(substr($_FILES['img']['name'], -4));
        $novo_nome = uniqid() . $extensao; 
        $dir = "/var/www/html/gallery-php-crud/Files/";

        if (move_uploaded_file($_FILES['img']['tmp_name'], $dir . $novo_nome)) {
            $galeria->setName($name);
            $galeria->setImagem($novo_nome);
            $galeria->inserirImagem();
            echo '<script>location.href = "http://localhost/gallery-php-crud/Cadastro/galeria"</script>';    
        }
    }
}
