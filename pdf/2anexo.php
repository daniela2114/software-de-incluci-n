<?php
include("../conexion/conectar.php");
include("anexo2llenar.php");
$cedula = $_REQUEST['idEst'];
 $sql=$link->query("SELECT * FROM estudiantess WHERE idEst=$cedula");

 $datos = $sql->fetch_array();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Información de Área/Asignatura/Campo de Pensamiento</title>
    <style>
        /* Estilos CSS para el formulario */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        form {
            background-color: #fff;
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        h1 {
            text-align: center;
        }

        .button2 {
            text-decoration: none;
            padding: 10px 20px;
            background-color: red;
            color: #fff;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        textarea, input[type="text"] {
            width: 98%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow-x: auto; /* Agregar desbordamiento horizontal */
            max-width: 100%; /* Ancho máximo del 100% */
        }

        textarea {
            height: 150px; /* Altura del textarea */
        }

        .button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
        }

        .form-section {
            border-top: 1px solid #ccc;
            padding: 20px 0;
        }

        .docente-info {
            text-align: left;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <form method="POST">
        <h1>AJUSTES RAZONABLES</h1>
        <input type="hidden" id="nombre_docente" name="idEst" value="<?php echo$datos['idEst'];  ?>">

        <!-- Información de Área/Asignatura/Campo de Pensamiento en un solo campo de textarea -->
        <div class="form-section">
            <label for="informacion_area_asignatura">Área/Asignatura/Campo de Pensamiento, Área de Desarrollo/Dimensiones, Articulación con la Educación Media, Dinámicas de la Vida Diaria/Convivencia, Otra información según sea el caso:</label>
            <textarea id="informacion_area_asignatura" name="informacion_area_asignatura"></textarea>
        </div>

        <!-- Barreras identificadas en el contexto -->
        <div class="form-section">
            <label for="barreras_contexto">Barreras identificadas en el contexto - Describir (Actitudinales, tecnológicas, comunicativas, metodológicas, infraestructura, entre otras):</label>
            <textarea id="barreras_contexto" name="barreras_contexto"></textarea>
        </div>

        <!-- Tipo de ajuste razonable - facilitador -->
        <div class="form-section">
            <label for="tipo_ajuste_facilitador">Tipo de ajuste razonable - facilitador (Recursos o materiales, didácticas o estrategias, tiempo, metas de aprendizaje, estrategias de evaluación, infraestructura):</label>
            <textarea id="tipo_ajuste_facilitador" name="tipo_ajuste_facilitador"></textarea>
        </div>

        <!-- Apoyo requerido (Talento humano, técnico, tecnológico, comunicativo, otro) -->
        <div class="form-section">
            <label for="apoyo_requerido">Apoyo requerido (Talento humano, técnico, tecnológico, comunicativo, otro):</label>
            <textarea id="apoyo_requerido" name="apoyo_requerido"></textarea>
        </div>

        <!-- Descripción de tipo de ajustes y apoyos, incluyendo la nueva meta si es en la meta de aprendizaje y la frecuencia del ajuste y apoyo -->
        <div class="form-section">
            <label for="descripcion_ajustes_apoyos">Descripción de tipo de ajustes y apoyos, incluyendo la nueva meta si es en la meta de aprendizaje y la frecuencia del ajuste y apoyo:</label>
            <textarea id="descripcion_ajustes_apoyos" name="descripcion_ajustes_apoyos"></textarea>
        </div>

        <!-- Seguimiento en clave de temporalidad, responsable y medios -->
        <div class="form-section">
            <label for="seguimiento_temporalidad">Seguimiento en clave de temporalidad, responsable y medios:</label>
            <textarea id="seguimiento_temporalidad" name="seguimiento_temporalidad"></textarea>
        </div>

        <!-- Información del docente, área y firma -->
        <div class="form-section docente-info">
            <label for="nombre_docente">Nombre del Docente:</label>
            <input type="text" id="nombre_docente" name="nombre_docente">
            <label for="area_docente">Área del Docente:</label>
            <input type="text" id="area_docente" name="area_docente">
            <label for="firma_docente">Firma del Docente:</label>
            <input type="text" id="firma_docente" name="firma_docente">
        </div>

<!-- Información del docente orientador, área y firma -->
<div class="form-section docente-info">
    <label for="nombre_docente_orientador">Nombre del Docente Orientador:</label>
    <input type="text" id="nombre_docente_orientador" name="nombre_docente_orientador">
    <label for="area_docente_orientador">Área del Docente Orientador:</label>
    <input type="text" id="area_docente_orientador" name="area_docente_orientador">
    <label for="firma_docente_orientador">Firma del Docente Orientador:</label>
    <input type="text" id="firma_docente_orientador" name="firma_docente_orientador">
</div>

<!-- Información del docente de apoyo pedagógico, área y firma -->
<div class="form-section docente-info">
    <label for="nombre_docente_apoyo">Nombre del Docente de Apoyo Pedagógico:</label>
    <input type="text" id="nombre_docente_apoyo" name="nombre_docente_apoyo">
    <label for="area_docente_apoyo">Área del Docente de Apoyo Pedagógico:</label>
    <input type="text" id="area_docente_apoyo" name="area_docente_apoyo">
    <label for="firma_docente_apoyo">Firma del Docente de Apoyo Pedagógico:</label>
    <input type="text" id="firma_docente_apoyo" name="firma_docente_apoyo">
</div>

<!-- Información del coordinador pedagógico, área y firma -->
<div class="form-section docente-info">
    <label for="nombre_coordinador_pedagogico">Nombre del Coordinador Pedagógico:</label>
    <input type="text" id="nombre_coordinador_pedagogico" name="nombre_coordinador_pedagogico">
    <label for="area_coordinador_pedagogico">Área del Coordinador Pedagógico:</label>
    <input type="text" id="area_coordinador_pedagogico" name="area_coordinador_pedagogico">
    <label for="firma_coordinador_pedagogico">Firma del Coordinador Pedagógico:</label>
    <input type="text" id="firma_coordinador_pedagogico" name="firma_coordinador_pedagogico">
</div>
        <!-- Botón de Envío -->
        <input class="button" type="submit" name="enviar" >

        <a href="pdf.php?idEst=<?php echo$datos['idEst'];?>" class="button2">salir</a>
       
    </form>
</body>
</html>
