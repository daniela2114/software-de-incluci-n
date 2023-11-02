<?php
include_once("../conexion/conectar.php");
ini_set('display_errors', 0);

$sql = $link->query("SELECT * FROM usuarios");
$datos = $sql->fetch_array();

if ($sql->num_rows > 0) {
    $usuarios = array();
    $fecha = array();
    while ($row = $sql->fetch_assoc()) {
        $usuarios[] = $row["idUsuario"];
        $fecha[] = $row["fechaCedula"];
    }
}

$sql2 = "SELECT COUNT(*) total FROM usuarios";
$result = $link->query($sql2);
$fila = $result->fetch_assoc();

if (isset($_POST["recuperar"])) {
    
    if (empty($_POST['cedula'])) {
        echo "Ha ocurrido un error: La cédula no puede estar vacía";
    } else {
        $cedula = $_POST['cedula'];
        $fecha2 = $_POST['fecha'];
 
        $encontrado = false;
        for ($i = 0; $i < $fila['total']; $i++) {
            if ($usuarios[$i] == $cedula && $fecha[$i] == $fecha2) {
                $cedulaUsuar = $usuarios[$i];
                header("location:nueva.php?cedula=$cedulaUsuar");
                $encontrado = true;
                break; // Termina el bucle una vez que se encuentra el nombre
            }
        }
        
        if (!$encontrado) {
            echo "Dato no encontrado: La cédula o la fecha son incorrectas";
        }
    }
}
?>
