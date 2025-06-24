<?php
require_once "Cliente.php";
require_once "Pedido.php";

$c = new Cliente("Carlos Henrique","carlinhos@gmail.com");
$c1 = new Cliente("Celso ","celsinho@gmail.com");

$p = new Pedido(123456,450.99,$c1);

$p->apresentarPedido();