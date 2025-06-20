<?php
# Trabalhando com arrays

$num = [1,2,3,4,5,7,];
# Arrays associativos
$frutas = [
    "a" => "Banana",
    "b" => "Abacaxi",
    "c" => "Maça",
    "d" => "Uva"
];

// inserindo valores em um array com o array_push
//print_r($num);
array_push($num,6,8,9,10); // array_push(); insere um novo valor dentro do elementos
sort($num);
//print_r($num);

// excluindo valores em um array com o unset
unset($num[8],$num[9]);// Unsert(); remove o elemento
//print_r($num);
print_r($frutas);
$frutas['e'] = "Goiaba";
$frutas['f'] = "Melancia";
$frutas['g'] = "Melao";
print_r($frutas);


/*
$totArray = count($num);
echo "Esse array possui $totArray itens \n";
$num[] = 6;
print_r($num);
$totA = count($num);
echo "Esse array agora possui $totA itens \n";

sort($num);// Ordena os elementos
rsort($num);
print_r($num);// Ordena os elementos de tras pra frente
// Para imprimir um array não se usa echo
echo " Arrays numerico valor do indice é $num[3]\n";
echo "Arrys numerico das frutas, valor do indice é $frutas[1]\n";

print_r($num);
print_r($frutas);
*/


