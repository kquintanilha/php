<?php
session_start();
include('conexao.php');

//Pega informações do usuário - Email e senha
$nome = $_GET['nome'];
$email = $_GET['email'];
$senha = $_GET['senha'];

//Consultar no banco para verificar se o Usuario ja existe
$query = "SELECT * FROM usuario WHERE email = '{$email}'";
$result = mysqli_query($conexao,$query);
$numerolinhas = mysqli_num_rows($result); 

//Verificar se o usuario ja existe no banco
if($numerolinhas == 1){
    // Se for = a 1 o usuario ja existe no banco
    $_SESSION['usuario_ja_cadastrado'] = true;
    header('location: cadastro.php');
    exit;
}else{
    //Se o usuario não existe, então realizamos 
    // a inserção dos dados no banco
    $query = "INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`) VALUES (NULL, '{$nome}', '{$email}', '{$senha}')";    
    if($conexao -> query($query) == true ){
        // Insere no banco e se inseriu corretamente, 
        //então retorno a mensagem para o painel de usuario
        $_SESSION['usuario'] = $nome;
        header('location: painel.php');
        exit;
    }
}