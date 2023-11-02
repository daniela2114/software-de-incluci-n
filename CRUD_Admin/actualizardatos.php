<?php
include_once("../conexion/conectar.php");


if (isset($_POST["actualizar"])) {
    
   if (empty($_POST['usuario']) || empty($_POST['apellidos']) || empty($_POST['contraseña']) ||  empty($_POST['fechaCC'])) {
      echo"error falta informacion";
    }else{
       $idUsuario=$_POST['cedulaNueva'];
      $cedul=$_POST['cedula'];
      $nombre=$_POST['usuario'];
      $apellido=$_POST['apellidos'];
      $contra=$_POST['contraseña'];
      $fechaCC=$_POST['fechaCC'];
      $jorn=$_POST['jornada'];
      $rol=$_POST['rol'];
     
  

     $mod=$link->query("UPDATE usuarios SET nomUsuario='$nombre',apellidoUsuario='$apellido',passUsuario='$contra',fechaCedula='$fechaCC',idJornada='$jorn',idRol='$rol',idUsuario='$cedul' WHERE idUsuario='$idUsuario'");
     if ($mod>  0) {
        
        header('location:../datatable.php');
      }else{
        echo"<h1>Ha ocurrido un error</h1>";
      }
    } 
}else{
  if (isset($_POST['cancel'])) {
    header('location:../datatable.php');
  }
}
