<?php
include('../config/config.php');
include('cliente.php');
$p = new cliente();

$clienteall= $p->getAll();

if(isset($_GET['id']) && !empty($_GET['id'])){
    $remove = $p->delete($_GET['id']);
    if ($remove){
        header('Location: ' . ROOT . 'cliente/index.php');
    } else{
        $mensaje ="<div class='alert alert-danger' rol='alert' > Error al eliminar datos. </div>";
    }
 }

 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> Lista de clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>


<body>
    <?php include('../menu.php')?>
    <div class="container">
        <h2 class="text-center mb-5"> Lista de Clientes </h2>

        <div class="row">
            <?php
            while ($cliente = mysqli_fetch_object($clienteall)){
                echo "<div class='col-6'>";
                echo "<div class='border border-info p-2'>";
                echo "<h5>Nombre: $cliente->nombres  </h5>";
                echo "<p><b>Correo:</b> $cliente->email 
                <br>
                <b> Celular: </b>  $cliente->celular
                <br>
                <b> Detalles: </b>  $cliente->detalle
                </p>";
                echo "<div class='center'> <a class='btn btn-success' href='". ROOT ."/cliente/edit.php?id=$cliente->id' >Modificar</a> - <a class='btn btn-danger' href='". ROOT ."/cliente/index.php?id=$cliente->id' >Eliminar</a> </div>";


                echo "</div>";
                echo "</div>";
            }
?>
</body>
</html>