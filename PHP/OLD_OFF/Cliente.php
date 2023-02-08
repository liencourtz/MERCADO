<?php 

    require_once("Endereco.php");
    require_once("Pessoa.php");

    class Cliente extends Pessoa{
        protected int $compras;
        protected float $gasto;

        public function __construct( string $cpf, string $nome, string $telefone, string $gen, Endereco $endereco, int $compras, float $gasto){
            parent::__construct($cpf, $nome, $telefone, $gen, $endereco);
            $this->compras = $compras;
            $this->gasto = $gasto;
        }

        public function __set( string $var, string $esc){
            $this->var = $esc;
        }

        public function __get( string $var){
            return $this->$var;
        } 
        
        public function __toString() : string {
            return "<br><br> -----------Cliente----------- <br><br>CPF: ".$this->cpf."<br>Nome: ".$this->nome."<br>Tel: ".$this->telefone. "<br>Genero: ".$this->gen. "".$this->endereco."<br>Compras: ".$this->compras."<br>Gastos: ".$this->gasto." R$";
        }
    }







?>