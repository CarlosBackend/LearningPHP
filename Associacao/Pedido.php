<?php

class Pedido{
    public int $numeroPedido;
    public float $valor;
    public Cliente $cliente;

    public function __construct(int $numeroPedido,float $valor,Cliente $cliente){
        $this->numeroPedido = $numeroPedido;
        $this->valor = $valor;
        $this->cliente = $cliente;
    }

    public function apresentarPedido(): void{
        echo "Numero do Pedido: ".$this->numeroPedido ."<br>";
        echo "Valor do Pedido: ".$this->valor ."<br>";
        echo "Cliente: ".$this->cliente->nome ."<br>";
        echo "Email cliente: ".$this->cliente->email ."<br>";
    }
}
