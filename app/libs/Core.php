<?php

/*Mapear la URLingresada en el navegador
1-Controlador
2-Metodo
3-Parametro*/

class Core{

    protected $controladorActual ='inicio';
    protected $metodoActual = 'index';
    protected $parametros = [];

    public function __construct(){
       $url = $this -> getUrl();
       //print_r($this->getUrl());

       //Buscar en Controller si el controlador existe, si esxiste se setea como controlador por defecto
       if(file_exists('../app/controllers/' . ucwords($url[0]). '.php')){
            $this->controladorActual = ucwords ($url[0]);
            
            //unsed indice
            unset($url[0]);
       }
       //Aqui se requiere el controlador
       require_once '../app/controllers/' . $this->controladorActual . '.php';
       $this->controladorActual = new $this->controladorActual;
       

       //Se chequea la segunda parte de la url la cual seria el metodo
       if(isset($url[1])){
           if(method_exists($this->controladorActual, $url[1])){
               //chequeamos el metodo
               $this ->metodoActual = $url[1];

               //unsed indice
                unset($url[1]);
           }
       }

      //esto es para obtener parametros
      $this->parametros = $url ? array_values($url) : [];

      //Aqui se llama al callback con parametros array
      call_user_func_array([$this->controladorActual, 
      $this->metodoActual], $this->parametros);
    }

    public function getUrl(){
       // echo $_GET['url'];

        if (isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            //el rtrim nos sirve para cortar los espacios hacia la derecha en la url
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}