<?php
echo "Digite seus dados\n";
$nome = readline("Nome: \n");
$idade = intval(readline("Idade: "));
$prof = readline("Profissão: ");

$trim = trim($nome);
$trimProfissao = trim($prof);
echo "Nome: $trim\n";
echo "Idade: $idade\n";
echo "Profissão: $trimProfissao";

