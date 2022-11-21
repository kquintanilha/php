<?php

//caminho do banco de dados: HOST, Usuario BD, Senha BD, Nome BD
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('BD', 'sistema');

$conexao = mysqli_connect(HOST,USUARIO,SENHA,BD) or die('Não foi possível conectar ao banco de dados');
//print_r($conexao);