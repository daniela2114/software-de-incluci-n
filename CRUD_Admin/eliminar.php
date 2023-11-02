<?php
include_once("./conexion/conectar.php");

if (!empty($_GET['idEliminar'])) {
    $id=$_GET['idEliminar'];
   $sqll=$link->query("DELETE  FROM usuarios WHERE idUsuario='$id'");
    if ($sqll==1) {
        echo "<script>alert('usuario eliminado');</script>";
    }else{
        echo"error";
    }
}
if (!empty($_GET['idEliminar2'])) {
    $id=$_GET['idEliminar2'];
   $sqll=$link->query("DELETE  FROM estudiantess WHERE idEst='$id'");
    if ($sqll==1) {
        echo "<script>alert('usuario eliminado');</script>";
    }else{
        echo"error";
    }
}
if (!empty($_GET['idEliminar3'])) {
    $id=$_GET['idEliminar3'];

   $sqll=$link->query("DELETE  FROM anexo1 WHERE idEst='$id'");
    if ($sqll==1) {
        echo "<script>alert('informe eliminado');</script>";
    }else{
        echo"error";
    }
}
if (!empty($_GET['idEliminar4'])) {
    $id=$_GET['idEliminar4'];

   $sqll=$link->query("DELETE  FROM anexo2 WHERE idEst='$id'");
    if ($sqll==1) {
        echo "<script>alert('informe eliminado');</script>";
    }else{
        echo"error";
    }
}
if (!empty($_GET['idEliminar5'])) {
    $id=$_GET['idEliminar5'];

   $sqll=$link->query("DELETE  FROM anexo3 WHERE idEst='$id'");
    if ($sqll==1) {
        echo "<script>alert('informe eliminado');</script>";
    }else{
        echo"error";
    }
}


?>