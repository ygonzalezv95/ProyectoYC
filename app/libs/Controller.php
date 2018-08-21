<?php

class Controller{
    //funcion para cargar el modelo
    public function modelo($modelo){

        require_once '../app/models/' . $modelo .'.php';

        //ahora instanciamos el modelo
        return new $modelo();


    }
    //funcion para cargar la vista
    public function vista($vista, $datos =[]){

        //Chequeamos si el archivo existe
        if(file_exists('../app/views/' . $vista . '.php')){
            require_once '../app/views/' . $vista .'.php';

        }else{
            //si el archivo de la vista no existe
            die('la vista no existe');
        }

    }
}