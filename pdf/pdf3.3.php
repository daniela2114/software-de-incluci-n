<?php
require 'vendor/autoload.php';
include_once("../conexion/conectar.php");

$cedula = $_REQUEST['idEst'];
$sql3 = $link->query("SELECT * FROM anexo2 WHERE idEst='$cedula'");

use Dompdf\Dompdf;
use Dompdf\Options;

// Crear una instancia de Dompdf
$dompdf = new Dompdf();

// Opciones de Dompdf
$options = new Options();
$options->set('isPhpEnabled', true);
$dompdf->setOptions($options);

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
        <div style="width: 90%; text-align: left">
            V15. 08/2020 <br>
            <div class="texto-centrado">
                Ministerio de Educación Nacional – Viceministerio de Educación Preescolar, Básica y Media – Decreto 1421 de 2017
            </div>
        </div>
    </footer>
    <table class="border-tabla-abajo">
        <tr>
            <th class="padding texto-izquierda color-gris">Nombre docente</th>
        </tr>';

while ($anexo2 = $sql3->fetch_array()) {
    $html .= '
        <tr>
            <td class="padding texto-centrado">' . $anexo2['nomDocente'] . '</td>
        </tr>
        <tr>
            <th class="padding texto-izquierda color-gris">Área</th>
        </tr>
        <tr>
            <td class="padding texto-centrado">' . $anexo2['nomDocente'] . '</td>
        </tr>
        <tr>
            <th class="padding texto-izquierda color-gris">Firma</th>
        </tr>
        <tr>
            <td class="padding texto-centrado">' . $anexo2['nomDocente'] . '</td>
            </table><br><br>
            <table class="border-tabla-abajo">
            <tr>
                <th class="padding texto-izquierda color-gris"> Nombre docente orientador</th>
                <th class="padding texto-izquierda color-gris"> Nombre docente de apoyo pedagógico</th>
                <th class="padding texto-izquierda color-gris"> Nombre coordinador pedagógico</th>
            </tr>
            <tr>
                <td class="padding texto-centrado">' . $anexo2['orientador'] . '<br></td>
                <td class="padding texto-centrado">' . $anexo2['nomapoyoPedadogico'] . '</td>
                <td class="padding texto-centrado">' . $anexo2['nomcordinadorPedadogico'] . '</td>
            </tr>
            
            <tr>
                <th class="padding texto-izquierda color-gris"> Área</th>
                <th class="padding texto-izquierda color-gris"> Área</th>
                <th class="padding texto-izquierda color-gris"> Área</th>
            </tr>
            
            <tr>
                <td class="padding texto-centrado">' . $anexo2['areaOrientador'] . '<br></td>
                <td class="padding texto-centrado">' . $anexo2['areapoyoPedadogico'] . '</td>
                <td class="padding texto-centrado">' . $anexo2['areacordinadorPedadogico'] . '</td>
            </tr>
            
            <tr>
                <th class="padding texto-izquierda color-gris"> Firma</th>
                <th class="padding texto-izquierda color-gris"> Firma</th>
                <th class="padding texto-izquierda color-gris"> Firma</th>
            </tr>
            
            <tr>
                <td class="padding texto-centrado">' . $anexo2['firmOrientador'] . '<br></td>
                <td class="padding texto-centrado">' . $anexo2['firmpoyoPedadogico'] . '</td>
                <td class="padding texto-centrado">' . $anexo2['firmcordinadorPedadogica'] . '</td>
            </tr>
            </tbody>
            </table><br><br>
            </body>
            </html>';}

// Cargar el contenido HTML en Dompdf
$dompdf->loadHtml($html);

// Establecer el papel en A4 y orientación vertical (portrait)
$dompdf->setPaper('A4', 'portrait');

// Renderizar el PDF
$dompdf->render();

// Generar el archivo PDF en el navegador
$dompdf->stream("documento_vertical.pdf", array("Attachment" => false));
?>
