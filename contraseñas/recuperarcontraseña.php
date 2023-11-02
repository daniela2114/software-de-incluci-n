<?php

include("recuperar.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estiloss.css">

    <title>Document</title>
</head>
<body>
    <div class="cuerpo">
    <h2>Confirmar que eres un usuario</h2>
    <img src="../img/candado2.png" alt="" srcset="">
        <form action="" method="post">

            <label for="contraseña">Numero de Documento</label>
            <input type="text" name="cedula">
            <label for="fechaCC">Fecha de expedicion de CC:</label>
            <input type="date" name="fecha">
            <button type="submit" name="recuperar">recuperar</button>
        </form>





    
    </div>
    
</body>
</html>