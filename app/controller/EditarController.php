<?php

class EditarController{
    
    public function index()
    {
        $galeria = new Gallery();
        $galeria->selectImagem();
        $loader = new \Twig\Loader\FilesystemLoader('app/view/');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load('admin.html');

        $galeria->totalP;
        $galeria->totalR;

        $parametros = array();
        $parametros['galeria'] = $galeria->selectImagem(); 
        $parametros['totalP'] = $galeria->totalP;
        $parametros['totalRegistros'] = $galeria->totalR;

        return $template->render($parametros);
    }
    public function allReg(){
        
        $galeria = new Gallery();
        $galeria->selectImagem();
        $galeria->totalP;
        $galeria->totalR;

        $parametros = array();
        $parametros['galeria'] = $galeria->selectImagem(); 
        $parametros['totalP'] = $galeria->totalP;
        $parametros['totalRegistros'] = $galeria->totalR;
    }
}