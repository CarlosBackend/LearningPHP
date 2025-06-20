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
        // Operadores lógico
        $a = 9;
        $b = 7;
        $c = 14;
        // Ou ||
        $ou = ($a == $b || $a >8 || $c <13);
        var_dump($ou);
        // E &&
        $e = ($a != $b && $a >8 && $c >13);
        var_dump($e);

        /*
            // Trabalhando com operadores 
            $a = "a";
            $b = "a";
            $c = 4;
            $d = 9;

            echo " Menor que  Maior que = ";
            $menor = $c <= $d;
            var_dump($menor);
            echo "<hr> <br>";

            $maior = $c > $d;
            var_dump($maior);
            echo "<hr> <br>";

            // igualdade
            echo "Igualdade = ";
            $igual = $c == $d;
            var_dump($igual);
            echo "<hr> <br>";
            // Identico
            echo " Identico= ";
            $identico = $c === $d;
            var_dump($identico);
            echo "<hr> <br>";
            // diferente
            echo " Diferente = ";
            $diferente = $c != $d;
            var_dump($diferente);
            echo "<hr> <br>";

             echo " Menor que  Maior que = ";
            $menor = $c < $d;
            var_dump($menor);
            echo "<hr> <br>";

            $maior = $c > $d;
            var_dump($maior);
            echo "<hr> <br>";
            */
        ?>
    </div>
</body>
</html>