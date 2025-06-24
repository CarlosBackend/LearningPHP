<?php
$nome = readline("Digite seu nome: ");
$numero = intval(readline("Digite um numero: "));

    if($numero %2==0):
        echo"Bem vindo $nome\n";
        echo"O numero digitado foi $numero esse número é par\n";
    else:
        echo"Bem vindo $nome\n";
        echo"O numero digitado foi $numero esse número é impar"; 
    endif;    
