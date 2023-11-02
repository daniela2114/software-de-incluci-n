                      
<?php
include("conexion/conectar.php");
 $sql=$link->query("SELECT * FROM jornad");

$sql_3=$link->query("SELECT * FROM rol");

if(isset($_POST['regist'])){
  
  if (empty($_POST['usuario']) || empty($_POST['correo']) || empty($_POST['contraseña']) || empty($_POST['apellido']) || empty($_POST['cedula'])|| empty($_POST['chk']) ) {
    
    echo"<h1>complete</h1>";
    
  }else{
    
    $nom=trim($_POST['usuario']);
    $cont=trim($_POST['contraseña']);

    $apel=trim($_POST['apellido']);
    $ced=trim($_POST['cedula']);
    $sede=$_POST['sede'];
    $jornada=$_POST['jornada'];
    $rol=$_POST['chk'];
    
   
    $consult=$link->query("INSERT INTO usuarios(nomUsuario,passUsuario,apellidoUsuario,idCedula,sede_Us,jornada,Rol ) VALUES ('$nom','$cont','$apel','$ced','$sede','$jornada','$rol')");
      if ($consult>  0) {
        echo"<h1>Datos registrados correctamente</h1>";

      }else{
        echo"<h1>Ha ocurrido un error</h1>";
      }
      
  }
}

?> 