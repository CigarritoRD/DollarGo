<?php
namespace App;

class Usuario{

    protected static $db;
    protected static $columnasDB = ['id', 'nombre', 'apellido', 'usuario', 'password', 'email', 'cartera', 'finanzasId'];
    protected static $errores =['nombre', 'apellido', 'usuario', 'password', 'email', 'cartera'];
    
    public $id;
    public $nombre;
    public $apellido;
    public $usuario;
    public $password;
    public $email;
    public $cartera;
    public $finanzasId;

    public static function conectDb($database){
        self::$db = $database;
    }

    public function __construct($argumento = [])

    {
     $this->id = $argumento['id'] ?? '';   
     $this->nombre = $argumento['nombre'] ?? '';   
     $this->apellido = $argumento['apellido'] ?? '';   
     $this->usuario = $argumento['usuario'] ?? '';   
     $this->password = $argumento['password'] ?? '';   
     $this->email = $argumento['email'] ?? '';   
     $this->cartera = $argumento['cartera'] ?? '';   
 
    }

    public function guardar(){
        $atributos = $this->sanitizar();

        $query = " INSERT INTO usuarios ( ";
        $query .= join(', ', array_keys($atributos)); 
        $query .=" ) VALUES ('";
        $query .= join("', '",array_values($atributos));
        $query .=" ') ";

        debugear($atributos);
        $resultado = self::$db->query($query);
    }

    public function atributos(){
        $atributos =[];
        foreach (self::$columnasDB as $columna){
            if($columna === 'id' || $columna === 'finanzasId') continue;
            {   
                $atributos[$columna] = $this->$columna;
            }

        }
        return $atributos; 
    }

    // funcion que limpia los datos para ser insertados en la DB
    public function sanitizar(){
        $atributos = $this->atributos();
        
        foreach($atributos as $key => $value){
            $sanitizado[$key] = self::$db->escape_string($value);
        }
        return $sanitizado;
    }

    public  function  validarErrores(){

        $atributos = $this->atributos();

        $errores =[];
        foreach (self::$errores as $error){
    
            {   
                $errores[$error] = '';
            }

        }
        
        if (empty($atributos['nombre'])){
            $errores['nombre'] = 'el campo NOMBRE es requerido';
        }

        if (empty($atributos['apellido'])){
            $errores['apellido'] = 'el campo APELLIDO es requerido';
        }

        if (empty($atributos['usuario'])){
            $errores['usuario'] = 'el campo usuario es requerido';
        }

        if (empty($atributos['password'])){
            $errores['password'] = 'el campo password es requerido';
        }

        if (empty($atributos['email'])){
            $errores['email'] = 'el campo email es requerido';
        }

        if (empty($atributos['cartera'])){
            $errores['cartera'] = 'el campo cartera es requerido';
        }
        if(empty($errores['nombre']) && empty($errores['apellido']) && empty($errores['usuario']) && empty($errores['password']) && empty($errores['email']) && empty($errores['cartera'])) {
            
           
         return $errores =[];
        
        
        }else{
            return $errores;
        }
 
    }  

}
    
    
