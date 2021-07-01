<?php

if (isset($_POST["enviar"])){
    echo "<script>alert('O formulário foi enviado pelo método POST')</script>";
    echo "O primeiro número digitado foi: ".$_POST["numero1"];
    echo '<br>';
    echo "O segundo número digitado foi: ".$_POST["numero2"];
    echo '<br>';
    }
$nnum1 =  $_POST["numero1"];
$knum2 =  $_POST["numero2"];

$array = [$nnum1, $knum2];
$i = 0;
$aux = 0;

while($i < $array[1])
{
    echo '<br>';
    echo "Número múltiplo: ";
    $aux = $nnum1 * $i;
    echo $aux;
    $i++;

    $aux = 0;
}

?>