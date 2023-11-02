<?php
include("conexion/guardar.php");
include_once("conexion/conectar.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<link rel="stylesheet" href="css/tilo.css">
    <title>Document</title>
</head>
<body>
 
<div class="contenedor">
    <h1>Iniciar Sesión</h1>
 <div class="img">
    <img src="img/logo.png" alt="" srcset="">
  </div>
  <form action="" method="post" class="form">
    <div class="camp">

        <label for="Usuario">
            Cedula:
        </label>
        <input type="text" name="cedula">
        <label for="Contraseña">
            Contraseña:
        </label>
        <input type="password" name="password">
        
    </div>
        <div class="sel">
            <label for="jornada">
        jornada:
    </label>
    <select name="jornada" id="" required>
                    <option value="">Jornada</option>
                  <?php
                    while($jornada=$sql-> fetch_array()) {
    

                  ?>
                    <option value="<?php echo $jornada[0]?>"> <?php echo $jornada[1]?> </option>
                <?php
                 }
                ?>
                </select>
   
  
  
    
 </div>

    <div class="btn">
        <input type="submit" value="Iniciar Sesión" name="btn_ingresar">
        

    </div>
    <div class="enlace">

        <div class="olv_contra">
            <a href="http://localhost/Angelita/contrase%C3%B1as/recuperarcontrase%C3%B1a.php">Recuperar Contraseña</a>
            
        </div>
        <div class="olv_contra2">
            <a href="http://localhost/Angelita/Registro.php">Registrarse</a>
        </div>
    </div>
<?php
include("conexion/validar.php");
?>
   
</div>
</form>

  
</body>
</html> 
