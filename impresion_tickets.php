<?php
session_start();
if($_SESSION['autorizado']<>1){
    header("Location: index.php");
}
date_default_timezone_set("America/Lima");
 $codigo=$_POST['codigo'];
 $cantidad=$_POST['cantidad'];
 $preciou=$_POST['preciou'];
 $descripcion=strtoupper($_POST['descripcion']);
 $serie=$_POST['serie'];
  $hora= date("h:i:s");
  $fecha= date ("j/n/Y");
  $yapuso=$_POST['yapuso'];
  $monto=$_POST['monto'];
  $supago=$_POST['supago'];
  $total=$_POST['total'];
  $cambio=$_POST['cambio'];
  $numero_ticket=$_POST['numero_ticket'];
  if($yapuso=="0"){
  $ar=fopen("ticket.txt","w") or die("Problemas en la creacion...");
  fputs($ar,"     GABRIEL FARMA EIRL   "."\n");
  fputs($ar,"Calle Principal S/N Villa Vichayal - La Arena, Piura"."\n");
  fputs($ar,"Boleta de Venta"."\n");
  fputs($ar,"Tel: 073 - 703230"."\n");
  fputs($ar,"RUC: 12345678900"."\n");
  fputs($ar,"---------------------"."\n");
  fputs($ar,"Fecha: ".$fecha."\n");
  fputs($ar,"Hora: ".$hora."\n");
  fputs($ar,"Ticket: ".$serie."-".$numero_ticket."\n");
  fputs($ar,"---------------------"."\n");
  fputs($ar,"Total  : ".$total."\n");
  fputs($ar,"Su Pago: S/.".$supago."\n");
  fputs($ar,"Cambio : ".$cambio."\n");
  fputs($ar,"     Lo atendio:    "."\n");
  fputs($ar,"  ".$_SESSION['nombre_de_usuario']."\n");
  fputs($ar,"---------------------"."\n");
  fputs($ar,"Cant. Art.  Monto"."\n");
  fputs($ar,"---------------------"."\n");
  fputs($ar,$cantidad."|".substr($descripcion,0,18)."\n");
  fputs($ar,"           ".$monto."\n");
  fclose($ar);
  }else{
  $ar=fopen("ticket.txt","a") or die("Problemas en la apertura del archivo");
  fputs($ar,$cantidad."|".substr($descripcion,0,18)."\n");
  fputs($ar,"           ".$monto."\n");
  fclose($ar);
  }
 ?>