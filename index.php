<?php
  require("./class_lib/Session.php");
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Iniciar Sesion</title>
	<link rel="stylesheet" href="./css/login.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<body>
	
    <form method="POST" id="formLogin" class="formLogin">
       
	   <h3 class="formLogin-title">Iniciar Sesion</h3>

	   <p class="formLogin-user">
		 <i class="fas fa-user formLogin-icon"></i>
		 <input type="text" name="usuario" id="usuario" placeholder="Ingrese Usuario" required>
	   </p>

	   <p class="formLogin-password">
		   <i class="fas fa-key formLogin-icon"></i>
		  <input type="password" name="pass" id="pass" placeholder="Ingrese Clave" requrired>
	   </p>
	
	   <p class="formLogin-submit">   
	      <input type="submit" value="Ingresar">
	   </p>
	
	</form>
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"> </script>   
	<script src="./js/AjaxForms.js"></script>
</body>
</html>