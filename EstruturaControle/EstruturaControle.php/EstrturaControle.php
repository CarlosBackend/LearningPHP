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

        $nome = "Joao";
        $nota1 = 2;
        $nota2 = 3;

        $media = ($nota1 + $nota2) /2;

        if($media >= 6):
            echo "Parabens $nome você foi aprovado com a media $media <br>";
        elseif($media >=3 && $media<6):
            echo "Infelizmente você foi reprovado com a media $media <br>";
        elseif($media <3):
        echo "Que pena $nome você foi expulso do curso com a media $media <br>";
        endif;
        // if e else

        if($media >= 6){
            echo "Parabens $nome você foi aprovado com a media $media";
        }else{
            echo "Infelizmente você foi reprovado com a media $media";
        }

        echo "<br>Final do programa";
        ?>
    </div>
</body>
</html>