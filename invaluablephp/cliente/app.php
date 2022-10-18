<?php
include_once('../config/config.php');
include('cliente.php');


if ( isset($_POST) && !empty($_POST)){
     $p= new cliente();

    $save = $p->save($_POST); 
    if($save){
      $mensaje= '<div class="alert alert-success" role="alert">cliente creado correctamente </div>' ;
    }else{
      $mensaje= '<div class="alert alert-danger" role="alert"> Error al crear el cliente </div>';
    }
  }
?>

<!DOCTYPE html>
<html>

   <head>
    <meta charset="UTF-8">
    
    <title>Crear cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilos/estilosarriendo.css">
    <link rel="stylesheet" href="../estilos/mq.css">
  
   </head>
  <body>
  <div class="contenedor1">
  <header>
      <nav class="navbar navbar-expand-lg bg-light">
          <div class="container-fluid">
              <a href="./index.html"> <img src="../imagenes/imagen 2 logo 1.jpg" class="img-logo" alt="" width="90px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul>
                  <li> <a href="../index.html"> Inicio</a> </li>
                  <li> <a href="../arriendos.html"> Inmuebles en arriendo </a></li>
                  <li> <a href="../ventas.html"> Inmuebles en venta</a></li>
                  <li> <a href="app.php"> Afilia tú inmueble </a></li>
                  <li class="nav-item"> 
                    <a class="nav-link active" href="../contacto.html"> Contáctenos </a>
                  </li>
                  <li>
                    <img src="../imagenes/imagen 3 logo 2.png" alt="" width="170px">
                  </li>
                </ul>
            </div>
          </div>
        </nav>
    </header>
 <section>
   <div class="container">
     <?php 
      if (isset($mensaje)){
        echo $mensaje;
      }
      ?>

       <div class="container -fluid">
      <h1 class="text-center " > Afiliación de Inmuebles </h1>
      </div>
      <form method="POST" enctype="multipart/form-data" >
        <div class="row mb-2">
            <div class="col">
                <input type="text" name="nombres" id="nombres" placeholder="Nombre cliente" class="form-control" >

            </div>
            <div class="col">
               <input type="text" name="apellidos" id="apellidos" placeholder="Apellido cliente" class="form-control" >
            </div>
        </div>
        <div class="row mb-2">
            <div class="col">
                <input type="email" name="email" id="email" placeholder="Email cliente" class="form-control" >
            </div>
            <div class="col">
               <input type="number" name="celular" id="celular" placeholder=" Celular cliente" class="form-control" >
            </div>
        </div>
        <div class="row mb-2">
            <div class="col">
                <input type="text" name="direccion" id="direccion" placeholder="Direccion cliente"  class="form-control" >
            </div>
            <div class="col">
               <input type="text" name="detalle" id="detalle" placeholder="Detalles de inmueble " class="form-control" >
            </div>
        </div>
        <button  class="boton"> <a href="#"> Afilia tú Inmueble </a></button>
      </form>
   </div>
   </section>
   <section >
      
          <div class="row">
            <img class="card-img-top" src="../imagenes/imagen11.jpg"  alt="#" width="700" height="800" >
          </div>
    </section>

   <footer class="pie-pagina" > 
    <div class="grupo-1">
      <div class="box">
        <figure>
          <a href="#">
            <img src="../imagenes/imagen 4 firma 2.jpeg" alt="">
          </a>
        </figure>
      </div>
      <div class="box">
        <h2>Sobre Nosotros</h2>
        <P>Empresa de bienes raíces con una trayectoria de 15 años en todos los   servicios de bienes raíces ayudando a sus clientes a mejorar en los procesos de  compras y arriendos, brindando la mejor asesoría para el sector.</P>
        <P>Dirección: Calle 8 # 74-12 piso 2 Barrio Castilla Bogotá DC
        </P>
        <p>PBX 9290057 - 3242879878</p>
      </div>
      <div class="box">
        <h2>Siguenos</h2>
        <div class="red-social">
           <a href="#" class="fab fa-facebook-f"><img src="../imagenes/facebook.jpeg" alt=""></a>
          <a href="#" class="fa fa-instagram"><img src="../imagenes/instagram.jpeg" alt=""></a>
          <a href="#" class="fa fa-twitter"><img src="../imagenes/twite.png" alt=""></a>
          
        </div>
      </div> 
    </div>
    <div class="grupo-2">
      <small>&copy; 2022 <b>Grupo Empresarial invaluable SAS</b> - Derechos Reservados</small>
    </div>
   

  </footer>
  </div>

   <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>