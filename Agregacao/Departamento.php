<?php

class Departamento{
    public string $nomeDepartamento;
    public $funcionarios =[];

    public function __construct(string $nomeDepartamento){
        $this->nomeDepartamento = $nomeDepartamento;
    }

    public function adicionarFuncionario(Funcionario $funcionario): void{
        $this->funcionarios[] = $funcionario;
    }

    public function listarFuncionarios(): void{
        echo "Funcionarios do Departamento de ".$this->nomeDepartamento."<hr>";
        foreach($this->funcionarios as $funcionario){
            echo " ". $funcionario->nome. " Cargo: {$funcionario->cargo}"."<br>";
        }
    }
}