<?php

//Conexion a Mysql con PDO

class ConexionMySQL{

   public static $instancia;
   public $pdo;
   public $dsn;
   private $usuario = "root";
   private $password = "admin";

  

   function __construct(){
      try{
        $this->dsn = "mysql:host=127.0.0.1;dbname=db_farmacia";
        $this->pdo  = new \PDO($this->dsn,$this->usuario,$this->password);  
      }catch(PDOException $e){
        echo $e->getMessage();
      }
   }


   function singleton(){
        if(!isset(self::$instancia)){
           $clase = __CLASS__;
           self::$instancia  = new $clase;
        }
        return self::$instancia;
   }







  /*private $conexion;
  private $total_consultas;*/

  




  /*public function consulta($consulta){
    error_reporting(0);
    $this->total_consultas++;
    $resultado = mysql_query($consulta,$this->conexion);
    if(!$resultado){
      echo 'Error en MySQL: ' . mysql_error();
      //echo "0";
      exit;
    }
    return $resultado;
  }

  public function buscar_array($consulta){
    error_reporting(0);
   return mysql_fetch_array($consulta);
  }

  public function numero_de_registros($consulta){
    error_reporting(0);
   return mysql_num_rows($consulta);
  }

  public function getTotalConsultas(){
   return $this->total_consultas;
  }

  public function DesconectaServer(){
    error_reporting(0);
    mysql_close($this->conexion);
  }*/

  }
?>