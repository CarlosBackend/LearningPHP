<?php
$string = "  Eu sou uma String  ";
$string1 = "EU SOU UM STRING";
$string2 = "  Eu sou uma nova string";
$string3 = "Eu sou uma nova string  ";
$codigo = "120";

$lower = strtolower($string1);
$up = strtoupper($string3);
$cap = ucfirst(strtolower($string1));
$cap2 = ucwords(strtolower($string1));

echo "Minusculo: $lower \n";
echo "Maisculo: $up\n";
echo "Captalize: $cap\n";
echo "Captalize: $cap2\n";

$padl = str_pad($codigo,6,'0',STR_PAD_LEFT);
$padr = str_pad($codigo,6,'0',STR_PAD_RIGHT);
echo " Valor original: $codigo\n";
echo " Inserindo a esquerda: $padl\n";
echo " Inserindo a direita: $padr\n";


# trim: responsalvel por eliminar os espaços em branco
/*
$trim = trim($string);
$ltrim = ltrim($string);
$rtrim = rtrim($string);
echo "$string\n";
echo "$trim\n";
echo "$ltrim\n";
echo "$rtrim\n";

# strlen - Mostrar qtde de caracteres de uma string
$len = strlen($string3);
echo " A String possui $len caracteres\n";
#substr - mostrar um determindado numero de caracteres
$sbs = substr($string3,4,9);
echo "$sbs\n";
*/

