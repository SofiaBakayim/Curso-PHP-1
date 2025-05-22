<?php
$a = 1;//variavel
echo "<h1>ficheiro index.php, valor é: {$a}</h1>";
echo '<h2>teste de include  {$a}</h2>';

//includes
require_once "system/configuration.php"; //se nao encontrar o ficheiro configuration, apenas dá um warning

require "system/helpers.inc.php"; //se nao encontrar o ficheiro helpers.php, dá erro fatal
require_once "system/helpers.inc.php"; //se nao encontrar o ficheiro helpers.php, dá erro fatal

echo "<hr><h1>Tipo de dados</h1>";
/* Tipos de dados  */

//string
$nome = "Pedro";
echo "Nome: " . $nome . "<br>"; //concatenar, juntar, mesclar

//inteiro
$numero = 10;

//float
$float = 10.54;

//boolean
$verdadeiro = true;
$falso = false;

//nulo
$nulo = null;

$salario = null;

//tipo de variveis
 echo gettype($numero);
 echo "<br>";
 echo gettype($verdadeiro);

 echo "<br>";
 var_dump($verdadeiro); //mostra o tipo de dados e o valor

 /* funções */
 echo "<hr><h1>Funções</h1>";

 echo saudacao(); //chamar a função saudacao
 echo "<br>";

 echo "<hr>";
 //string
 $texto = "               <h1>Lorem ipsum dolor Nunc. faucibus ante elit, at auctor lectus convallis sed. Nullam vitae nunc sed ex accumsan bibendum eu vel ex. Proin at mi rhoncus, varius lectus quis, tempus tellus. Vivamus ut eleifend enim, a tristique eros. Donec et nisl lorem. Sed blandit lectus sed ligula ultrices auctor. Vivamus tellus velit, condimentum a consequat a, pellentesque eu risus. Duis mattis placerat erat at placerat. Fusce pharetra enim id arcu porta, vel placerat urna porta. Vestibulum aliquam ligula turpis, in molestie ipsum dictum a. Nam tempus sollicitudin risus vehicula porttitor.          ";

// echo $total = mb_strlen(trim($texto));
//echo strip_tags($texto);

echo resumirTexto($texto,150, '(ler mais..)');
echo "<hr>";

 /* operador ternario*/
 $a  = 3;
 $b = 5;
if($a >= $b){
    echo "a: {$a} eh maior ou igual a b: {$b}";
}else{
    echo "a: {$a} eh menor b: {$b}";
}
echo "<br>";
//operador ternario
echo $a >= $b  ? "1- a: {$a} eh maior ou igual a b: {$b}" :  "2- a: {$a} eh menor b: {$b}";

echo "<hr>";

//validar email
$email = 'paulo@gmail.com';
var_dump(validarEmail($email));

echo '<hr>';
//--Chamar contantes --/
echo "Nome do site: " . SITE_NOME;
echo "<br>";
echo SITE_DESCRICAO;
echo "<br>";

echo "<hr>";
echo exibirInformacoesServidor();
echo "<hr>";
echo date("d-m-Y H:m:s", 1744223655);