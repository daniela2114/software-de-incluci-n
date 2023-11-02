<?php
if (isset($_POST['btn_ingresar'])) {
  if(empty($_POST["cedula"])|| empty($_POST["password"])){
    echo"<script>alert('LLene los Campos')</script>";
  }
  
  else{
    $cedula=$_POST["cedula"];
    $password=$_POST["password"];
    $jornada=$_POST["jornada"];
    $sql = $link -> query("SELECT * FROM usuarios WHERE idUsuario ='$cedula' AND passUsuario='$password' AND idJornada='$jornada'");     
    //cargos 
    if($sql==true){
      
    if($row= $sql ->fetch_array()){
       session_start();
       $_SESSION['usuario']=$row[0];
       $_SESSION['apellidos']=$row[5];
    
       $_SESSION['autenticado']='si';
        
       if ($row['idRol']==1) {//admin
        header('location:datatable.php');
       } else{
       if ($row['idRol']==2) {//docente
         header('location:inicio2.php');
        }
       } 
    }else {
      echo"<script>alert('A ocurrido un Error')</script>";    }
   }   
  }
}
?>