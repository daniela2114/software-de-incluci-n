<?php
include("conexion/conectar.php");
 $sql=$link->query("SELECT * FROM jornad");
 $sql2=$link->query("SELECT * FROM tipos_id");
 $sql3=$link->query("SELECT * FROM grados");

 if(isset($_POST["regisEst"])){
    if (empty($_POST['usuario']) || empty($_POST['apellidos']) || empty($_POST['Edad']) || empty($_POST['t_identificacion']) ) {
    
        echo"<h1>complete</h1>";
        
      }else{
   
      
      $nombre=trim($_POST['usuario']);
      $apellido=$_POST['apellidos'];
      $edad=trim($_POST['Edad']);
      $tipos=$_POST['identificacion'];
      $ti=$_POST['t_identificacion'];
      $jornada=$_POST['jornada'];
      $grado=$_POST['grado'];
     
      $consultas=$link->query("INSERT INTO estudiantess(nomEst,Edad,apeEst,idEst,idJornada,idGrado,idTipo) VALUES ('$nombre','$edad','$apellido','$ti','$jornada','$grado','$tipos')");
        if ($consultas>  0) {
           header('location:inicio.php');
        }else{
          echo"<h1>Ha ocurrido un error</h1>";
        }
        
    }
}


?>