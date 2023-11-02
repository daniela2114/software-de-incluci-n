<?php
include_once("../conexion/conectar.php");

if (isset($_POST["cambio"])) {
    
    if ( empty($_POST["contraseña"]) ||empty($_POST["nueva"])) {
       echo"A ocurrido un error";
       
    }else {
        $cedula=$_POST["cedula"];
        $contraseña=$_POST["contraseña"];
        $nueva=$_POST["nueva"];
        if ($contraseña== $nueva ) {
         $cambio=$link->query("UPDATE usuarios SET passUsuario='$contraseña' WHERE idUsuario='$cedula'");
         header('location:../index.php');
        }else {
            echo"chupelo";
        }

    }
    
}




?>