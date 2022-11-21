<?php
//verificar se o usuario esta logado
if(!$_SESSION['usuario']){
    header('location: index.php');
    exit;
}