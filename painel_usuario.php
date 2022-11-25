<?php
session_start();
$usuario = $_SESSION['usuario'];
include('verificacao.php');
include('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Usuário</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>
    <h2>Seja bem vindo(a) <?php echo $usuario ?></h2>
    <a href="cadastro.php"><button class="btn btn-outline-primary">Cadastrar Usuário</button></a>
    <a href="logout.php"><button class="btn btn-danger">Sair</button></a>
    <br><br>
    <?php
    if(isset($_SESSION['usuario_excluido'])){
      echo "<script>alert('Usuário excluido com sucesso!')</script>"; 
    }   
    unset($_SESSION['usuario_excluido']);
    ?>
    <?php
    if(isset($_SESSION['usuario_logado'])){
      echo "<script>alert('Usuário está logado. Não é possível excluir!')</script>"; 
    }   
    unset($_SESSION['usuario_logado']);
    ?>
   </body>

</html>