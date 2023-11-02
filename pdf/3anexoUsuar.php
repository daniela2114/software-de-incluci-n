<?php
include("../conexion/conectar.php");

if (isset($_POST['enviar'])) {
    // Recopila los datos del formulario
    $idEst=$_POST['idEst'];
    $fechaDiligenciamiento = $_POST['fecha_diligenciamiento'];
    $lugarDiligenciamiento = $_POST['lugar_diligenciamiento'];
    $nombreDiligencia = $_POST['nombre_diligencia'];
    $rolDiligencia = $_POST['rol_diligencia'];
    $institucionEducativa = $_POST['institucion_educativa'];
    $sede = $_POST['sede'];
    $nombreEstudiante = $_POST['nombre_estudiante'];
    $edadEstudiante = $_POST['edad_estudiante'];
    $gradoEstudiante = $_POST['grado_estudiante'];
    $apoyoRequerido = $_POST['apoyo_requerido'];
    $nombreActividad = $_POST['nombre_actividad'];
    $descripcionEstrategia = $_POST['descripcion_estrategia'];
    $frecuencia = $_POST['frecuencia'];
    $firmaEstudiante = $_POST['firma_estudiante'];
    $firmaAcudiente = $_POST['firma_acudiente'];
    $docente=$_POST['docente'];
    $directivo_docente=$_POST['directivo_docente'];

    // Consulta SQL para insertar los datos en la tabla
    $sql = $link->query("INSERT INTO anexo3 (fecha_diligenciamiento, lugar_diligenciamiento, nombre_diligencia, rol_diligencia, institucion_educativa, sede, nombre_estudiante, edad_estudiante, grado_estudiante, apoyo_requerido, nombre_actividad, descripcion_estrategia, frecuencia, firma_estudiante, firma_acudiente,idEst,Docente,directivoDocente) VALUES ('$fechaDiligenciamiento',' $lugarDiligenciamiento','$nombreDiligencia',' $rolDiligencia', '$institucionEducativa',' $sede', '$nombreEstudiante','$edadEstudiante',' $gradoEstudiante','$apoyoRequerido', '$nombreActividad', '$descripcionEstrategia','$frecuencia','$firmaEstudiante',' $firmaAcudiente','$idEst','$docente','$directivo_docente')");

    // Ejecuta la consulta SQL
    if ($sql>0) {
        header("Location:pdfUsuar.php?idEst=$cedula");
    
    } else {
        echo '<script type="text/javascript">alert("Ha ocurrido un error");</script>';
        
    }

}


?>
