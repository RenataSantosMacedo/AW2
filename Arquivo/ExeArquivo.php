<?php

if (isset($_GET["enviar"])){
    }

$fp = fopen("novo.txt","wb");
fwrite($fp,$_GET["palavra"]);
fclose($fp);
?>

