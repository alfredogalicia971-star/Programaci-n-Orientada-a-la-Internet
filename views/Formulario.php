

<?php
opcache_reset();
?>


<!DOCTYPE html>
<html>
<head>
   <link rel="icon" href="../imagenes/iconpage.png" type="image/png">
     <title>Formulario</title>
     <link rel="stylesheet" href="../css/bootstrap.min.css">
     

 <link rel="stylesheet" href="../css/style-Formulario.css">

 <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&family=Lexend+Deca:wght@100..900&family=Varela+Round&display=swap" rel="stylesheet">


</head>
<body>
    <header>
            

<nav class="navbar">
  <a href="../Views/Registro.php" class="back-btn">
  
    <img src="../imagenes/Back.png" height="30">
  
  </a>

  <h1 class="TITULOS">FORMULARIO DE REGISTRO</h1>
</nav>


  <div class="contenedor">
<form class="formulario" method="POST" enctype="multipart/form-data">
    <h2>Datos básicos</h2>

    <div class="campo">
      <label>Nickname</label>
      <input type="text" name="nombre">
    </div>

  <div class="campo">
      <label>Fecha de Nacimiento</label>
      <input type="date" name="fecha">
    </div>

    <div class="campo">
      <label>Fotografía</label>
    <input type="file" name="foto" accept=".jpg,.jpeg,.png,.gif,.webp,image/jpeg,image/png,image/gif,image/webp">
    </div>
    
    <div class="campo">
      <label for="lenguaje">Género</label>
  <select id="Genero" name="genero">
  <option >Masculino</option>
  <option >Femenino</option>
  <option >Otro</option>
</select>
</div>

 <div class="campo">
      <label>Nacionalidad</label>
      <input type="text" name="nacionalidad">
    </div>


    <div class="campo">
      <label>Correo</label>
      <input type="email" name="correo">
    </div>

    <div class="campo">
  <label for="password">Contraseña</label>
  <input 
    type="password" 
    id="password"
    name="password"
    required
    pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}"
    title="Debe tener mínimo 8 caracteres, incluyendo mayúscula, minúscula, número y símbolo">
    <small style="color: white;">
    Mínimo 8 caracteres, con mayúscula, minúscula, número y símbolo.
  </small>
</div>

    <button>Registrarse</button>




  

</div>





  </form>

 </div>



<br>







 
</body>
</html>