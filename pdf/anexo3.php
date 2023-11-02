<?php
include("../conexion/conectar.php");
include("anexo3Llenar.php");
$cedula = $_REQUEST['idEst'];
 $sql=$link->query("SELECT * FROM estudiantess WHERE idEst=$cedula");

 $datos = $sql->fetch_array();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Información del Estudiante</title>
    <style>
        /* Estilos CSS para el formulario */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        ::placeholder {
            font-family: Arial, sans-serif;
font-size:18px ;
        }
        textarea {
            height: 150px; /* Altura del textarea */
        }
        textarea{
            font-family: Arial, sans-serif;

            width: 98%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow-x: auto; /* Agregar desbordamiento horizontal */
            max-width: 100%; /* Ancho máximo del 100% */
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

        label {
            display: block;
            margin-top: 10px;
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
        input[type="text"],
        input[type="date"],
        input[type="number"] {
            width: 98%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow-x: auto; /* Agregar desbordamiento horizontal */
            max-width: 100%; /* Ancho máximo del 100% */
        }
    </style>
</head>
<body>
    <form method="post">

        <h1>Información del Estudiante</h1>
        <input type="hidden" id="fecha_diligenciamiento" name="idEst" value="<?php echo$datos['idEst'];  ?>">

        <!-- Fecha y Lugar de Diligenciamiento -->
        <div class="form-section">
            <label for="fecha_diligenciamiento">Fecha de Diligenciamiento:</label>
            <input type="date" id="fecha_diligenciamiento" name="fecha_diligenciamiento">
            <label for="lugar_diligenciamiento">Lugar de Diligenciamiento:</label>
            <input type="text" id="lugar_diligenciamiento" name="lugar_diligenciamiento">
        </div>

        <!-- Nombre y Rol de la Persona que diligencia -->
        <div class="form-section">
            <label for="nombre_diligencia">Nombre de la Persona que diligencia:</label>
            <input type="text" id="nombre_diligencia" name="nombre_diligencia">
            <label for="rol_diligencia">Rol de la Persona que diligencia:</label>
            <input type="text" id="rol_diligencia" name="rol_diligencia">
        </div>

        <!-- Información de la Institución Educativa, Sede, Nombre, Edad y Grado -->
        <div class="form-section">
            <label for="institucion_educativa">Institución Educativa:</label>
            <input type="text" id="institucion_educativa" name="institucion_educativa">
            <label for="sede">Sede:</label>
            <input type="text" id="sede" name="sede">
            <label for="nombre_estudiante">Nombre del Estudiante:</label>
            <input type="text" id="nombre_estudiante" name="nombre_estudiante">
            <label for="edad_estudiante">Edad del Estudiante:</label>
            <input type="number" id="edad_estudiante" name="edad_estudiante">
            <label for="grado_estudiante">Grado del Estudiante:</label>
            <input type="text" id="grado_estudiante" name="grado_estudiante">
        </div>
        <p>Según el Decreto 1421 de 2017 la educación inclusiva es un proceso permanente que reconoce,
valora y responde a la diversidad de características, intereses, posibilidades y expectativas de
los estudiantes para promover su desarrollo, aprendizaje y participación, en un ambiente de
aprendizaje común, sin discriminación o exclusión.<br>

<br>
La inclusión solo es posible cuando se unen los esfuerzos del colegio, el estudiante, docentes,
directivos docentes y familias. De ahí la importancia de formalizar con las firmas, la presente
Acta de Acuerdo.<br>
<br>

<strong>El Establecimiento Educativo</strong> ha realizado la valoración pedagógica y definido los ajustes
razonables que facilitarán al estudiante su proceso educativo.<br>


<br>
<strong>La Familia se compromete a </strong> cumplir y firmar los compromisos señalados en el PIAR y en las actas
de acuerdo, para fortalecer los procesos escolares del estudiante y en particular a: </p>
<div class="form-section">
<textarea id="apoyo_requerido" name="apoyo_requerido" placeholder="Incluya aquí los compromisos específicos para implementar en el aula que requieran
ampliación o detalle adicional al incluido en el PIAR."></textarea>

</div>
<!-- Nombre de la Actividad -->
<div class="form-section">
    <label for="nombre_actividad">Nombre de la Actividad:</label>
    <input type="text" id="nombre_actividad" name="nombre_actividad">
</div>

<!-- Descripción de la estrategia -->
<div class="form-section">
    <label for="descripcion_estrategia">Descripción de la estrategia:</label>
    <textarea id="descripcion_estrategia" name="descripcion_estrategia" placeholder="Incluya aquí una descripción detallada de la estrategia a implementar."></textarea>
</div>

<!-- Frecuencia: D Diaria, S Semanal, P Permanente -->
<div class="form-section">
    <label for="frecuencia">Frecuencia:</label>
    <label for="frecuencia_diaria">D Diaria</label>
    <input type="checkbox" id="frecuencia_diaria" name="frecuencia" value="Diaria">
    <label for="frecuencia_semanal">S Semanal</label>
    <input type="checkbox" id="frecuencia_semanal" name="frecuencia" value="Semanal">
    <label for="frecuencia_permanente">P Permanente</label>
    <input type="checkbox" id="frecuencia_permanente" name="frecuencia" value="Permanente">

</div>
<div class="form-section">
    <h4>Firma de los Actores comprometidos:</h4>
    
    <label for="descripcion_estrategia">Estudiante:</label>
    <input type="text" id="nombre_actividad" name="firma_estudiante">
    <label for="descripcion_estrategia">Acudiente/Familia:</label>
    <input type="text" id="nombre_actividad" name="firma_acudiente">
    <label for="descripcion_estrategia">Docente:</label>
    <input type="text" id="nombre_actividad" name="docente">
    <label for="descripcion_estrategia">Directivo/Docente:</label>
    <input type="text" id="nombre_actividad" name="directivo_docente">
</div>

        <!-- Botón de Envío -->
        <input class="button" type="submit" name="enviar" >

        <a href="pdf.php?idEst=<?php echo$datos['idEst'];?>" class="button2">salir</a>
    </form>
</body>
</html>
