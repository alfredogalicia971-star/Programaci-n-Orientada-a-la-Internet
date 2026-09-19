


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../imagenes/iconpage.png" type="image/png">
    <title>Inicio 8</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css"> 
    <link rel="stylesheet" href="../css/style-inicio.css">

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
    
    <!-- NUEVO: Monedas digitales -->
    <div class="monedas-display" id="displayMonedas">
      <img src="../imagenes/iconmoneda.png" alt="moneda">
      <span id="cantidadMonedas">1250</span>
    </div>

    <!-- NUEVO: Boton Tienda -->
    <button class="icon-btn" id="btnVistaTiendaNav" title="Tienda">
      <img src="../imagenes/icontienda.png" alt="tienda">
    </button>

    <!-- Tu boton de configuracion que ya tenias -->
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


















<div id="modalTarea" class="modal-overlay">
  <div class="modal-contenido">
    <div class="modal-header">
      <h3 class="ColorWhite">Nueva tarea</h3>
      <button class="btn-cerrar" id="btnCerrarTarea">&times;</button>
    </div>
    
    <form id="formNuevaTarea">
      <label class="ColorWhite">Título de la tarea</label>
      <input type="text" id="tituloTarea" placeholder="Ej: Diseñar login" required>

      <label class="ColorWhite">Descripción</label>
      <textarea id="descTarea" rows="3" placeholder="Detalles de la tarea..." required></textarea>

      <label class="ColorWhite">Asignar a</label>
      <select id="asignarA" required>
        <option value="">Selecciona integrante</option>
        <option value="2023003">Tu - Matrícula</option>
      </select>

      

       <label class="ColorWhite">Recompensa</label>
      <select id="" required>
        <option value="">5 Recoins</option>
        <option value="">10 Recoins</option>
        <option value="">15 Recoins</option>
      </select>

      <div class="modal-acciones">
        <button type="button" id="btnCancelarTarea">Cancelar</button>
        <button type="submit" class="btn-primario">Crear tarea</button>
      </div>
    </form>
  </div>
</div>





<div id="modalConfig" class="modal-config">
  <div class="modal-config-wrapper">
    
    <!-- SIDEBAR IZQUIERDO -->
    <div class="config-sidebar">
      <div class="config-perfil-card">
        <div class="avatar-wrapper deco-rey" id="configAvatarPreview">
          <img src="../imagenes/imagen1.jpg" alt="avatar" class="avatar">
          <div class="avatar-deco"></div>
        </div>
        <div>
          <strong>Dante</strong>
          <span style="color:#949ba4; font-size:12px; display:block;">En línea</span>
        </div>
      </div>

      <nav class="config-menu">
        <a href="#" class="active">Cuenta</a>
        <a href="#">Datos y privacidad</a>
      </nav>
    </div>

    <div class="config-content">
      <div class="config-topbar">
        <h3>Cuenta</h3>
        <button id="btnCerrarConfig" class="config-close">✕</button>
      </div>

      <div class="config-scroll">
        <h2>Datos</h2>

        <div class="config-row">
          <span>Nombre</span>
          <div class="config-row-right">
            <strong>Dante</strong>
            <button class="btn-edit">Editar</button>
          </div>
        </div>

        <div class="config-row">
          <span>Email</span>
          <div class="config-row-right">
            <strong>****@gmail.com <a href="#" class="link-blue">Reveal</a></strong>
            <button class="btn-edit">Editar</button>
          </div>
        </div>

        <div class="config-row">
          <span>Número</span>
          <div class="config-row-right">
            <strong class="muted">Sin registro.</strong>
            <button class="btn-edit">añadir</button>
          </div>
        </div>

        <h2>Seguridad</h2>

        <div class="config-row">
          <span>Contraseña</span>
          <button class="btn-edit">Editar</button>
        </div>

        <div class="avatar-selector-section">
          <h2>Estilo</h2>
          <p class="selector-desc">Elige cómo se verá tu avatar</p>
          
          <div class="avatar-options">
            
           

            <div class="avatar-option" data-deco="deco-fuego">
              <div class="avatar-wrapper deco-fuego">
                <img src="../imagenes/imagen1.jpg" alt="avatar" class="avatar">
                <div class="avatar-deco"></div>
              </div>
              <span>Fuego</span>
            </div>

            <div class="avatar-option" data-deco="deco-independencia">
              <div class="avatar-wrapper deco-independencia">
                <img src="../imagenes/imagen1.jpg" alt="avatar" class="avatar">
                <div class="avatar-deco"></div>
              </div>
              <span>Independencia</span>
            </div>

            <div class="avatar-option" data-deco="deco-revolucion">
              <div class="avatar-wrapper deco-revolucion">
                <img src="../imagenes/imagen1.jpg" alt="avatar" class="avatar">
                <div class="avatar-deco"></div>
              </div>
              <span>Revolución</span>
            </div>

            <div class="avatar-option" data-deco="">
              <div class="avatar-wrapper">
                <img src="../imagenes/imagen1.jpg" alt="avatar" class="avatar">
              </div>
              <span>Normal</span>
            </div>

          </div>
        </div>

        <div class="config-divider-line"></div>

        <div class="config-row cerrar-row">
          <span>Cerrar sesión</span>
          <a href="../controllers/Logout.php" class="btn-salir-cuadro">Cerrar sesión</a>
        </div>

      </div>
    </div>

  </div>
