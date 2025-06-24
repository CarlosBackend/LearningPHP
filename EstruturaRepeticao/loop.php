<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>
<style>
    *{ padding: 0; margin: 0; box-sizing: border-box; }
    html {background-color: #282632}
    .cmd{color: #33Fe00; padding: 20px;}
</style>
<body>
    <div class ="cmd">
        <?php
        // Estrutura de repetição
        $pessoas = [
            ['id'=> 1, 'nome' => 'Ronaldo'],
            ['id'=> 2, 'nome' => 'Joao'],
            ['id'=> 3, 'nome' => 'Maria'],
            ['id'=> 4, 'nome' => 'Pedro'],

        ];
        // Laço for
        echo "LAÇO FOR <hr> <br><br>";
        for($i = 0; $i < count($pessoas); $i++){
            echo "O Cliente ".$pessoas[$i]['nome']." Possui o id ".$pessoas[$i]['id']. "<br> <hr>";
        }// laço for each
        foreach($pessoas as $chave => $valor){
            echo " O cliente ".$valor[$i]['nome']." Possui o id ".$valor['id']." indice ".$chave."<br>";
        }
        echo "Final programa";
        ?>
    </div>
</body>
</html>