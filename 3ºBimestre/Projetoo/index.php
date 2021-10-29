<?php
    require_once 'classes/usuarios.php';
    $u = new Usuario;
?>

<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Projeto AW2 - 3ºBimestre</title>
        <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div id="corpo-form">
    <h1>Entrar</h1>
    <form method="POST">
        <input type="email" name="usuario" placeholder="Email">
        <input type="password" name="senha" placeholder="Senha">
        <input type="submit" value="ACESSAR">
        <a href="cadastrar.php">Ainda não é inscrito?<stong>Cadastre-se!</strong>
</form>
</div>
<?php
if(isset($_POST['email'])){
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
//verificar se está preenchido
if(!empty($email) && !empty($senha)){
    $u->conectar("projeto_login","localhost","root","");
    if($u->msgErro == ""){
        if($u->logar($email,$senha)){
            ?>
            <a href="areaprivada.php">
            <?php
            //header('location: areaprivada.php'); 
            //die();
        }
        else{
            echo "Email ou senha estão incorretos!";
        }
    }
    else{
        echo "Erro: ".$u->msgErro;
    }
}
else{
    echo "Logado com sucesso!";
}
}

?>
</body>
</html>