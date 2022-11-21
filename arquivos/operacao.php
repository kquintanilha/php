<html>

<form action="operacao.php" method="$_GET">
 
<p></p><b>Numero 1: </b><input type="text" name="n1" placeholder="Informe o 1º numero" required>
  <p></p>
  <b>Operação: </b><input type="text" name="operacao" placeholder="Operação" required>
  <br><br>
  <b>Numero 2: </b><input type="text" name="n2" placeholder="Informe o 2º numero" required> 
  <p></p>
  <br>
  <button type="submit"><b>calcular</b></button>

</form>


</html>

<?php
ini_set('display_errors',0);
//string


$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$operacao = $_GET['operacao'];

/*
if(is_int($n1)){
  echo 'É Inteiro';
}else{
  echo 'Não é Inteiro';
}

/*
if(is_string($n1)){
  echo 'É String';
}else{
  echo 'Não é String';
}
*/

if($operacao == '+'){
  $soma = $n1+$n2;
  echo "Igual a: $soma";
}elseif($operacao == '-'){
  $soma = $n1-$n2;
  echo "Igual a: $soma";
}elseif($operacao == '*'){
    $soma = $n1*$n2;
    echo "Igual a: $soma";  
}elseif($operacao == '/'){
    $soma = $n1/$n2;
    echo "Igual a: $soma";  
     
}

/*
if($Operação == '+'){
  $soma = $n1+$n2;
  echo " O resultado da soma é: $soma"; 
}

if($Operação == '-'){
  $soma = $n1-$n2;
  echo " O resultado da soma é: $soma"; 
}

if($Operação == '/'){
  $soma = $n1/$n2;
  echo " O resultado da soma é: $soma"; 
}

if($Operação == '*'){
  $soma = $n1*$n2;
  echo " O resultado da soma é: $soma"; 
}

/*
if($Operação == '+'){
  echo " O resultado da soma é:" . $n1+$n2; 
}
*/


/*
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];

$media = ($n1 + $n2)/2;
*/

//echo "Média é: $media";

/*operadores:
  * - Multiplicação
  / - Divisão
  + - Adição
  - - Subtrição
  <= - Menor igual
  >= - Maior igual
  == - Igual
  === - Identicos
*/

/*if($media >= 6){
  echo 'Aprovado!';
}else{
  echo 'Reprovado!';
}
*/




//String
/*
$nome= 'Paulo';
*/

//numerica - int(inteira)
//$idade = 10;

//numerica - float -- Double
//$numero= 10.5;

// Booleano - true or false
//$boll = false;



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