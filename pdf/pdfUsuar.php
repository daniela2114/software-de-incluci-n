<?php
include("../conexion/conectar.php");


$cedula = $_REQUEST['idEst'];

$sql = $link->query("SELECT e.nomEst, e.apeEst, e.Edad, e.idEst, e.idGrado AS GRADO, G.nomGrado, e.idTipo AS identificacion, T.descTipo, e.idJornada AS idJornada, j.nomJornada AS jornada
    FROM estudiantess e
    INNER JOIN jornad j ON e.idJornada = j.idJornada
    INNER JOIN tipos_id T ON e.idTipo = T.idTipo
    INNER JOIN grados g ON e.idGrado = G.idGrado
    WHERE e.idEst = '$cedula'");

$datos = $sql->fetch_array();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información del Estudiante</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Estilos CSS */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #f9f9f9;
            width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            text-align: left; /* Alineación a la izquierda */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #007bff;
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .info {
            font-size: 20px;
            margin-top: 10px;
        }

        .buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        a {
    text-decoration: none;
}/* Estilo para ocultar el menú desplegable por defecto */
.menu-desplegable-content {
    display: none;
    position: absolute;
    z-index: 1;
    width: 150px;
    background-color: #fff;
    right: 0;
    top: 20%;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

/* Estilo para mostrar el menú desplegable cuando se hace clic en el botón */
.menu-desplegable-content.show {
    display: block;
}

/* Estilo para los enlaces en el menú desplegable */
.menu-desplegable-content a {
    display: block;
    padding: 8px;
    text-decoration: none;
    color: #333;
    border-bottom: 1px solid #ccc;
    width: 100%;
    text-align: left;
    font-size: 12px;
    line-height: 1;
}

/* Estilo para los enlaces en el menú desplegable al hacer hover */
.menu-desplegable-content a:hover {
    background-color: #f0f0f0;
}



        .button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
        }

        .cancel-button {
            background-color: #dc3545; /* Color de botón de cancelar */
            align-items: center;
            justify-content: center;
            color: #fff;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            padding: 10px 20px;
            font-size: 16px;
            margin: 10px auto; /* Centrar el botón Cancelar */
            display: block; /* Hacer que el botón ocupe todo el ancho */
        }
        .salir:hover{
            border-radius: 3px;
          
            color:red;
        }
        .imprimir:hover{
            border-radius: 3px;
          
            color:red;
        }
        .titulo2{
            display: flex;
        }


        .menu-toggle{
            background-color: #333;
            color: white;
        }
        .menu-toggle2 {
    background-color: white;
    color: black;
}

/* Estilo para el menú desplegable */
.menu-desplegable-content2 {
    display: none;
    position: absolute;
    z-index: 1;
    width: 150px;
    background-color: #fff;
    right: 0;
    top: 20%;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

/* Estilo para mostrar el menú desplegable cuando se hace clic en el botón */
.menu-desplegable-content2.show {
    display: block;
}

/* Estilo para los enlaces en el menú desplegable */
.menu-desplegable-content2 a {
    display: block;
    padding: 8px;
    text-decoration: none;
    color: #333;
    border-bottom: 1px solid #ccc;
    width: 100%;
    text-align: left;
    font-size: 12px;
    line-height: 1;
}

/* Estilo para los enlaces en el menú desplegable al hacer hover */
.menu-desplegable-content2 a:hover {
    background-color: #f0f0f0;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="titulo">
            <a href="../inicio2.php" class="salir"><i class="fas fa-arrow-left"></i></a> 
            <button class="menu-toggle2" onclick="toggleMenu2()"><i class="fas fa-trash"></i></button>
<div class="menu-desplegable-content2" id="menu-desplegable2">
    <a onclick="return eliminar3()" href="../inicio2.php?idEliminar3=<?php echo $datos['idEst']; ?>&anexo=1" class="imprimir"><i class="fas fa-trash"></i> anexo1</a> 
    <a onclick="return eliminar4()"href="../inicio2.php?idEliminar4=<?php echo $datos['idEst']; ?>&anexo=2" class="imprimir"><i class="fas fa-trash"></i> anexo2</a> 
    <a onclick="return eliminar5()"href="../inicio2.php??idEliminar5=<?php echo $datos['idEst']; ?>&anexo=3" class="imprimir"><i class="fas fa-trash"></i> anexo3</a>
</div>




            <h1> Información del Estudiante <div class="menu-desplegable">
          <button class="menu-toggle"><i class="fa fa-print"></i></button>
          <div class="menu-desplegable-content">
              <a href="pdf2.php?idEst=<?php echo $datos['idEst']; ?>" class="imprimir"><i class="fa fa-file-pdf"></i> Anexo 1</a>
              <a href="pdf3.php?idEst=<?php echo $datos['idEst'];?>"class="imprimir"><i class="fa fa-file-pdf"></i> Anexo 2</a>
              <a href="pdf3.3.php?idEst=<?php echo $datos['idEst'];?>"class="imprimir"><i class="fa fa-file-pdf"></i>Firma profe Anex2</a>
              <a href="pdfanex3.php?idEst=<?php echo $datos['idEst'];?>"class="imprimir"><i class="fa fa-file-pdf"></i>Anexo 3</a>
           </div>
</div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const menuToggle = document.querySelector(".menu-toggle");
        const menuContent = document.querySelector(".menu-desplegable-content");

        menuToggle.addEventListener("click", function() {
            menuContent.classList.toggle("show");
        });

        // Cierra el menú desplegable si se hace clic en cualquier otro lugar de la página
        document.addEventListener("click", function(event) {
            if (!menuToggle.contains(event.target) && !menuContent.contains(event.target)) {
                menuContent.classList.remove("show");
            }
        });
    });
    function toggleMenu2() {
    const menu = document.getElementById("menu-desplegable2");
    menu.classList.toggle("show");
}

// Cierra el menú desplegable si se hace clic en cualquier otro lugar de la página
document.addEventListener("click", function(event) {
    const menu = document.getElementById("menu-desplegable2");
    const toggleButton = document.querySelector(".menu-toggle2");
    if (menu.classList.contains("show") && !toggleButton.contains(event.target) && !menu.contains(event.target)) {
        menu.classList.remove("show");
    }
});
</script>
            </h1>


       
        <div class="info">
            <p><strong>Nombre:</strong> <?php echo $datos['nomEst']; ?></p>
            <p><strong>Apellido:</strong> <?php echo $datos['apeEst']; ?></p>
            <p><strong>Tipo de identificacion:</strong> <?php echo $datos['descTipo']; ?></p>
            <p><strong>Num de identificacion:</strong> <?php echo $datos['idEst']; ?></p>

            <p><strong>Grado:</strong> <?php echo $datos['nomGrado']; ?></p>
            <p><strong>Jornada:</strong> <?php echo $datos['jornada']; ?></p>
            <p><strong>Edad:</strong> <?php echo $datos['Edad']; ?> años</p>
        </div>
        <h1>PIAR</h1>
        <div class="buttons">
            <a href="anex1Usuar.php?idEst=<?php echo $datos['idEst'];?>" class="button">anexo 1 </a>

            <a href="anex2Usuar.php?idEst=<?php echo $datos['idEst'];?>" class="button">anexo 2 </a>
            <a href="anex3Usuar.php?idEst=<?php echo $datos['idEst'];?>" class="button">anexo 3 </a>
        </div>
       
    </div>
</body>
</html>

