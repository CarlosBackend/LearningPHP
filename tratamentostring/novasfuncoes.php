<?php
    $nome = "Ronaldo Leite Rodrigues";

    //str_contains - verifica se contém 
    echo"Utilizando o metodo str_contains\n";
    var_dump(str_contains($nome,'Leite'));

    //str_starts_with - verifica se a string começa com determinado valor
    echo"Utilizando o metodo str_start_with \n";
    var_dump(str_starts_with(strtolower($nome),'ronaldo'));

    //str_ends_with - verifica termina com determinado valor
    echo"Utilizando o metodo str_end_with \n";
    var_dump(str_ends_with($nome,'Lopez'));
