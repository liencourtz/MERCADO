<?php 

    require_once("Cliente.php");
    require_once("Endereco.php");
    require_once("Estoque.php");
    
    class Mercado{

        private Cliente $cliente;
        private Estoque $estoque;

        public function __construct(Cliente $cliente, Estoque $estoque) 
        {
            $this->cliente = $cliente;
            $this->estoque = $estoque;
        }

        public function comprar(int $cqnt)
        { 
            $s = $this->estoque->qnt - $cqnt;
            if(($this->estoque->qnt) >= $cqnt){
                 $this->estoque->qnt = $s; 
                 return "<br>";
            }

            echo "Erro!";
        }
    }









?>