<?php

    if (isset($_GET["enviar"])){
    echo "<script>alert('O formulário foi enviado pelo método GET')</script>";
    echo "O número digitado foi: ".$_GET["numero"];
    echo '<br>';;
    }

    if (isset($_GET["numero"])){
        $resto = $_GET['numero'] % 2;
        if($resto == 0){
            echo "O número: ".$_GET['numero']." é par";
            echo '<br>';;
        }
        else {
            echo "O número: ".$_GET['numero']." é ímpar";
            echo '<br>';;
        }
    }

    if (isset($_GET["numero"])){
        $positivo = $_GET['numero'];
        if($positivo >= 0){
            echo "O número: ".$_GET['numero']." é positivo";
            echo '<br>';;
        }
        else {
            echo "O número: ".$_GET['numero']." é negativo";
            echo '<br>';;
        }
    }

?>