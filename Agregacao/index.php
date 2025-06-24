<?php

require_once "Funcionario.php";
require_once "Departamento.php";

$f = new Funcionario("Carlos Henrique","Gerente");
$f1 = new Funcionario("Kelvin Henrique","Analista");
$f2 = new Funcionario("Celso Antonio","Desenvolvedor");
$d = new Departamento("Tecnologia");
$d->adicionarFuncionario($f);
$d->adicionarFuncionario($f1);
$d->adicionarFuncionario($f2);

$d->listarFuncionarios();