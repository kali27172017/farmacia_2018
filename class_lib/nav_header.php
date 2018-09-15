 <?php
   session_start();

   if(isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"])){
        $usuario   = $_SESSION["usuario"];
   }else{
     header("Location: index.php");
   }
   
 ?>

<header class=header>
   <h2 class="header-title">GABRIEL FARMA</h2>
   <nav class="header-nav">
      <i class="fas fa-user iconUser"></i>
      <a href="#" id="header-session"><i class="fas fa-arrow-down iconArrow"></i></a>
   </nav>
</header>

<div class="header-welcome visible" id="header-welcome">
      <h4>!Hola <strong><?= $usuario ?></strong></h4>
      <h5><a href="index.php" class="header-welcomeClosed">Cerrar Sesion</a></h5>
</div>



  
  