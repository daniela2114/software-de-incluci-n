<?php
include("cambio.php");

$cedula=$_REQUEST["cedula"];
$sql4=$link->query("SELECT * FROM usuarios WHERE idUsuario=$cedula");
$dats=$sql4->fetch_array();   
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estiloss.css">
    <title>Document</title>
</head>
<body>
    <div class="cuerpo">
        <h3>Escriba su nueva Contraseña</h3>
        <img src="../img/abierto.png" alt="" srcset="">
        <form action="" method="post">
        <input type="hidden" name="cedula" value="<?php echo $dats['idUsuario'] ?>">
            <label for="contraseña">Nueva Contraseña:</label>
            <input type="text" name="contraseña">
            <label for="fechaCC">Confirme la contraseña:</label>
            <input type="password" name="nueva">
            <button type="submit" name="cambio">recuperar</button>
        </form>





    
    </div>
    
</body>
</html>