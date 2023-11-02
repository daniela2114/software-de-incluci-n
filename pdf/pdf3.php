<?php
include_once("../conexion/conectar.php");

require 'vendor/autoload.php';
$cedula = $_REQUEST['idEst'];
$sql3 = $link->query("SELECT * FROM anexo2 WHERE idEst='$cedula'");

use Dompdf\Dompdf;
use Dompdf\Options;
$options = new Options();
$options->set('isPhpEnabled', true);
$dompdf = new Dompdf($options);

// Página Horizontal (primera página)
$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
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

    @page {
        margin-top: 60px; /* create space for header */
        margin-bottom: 70px; /* create space for footer */
    }

    header {
        position: fixed;
        right: 0;
        left: 8%;
        height: 90px;
        margin-top: -90px;
        margin-bottom: 0px;
    }

    footer {
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
        <div style="width: 90%; text-aling=left">
            V15. 08/2020 <br>
            <div class="texto-centrado">
                Ministerio de Educación Nacional – Viceministerio de Educación Preescolar, Básica y Media – Decreto 1421 de 2017
            </div>
        </div>
    </footer>
    <main style="margin-top:5px; font-family: Arial, Helvetica, sans-serif; padding: 10px;">
        <div>
            <!----------------------------------------------------------------------------------------Ajustes Razonables------------------------------------------------------------------------------------------------------------>
            <table class="border-tabla-abajo" style="width: 100%;">
                <thead>
                    <tr>
                        <th colspan="6" style="color: white;background-color: #0B457F;padding: 5px;" colspan="2">Ajustes Razonables</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="font-size: 10px;" class="padding texto-centrado aliniar-vertical-top color-gris ">
                            Área/asignatura/ <br>campo de <br>pensamiento/<br>área de <br>desarrollo/<br>dimensiones <br>/articulación con<br>la educación<br>media/dinámicas <br>de la vida diaria/<br>convivencia otra <br>según sea el caso
                        </td>
                        <td style="font-size: 10px;" class="padding texto-centrado aliniar-vertical-top color-gris">Barreras identificadas en el contexto Describir<br><span style="color: #BABABA;font-size: 7px;"> Actitudinales, tecnológicas, comunicativas, metodológicas, infraestructura, entre otras.</span>
                        </td>
                        <td style="font-size: 10px;" class="padding texto-centrado aliniar-vertical-top color-gris">Tipo de ajuste razonable - facilitador <br><span style="color: #BABABA;font-size: 7px;"> (Recursos o materiales, didácticas o de estrategias, tiempo, metas de aprendizaje, estrategias de evaluación, infraestructura) </span>
                        </td>
                        <td style="font-size: 10px;" class="padding texto-centrado aliniar-vertical-top color-gris">
                            Apoyo requerido<br><span style="color: #BABABA;font-size: 7px;">(Talento humano, técnico, tecnológico, comunicativo, otro)</span>
                        </td>
                        <td style="font-size: 10px;" class="padding texto-centrado aliniar-vertical-top color-gris">
                            Descripción de tipo de ajustes y apoyos<br><span style="color: #BABABA;"><span style="color: #BABABA;font-size: 7px;">Si el ajuste se realiza en la meta de aprendizaje, escribir la nueva meta que corresponde para el actual período según el plan de estudios. Incluir la frecuencia del ajuste y del apoyo.</span>
                        </td>
                        <td style="font-size: 10px;" class="padding texto-centrado aliniar-vertical-top color-gris">Seguimiento<br><span
                                style="color: #BABABA;font-size: 7px;">En clave de temporalidad, responsable y medios.</span>
                        </td>
                    </tr>';
                    while ($anexo2 = $sql3->fetch_array()) {
                        $html .= '<tr>
                        <td class="padding texto-izquierda">1.' . $anexo2['Area'] . '</td>
                        <td class="padding texto-izquierda">' . $anexo2['Barreras'] . '</td>
                        <td class="padding texto-izquierda">' . $anexo2['tipo'] . '</td>
                        <td class="padding texto-izquierda">' . $anexo2['apoyo'] . '</td>
                        <td class="padding texto-izquierda">' . $anexo2['descripcion'] . '</td>
                        <td class="padding texto-izquierda">' . $anexo2['seguimiento'] . '</td>
                    </tr>';
                    }
                    $html .= '
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>';

$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape'); // Establece la orientación horizontal para la primera página
$dompdf->render();
$dompdf->stream("documento2.pdf", array("Attachment" => false));

