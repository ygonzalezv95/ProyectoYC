<?php

//Clase para conectarse a la base de datos y ejecutar consultas PDO
class Database{
    private $host = DB_HOST;
    private $db_name = DB_NAME;
    private $user = DB_USER;
    private $password = DB_PASS;

    private $bdh; //database heandlers
    private $stmt; //ejecutar una consulta
    private $error; //mostrar error de conexion

    public function __construct(){
        $dsn = 'mysql:host=' .$this->host . ';dbname=' .$this->db_name;
        $opciones = array(PDO::ATTR_PERSISTENT => true,//opciones PDO
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );

    //Crear una instancia PDO para la conexion
    try {
        $this->dbh =new PDO($dsn, $this->user, $this->password, $opciones);

    } catch(PDOException $e){
        $this->error = $e->getMessage();
        echo $this->error;
    }
}
    //recibimos la sentencia sql y preparamos la consulta
    public function query($sql){
        $this->stmt = $this->bdh->prepare($sql);    
    }
    //comezamos a vincularla segun los tipos de datos con la consulta bind
    public function bind($parametro, $valor, $tipo = null){
        if(is_null($tipo)){
            switch (true){
                case is_int($valor);
                    $tipo =PDO::PARAM_INT;
                    break;
                    case is_int($valor);
                    $tipo =PDO::PARAM_BOOL;
                    break;
                    case is_int($valor);
                    $tipo =PDO::PARAM_NULL;
                    break;
                    default:
                        $tipo = PDO::PARAM_STR;
                    break;
            }
        }
        $this->stmt->bindValue($parametro, $valor, $tipo);
    }
    // esta funcion ejecuta la consulta
    public function execute(){
        return $this->stmt->execute();
        
    }
    //Esta funcion obtiene todos los registros de la consulta
    public function registros(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }
    //Esta funcion obtiene un solo registro
    public function registro(){
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }
    // Funcion para obtener cantidad de filas con el metodo rowCount
    public function rowCount(){
        return $this->stmt->rowCount();
    }
}