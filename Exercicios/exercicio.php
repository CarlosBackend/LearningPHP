<?php
$produto = readline("Digite o valor do produto:");
$desconto = 0;
    if($produto >100){
        $desconto = $produto *0.15;
        $produto = $produto - $desconto;
        echo "O desconto de R$ 15 foi aplicado, o valor agora é de $produto";
    }
    else{
        $desconto = $produto *0.05;
        $produto = $produto - $desconto;
        echo "O desconto de R$5 foi aplicado, o valor agora é de $produto ";
}