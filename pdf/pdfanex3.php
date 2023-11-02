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

$sql4=$link->query("SELECT * FROM anexo3 WHERE idEst='$cedula'");
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
        <table class="border-tabla-abajo">
        <tr>
            <th style="color: white;background-color: #0B457F;padding: 5px;" colspan="2">ACTA DE ACUERDO</th>
        </tr>

        <tr>
            <th class="padding texto-izquierda color-gris">Fecha y Lugar de Diligenciamiento</th>';
            while ($anexo3 = $sql4->fetch_array()) {
$html.='
            <td class="padding texto-centrado"><span style="color: #BABABA;">' . $anexo3['lugar_diligenciamiento'] ."  " .$anexo3['fecha_diligenciamiento']. '</span></td>
        </tr>

        <tr>
            <th class="padding texto-izquierda color-gris"> Nombre y rol de la Persona que diligencia</th>
            <td class="padding texto-centrado">' . $anexo3['nombre_diligencia'] ."  " .$anexo3['rol_diligencia']. '</td>
        </tr>

        <tr>
            <th class="padding texto-izquierda color-gris">Institución Educativa</th>
            <td class="padding texto-centrado">' . $anexo3['institucion_educativa'] .'</td>
        </tr>

        <tr>
            <th class="padding texto-izquierda color-gris"> Sede</th>
            <td class="padding texto-centrado">' . $anexo3['sede'] .'</td>
        </tr>

    </table><br><br>
    <!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <table class="border-tabla-abajo">
        <tr>
            <th class="texto-izquierda padding color-gris">Nombre </th>
            <td style="width: 40%;" class="texto-izquierda padding">' . $anexo3['nombre_estudiante'] .'</td>
            <th class="texto-izquierda padding color-gris">Edad</th>
            <td class="texto-izquierda padding ">' . $anexo3['edad_estudiante'] .'</td>
            <th class="texto-izquierda padding color-gris">Grado</th>
            <td class="texto-izquierda padding">' . $anexo3['grado_estudiante'] .'</td>
        </tr>
    </table><br>
    <!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <p>Según el Decreto 1421 de 2017 la educación inclusiva es un proceso permanente que reconoce, valora y responde
        a la diversidad de características, intereses, posibilidades y expectativas de los estudiantes para promover
        su desarrollo, aprendizaje y participación, en un ambiente de aprendizaje común, sin discriminación o
        exclusión.<br><br>
        La inclusión solo es posible cuando se unen los esfuerzos del colegio, el estudiante, docentes, directivos
        docentes y familias. De ahí la importancia de formalizar con las firmas, la presente Acta de Acuerdo.
        <br><br>
        <b> El Establecimiento Educativo</b> ha realizado la valoración pedagógica y definido los ajustes
        razonables que facilitarán al estudiante su proceso educativo.<br><br>
        <b>La Familia se compromete</b> a cumplir y firmar los compromisos señalados en el PIAR y en las actas de
        acuerdo, para fortalecer los procesos escolares del estudiante y en particular a:</p>


    <!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <table class="border-tabla-abajo"> <br>
        <tbody>
            <tr>
                <td class=" padding aliniar-vertical-top texto-izquierda color-gris">' . $anexo3['apoyo_requerido'] .'
                        <br><br><br><br><br><br><br><br><br><br><br>
                </td>
            </tr>
        </tbody>
    </table> <br><br>
    <!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <p>Y en casa apoyará con las siguientes actividades:</p>
    <table class="border-tabla-abajo">
        <tbody>
            <tr>
                <th class="padding texto-centrado color-gris aliniar-vertical-top"> Nombre de la Actividad</th>
                <th class="padding texto-centrado color-gris aliniar-vertical-top"> Descripción de la estrategia </th>
                <th class="padding texto-centrado color-gris aliniar-vertical-top"> Frecuencia: D Diaria, S Semanal, P
                    Permanente <br> D __ S__ P__</th>
            </tr>

            <tr>
                <td class="padding texto-centrado">' . $anexo3['nombre_actividad'] .' <br><br></td>
                <td class="padding texto-centrado">' . $anexo3['descripcion_estrategia'] .' </td>
                <td class="padding texto-centrado">' . $anexo3['frecuencia'] .' </td>
            </tr>


            

        </tbody>
    </table><br><br>
    <!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <h2 class="subtitulos">Firma de los Actores comprometidos:</h2>
    <table class="border-tabla-abajo">
        <tr>
            <td class="padding texto-centrado">' . $anexo3['firma_estudiante'] .' <br><br></td>
            <td class="padding texto-centrado">' . $anexo3['firma_acudiente'] .'</td>
        </tr>
        <tr>
            <td class="padding texto-izquierda color-gris">Estudiante</td>
            <td class="padding texto-izquierda color-gris">Acudiente /familia</td>
        </tr>

        <tr>
            <td class="padding texto-centrado"> ' . $anexo3['Docente'] .'<br><br></td>
            <td class="padding texto-centrado">' . $anexo3['Docente'] .'</td>
        </tr>

        <tr>
            <td class="padding texto-izquierda color-gris">Docentes</td>
            <td class="padding texto-izquierda color-gris"> Docentes</td>
        </tr>

        <tr>
            <td class=" padding texto-centrado">' . $anexo3['directivoDocente'] .' <br><br></td>
            <td class="padding texto-centrado">' . $anexo3['directivoDocente'] .'</td>';}
            $html.='
        </tr>

        <tr>
            <td class=" padding texto-izquierda color-gris"> Directivo docente </td>
            <td class=" padding texto-izquierda color-gris"> Directivo docente</td>
        </tr>

    </table>

    <br><br>

</div>
</main>
<!-- <footer>
<div class="footer">
    Ministerio de Educación Nacional – Viceministerio de Educación Preescolar, Básica y Media – Decreto 1421 de 2017
</div>
</footer> -->

</body>

</html>


            ';

$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();

$dompdf->stream("documento.pdf", array("Attachment" => false));