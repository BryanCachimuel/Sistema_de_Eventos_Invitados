<?php 
  session_start();

  if(!isset($_SESSION['usuario'])){
    header("location:../inicio_sesion.php");
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Eventos e Invitados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../publico/css/estilos.css">  
    <link rel="stylesheet" href="../publico/librerias/fontawesome/css/all.css">
    <link rel="stylesheet" href="../publico/librerias/datatables/datatables.css">
</head>
  <body>