<?php

class GaleriaController

{

    public function index()
    {
        $loader = new \Twig\Loader\FilesystemLoader('app/view/');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load('galeria.html');

        $parametros = array();
        return $template->render($parametros);
    }
}