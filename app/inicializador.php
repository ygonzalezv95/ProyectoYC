<?php

// Cargamos las librerias

require_once 'config/config.php';
require_once 'helper/url_helper.php';

//require_once 'libs/Database.php';
//require_once 'libs/Controller.php';
//require_once 'libs/Core.php';

//autoload php para las clases
spl_autoload_register(function($nombreClase){
    require_once 'libs/' .$nombreClase. '.php';

});