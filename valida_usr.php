<?php
 
 require('./class_lib/class_conecta_mysql.php');
 session_start();


 $cn  = new ConexionMySQL();
 $usuario=$_POST['usuario'];
 $password=$_POST['pass'];

 $_SESSION['usuario']  = $usuario;
 $messages = [];


 $stmt = $cn->singleton()->pdo->prepare("select   * from usuarios where clave = :user  and password = :password ");
 $stmt->setFetchMode(\PDO::FETCH_ASSOC);
 $stmt->bindParam(':user',$usuario);
 $stmt->bindParam(':password',$password);
 $stmt->execute();

  if($stmt->fetch()){  
       array_push($messages,true,"Login Correcto");
   }else{
       array_push($messages,false,"Login Erroneo");
   }
   echo json_encode($messages);
    
   



 













?>