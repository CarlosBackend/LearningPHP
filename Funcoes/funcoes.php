<?php
// Trabalhando com funções

// função sem parâmetros
function imprimirMensagem(){
    echo "Olá mundo\n";
}

// função que recebe um parâmetro
function mensagem($msg){
    echo "$msg \n";
}

// função com parâmetros e retornos
function soma(int $num1, int $num2){
    return $num1 * $num2;
}


imprimirMensagem();
mensagem("Olá Eu sou uma função com parâmetro!");
$ret = soma(6,9);
echo "O resultado da função soma é : ".$ret;