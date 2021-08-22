<?php

$equipamento = $_GET['equipamento'];
$consumo = $_GET['consumo'];
$hora = $_GET['hora'];
$dias = $_GET['dias'];

$consumoMensalEmWatts = ($consumo * $hora) * $dias;
$consumoMensalEmKW = $consumoMensalEmWatts / 1000;

echo 'O(A) ' . $equipamento . ' consome '. $consumoMensalEmKW . ' Kw/h'. '<br>';   

if (isset($_GET["enviar"])){
}

$fp = fopen("consumo.txt","wb");
fwrite($fp,$_GET["equipamento"]." consome ".$consumoMensalEmKW.' Kw/h');
fclose($fp);

?>

