<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Página de Cadastro!</title>
</head>

<body>
    <div class="topo">
        Topo da minha página
    </div>

    <div>
        <h1>Cadastre-se</h1>
    </div>
    <p>Informe os dados abaixo para efetuar o cadastro :)</p>
    
    <?php
    if(isset($_SESSION['usuario_ja_cadastrado'])){
      echo "<h2>O Usuario já está cadastrado!</h2>"; 
    }   
    unset($_SESSION['usuario_ja_cadastrado']);
    ?>
    <form action="cadastrar.php" method="GET">
        <p>Nome:</p>
        <input name="nome" type="text" placeholder="Informe seu nome.">
        <p>E-mail:</p>
        <input name="email" type="email" placeholder="Informe seu email.">
        <p>Senha:</p>
        <input name="senha" type="password" placeholder="Informe sua Senha.">
        <br><br>
        <button>Cadastrar</button>
    </form> 
</body>

</html>