<?php
include("../conexion/conectar.php");
include('1anexo.php');
$cedula = $_REQUEST['idEst'];
$sql2=$link->query("SELECT * FROM tipos_id");

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
.gradoss{
    display: flex;
    flex-direction: column;
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
            background-color:red;
            color: #fff;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
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

        input[type="text"],
        input[type="email"],
        input[type="date"],
        select {
            width: 98%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow-x: auto; /* Agregar desbordamiento horizontal */
            max-width: 100%; /* Ancho máximo del 100% */
        }

        input[type="checkbox"] {
            margin-right: 5px;
        }

        .form-section {
            border-top: 1px solid #ccc;
            padding: 20px 0;
        }
    </style>
</head>
<body>
    <form method="post">
    <input type="hidden" id="nombre_docente" name="idEst2" value="<?php echo$datos['idEst'];  ?>">

        <h1>PLAN INDIVIDUAL DE AJUSTES RAZONABLES</h1>
        <!-- 1. Información general del estudiante -->
        <div class="form-section">
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha">
            <label for="lugar_diligenciamiento">Lugar de Diligenciamiento:</label>
            <input type="text" id="lugar_diligenciamiento" name="lugar_diligenciamiento">
            
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre">
            <label for="rol">Rol de la Persona que Diligencia:</label>
            <input type="text" id="rol" name="rol">
            <label for="institucion_educativa">Institución Educativa:</label>
            <input type="text" id="institucion_educativa" name="institucion_educativa">
        </div>

        <div class="form-section">
           <h2>1. Información General del Estudiante </h2> 
            <label>Nombres:</label>
            <input type="text" id="nombres" name="nombres">
            <label>Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos">
            <label>Tipo de Identificación:</label>
            <select class="form-select form-select-sm-mb-3" name="identificacion" id="" required>
          <option value="">Tipos de Identificacion</option>
          <?php
        while($identificacion=$sql2-> fetch_array()) {
    

         ?>
          <option value="<?php echo $identificacion[0]?>"><?php echo $identificacion[1]?></option>
          <?php
        }
        ?>
        </select>

            <label for="ti_otro">Otro</label>
            <label for="otro_tipo_identificacion">¿Cuál?</label>
            <input type="text" id="otro_tipo_identificacion" name="otro_tipo_identificacion">
            <label for="otro_tipo_identificacion">No. de Identificacion</label>
            <input type="text" id="otro_tipo_identificacion" name="idEst" value="<?php echo$datos['idEst'];   ?>">
            <label for="lugar_nacimiento">Lugar de Nacimiento:</label>
            <input type="text" id="lugar_nacimiento" name="lugar_nacimiento">
            <label for="edad">Edad:</label>
            <input type="text" id="edad" name="edad">
            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento">
            <label for="grado_actual">Grado Actual o al que Ingresa:</label>
            <input type="text" id="grado_actual" name="grado_actual">
            <label>El año anterior estuvo vinculado(a) al Sistema Educativo:</label>
            <label for="vinculado_si">Si</label>
            <input type="checkbox" id="vinculado_si" name="vinculado_sistema" value="Si">
            <label for="vinculado_no">No</label>
            <input type="checkbox" id="vinculado_no" name="vinculado_sistema" value="No">
        </div>

        <!-- 3. Ubicación y Contacto -->
        <div class="form-section">
            <label for="departamento">Departamento donde Vive:</label>
            <input type="text" id="departamento" name="departamento">
            <label for="municipio">Municipio:</label>
            <input type="text" id="municipio" name="municipio">
            <label for="barrio_vereda">Barrio/Vereda:</label>
            <input type="text" id="barrio_vereda" name="barrio_vereda">
            <label for="direccion">Dirección de Vivienda:</label>
            <input type="text" id="direccion" name="direccion">
            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono">
            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo">
        </div>

        <!-- 4. Otras Preguntas -->
        <div class="form-section">
            <label>¿Se Reconoce como Víctima del Conflicto Armado?</label>
            <label for="victima_si">Si</label>
            <input type="checkbox" id="victima_si" name="victima_conflicto" value="Si">
            <label for="victima_no">No</label>
            <input type="checkbox" id="victima_no" name="victima_conflicto" value="No">
            <br>
            <label for="registro_victima">¿Cuenta con el respectivo registro?</label>
            <label for="registro_victima_si">Si</label>
            <input type="checkbox" id="registro_victima_si" name="registro_victima" value="Si">
            <label for="registro_victima_no">No</label>
            <input type="checkbox" id="registro_victima_no" name="registro_victima" value="No">
            <br>
            <label for="centro_proteccion">¿Está en algún Centro de Protección?</label>
            <label for="centro_proteccion_si">Si</label>
            <input type="checkbox" id="centro_proteccion_si" name="centro_proteccion" value="Si">
            <label for="centro_proteccion_no">No</label>
            <input type="checkbox" id="centro_proteccion_no" name="centro_proteccion" value="No">
            <br>
            <label for="reconoce_grupo_etnico">¿Se Reconoce o Pertenece a un Grupo Étnico?</label>
            <label for="grupo_etnico_si">Si</label>
            <input type="checkbox" id="grupo_etnico_si" name="grupo_etnico" value="Si">
            <label for="grupo_etnico_no">No</label>
            <input type="checkbox" id="grupo_etnico_no" name="grupo_etnico" value="No">
            <br>
            <label for="cual_grupo_etnico">¿Cuál?</label>
            <input type="text" id="cual_grupo_etnico" name="cual_grupo_etnico">

            <h3>Descripción general del estudiante con énfasis en sus capacidades,gustos e intereses o aspectos que le desagradan,expectativas del estudiante y la familia,acompañamiento familiar y redes de apoyo con los que se cuenta.</h3>
            <label for="capacidades">Capacidades:</label>
            <input type="text" id="capacidades" name="capacidades">
            <label for="gustos_intereses">Gustos e Intereses:</label>
            <input type="text" id="gustos_intereses" name="gustos_intereses">
            <label for="expectativas_estudiante">Expectativas del Estudiante:</label>
            <input type="text" id="expectativas_estudiante" name="expectativas_estudiante">
            <label for="expectativas_familia">Expectativas de la Familia:</label>
            <input type="text" id="expectativas_familia" name="expectativas_familia">
            <label for="redes_apoyo">Redes de Apoyo:</label>
            <input type="text" id="redes_apoyo" name="redes_apoyo">
            <label for="otras">Otras:</label>
            <input type="text" id="otras" name="otras">
        </div>
        <div class="form-section">
    <h2>2. Entorno Salud</h2>
    <label for="afiliacion_salud">Afiliación al sistema de salud:</label>
    <label for="afiliacion_salud_si">Si</label>
    <input type="checkbox" id="afiliacion_salud_si" name="afiliacion_salud" value="Si">
    <label for="afiliacion_salud_no">No</label>
    <input type="checkbox" id="afiliacion_salud_no" name="afiliacion_salud" value="No">
    <label for="tipo_afiliacion">Contributivo/Subsidiado/Cuál:</label>
    <input type="text" id="tipo_afiliacion" name="tipo_afiliacion">
    
    <label for="lugar_emergencia">Lugar donde le atienden en caso de emergencia:</label>
    <input type="text" id="lugar_emergencia" name="lugar_emergencia">
    
    <label for="diagnostico_medico">Cuenta con diagnóstico médico:</label>
    <label for="diagnostico_medico_si">Si</label>
    <input type="checkbox" id="diagnostico_medico_si" name="diagnostico_medico" value="Si">
    <label for="diagnostico_medico_no">No</label>
    <input type="checkbox" id="diagnostico_medico_no" name="diagnostico_medico" value="No">
    <label for="diagnostico_cual">¿Cuál?</label>
    <input type="text" id="diagnostico_cual" name="diagnostico_cual">
    
    <label for="atencion_medica">Cuenta con atención médica:</label>
    <label for="atencion_medica_si">Si</label>
    <input type="checkbox" id="atencion_medica_si" name="atencion_medica" value="Si">
    <label for="atencion_medica_no">No</label>
    <input type="checkbox" id="atencion_medica_no" name="atencion_medica" value="No">
    <label for="atencion_cual">¿Cuál?</label>
    <input type="text" id="atencion_cual" name="atencion_cual">
    <label for="atencion_frecuencia">Frecuencia:</label>
    <input type="text" id="atencion_frecuencia" name="atencion_frecuencia">
    
    <label for="intervencion_terapeutica">Cuenta con intervención o tratamiento terapéutico integral:</label>
    <label for="intervencion_terapeutica_si">Si</label>
    <input type="checkbox" id="intervencion_terapeutica_si" name="intervencion_terapeutica" value="Si">
    <label for="intervencion_terapeutica_no">No</label>
    <input type="checkbox" id="intervencion_terapeutica_no" name="intervencion_terapeutica" value="No">
    <label for="intervencion_cual">¿Cuál?</label>
    <input type="text" id="intervencion_cual" name="intervencion_cual">
    <label for="intervencion_frecuencia">Frecuencia:</label>
    <input type="text" id="intervencion_frecuencia" name="intervencion_frecuencia">
    
    <label for="consume_medicamentos">¿Consume medicamentos?</label>
    <label for="consume_medicamentos_si">Si</label>
    <input type="checkbox" id="consume_medicamentos_si" name="consume_medicamentos" value="Si">
    <label for="consume_medicamentos_no">No</label>
    <input type="checkbox" id="consume_medicamentos_no" name="consume_medicamentos" value="No">
    <label for="medicamentos_cuales">¿Cuáles?</label>
    <input type="text" id="medicamentos_cuales" name="medicamentos_cuales">
    <label for="medicamentos_frecuencia">Frecuencia y horario:</label>
    <input type="text" id="medicamentos_frecuencia" name="medicamentos_frecuencia">
    
    <label for="ayudas_tecnicas">¿Cuenta con apoyos o ayudas técnicas o tecnológicas para favorecer su movilidad, comunicación e independencia?</label>
    <label for="ayudas_tecnicas_si">Si</label>
    <input type="checkbox" id="ayudas_tecnicas_si" name="ayudas_tecnicas" value="Si">
    <label for="ayudas_tecnicas_no">No</label>
    <input type="checkbox" id="ayudas_tecnicas_no" name="ayudas_tecnicas" value="No">
    <label for="ayudas_tecnicas_cuales">¿Cuáles?</label>
    <input type="text" id="ayudas_tecnicas_cuales" name="ayudas_tecnicas_cuales">
</div>

<!-- 3. Entorno Hogar -->
<div class="form-section">
    <h2>3. Entorno Hogar</h2>
    <label for="nombre_madre">Nombre de la madre:</label>
    <input type="text" id="nombre_madre" name="nombre_madre">
    <label for="nombre_padre">Nombre del padre:</label>
    <input type="text" id="nombre_padre" name="nombre_padre">
    
    <label for="ocupacion_madre">Ocupación de la madre:</label>
    <input type="text" id="ocupacion_madre" name="ocupacion_madre">
    <label for="ocupacion_padre">Ocupación del padre:</label>
    <input type="text" id="ocupacion_padre" name="ocupacion_padre">
    
    <label for="nivel_educativo_madre">Nivel educativo alcanzado por la madre (Prim/Bto/Téc/Tecn/univ):</label>
    <input type="text" id="nivel_educativo_madre" name="nivel_educativo_madre">
    <label for="nivel_educativo_padre">Nivel educativo alcanzado por el padre (Prim/Bto/Téc/Tecn/univ):</label>
    <input type="text" id="nivel_educativo_padre" name="nivel_educativo_padre">
    
    <label for="nombre_cuidador">Nombre Cuidador:</label>
    <input type="text" id="nombre_cuidador" name="nombre_cuidador">
    <label for="nivel_educativo_cuidador">Nivel educativo del cuidador (Prim/Bto/Téc/Tecn/univ):</label>
    <input type="text" id="nivel_educativo_cuidador" name="nivel_educativo_cuidador">
    <label for="telefono_cuidador">Teléfono del cuidador:</label>
    <input type="text" id="telefono_cuidador" name="telefono_cuidador">
    
    <label for="parentesco_estudiante">Parentesco con el estudiante:</label>
    <input type="text" id="parentesco_estudiante" name="parentesco_estudiante">
    
    <label for="correo_cuidador">Correo electrónico del cuidador:</label>
    <input type="email" id="correo_cuidador" name="correo_cuidador">
    
    <label for="hermanos_numero">No. Hermanos:</label>
    <input type="text" id="hermanos_numero" name="hermanos_numero">
    <label for="lugar_ocupa">Lugar que ocupa:</label>
    <input type="text" id="lugar_ocupa" name="lugar_ocupa">
    
    <label for="apoyo_crianza">¿Quiénes apoyan la crianza del estudiante?</label>
    <input type="text" id="apoyo_crianza" name="apoyo_crianza">
    
    <label for="personas_vive_con">Personas con quien vive:</label>
    <input type="text" id="personas_vive_con" name="personas_vive_con">
</div>
<!-- 4. Entorno Educativo -->
<div class="form-section">
    <h2>4. Entorno Educativo</h2>
    
    <label for="vinculado_otra_institucion">¿Ha estado vinculado en otra institución educativa, fundación o bajo otra modalidad de educación?</label>
    <label for="vinculado_otra_institucion_no">No</label>
    <input type="checkbox" id="vinculado_otra_institucion_no" name="vinculado_otra_institucion" value="No">
    <label for="vinculado_otra_institucion_si">Si</label>
    <input type="checkbox" id="vinculado_otra_institucion_si" name="vinculado_otra_institucion" value="Si">
    <label for="motivo_vinculacion_otra">¿Por qué?</label>
    <input type="text" id="motivo_vinculacion_otra" name="motivo_vinculacion_otra">
    
    
    
    <label for="ultimo_grado_cursado">Ultimo grado cursado</label>
    <input type="text" id="ultimo_grado_aprobado" name="ultimo_grado_aprobado" >
    <div class="gradoss">
      <div class="aprobado">
<label for="">Estado:</label>
        <label for="ultimo_grado_aprobado">Aprobado: </label> 
      </div>
     <div class="sisa">

        <input type="checkbox" id="ultimo_grado_aprobado" name="ultimo_grado_cursado" value="Aprobado">
         </div> 
    </div>
    <div class="gradoss">
<div class="aprobado">

    <label for="ultimo_grado_sin_terminar">Sin terminar:</label>
</div>
<div class="sisa">

    <input type="checkbox" id="ultimo_grado_sin_terminar" name="ultimo_grado_cursado" value="Sin terminar">
</div>
    </div>
    
    <label for="observaciones_cambio_modalidad">Observaciones (incluir motivos del cambio de la modalidad o de la institución educativa)</label>
    <textarea id="observaciones_cambio_modalidad" name="observaciones_cambio_modalidad" rows="4"></textarea>
    
    <label for="informe_pedagogico">¿Se recibe informe pedagógico cualitativo o certificado que describa el proceso de desarrollo y aprendizaje del estudiante y/o PIAR?</label>
    <label for="informe_pedagogico_no">No</label>
    <input type="checkbox" id="informe_pedagogico_no" name="informe_pedagogico" value="No">
    <label for="informe_pedagogico_si">Si</label>
    <input type="checkbox" id="informe_pedagogico_si" name="informe_pedagogico" value="Si">
    <label for="informe_institucion">¿De qué institución o modalidad proviene el informe?</label>
    <input type="text" id="informe_institucion" name="informe_institucion">
    
    <label for="asistiendo_programas_complementarios">¿Está asistiendo en la actualidad a programas complementarios?</label>
    <label for="programas_complementarios_no">No</label>
    <input type="checkbox" id="programas_complementarios_no" name="asistiendo_programas_complementarios" value="No">
    <label for="programas_complementarios_si">Si</label>
    <input type="checkbox" id="programas_complementarios_si" name="asistiendo_programas_complementarios" value="Si">
    <label for="programas_complementarios_cuales">¿Cuáles?</label>
    <input type="text" id="programas_complementarios_cuales" name="programas_complementarios_cuales">
</div>
<!-- Nombre y firma de quien diligencia -->
<div class="form-section">
    <h2>Nombre y firma de quien diligencia</h2>
    
    <label for="nombre_diligencia">Nombre de quien diligencia:</label>
    <input type="text" id="nombre_diligencia" name="nombre_diligencia">
    
    
</div>

<!-- Nombre y firma del acudiente -->
<div class="form-section">
    <h2>Nombre y firma del acudiente</h2>
    
    <label for="nombre_acudiente">Nombre del acudiente:</label>
    <input type="text" id="nombre_acudiente" name="nombre_acudiente">
   
</div>


        <!-- Botón de Envío -->
        <input class="button" type="submit" name="enviar" >
        <a href="pdf.php?idEst=<?php echo$datos['idEst'];?>" class="button2">salir</a>
        
    </form>
</body>
</html>
