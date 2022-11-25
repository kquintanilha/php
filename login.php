<?php
session_start();
include('conexao.php');

//Pega informações do usuário - Email e senha
$email = $_GET['email'];
$senha = $_GET['senha'];
//echo $email;
//echo $senha;

//Validação se o usuário ou senha foi informado
if(empty($email) || empty($senha)){
  $_SESSION['usuario_nao_informado'] = $email;
  //Redireciona a página para o index.php 
  header('location: index.php');
  exit;
}

//Consulta no banco de dados
$query = "SELECT * FROM usuario WHERE email = '{$email}' AND senha = '{$senha}'";
$result = mysqli_query($conexao,$query);
$numerolinhas = mysqli_num_rows($result); 
//Capttura informações do usuario - ID - nome - email - senha
$dadosUsuario = mysqli_fetch_assoc($result);

//O usuario existe no banco de dados
if($numerolinhas == 1){
  $_SESSION['usuario'] = $dadosUsuario['nome'];

if($dadosUsuario['adm'] == 1){
$_SESSION['usuario'] = $dadosUsuario['nome'];
  //Redireciona o usuario logado para a página painel.php 
  header('location: painel.php');
  exit;
 }
 else{
  $_SESSION['usuario'] = $dadosUsuario['nome'];
  //Redireciona o usuario logado para a página painel.php 
  header('location: painel_usuario.php');
  exit;
 }
}else{
  //retorna a informação para o index.php
  $_SESSION['usuario_invalido'] = $email;
   //redireciona para o index.php
  header('location: index.php');
  exit;
}
