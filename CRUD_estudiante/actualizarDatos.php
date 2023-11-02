<?php
include_once("../conexion/conectar.php");

if (isset($_POST["actualizarEst"])) {
    if (empty($_POST['usuario']) || empty($_POST['apellidos']) || empty($_POST['Edad']) || empty($_POST['t_identificacion']) ) {
    
        echo"<h1>complete</h1>";
        
      
    }else{
      $id=$_POST['ti_vieja'];
        $nombre=trim($_POST['usuario']);
        $apellido=$_POST['apellidos'];
        $edad=trim($_POST['Edad']);
        $tipos=$_POST['identificacion'];
        $ti=$_POST['t_identificacion'];
        $jornada=$_POST['jornada'];
        $grado=$_POST['grado'];
  

     $mod2=$link->query("UPDATE estudiantess SET nomEst='$nombre',apeEst='$apellido',Edad='$edad',idTipo='$tipos',idJornada='$jornada',idGrado='$grado',idEst='$ti' WHERE idEst='$id'");
     if ($mod2>  0) {
        
        header('location:../inicio.php');
      }else{
        echo"<h1>Ha ocurrido un error</h1>";
      }
    } 
}else{
  if (isset($_POST['cancel'])) {
    header('location:../datatable.php');
  }
}
 
?>