</div>








<!-- MODAL TIENDA -->
<div id="modalTienda" class="modal-config">
  <div class="modal-config-wrapper">
    <div class="config-content">
      <div class="config-topbar">
        <div class="tienda-monedas-top">
          <img src="../imagenes/iconmoneda.png" alt="moneda">
          <span id="monedasTiendaTop">1250</span>
          <small>Recoins</small>
        </div>
        <button id="btnCerrarTienda" class="config-close">✕</button>
      </div>

      <div class="config-scroll">
        <h2>Decoraciones de Avatar</h2>
        <p class="selector-desc">Estilo bundle de Discord</p>
        
        <div class="avatar-options tienda-options">
         
         

          <div class="avatar-option" data-deco="deco-muertos" data-precio="0" data-nombre="Rey">
            <div class="avatar-wrapper deco-muertos">
              <img src="../imagenes/imagen1.jpg" alt="avatar" class="avatar">
              <div class="avatar-deco"></div>
            </div>
            <span>Día de muertos</span>
            <div class="precio-badge gratis">Gratis</div>
          </div>

          <div class="avatar-option" data-deco="deco-fuego" data-precio="50" data-nombre="Fire">
            <div class="avatar-wrapper deco-fuego">
              <img src="../imagenes/imagen1.jpg" alt="avatar" class="avatar">
              <div class="avatar-deco"></div>
            </div>
            <span>Fuego</span>
            <div class="precio-badge"><img src="../imagenes/iconmoneda.png"> 50</div>
          </div>

          <div class="avatar-option" data-deco="deco-independencia" data-precio="100" data-nombre="Independencia">
            <div class="avatar-wrapper deco-independencia">
              <img src="../imagenes/imagen1.jpg" alt="avatar" class="avatar">
              <div class="avatar-deco"></div>
            </div>
            <span>Independencia</span>
            <div class="precio-badge"><img src="../imagenes/iconmoneda.png"> 100</div>
          </div>

          <div class="avatar-option bloqueado" data-deco="deco-revolucion" data-precio="100" data-nombre="Revolución">
            <div class="avatar-wrapper deco-revolucion">
              <img src="../imagenes/imagen1.jpg" alt="avatar" class="avatar">
              <div class="avatar-deco"></div>
            </div>
            <span>Revolución</span>
            <div class="precio-badge"><img src="../imagenes/iconmoneda.png"> 100</div>
          </div>

         <div class="avatar-option bloqueado" data-deco="deco-gamer" data-precio="100" data-nombre="Revolución">
            <div class="avatar-wrapper deco-gamer">
              <img src="../imagenes/imagen1.jpg" alt="avatar" class="avatar">
              <div class="avatar-deco"></div>
            </div>
            <span>Gamer</span>
            <div class="precio-badge"><img src="../imagenes/iconmoneda.png"> 100</div>
          </div>

         <div class="avatar-option bloqueado" data-deco="deco-navidad" data-precio="100" data-nombre="Revolución">
            <div class="avatar-wrapper deco-navidad">
              <img src="../imagenes/imagen1.jpg" alt="avatar" class="avatar">
              <div class="avatar-deco"></div>
            </div>
            <span>Navidad</span>
            <div class="precio-badge"><img src="../imagenes/iconmoneda.png"> 100</div>
          </div>



  <div class="avatar-option bloqueado" data-deco="deco-enojo" data-precio="100" data-nombre="Revolución">
            <div class="avatar-wrapper deco-enojo">
              <img src="../imagenes/imagen1.jpg" alt="avatar" class="avatar">
              <div class="avatar-deco"></div>
            </div>
            <span>Enojao</span>
            <div class="precio-badge"><img src="../imagenes/iconmoneda.png"> 100</div>
          </div>



        </div>
      </div>
    </div>
  </div>
</div>



<script src="../js/TareaModal.js"></script>
<script src="../js/Camara.js"></script>

</body>
</html>