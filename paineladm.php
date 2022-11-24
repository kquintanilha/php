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
    <?php
    //Consulta PHP para retornar informações do Usuário
    $query = "SELECT * FROM usuario";
    $result = mysqli_query($conexao, $query);
    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Senha</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
        <?php
        //enquanto existir dados na minha variavel $result
        //Executa o Laço de repetição
        while ($linha = mysqli_fetch_assoc($result)) {
            $id = $linha['id'];
            $nome = $linha['nome'];
            $email = $linha['email'];
            $senha = $linha['senha'];
        ?>
        <!--Codigo HTML / Denhar as linhas da tabela  -->
        <tr>
            <td><?php echo $id ?></td>
            <td><?php echo $nome ?></td>
            <td><?php echo $email ?></td>
            <td><?php echo $senha ?></td>
            <td><a href="editar.php?id=<?php echo $id ?>"><button class="btn btn-outline-primary">Editar</button></a>
            <td><a href="excluir.php?id=<?php echo $id ?>"><button class="btn btn-danger">Excluir</button></a></td>
        </tr>
        <?php
        }
        ?>

    </table>

</body>

</html>