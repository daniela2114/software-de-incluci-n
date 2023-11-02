<?php
include("../conexion/conectar.php");
 $sql=$link->query("SELECT * FROM jornad");
 $sql2=$link->query("SELECT * FROM tipos_id");
 $sql3=$link->query("SELECT * FROM grados");

 if(isset($_POST["enviar"])){
    if (empty($_POST['informacion_area_asignatura']) || empty($_POST['barreras_contexto']) || empty($_POST['tipo_ajuste_facilitador']) || empty($_POST['apoyo_requerido'])|| empty($_POST['descripcion_ajustes_apoyos']) || empty($_POST['seguimiento_temporalidad']) ) {
    
        echo '<script type="text/javascript">alert("Ha ocurrido un error");</script>';
        
      }else{
   
      $id=$_POST['idEst'];
      $area=$_POST['informacion_area_asignatura'];
      $barreras=$_POST['barreras_contexto'];
      $apoyo=$_POST['tipo_ajuste_facilitador'];
      $tipos=$_POST['apoyo_requerido'];
      $ti=$_POST['descripcion_ajustes_apoyos'];
      $jornada=$_POST['seguimiento_temporalidad'];

      $nombre_docente=$_POST['nombre_docente'];
      $area_docente=$_POST['area_docente'];
      $firma_docente=$_POST['firma_docente'];
      $nombre_docente_orientador=$_POST['nombre_docente_orientador'];
      $area_docente_orientador=$_POST['area_docente_orientador'];
      $firma_docente_orientador=$_POST['firma_docente_orientador'];
      $nombre_docente_apoyo=$_POST['nombre_docente_apoyo'];
      $area_docente_apoyo=$_POST['area_docente_apoyo'];
      $firma_docente_apoyo=$_POST['firma_docente_apoyo'];
      $nombre_coordinador_pedagogico=$_POST['nombre_coordinador_pedagogico'];
      $area_coordinador_pedagogico=$_POST['area_coordinador_pedagogico'];
      $firma_coordinador_pedagogico=$_POST['firma_coordinador_pedagogico'];
     
      $consultas=$link->query("INSERT INTO anexo2(Area,Barreras,tipo,apoyo,descripcion,seguimiento,idEst,nomDocente,areaDocente,firmDocente,orientador,areaOrientador,	firmOrientador,nomapoyoPedadogico,areapoyoPedadogico,firmpoyoPedadogico,nomcordinadorPedadogico,areacordinadorPedadogico,firmcordinadorPedadogica) VALUES ('$area','$barreras','$tipos','$apoyo','$ti','$jornada','$id','$nombre_docente',' $area_docente',' $firma_docente',' $nombre_docente_orientador','$area_docente_orientador','$firma_docente_orientador','$nombre_docente_apoyo','$area_docente_apoyo','$firma_docente_apoyo',' $nombre_coordinador_pedagogico','$area_coordinador_pedagogico',' $firma_coordinador_pedagogico')");
        if ($consultas>  0) {
          header("Location:pdfUsuar.php?idEst=$cedula");
           
        }else{
          echo '<script type="text/javascript">alert("Ha ocurrido un error");</script>';

        }
        
    }
}


?>