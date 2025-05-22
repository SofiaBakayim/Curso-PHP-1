<?php
//meses do ano
$meses = ['Janeiro', 
'Fevereiro',
 'Março',
 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto',
 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
//imprime o array
var_dump($meses);
echo "<hr>";
//imprimir o valor de junho
echo $meses[5];

//Percorrer o array
?>
<ul>
<?php
    foreach($meses as $mes){
        echo "<li>O mês é: {$mes}</li>";
    }
    ?>

</ul>
<hr>
<!--Indices nao numericos-->
<?php
//array associativo
$meses2 = [
    "jan" => "Janeiro",
    "fev" => "Fevereiro",
    "mar" => "Março",
    "abr" => "Abril",
    "mai" => "Maio",
    "jun" => "Junho",
    "jul" => "Julho",
    "ago" => "Agosto",
    "set" => "Setembro",
    "out" => "Outubro",
    "nov" => "Novembro",
    "dez" => "Dezembro"
];

var_dump($meses2);

//percorrer o array
echo "<ul>";
foreach($meses2 as $key=>$value){
    echo "<li>O mês com chave: {$key} tem valor: {$value}</li>";
}
echo "</ul>";