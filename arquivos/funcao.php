<html>

<form function action="funcao.php" method="$_GET">

<p></p><b>Nota 1: </b><input type="text" name="n1" placeholder="Nota 1" required>
  <p></p>
  <b>Nota 2: </b><input type="text" name="n2" placeholder="Nota 1" required> 
  <p></p>
  <br>
  <button type="submit"><b>calcular</b></button><br><br>

</html>

<?php


function media($nota1, $nota2){
    $media = ($nota1 + $nota2) / 2;
    echo "A média é: $media";
    return;
}
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
media($n1, $n2);


/*function media(){
    $nota1 = 9;
    $nota2 = 5;
    $media = ($nota1 + $nota2) / 2;
    echo "A média é: $media";
    return;
}

media();*/

/*
function media($nota1, $nota2){
    $media = ($nota1 + $nota2) / 2;
    echo "A média é: $media";
}
media(8 , 5);
*/


