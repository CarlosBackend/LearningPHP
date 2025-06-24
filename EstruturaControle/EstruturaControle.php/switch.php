<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
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
        // Switch
        $num1 = 10;
        $num2 = 5;
        $operacao ="/";

        switch($operacao){
            case '+':
                echo "Soma: ".$num1+$num2;
                break;
            case '-':
                echo "Subtração: ".$num1-$num2;
                break;
            case '*':
                echo "Multiplicação: ".$num1*$num2;
                break;
            case '/':
                echo"Divisão: ".$num1/$num2;
                break;
            default:
            echo"Operação inválida";               
        } 
        ?>
    </div>
</body>
</html>