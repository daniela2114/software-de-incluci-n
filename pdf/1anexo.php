<?php
include("../conexion/conectar.php");

if (isset($_POST['enviar'])) {
    if (empty($_POST['fecha']) || empty($_POST['lugar_diligenciamiento']) || empty($_POST['nombre']) || empty($_POST['rol']) || empty($_POST['institucion_educativa'])) {
        echo 'Por favor complete todos los campos obligatorios.';
    } else {
      $cedula=$_POST['idEst2'];
        $fecha = $_POST["fecha"];
        $lugar_diligenciamiento = $_POST["lugar_diligenciamiento"];
        $nombre = $_POST["nombre"];
        $rol = $_POST["rol"];
        $institucion_educativa = $_POST["institucion_educativa"];
        $nombres = $_POST["nombres"];
        $apellidos = $_POST["apellidos"];
        $tipo_identificacion = $_POST["identificacion"];
        $otro_tipo_identificacion = $_POST["otro_tipo_identificacion"];
        $lugar_nacimiento = $_POST["lugar_nacimiento"];
        $edad = $_POST["edad"];
        $fecha_nacimiento = $_POST["fecha_nacimiento"];
        $grado_actual = $_POST["grado_actual"];
        $vinculado_sistema = isset($_POST["vinculado_sistema"]) ? $_POST["vinculado_sistema"] : "No";
        $departamento = $_POST["departamento"];
        $municipio = $_POST["municipio"];
        $barrio_vereda = $_POST["barrio_vereda"];
        $direccion = $_POST["direccion"];
        $telefono = $_POST["telefono"];
        $correo = $_POST["correo"];
        $victima_conflicto = isset($_POST["victima_conflicto"]) ? $_POST["victima_conflicto"] : "No";
        $registro_victima = isset($_POST["registro_victima"]) ? $_POST["registro_victima"] : "No";
        $centro_proteccion = isset($_POST["centro_proteccion"]) ? $_POST["centro_proteccion"] : "No";
        $grupo_etnico = isset($_POST["grupo_etnico"]) ? $_POST["grupo_etnico"] : "No";
        $cual_grupo_etnico = ($_POST["cual_grupo_etnico"] !== "") ? $_POST["cual_grupo_etnico"] : "No";
        $capacidades = $_POST["capacidades"];
        $gustos_intereses = $_POST["gustos_intereses"];
        $expectativas_estudiante = $_POST["expectativas_estudiante"];
        $expectativas_familia = $_POST["expectativas_familia"];
        $redes_apoyo = $_POST["redes_apoyo"];
        $otras = $_POST["otras"];
        $afiliacion_salud = isset($_POST['afiliacion_salud']) ? $_POST['afiliacion_salud'] : 'No';
        $tipo_afiliacion = $_POST['tipo_afiliacion'];
        $lugar_emergencia = $_POST['lugar_emergencia'];
        $diagnostico_medico = isset($_POST['diagnostico_medico']) ? $_POST['diagnostico_medico'] : 'No';
        $diagnostico_cual = $_POST['diagnostico_cual'];
        $atencion_medica = isset($_POST['atencion_medica']) ? $_POST['atencion_medica'] : 'No';
        $atencion_cual = $_POST['atencion_cual'];
        $atencion_frecuencia = $_POST['atencion_frecuencia'];
        $intervencion_terapeutica = isset($_POST['intervencion_terapeutica']) ? $_POST['intervencion_terapeutica'] : 'No';
        $intervencion_cual = $_POST['intervencion_cual'];
        $intervencion_frecuencia = $_POST['intervencion_frecuencia'];
        $consume_medicamentos = isset($_POST['consume_medicamentos']) ? $_POST['consume_medicamentos'] : 'No';
        $medicamentos_cuales = $_POST['medicamentos_cuales'];
        $medicamentos_frecuencia = $_POST['medicamentos_frecuencia'];
        $ayudas_tecnicas = isset($_POST['ayudas_tecnicas']) ? $_POST['ayudas_tecnicas'] : 'No';
        $ayudas_tecnicas_cuales = $_POST['ayudas_tecnicas_cuales'];
        $nombre_madre = $_POST['nombre_madre'];
        $nombre_padre = $_POST['nombre_padre'];
        $ocupacion_madre = $_POST['ocupacion_madre'];
        $ocupacion_padre = $_POST['ocupacion_padre'];
        $nivel_educativo_madre = $_POST['nivel_educativo_madre'];
        $nivel_educativo_padre = $_POST['nivel_educativo_padre'];
        $nombre_cuidador = $_POST['nombre_cuidador'];
        $nivel_educativo_cuidador = $_POST['nivel_educativo_cuidador'];
        $telefono_cuidador = $_POST['telefono_cuidador'];
        $parentesco_estudiante = $_POST['parentesco_estudiante'];
        $correo_cuidador = $_POST['correo_cuidador'];
        $hermanos_numero = $_POST['hermanos_numero'];
        $lugar_ocupa = $_POST['lugar_ocupa'];
        $apoyo_crianza = $_POST['apoyo_crianza'];
        $personas_vive_con = $_POST['personas_vive_con'];
        $vinculado_otra_institucion = isset($_POST['vinculado_otra_institucion']) ? $_POST['vinculado_otra_institucion'] : "";
        $motivo_vinculacion_otra = isset($_POST['motivo_vinculacion_otra']) ? $_POST['motivo_vinculacion_otra'] : "";

$ultimo_grado_cursado=$_POST['ultimo_grado_aprobado'];
if (isset($_POST['ultimo_grado_cursado'])) {
  $ultimo_grado_aprobado = $_POST['ultimo_grado_cursado'];
} else {
  $ultimo_grado_aprobado = ""; // En caso de que no se haya marcado ninguna opción
}
      
        $observaciones_cambio_modalidad = isset($_POST['observaciones_cambio_modalidad']) ? $_POST['observaciones_cambio_modalidad'] : "";
        $informe_pedagogico = isset($_POST['informe_pedagogico']) ? $_POST['informe_pedagogico'] : "";
        $informe_institucion = isset($_POST['informe_institucion']) ? $_POST['informe_institucion'] : "";
        $asistiendo_programas_complementarios = isset($_POST['asistiendo_programas_complementarios']) ? $_POST['asistiendo_programas_complementarios'] : "";
        $programas_complementarios_cuales = isset($_POST['programas_complementarios_cuales']) ? $_POST['programas_complementarios_cuales'] : "";
        $nombre_diligencia = $_POST['nombre_diligencia'];
        $nombre_acudiente = $_POST['nombre_acudiente'];
        $idEst=$_POST['idEst'];
        $sql3 = $link->query("INSERT INTO anexo1 (fechaDiligenciamiento, lugarDiligenciamiento, nombrePersonaDiligencia, rolPersonaDiligencia, institucionEducativa, nombresEstudiante, apellidosEstudiante,tipoIdentificacion, otro_tipo_identificacion, lugarNacimiento, edad, fechaNacimiento, gradoActual, estuvoVinculadoEducacionAnterior, departamentoVive, municipio, barrioVereda, direccionVivienda, telefono, correoElectronico, victimaConflictoArmado, registroVictima, centroProteccion, reconocimientoGrupoEtnico, grupoEtnico,capacidades, gustosIntereses, expectativasEstudiante, expectativasFamilia, redesApoyo, otras, afiliacionSalud, sistemaSalud, lugarAtencionEmergencia, diagnosticoMedico, cualDiagnostico, atencionMedica, cualAtencionMedica, frecuenciaAtencionMedica, intervencionTerapeutica, cualIntervencionTerapeutica, frecuenciaIntervencionTerapeutica,consumeMedicamentos,cualesMedicamentos ,medicamentosFrecuencia,apoyosTecnicos, cualesApoyosTecnicos, nombreMadre, nombrePadre, ocupacionMadre, ocupacionPadre, nivelEducativoMadre, nivelEducativoPadre, nombreCuidador, nivelEducativoCuidador, telefonoCuidador, parentescoEstudianteCuidador, correoElectronicoCuidador, numHermanos, lugarOcupaHermanos, apoyoCrianzaEstudiante, personasViveEstudiante, estadoUltimoGrado,ultimogradoCursado, observaciones, informePedagogico, institucionInforme, programasComplementarios, nombreFirmaDiligencia, firmaAcudiente,idEst,otraInstitucion,motivo)
        VALUES ('$fecha', '$lugar_diligenciamiento', '$nombre', '$rol', '$institucion_educativa', '$nombres', '$apellidos', '$tipo_identificacion', '$otro_tipo_identificacion', '$lugar_nacimiento', $edad, '$fecha_nacimiento', '$grado_actual', '$vinculado_sistema', '$departamento', '$municipio', '$barrio_vereda', '$direccion', '$telefono', '$correo', '$victima_conflicto', '$registro_victima', '$centro_proteccion', '$grupo_etnico', '$cual_grupo_etnico', '$capacidades', '$gustos_intereses', '$expectativas_estudiante', '$expectativas_familia', '$redes_apoyo', '$otras', '$afiliacion_salud', '$tipo_afiliacion', '$lugar_emergencia', '$diagnostico_medico', '$diagnostico_cual', '$atencion_medica', '$atencion_cual', '$atencion_frecuencia', '$intervencion_terapeutica', '$intervencion_cual', '$intervencion_frecuencia', '$consume_medicamentos', '$medicamentos_cuales', '$medicamentos_frecuencia', '$ayudas_tecnicas', '$ayudas_tecnicas_cuales', '$nombre_madre', '$nombre_padre', '$ocupacion_madre', '$ocupacion_padre', '$nivel_educativo_madre', '$nivel_educativo_padre', '$nombre_cuidador', '$nivel_educativo_cuidador', '$telefono_cuidador', '$parentesco_estudiante', '$correo_cuidador', $hermanos_numero, '$lugar_ocupa', '$apoyo_crianza', '$personas_vive_con','$ultimo_grado_aprobado','$ultimo_grado_cursado','$observaciones_cambio_modalidad', '$informe_pedagogico', '$informe_institucion', '$programas_complementarios_cuales', '$nombre_diligencia', '$nombre_acudiente','$idEst','$vinculado_otra_institucion ',' $motivo_vinculacion_otra ')");
        
        if ($sql3>  0) {
          header("Location: pdf.php?idEst=$cedula");

          }else{


            echo"<h1>Ha ocurrido un error</h1>";
          }
        } 
    }

?>
