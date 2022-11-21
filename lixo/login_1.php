<html>

<form action="login.php" method="$_GET">
  
<p></p><b>Nome: </b><input type="text" name="nome" placeholder="Digite seu nome" required>
  <p></p>
  <b>Sobrenome: </b><input type="text" name="sobrenome" placeholder="Digite seu sobrenome" required> 
  <p></p>
  <b>Idade: </b><input type="text" name="idade" placeholder="Sua idade" required>
  <br><br>
  <button type="submit"><b>Enviar</b></button>

</form>


</html>

<?php
ini_set('display_errors',0);
//string
$nome = $_GET['nome'];
$sobrenome = $_GET['sobrenome'];
$idade = $_GET['idade'];

/*echo "meu nome é: $nome $sobrenome e idade $idade";

//String
/*
$nome= 'Paulo';
*/

//numerica - int(inteira)
$idade = 10;

//numerica - float -- Double
$numero= 10.5;

// Booleano - true or false
$boll = false;

//echo 'meu nome é Kleyber <br>';
//echo 'meu nome é: '. $nome;

/*
Comentário de
Várias
Linhas
*/

/*
$numero1 = 15;
$numero2 = 30;
$soma = $numero1 + $numero2;
echo $soma;
*/

/*
$nome="Michael";
$sobrenome="Jordan";
$idade= 35;

echo 'Nome: '. $nome;
echo '<br> Sobrenome: '. $sobrenome;
echo '<br> Idade: ' . $idade . ' anos';



echo "Meu nome é: $nome";
echo "<br>Sobrenome: $sobrenome";
echo "<br>idade: $idade";

*/