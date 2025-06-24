<?php   
$pessoas = [
            ['id'=> 1, 'nome' => 'Ronaldo'],
            ['id'=> 2, 'nome' => 'Joao'],
            ['id'=> 3, 'nome' => 'Maria'],
            ['id'=> 4, 'nome' => 'Pedro'],
     ];
$i = 0;
while($i < count($pessoas)){
    echo " O Cliente ".$pessoas[$i]['nome']." Possui o id ".$pessoas[$i]['id'];
    $i++;
};
//