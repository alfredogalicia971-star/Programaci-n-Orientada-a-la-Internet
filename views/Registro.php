<?php
opcache_reset();
?>
<!DOCTYPE html>
<html>
<head>
<title>Registro</title>
<link rel="icon" href="../imagenes/iconpage.png" type="image/png">
     <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style-registro.css">

</head>
<body>


 <video id="video-fondo" autoplay muted loop playsinline>
    <source src="../Videos/VideoRegistro.mp4" type="video/mp4">
  </video>



<div class="contenedor-principal">
<div class="video-container">
  <video autoplay muted loop playsinline>
    <source src="../Videos/VideoContenedor2.mp4" type="video/mp4">
  </video>
</div>


<div class="Formulario">         
<br>        
<div class="text-center">
  <img src="../imagenes/Logo.png" width="70" height="70">
  <br>
<h1>Iniciar Sesi&oacuten </h1>
</div>
                      
<form id="formLogin">                 
<div class="username">                          
<div >
<input type="email"  id="email" name="email"  required autocomplete="email">
<label> <img src="../imagenes/iconusuario.png" width="25" height="25"> Correo electr&oacutenico</label>
</div>                         
</div>

<div class="username">
<div>
<input type="password"  id="contrasena" name="contrasena" required minlength="8" autocomplete="current-password">
<label> <img src="../imagenes/iconcontrasena.png" width="25" height="25"> Contrase&ntildea</label>
</div>                              
</div>  
                    
<div>
<a class="nav-link" href="">Olvid&oacute su contrase&ntildea?</a>                       
<input type="submit" class="btn btn-primary" value="Iniciar">          
</div>

<div class="registrarse">
Quiero hacer el <a href="Formulario.php">registro</a>
</div>

                            
</form>   
</div>
</div>


    
  
</body>
</html>