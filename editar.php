<?php
session_start();
include('verificacao.php');
include('conexao.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    //verificar se o ID foi informado
    //Pesquisar no banco de dados todos se os usuarios existentes
    $query = "SELECT * FROM usuario WHERE id = {$id}";
    $result = mysqli_query($conexao, $query);
    $dadosUsuario = mysqli_fetch_assoc($result);
    $nome = $dadosUsuario['nome'];
    $email = $dadosUsuario['email'];
    $senha = $dadosUsuario['senha'];
}
//Verifica se o botão salvar foi pressionado
if(isset($_POST['salvar'])){
    //Pegar os valores alterados
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $id = $_POST['id'];
    
    //Realizar o Update no banco de dados
    $query = "UPDATE usuario SET nome = '{$nome}', email = '{$email}', senha = '{$senha}' WHERE id = {$id}";
    $result = mysqli_query($conexao, $query);
    header('location: painel.php');

}


?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Editar Cadastro</title>
</head>

<body>
    <div class="topoEdicao">
        Topo da minha página
    </div>

    <div>
        <h2>Editar Usuário</h2>
    </div>
    <p>Informe os dados abaixo para editar as informações do usuário :)</p>
    
    <?php
    if(isset($_SESSION['usuario_ja_cadastrado'])){
      echo "<h2>O Usuario já está cadastrado!</h2>"; 
    }   
    unset($_SESSION['usuario_ja_cadastrado']);
    ?>
    <form action="editar.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <p>Nome:</p>
        <input value="<?php echo $nome?>" name="nome" type="text" placeholder="Informe seu nome.">
        <p>E-mail:</p>
        <input value="<?php echo $email?>"name="email" type="email" placeholder="Informe seu email.">
        <p>Senha:</p>
        <input value="<?php echo $senha?>"name="senha" type="text" placeholder="Informe sua Senha.">
        <br><br>
        <button type="submit" name="salvar">Salvar</button>
    </form> 
</body>

</html>