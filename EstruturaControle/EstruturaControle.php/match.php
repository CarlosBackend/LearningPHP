<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{ padding: 0; margin: 0; box-sizing: border-box; }
    html {background-color: #282632}
    .cmd{color: #33Fe00; padding: 20px;}
</style>
<body>
    <div class ="cmd">
        <?php
        // Estrutura de controle
        // Match
        $num1 = 10;
        $num2 = 5;
        $operacao ="3";

        $retorno = match ($operacao) {
            '+' => "Soma: ".$num1+$num2,
            '-' => "Subtração: ".$num1-$num2,
            '*' => "Multiplicação: ".$num1*$num2,
            '/' => "Divisão: ".$num1/$num2,
            default => "Operação inválida",
        };
        echo $retorno;
        ?>
    </div>
</body>
</html>