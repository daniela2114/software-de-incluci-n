<?php
include("../conexion/conectar.php");
include("../conexion/validar.php");
 $sql=$link->query("SELECT * FROM jornad");
 $sql2=$link->query("SELECT * FROM tipos_id");
 $sql3=$link->query("SELECT * FROM grados");

 if(isset($_POST['anex2Act'])){
    if (empty($_POST['area2']) || empty($_POST['barreras2']) || empty($_POST['Apoyo2']) || empty($_POST['tipo2'])|| empty($_POST['seguimiento2']) || empty($_POST['descripcion2']) ) {
    
        echo"<h1>complete</h1>";
        
      }else{
   
        $id=$_POST['idEst'];
        $area=$_POST['area2'];
        $barreras=$_POST['barreras2'];
        $apoyo=$_POST['Apoyo2'];
        $tipos=$_POST['tipo2'];
        $ti=$_POST['descripcion2'];
        $jornada=$_POST['seguimiento2'];
        $sql = $link -> query("SELECT * FROM usuarios WHERE idUsuario ='$cedula'");     
     
      $consultas=$link->query("UPDATE anexo2 SET Area='$area',Barreras='$barreras',tipo='$barreras',apoyo='$apoyo',descripcion='$ti',seguimiento='$jornada' WHERE idEst='$id'");
      //cargos 
      if($sql==true){
        
      if($row= $sql ->fetch_array()){
        if ($consultas>  0) {
                  if ($row['idRol']==1) {//admin
        header('location:../inicio.php');
       } else{
       if ($row['idRol']==2) {//docente
         header('location:inicio2.php');
        }
       } 
        }else{
          echo"<h1>Ha ocurrido un error</h1>";
        }
        
        
    }
}
      }
    }

?>