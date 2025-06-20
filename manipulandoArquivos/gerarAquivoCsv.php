<?php
// Trabalhando com manipulação de arquivos com o PHP
function gerarArquivoCsv($nomeArquivo, $users)
{
    // verifica se os dados existem
    if(count($users) >0):
        $escreverCsv = fopen($nomeArquivo,'w');// O metodo fopen(); abre um arquivo
        foreach($users as $dados){
            fputcsv($escreverCsv, $dados);// O metodo fputcsv escreve uma linha formatada como CSV (valores separados por vírgula em um arquivo)
        }
        fclose($escreverCsv);// O metodo fclose fecha um arquivo que foi aberto pelo fopen();
    else:
        echo"Não há dados";
    endif;
}
$users = [
    ["nome","Idade","E-mail"],
    ["João",34,"joao@gmail.com",],
    ["Carlos",26,"carlos@gmail.com",],
    ["Lucas",22,"lucas@yahoo.com",],
    ["Maria",21,"maria@outlook.com",]
];
$nomeArquivo = "users.csv";
$nomeArquivo1 = "produto.csv";
gerarArquivoCsv($nomeArquivo1,$users);