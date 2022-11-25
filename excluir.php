<?php
session_start();
include('verificacao.php');
include('conexao.php');
$usuario = $_SESSION['usuario'];

$id = $_GET['id'];

if(isset($id)){
    $id = $_GET['id'];
    //echo $id;
    //Pesquisar no banco de dados todos se os usuarios existentes
    $query = "SELECT id FROM usuario WHERE id = {$id}";
    $result = mysqli_query($conexao, $query);
    $numerolinhas = mysqli_num_rows($result);

    //Pesquisar no banco de dados o usuario que está logado
    $queryLogado = "SELECT id FROM usuario WHERE nome = '{$usuario}'";
    $resultLogado = mysqli_query($conexao, $queryLogado);
    $dadosUsuarioLogado = mysqli_fetch_assoc($resultLogado);
    $idUsuarioLogado = $dadosUsuarioLogado['id'];

    if($numerolinhas == 1){
        if($id == $idUsuarioLogado){
        //Se o usuario for o mesmo, não posso excluir
        $_SESSION["usuario_logado"] = true;
        header('location:painel.php');
        exit;
    }else{
    //se o usuario existe no banco e não está logado, então vamos excluir
    $query = "DELETE FROM usuario WHERE id = {$id}";
    $result = mysqli_query($conexao, $query);
    //Grava sessao para enviar mensagem
    $_SESSION["usuario_excluido"] = true;
    header('location: painel.php');
    exit;
    }
   }
}else{
    header('location: painel.php');
}