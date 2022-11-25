<?php
  session_start();
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
      *{
            margin: 0;
            padding: 0;
        }
        .fundo{
            background-image: linear-gradient(45deg,black, crimson);
            height: 100vh;
            color: #fff;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }

    </style>
</head>
<body>
  <div class="fundo">   
    <h1>Topo da minha página</h1><br>
   
<div class="logo">
    <span>
    <p></p><img class="user" src="img/login5.png" alt=""><br>
     Login do Cliente
     <br>
    </span>
</div>
<br>
    <p><h4>Veja seus pedidos de forma fácil, compre mais</h4><h4>rápido e tenha uma experiência personalizada :)</h4></p>
    <?php
    if(isset($_SESSION['usuario_nao_informado'])){
      echo "<h1> Usuario ou senha não informado!</h1>"; 
    }   
    unset($_SESSION['usuario_nao_informado']);
    ?>
    <?php
    if(isset($_SESSION['usuario_invalido'])){
      echo "<h1> Usuario ou senha inválido!</h1>"; 
    }   
    unset($_SESSION['usuario_invalido']);
    ?>
    
    <form action="login.php" method="GET">
      <p>E-mail:</p>
      <input name="email" type="email" placeholder="Informe seu email." >
      <p>Senha:</p>
      <input name="senha" type="password" placeholder="Informe sua Senha.">
      <br><br>
      <button>Fazer Login</button>
    </form>
    <p>Não tem cadastro? <a href="cadastro.php">cadastre-se</a></p>
   
</body>

</html>