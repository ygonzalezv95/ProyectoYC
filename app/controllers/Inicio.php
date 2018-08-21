<?php

    class Inicio extends Controller{

        public function __construct(){

        }

        //Para mostrar las vistas
        public function index(){

            $this->vista('inc/header');
            $this->vista('pag/index');  
            $this->vista('inc/footer');          

        }   

}
    