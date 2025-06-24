<?php

class Motor{
    public int  $potencia;

    public function __construct(int  $potencia){
        $this->potencia = $potencia;
    }
    public function apresentarPotencia (): void{
        echo "Este carro tem uma potencia de: ".$this->potencia." cavalos";
    }
}
