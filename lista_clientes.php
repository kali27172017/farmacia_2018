<?php
session_start();
if($_SESSION['autorizado']<>1){
    header("Location: index.php");
}
error_reporting(0);
require('class_lib/class_conecta_mysql.php');

/*$db=new ConexionMySQL();
$db->consulta("SET NAMES 'utf8'");
$cadena="Select * from clientes order by id";
$exe=$db->consulta($cadena);
if($db->numero_de_registros($exe)>0){
 echo "<table id='sample-table-3' class='table table-bordered table-hover'>";
 echo "<thead>";
 echo "<tr>";
 echo "<th>ID</th><th>Nombre</th><th>Telefono</th><th>Agregar</th>";
 echo "</tr>";
 echo "</thead>";
 echo "<tbody>";
 while($e=$db->buscar_array($exe)){
   echo "<tr>";
   echo "<td style='text-align: center;'>$e[id]</td>";
   echo "<td style='text-align: center;'>$e[nombre]</td>";
   echo "<td style='text-align: center;'>$e[telefono]</td>";
   $elidcliente=$e['id']."|".$e['nombre'];
   echo "<td style='text-align: center;'><button type='button' class='btn btn-mini btn-success' id='$elidcliente' onclick='pone_cliente(this.id);'>Agregar</button></td>";
   echo "</tr>";
    }
  echo "</tbody>";
  echo "</table>";
}else{
 echo "Actualmente no hay Clientes registrados...";
}*/

$db=new ConexionMySQL();

$cadena="Select * from clientes order by id";
$exe=$db->consulta($cadena);
if($db->numero_de_registros($exe)>0){
  echo "<div class='box'>";
  echo "<div class='box-header'>";
  echo "<h3 class='box-title'>Clientes registrados...</h3>";
  echo "</div>";
  echo "<div class='box-body'>";
 echo "<table id='tabla_de_clientes' class='table table-bordered table-striped table-hover'>";
 echo "<thead>";
 echo "<tr>";
 echo "<th style='text-align: center;'>ID Cliente</th>
      <th style='text-align: center;'>Nombre</th>
      <th style='text-align: center;'>Telefono</th>
      <th style='text-align: center;'>Domicilio</th>
      <th style='text-align: center;'>Correo</th>";
 echo "</tr>";
 echo "</thead>";
 echo "<tbody>";
 while($e=$db->buscar_array($exe)){
   echo "<tr>"; 
   echo "<td style='text-align: center;'>$e[id]</td>";
   echo "<td style='text-align: center;'>$e[nombre]</td>";
   echo "<td style='text-align: center;'>$e[telefono]</td>";
   echo "<td style='text-align: center;'>$e[domicilio]</td>";
   echo "<td style='text-align: center;'>$e[correo]</td>";
      echo "</tr>";
 }
 echo "</tbody>";
 echo "</table>";
 echo "</div>";
 echo "</div>";
}else{
 echo "Actualmente no hay Clientes registrados...";
}

?>