<?php

require 'vendor/autoload.php';

include_once("../conexion/conectar.php");
use Dompdf\Dompdf;
use Dompdf\Options;
$cedula = $_REQUEST['idEst'];
$options = new Options();
$options->set('isPhpEnabled', true);
$sql2 = $link->query("SELECT e.idTipo AS identificacion, T.descTipo FROM estudiantess e
    INNER JOIN tipos_id T ON e.idTipo = T.idTipo
    WHERE e.idEst = '$cedula'");

$sql=$link->query("SELECT * FROM anexo1 WHERE idEst='$cedula'");
$sql3=$link->query("SELECT * FROM anexo2 WHERE idEst='$cedula'");

      

$dompdf = new Dompdf($options);
$html = '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <title>Document</title>
</head>
<style>
   
    .subtitulos {
        font-size: 15px;
        margin-bottom: 0px;
        margin-left: 15px;
    }

    table tr>td,
    table tr,
    th {
        font-size: 13px;
        border: 1px solid #000;
        /*Lo agrege*/
    }


    table {
        border-collapse: collapse;
        width: 100%;
        table-layout: fixed;
        border-bottom: hidden;
    }

    

    .border-tabla-abajo {
        border-bottom: 1px solid;

    }

    .texto-centrado {
        text-align: center;

    }

    .texto-izquierda {
        text-align: left;

    }

    .width-gris {
        width: 65px;

    }


    .color-gris {
        background-color: #F2F2F2;

    }

    .padding {
        padding: 4px;
        padding-left: 7px;
    }

    .aliniar-vertical-top {
        vertical-align: top;
    }

    .tabla-logo {
        margin-bottom: 15px;
    }

    .tabla-logo, 
    .tabla-logo th, 
    .tabla-logo td {
        border: hidden;
    }

    @page{
        margin-top: 60px; /* create space for header */
        margin-bottom: 70px; /* create space for footer */

    }
    header{
        position: fixed;
        right: 0;
        left: 8%;
        height: 90px;
        margin-top: -90px;
        margin-bottom: 0px;
    }
    footer{
        position: fixed;
        left: 8%;
        bottom: 0;
        height: 50px;
        margin-bottom: -40px;
    }
</style>


<body style="margin: inherit;">
    <header>
        <table class="tabla-logo">
            <tr>
                <td style="width: 75%;padding-right: 0px;">
                    <div style="border:1px solid; border-right: none;">
                        <div class="imgLogo" />
                    </div>
                </td>
                <td style="padding-left: 0px;">
                    <div style="border: 1px solid;text-align: center;display: table;">
                        <div style="display: table-cell;vertical-align: middle;padding: 1em;">
                            <div>
                                <strong>PIAR</strong>
                            </div>
                            <div>
                                <strong>Decreto</strong>
                            </div>
                            <div>
                                <strong>1421/2017</strong>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </header>
    <footer>
        <div style="width: 90%;">
            V15. 08/2020 <br>
            <div class="texto-centrado">
                Ministerio de Educación Nacional – Viceministerio de Educación Preescolar, Básica y Media – Decreto 1421 de 2017
            </div>
        </div>
    </footer>
    <main style="margin-top:5px;">
        <div style="font-family: Arial, Helvetica, sans-serif; padding: 10px;min-width:600px; max-width:600px;">
            


            <table class="border-tabla-abajo" style="border-collapse: collapse; width:100%; table-layout: fixed;">
                <thead>
                    <tr>
                        <th style="color: white;background-color: #0B457F;padding: 5px;" colspan="2">PLAN INDIVIDUAL DE
                            AJUSTES RAZONABLES</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="texto-izquierda padding color-gris">Fecha y Lugar de Diligenciamiento</th>';
                         while ($anexo1 = $sql->fetch_array()) {
                            $html .= '<td class="padding texto-centrado"><span style="color: #BABABA;">' . $anexo1['fechaDiligenciamiento'] ." ". $anexo1['lugarDiligenciamiento']. '</span></td> </tr>
                       
                    
                    <tr>
                        <th class="texto-izquierda padding color-gris">Nombre y rol de la Persona que diligencia</th>';
                       


                            $html .= '<td class="padding texto-centrado">'.$anexo1['nombrePersonaDiligencia']." ".  $anexo1['rolPersonaDiligencia'].'</td>
                    </tr>
                    <tr>
                        <th class="texto-izquierda padding color-gris">Institución Educativa</th>
                        <td class="padding texto-centrado">'.  $anexo1['institucionEducativa'].'</td>
                    </tr>
                </tbody>
            </table>

            <!--------------------------------------------------------------------información general del estudiante--------------------------------------------------------------------------------------------------------------------->

            <h2 class="subtitulos"> 1. Información general del estudiante</h2>
            <table>
                <tbody>
                    <tr>
                        <td class="texto-centrado color-gris">Nombres</td>
                        <td class="texto-centrado color-gris"> Apellidos</td>
                        <td class="texto-centrado color-gris">Tipo de Identificación</td>
                        <td class="texto-centrado color-gris">No. de Identificación</td>
                    </tr>
                    <tr>
                        <td class="padding texto-centrado">'.  $anexo1['nombresEstudiante'].'</td>
                        <td class="padding texto-centrado">'.  $anexo1['apellidosEstudiante'].'</td>';
                        while ($idTipo = $sql2->fetch_array()) {
                        
                       $html.= '<td class="padding"> '.  $idTipo['descTipo'].'
                        </td>';
                    }
               
                 $html.='<td class="padding texto-centrado">'.  $anexo1['idEst'].'</td>

                    </tr>
                </tbody>
            </table>

            <table>
                <tbody>
                    <tr>
                        <td style="width: 27%;" class="texto-izquierda padding color-gris">Lugar de Nacimiento</td>
                        <td style="width: 9%;" class="padding color-gris">Edad</td>
                        <td class="texto-izquierda padding color-gris">Fecha de Nacimiento</td>
                        <td class="texto-izquierda padding color-gris">Grado actual o al que ingresa:</td>
                        <td style="font-size: 9px;" class="texto-izquierda padding color-gris">El año anterior estuvo
                            vinculado(a) al Sistema Educativo</td>
                    </tr>
                    <tr>
                        <td class="texto-centrado padding">'.  $anexo1['lugarNacimiento'].'</td>
                        <td class="texto-centrado padding">'.  $anexo1['edad'].'</td>
                        <td class="texto-centrado padding">'.  $anexo1['fechaNacimiento'].'</td>
                        <td class="texto-centrado padding">'.  $anexo1['gradoActual'].'</td>
                        <td class="padding"> '.  $anexo1['estuvoVinculadoEducacionAnterior'].'</td>
                    </tr>
                </tbody>
            </table>

            <table>
                <tbody>
                    <tr>
                        <td class="texto-izquierda padding color-gris">Departamento donde vive</td>
                        <td class="texto-centrado padding">'. $anexo1['departamentoVive'].'</td>
                        <td class="padding color-gris">Municipio</td>
                        <td class="texto-centrado padding">'.  $anexo1['municipio'].'</td>
                        <td class="padding color-gris">Barrio/<br>vereda</td>
                        <td class="texto-centrado padding">'.  $anexo1['barrioVereda'].'</td>
                    </tr>

                    <tr>
                        <td class="texto-izquierda padding color-gris">Dirección de viviendaa</td>
                        <td class="padding">'.  $anexo1['direccionVivienda'].'</td>
                        <td class="padding color-gris">Teléfono </td>
                        <td class="padding">'.  $anexo1['telefono'].'</td>
                        <td class="padding color-gris">Correo electrónico</td>
                        <td class="padding">'.  $anexo1['correoElectronico'].'</td>
                    </tr>
                </tbody>
            </table>

            <table>
                <tbody>
                    <tr>
                        <td class="texto-izquierda padding color-gris aliniar-vertical-top" rowspan="2">¿Se reconoce como víctima del conflicto
                            armado? </td>
                        <td class="padding" rowspan="2">'.  $anexo1['victimaConflictoArmado'].'<br> (Cuenta con el respectivo registro?
                            <br> '.  $anexo1['registroVictima'].')</td>
                        <td class="texto-izquierda padding color-gris">¿Está en algún Centro de <br> Protección?</td>
                        <td class="texto-izquierda padding color-gris">¿Se reconoce o pertenece a un grupo <br> étnico?</td>
                    </tr>

                    <tr>
                        <td class="texto-izquierda padding">'.  $anexo1['centroProteccion'].'</td>
                        <td class="texto-izquierda padding">'.  $anexo1['reconocimientoGrupoEtnico']."¿cual?: ". $anexo1['grupoEtnico']. '</td>
                    </tr>

                </tbody>
            </table>


            <table class="border-tabla-abajo">
                <tbody>
                    <tr>
                        <td style="width: 25%;" class="padding aliniar-vertical-top color-gris" rowspan="12">Descripción general del estudiante
                            con énfasis
                            en sus capacidades, gustos e intereses o aspectos que le desagradan, expectativas del estudiante
                            y
                            la familia, acompañamiento familiar y redes de apoyo con los que se cuenta.
                        </td>
                        <td class="padding color-gris">Capacidades</td>
                    </tr>
                    <tr>
                        <td class="padding">'.  $anexo1['capacidades'].'</td>

                       
                    </tr>
                    <tr>
                        <td class="padding color-gris">Gustos e intereses</td>
                    </tr>
                    <tr>
                        <td class="padding">'.  $anexo1['gustosIntereses'].'</td>
                    </tr>
                    <tr>
                        <td class="padding color-gris">Expectativas del estudiante</td>
                    </tr>
                    <tr>
                        <td class="padding">'.  $anexo1['expectativasEstudiante'].'</td>
                    </tr>
                    <tr>
                        <td class="padding color-gris">Expectativas de la familia</td>
                    </tr>
                    <tr>
                        <td class="padding">'.  $anexo1['expectativasFamilia'].'</td>
                    </tr>
                    <tr>
                        <td class="padding color-gris">Redes de apoyo</td>
                    </tr>
                    <tr>
                        <td class="padding">'.  $anexo1['redesApoyo'].'</td>
                    </tr>
                    <tr>
                        <td class="padding color-gris">Otras</td>
                    </tr>
                    <tr>
                        <td class="padding">'.  $anexo1['otras'].'</td>
                    </tr>
                </tbody>
            </table>

            <!--------------------------------------------------------------------------------Entorno Salud------------------------------------------------------------------------------------------------------------------>
            <h2 class="subtitulos"> 2. Entorno Salud</h2>
            <table>
                <tbody>
                    <tr>
                        <td class="padding color-gris ">Afiliación al sistema de salud</td>
                        <td class="padding">'.  $anexo1['afiliacionSalud'].'</td>
                        <td class="texto-izquierda padding color-gris">Contributivo</td>
                        <td style="width:2%" class="padding"></td>
                        <td class="padding color-gris">Subsidiado</td>
                        <td style="width:2%" class="padding"></td>
                        <td style="width:9%" class="padding color-gris">Cuál</td>
                        <td class="padding">'.  $anexo1['sistemaSalud'].'</td>
                    </tr>
                    <tr>
                        <td class="padding color-gris" colspan="2">Lugar donde le atienden en caso de emergencia
                        </td>
                        <td class="padding texto-centrado" colspan="6">'.  $anexo1['lugarAtencionEmergencia'].'</td>
                    </tr>


                    
                </tbody>
            </table>
            <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
            <table>
                <tbody>
                    <tr>
                        <td style="width: 20%;" class="padding texto-izquierda vertical-align color-gris">Cuenta con diagnóstico médico</td>
                        <td class="padding texto-izquierda vertical-align">'.  $anexo1['diagnosticoMedico'].'</td>
                        <td class="padding texto-izquierda vertical-align color-gris">¿Cuál?</td>
                        <td class="padding" colspan="3">'. $anexo1['cualDiagnostico'].'</td>
                    </tr>
                    <tr>
                        <td class=" padding texto-izquierda aliniar-vertical-top color-gris " rowspan="3">Cuenta con
                            atención médica </td>
                        <td class="padding" rowspan="3">'. $anexo1['atencionMedica'].'</td>
                        <td class="padding color-gris">¿Cuál?</td>
                        <td class="padding">'. $anexo1['cualAtencionMedica'].'</td>
                        <td class="padding color-gris">Frecuencia</td>
                        <td class="padding">'. $anexo1['frecuenciaAtencionMedica'].'</td>
                    </tr>
                    <tr>
                        <td class="padding color-gris">¿Cuál?</td>
                        <td class="padding"></td>
                        <td class="padding color-gris">Frecuencia</td>
                        <td class="padding"></td>

                    </tr>

                    <tr>
                        <td class="padding color-gris">¿Cuál?</td>
                        <td class="padding" ></td>
                        <td class="padding color-gris">Frecuencia</td>
                        <td class="padding"></td>
                    </tr>

                    <tr>
                        <td class=" texto-izquierda padding color-gris " rowspan="3">Cuenta con intervención o
                            tratamiento terapeútico integral</td>
                        <td class="padding" rowspan="3">'.  $anexo1['intervencionTerapeutica'].'</td>
                        <td class="padding color-gris">¿Cuál?</td>
                        <td class="padding">'.  $anexo1['cualIntervencionTerapeutica'].'</td>
                        <td class="padding color-gris">Frecuencia</td>
                        <td class="padding">'.  $anexo1['frecuenciaIntervencionTerapeutica'].'</td>
                    </tr>

                    <tr>
                        <td class="padding color-gris">¿Cuál?</td>
                        <td class="padding"></td>
                        <td class="padding color-gris">Frecuencia</td>
                        <td class="padding"></td>
                    </tr>

                    <tr>

                        <td class="padding color-gris">¿Cuál?</td>
                        <td class="padding"></td>
                        <td class="padding color-gris">Frecuencia</td>
                        <td class="padding"></td>
                    </tr>

                </tbody>
            </table>

            <table>
                <tbody>
                    <tr>
                        <td style="width: 30%;" class="texto-izquierda padding color-gris">¿Consume medicamentos? </td>
                        <td class="padding text-align color-gris">¿Cuáles? </td>
                        <td class="texto-izquierda padding color-gris" rowspan="3">Frecuencia y horario </td>
                        <td class="padding">'.  $anexo1['medicamentosFrecuencia'].'</td>

                    </tr>

                    <tr>
                        <td class="padding" rowspan="2">'.  $anexo1['consumeMedicamentos'].'</td>
                        <td class="padding" rowspan="2">'.  $anexo1['cualesMedicamentos'].'</td>
                        <td class="padding"></td>
                    </tr>

                    <tr>
                        <td class="padding"></td>
                    </tr>
                </tbody>
            </table>

            <table class="border-tabla-abajo">
                <tbody>
                    <tr>
                        <td style="width: 40%;" class="padding texto-izquierda aliniar-vertical-top color-gris">¿Cuenta con apoyos o ayudas
                            técnicas o tecnológicas para favorecer su movilidad, comunicación e independencia?</td>
                        <td style="width: 10%;" class="padding">'.  $anexo1['apoyosTecnicos'].'</td>
                        <td style="width: 13%;" class="padding color-gris"><b>¿Cuáles?</b></td>
                        <td class="texto-centrado padding"> '.  $anexo1['cualesApoyosTecnicos'].'</td>
                    </tr>
                </tbody>
            </table>


            <!------------------------------------------------------------------------------------------------Entorno Hogar--------------------------------------------------------------------------------------------------------------->


            <h2 class="subtitulos">3. Entorno Hogar</h2>
            <table>
                <tbody>
                    <tr>
                        <td class="texto-izquierda padding color-gris">Nombre de la madre</td>
                        <td class="padding ">'.  $anexo1['nombreMadre'].'</td>
                        <td class="texto-izquierda padding color-gris">Nombre del padre</td>
                        <td class="texto-centrado padding" colspan="2">'.  $anexo1['nombrePadre'].'</td>
                    </tr>
                    <tr>
                        <td class="texto-izquierda padding color-gris">Ocupación de la madre</td>
                        <td class="padding">'.  $anexo1['ocupacionMadre'].'</td>
                        <td class="texto-izquierda padding color-gris">Ocupación del padre</td>
                        <td class="texto-centrado padding" colspan="2">'.  $anexo1['ocupacionPadre'].'</td>
                    </tr>
                    <tr>
                        <td class="texto-izquierda padding color-gris">Nivel educativo alcanzado</td>
                        <td class="padding aliniar-vertical-top" colspan="">
                            <span style="color: #BABABA;font-size: 9px;">'.  $anexo1['nivelEducativoMadre'].'</span></td>
                        <td class="texto-izquierda padding color-gris ">Nivel educativo alcanzado</td>
                        <td class="padding aliniar-vertical-top" colspan="2">
                            <span style="color: #BABABA;font-size: 9px;">'.  $anexo1['nivelEducativoPadre'].'</span></td>
                    </tr>

                    <tr>
                        <td class="texto-izquierda padding color-gris ">Nombre Cuidador</td>
                        <td class="padding">'.  $anexo1['nombreCuidador'].'</td>
                        <td class="texto-izquierda padding color-gris ">Nivel educativo cuidador</td>
                        <td class="padding color-gris ">Teléfono</td>
                        <td class="padding">'.  $anexo1['telefonoCuidador'].'</td>
                    </tr>

                    <tr>
                        <td class="texto-izquierda padding color-gris">Parentesco con el estudiante:</td>
                        <td class="texto-centrado padding">'.  $anexo1['parentescoEstudianteCuidador'].'</td>
                        <td class="padding aliniar-vertical-top">
                            <span style="color: #BABABA;font-size: 9px;">'.  $anexo1['nivelEducativoCuidador'].'</span></td>
                        <td class="padding color-gris"> Correo electrónico</td>
                        <td class="texto-centrado padding ">'.  $anexo1['correoElectronicoCuidador'].'</td>
                    </tr>
                </tbody>
            </table>

            <table class="border-tabla-abajo">
                <tbody>

                    <tr>
                        <td class="texto-izquierda aliniar-vertical-top padding color-gris" rowspan="2"> No.Hermanos</td>
                        <td style="width: 5%;" class="padding" rowspan="2">'.  $anexo1['numHermanos'].'</td>
                        <td class="texto-izquierda aliniar-vertical-top padding color-gris " rowspan="2"> Lugar que ocupa
                        </td>
                        <td style="width: 10%;" class="padding" rowspan="2">'.  $anexo1['lugarOcupaHermanos'].'</td>
                        <td class="texto-izquierda padding color-gris  "> ¿Quiénes apoyan la crianza del estudiante? </td>
                        <td class="texto-izquierda padding color-gris ">Personas con quien vive</td>

                    </tr>

                    <tr>
                        <td class="padding">'.  $anexo1['apoyoCrianzaEstudiante'].'<br></td>
                        <td class="padding">'.  $anexo1['personasViveEstudiante'].'</td>
                    </tr>
                </tbody>
            </table>

            <!----------------------------------------------------------------------------------------Entorno Educativo------------------------------------------------------------------------------------------------------------>



            <h2 class="subtitulos">4. Entorno Educativo</h2>

            <table>
                <tbody>
                    <tr>
                        <td class="padding texto-izquierda color-gris "> ¿Ha estado vinculado en otra institución
                            educativa, fundación o bajo otra modalidad de educación?</td>
                        <td class="padding aliniar-vertical-top">'.  $anexo1['otraInstitucion'].' ¿porque?:  ' .$anexo1['motivo'].' </td>
                       
                    </tr>
                </tbody>
            </table>

            <table>
                <tbody>
                    <tr>
                        <td style="width: 15%;" class="padding texto-izquierda color-gris" rowspan="2">Ultimo grado cursado</td>
                        <td style="width: 3%;" class="padding texto-centrado" rowspan="2">'.  $anexo1['ultimogradoCursado'].'</td>
                        <td style="width: 20%;" class="padding texto-centrado color-gris">Estado:</td>
                        <td class="padding texto-izquierda aliniar-vertical-top" rowspan="2">Observaciones:<span
                                style="color: #BABABA; font-size: 12px;">
                                '.  $anexo1['observaciones'].'</span></td>
                    </tr>
                    <tr class="padding">
                        <td>'.  $anexo1['estadoUltimoGrado'].'</td>
                    </tr>
                    
                </tbody>
            </table>
            <table>
                <tbody>
                    <tr>
                        <td style="width: 80%;" class="padding texto-izquierda color-gris" colspan="3">¿Se recibe informe pedagógico cualitativo o
                            certificado que describa el proceso de desarrollo y aprendizaje del estudiante y/o PIAR?</td>
                        <td class="padding aliniar-vertical-top">'.  $anexo1['informePedagogico'].'</td>
                    </tr>
                </tbody>
            </table>


            <table class="border-tabla-abajo">
                <tbody>
                    <tr>
                        <td style="width: 24%;" class="padding texto-izquierda color-gris aliniar-vertical-top" rowspan="2"> ¿De qué institución o modalidad proviene
                            el informe? </td>
                        <td class="padding" rowspan="2">'.  $anexo1['institucionInforme'].'</td>
                        <td style="width: 50%;" class="padding texto-izquierda color-gris"> ¿Está asistiendo en la actualidad a programas
                            complementarios?</td>

                    </tr>
                    <tr>
                        <td class="padding texto-izquierda aliniar-vertical-top">'.  $anexo1['programasComplementarios'].'
                        </td>
                    </tr>
                </tbody>
            </table><br><br>



            <!----------------------------------------------------------------------------------------firma------------------------------------------------------------------------------------------------------------>

            <table class="border-tabla-abajo">
                <tr>
                    <td class="padding texto-izquierda color-gris"><b>Nombre y firma de quien diligencia</b></td>
                    <td class="padding texto-izquierda color-gris"><b>Nombre y firma acudiente</b></td>
                </tr>
                <tr>
                    <td class="padding"><br>'.  $anexo1['nombreFirmaDiligencia'].'<br><br></td>
                    <td class="padding"><br>'.  $anexo1['firmaAcudiente'].'<br><br></td>
                </tr>

            </table><br><br>';}
            $html.='
            
    </main>
    <!-- <footer>
        <div class="footer">
            Ministerio de Educación Nacional – Viceministerio de Educación Preescolar, Básica y Media – Decreto 1421 de 2017
        </div>
    </footer> -->

</body>

</html>';

$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();

$dompdf->stream("documento.pdf", array("Attachment" => false));