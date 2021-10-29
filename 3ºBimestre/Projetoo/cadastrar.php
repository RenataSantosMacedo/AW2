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
    <div id="corpo-form-cad">
    <h1>Cadastrar</h1>
    <form method="POST">
        <input type="text" name="nome" placeholder="Nome completo" maxlength="30"> 
        <input type="text" name="telefone" placeholder="Telefone" maxlength="30">
        <input type="email" name="email" placeholder="Email" maxlength="40">
        <input type="password" name="senha" placeholder="Senha" maxlength="12">
        <input type="password" name="confSenha" placeholder="Confirmar senha" maxlength="12">
        <input type="submit" value="CADASTRAR">
        <a href="index.php">Voltar para login?<stong>Login</strong>
</form>
</div>
<?php
//verificar se clicou no botão cadastrar
if(isset($_POST['nome'])){
    $nome = addslashes($_POST['nome']);
    $telefone = addslashes($_POST['telefone']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $confSenha = addslashes($_POST['confSenha']);
//verificar se está preenchido
if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confSenha)){
    $u->conectar("projeto_login","localhost","root","");
    if($u->msgErro == "")//se está ok
    {
        if($senha == $confSenha){
            if($u->cadastrar($nome,$telefone,$email,$senha)){
                echo "Cadastro realizado com sucesso! Faça login!";
            }
            else{
                echo "Email já cadastrado!";
            }
        }
        else{
            echo "Senha e Confinfirmar senha não correspondem!";
        }
    }
    else{
        echo "Erro: ".$u->msgErro;
    }
}
else{
    echo "Preencha todos os campos!";
}
}
?>
</body>
</html>