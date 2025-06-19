<?php
// definindo, atribuindo valor e recuperando valores
define("NOME","João ");
echo NOME;
echo "<hr>";
const IDADE = 40;
echo IDADE;

// Constantes magicas
echo "<hr>";
echo " A linha atual é a: " .__LINE__;// pega a linha atual
echo"<hr>";

echo "<hr>";
echo " O caminho atual é a: " .__FILE__;// pega a linha atual
echo"<hr>";

echo " O nome do diretorio atual é: " .__DIR__;// pega a linha atual
echo"<hr>";