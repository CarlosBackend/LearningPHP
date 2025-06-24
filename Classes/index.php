<?php
require_once "Pessoa.php";

$p = new Pessoa("Carlos",26);
$p2 = new Pessoa("Henrique",44);
echo $p->nome." tem ".$p->idade." anos";
echo "<br>";
echo $p->apresentar();
echo"<br>";

echo $p2->nome." tem ".$p2->idade." anos";
echo "<br>";
echo $p2->apresentar();
echo"<br>";
var_dump($p);