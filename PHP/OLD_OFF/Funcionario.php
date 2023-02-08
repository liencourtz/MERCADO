<?php 

    require_once("Endereco.php");
    require_once("Pessoa.php");

    class Funcionario extends Pessoa{
        protected int $codigo;
        protected string $cargo;
        protected float $salario;

        public function __construct( string $cpf, string $nome, string $telefone, string $gen, Endereco $endereco, int $codigo, string $cargo, float $salario){
            parent::__construct($cpf, $nome, $telefone, $gen, $endereco);
            $this->codigo = $codigo;
            $this->cargo = $cargo;
            $this->salario = $salario;
        }

        public function __set( string $var, string $esc){
            $this->var = $esc;
        }

        public function __get( string $var){
            return $this->$var;
        } 
        
        public function __toString() : string
        {
            return "<br><br> -----------Funcionario----------- <br><br>CPF: ".$this->cpf."<br>Nome: ".$this->nome."<br>Tel: ".$this->telefone. "<br>Genero: ".$this->gen. "".$this->endereco."<br>Codigo: ".$this->codigo."<br>Cargo: ".$this->cargo."<br>Salario: ".$this->salario;
        }
    }







?>