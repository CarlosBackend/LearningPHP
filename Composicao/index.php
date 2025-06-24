<?php   

require_once "Carro.php";
require_once "Motor.php";

$c = new Carro("Chevrolet",1600);
$c->exibirDetalhesCarro();
echo "<br><hr><br>";
$c1 = new Carro("Gol",1200);
$c1->exibirDetalhesCarro();