<?php
include("conexion/conectar.php");

 $sql=$link->query("SELECT * FROM jornad");

if(isset($_POST['regisProfe'])){
    
    if (empty($_POST['usuario']) || empty($_POST['apellidos']) || empty($_POST['contraseña']) || empty($_POST['cedula']) || empty($_POST['cedula'])|| empty($_POST['fechaCC']) ) {
    
        echo"<h1>complete</h1>";
        
      }else{
   
      
      $nombre=trim($_POST['usuario']);
      $apellido=$_POST['apellidos'];
      $contra=trim($_POST['contraseña']);
      $cedula=trim($_POST['cedula']);
      $fechaCC=$_POST['fechaCC'];
      $jorn=$_POST['jornada'];
      $rol=2;
     
      $consultas=$link->query("INSERT INTO usuarios(nomUsuario,passUsuario,apellidoUsuario,idUsuario,idJornada,idRol,fechaCedula ) VALUES ('$nombre','$contra','$apellido','$cedula','$jorn','$rol','$fechaCC')");
        if ($consultas>  0) {
         header('location:index.php');
  
        }else{
          echo"<h1>Ha ocurrido un error</h1>";
        }
        
    }
}
?>