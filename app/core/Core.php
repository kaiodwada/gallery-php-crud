<?php


class Core
{
    private $url;
    private $controller;
    private $method = 'index';
    private $params = array();
    

    public function start($request)
    {
        if (isset($request['url'])) {
            $this->url = explode('/', $request['url']);

            $this->controller = ucfirst($this->url[0]) . 'Controller';
            array_shift($this->url);
            if (isset($this->url[0]) && $this->url != '') {
                $this->method = $this->url[0];
                array_shift($this->url);

                if (isset($this->url[0]) && $this->url != '') {
                    $this->params = $this->url;
                }
            }
           
        }
       /* 
       if ($this->user) {
            $page = ['EditarController'];

            if (!isset($this->controller) || !in_array($this->controller, $page)) {
                $this->controller = 'EditarController';
                $this->method = 'index';
              
            }
        }
       else {
            $page = ['CadastroController'];

            if (!isset($this->controller) || !in_array($this->controller, $page)) {
                $this->controller = 'CadastroController';
                $this->method = 'index';
                
            }
        } */

     
        if($request['url'] == ''){
            $page = ['CadastroController'];
            if (!isset($this->controller) || !in_array($this->controller, $page)) {
                $this->controller = 'CadastroController';
                $this->method = 'index';
                
            }
        } 

        return call_user_func(array(new $this->controller, $this->method), $this->params);
    }
}
