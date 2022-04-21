<?php



class CadastroController
{
    private $name;
    private $extension;
    private $tmpName;
    private $error;

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
        $loader = new \Twig\Loader\FilesystemLoader('app/view/');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load('galeria.html');

        $parametros = array();
        return $template->render($parametros);
    }
    public function addImage()
    {
        $galeria = new Gallery();
        $name = filter_input(INPUT_POST, 'nameImg', FILTER_SANITIZE_SPECIAL_CHARS);
     
        $extensao = strtolower(substr($_FILES['img']['name'], -4));
        $novo_nome = uniqid() . $extensao; 
        $dir = "/var/www/html/gallery-php-crud/Files/";
        move_uploaded_file($_FILES['img']['tmp_name'], $dir . $novo_nome);

        $galeria->setName($name);
        $galeria->setImagem($novo_nome);
        $galeria->inserirImagem();
        echo '<script>location.href = "http://localhost/gallery-php-crud/"</script>';
    }
}
