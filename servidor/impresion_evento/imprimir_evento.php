<?php
include "../../clases/Metodos.php";
$Utiles = new Metodos();
$idObtenido = $_GET['id_evento'];

include_once "../../vendor/autoload.php";
use Dompdf\Dompdf;
$dompdf = new Dompdf();
// Introducimos HTML de prueba
$html=$Utiles->file_get_contents_curl("http://localhost/Sistema_Eventos_Invitados/modulos/listado_invitados.php?id_evento=" . $idObtenido);
$dompdf->loadHtml($html);
// Render the HTML as PDF
$dompdf->render();
header("Content-type: application/pdf");
header("Content-Disposition: inline; filename=evento.pdf");
echo $dompdf->output();