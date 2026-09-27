<?php
opcache_reset();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../imagenes/iconpage.png" type="image/png">
    <title>Inicio 78</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css"> 
    <link rel="stylesheet" href="../css/style-inicio.css">
    <link rel="stylesheet" href="../css/style-tarea.css">
    <link rel="stylesheet" href="../css/style-config.css">
    <link rel="stylesheet" href="../css/style-tienda.css">

</head>
<body>
<nav>

 <video class="nav-video" autoplay muted loop playsinline preload="auto">
  <source src="../videos/VideoRegistro.mp4" type="video/mp4">
</video>

  <div class="nav-left">
    <img src="../imagenes/Logo.png" alt="Logo">
  </div>
  
  <div class="nav-center"></div>

  <div class="nav-right">
  

    <div class="monedas-display" id="displayMonedas">
      <img src="../imagenes/iconmoneda.png" alt="moneda">
      <span id="cantidadMonedas">1250</span>
    </div>

    <!-- Boton Tienda -->
    <button class="icon-btn" id="btnVistaTiendaNav" title="Tienda">
      <img src="../imagenes/icontienda.png" alt="tienda">
    </button>

     <a class="icon-btn" id="btnLocaciones" href="../views/Turismo.php" title="Locaciones">
  <img src="../imagenes/map.png" alt="locaciones">
</a>

    <button class="icon-btn" id="btnConfig">
      <img src="../imagenes/iconoconfiguracion.png" alt="icono">
    </button>
  </div>
</nav>



  
<div class="layout">
  
 
  <aside class="sidebar-servidores">
    <div class="servidor-icono activo">
      <img src="../imagenes/random1.jpg" alt="Grove">
    </div>
    <div class="servidor-icono">
      <img src="../imagenes/random2.jpg" alt="">
    </div>
    
    <div class="servidor-icono add">+</div>
  </aside>


  <aside class="sidebar-canales" id="sidebar">
    <div class="canales-header">
      <h3>GRUPO 1</h3>
    </div>

<div class="categoria">
  <p>GENERAL</p>
  <a href="#" class="canal activo" id="btnVistaChat"> 
    <img src="../imagenes/iconmensaje.png" alt="" class="icono-canal"> 
    Chat
  </a>
  <br>
  <a href="#" class="canal" id="btnVistaLlamada"> 
    <img src="../imagenes/icontelefono.png" alt="" class="icono-canal"> 
    Llamada
  </a>
</div>
</aside>





  <main class="contenido">

   
    



<div id="vistaChat">
  <div class="contenido-header">
   <h4>Chat</h4>
   <button class="btn-agregar" id="btnNuevaTarea" title="Nueva tarea">+</button>
  </div>


   <div class="chat-container">
    <div class="mensaje">
       <div class="avatar-wrapper deco-fuego">
       <img src="../imagenes/imagen1.jpg" class="avatar">
       <div class="avatar-deco"></div> 
       </div>
      <div class="mensaje-cuerpo">
        <div class="mensaje-header">
          <strong>Dante</strong> <span>9/10/2020 6:30 PM</span>
        </div>
        <p>Hola</p>
      </div>
    </div>

    <div class="mensaje">
        <div class="avatar-wrapper deco-revolucion">
      <img src="../imagenes/imagen2.jpg" class="avatar">
      <div class="avatar-deco"></div> 
       </div>
      <div class="mensaje-cuerpo">
        <div class="mensaje-header">
          <strong>Brandon</strong> <span>9/10/2020 6:30 PM</span>
        </div>
        <p>Jeje</p>
      </div>
    </div>

    <div class="mensaje">
         <div class="avatar-wrapper deco-recall">
      <img src="../imagenes/imagen3.jpg" class="avatar">
    <div class="avatar-deco"></div> 
       </div>
      <div class="mensaje-cuerpo">
        <div class="mensaje-header">
          <strong>Alberto</strong> <span>9/10/2020 10:24 PM</span>
        </div>
        <p>Cómo están?</p>
       
      </div>
    </div>
</div>


<div class="barra-mensaje">
    <button class="btn-plus">+</button>
    <input type="text" placeholder="Mensaje">
    
  </div>
</div>







 <div id="vistaLlamada">
  <div class="contenido-header">
   <h4>Llamada</h4>
  </div>

  <div class="llamada-container">
    <div class="video-wrapper">
      <video id="miVideo" autoplay muted playsinline></video>

      <img id="placeholderLlamada" src="../imagenes/imagen1.jpg" alt="avatar">

      
      <span id="statusLlamada" class="status-badge">Cámara apagada</span>
    </div>

    <h2 class="llamada-titulo ColorWhite">Llamada con Grupo 1</h2>
    
    <div class="llamada-controles">
      <button id="btnIniciarLlamada" class=" btn-llamada">Iniciar llamada</button>
      <button id="btnColgarLlamada" class="btn-colgar btn-llamada">Colgar</button>
    </div>
  </div>
</div>










</main>
</div>














<?php 
include __DIR__ . '/Modales/ModalTarea.php';
include __DIR__ . '/Modales/ModalConfiguracion.php';
include __DIR__ . '/Modales/ModalTienda.php';
?>

<script type="module" src="../js/App.js"></script>
<script src="../js/Camara.js"></script>

</body>
</html>
