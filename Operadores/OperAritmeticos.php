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
        // Aritmeticos
        // Adição 
        $a = 3;
        $b = 8;
        $soma = $a + $b;
        echo " A soma de a + b é <br> $soma <hr>";
        // Multiplicação
        $mult = $a * $b;
        echo "A multiplicação de a e b é<br> $mult <hr>";
        // subtração
        $sub = $a - $b;
        echo "A aubtração de a e b é <br>$sub <hr>";
        // divisao
        $div = $b / $a;
        echo "A divisão de a e b é <br>$div <hr>";

        // resto da divisão modulo%
        $mod = $b % $a;
        echo "A divisão de a e b é <br>$mod <hr>";
        ?>
    </div>
</body>
</html>