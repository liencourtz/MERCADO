<?php 
    
    require_once("Endereco.php");

    abstract class Pessoa{
        protected string $cpf;
        protected string $nome;
        protected string $telefone;
        protected string $gen;
        protected Endereco $endereco;


        public function __construct(string $cpf, string $nome, string $telefone, string $gen, Endereco $endreco){
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->gen = $gen;
            $this->endereco = $endreco;
        }


        public function __set( string $var, string $esc){
            $this->var = $esc;
        }

        public function __get( string $var){
            return $this-> $var;
        } 
        
        public function __toString() : string
        {
            return "<br><br>CPF: ".$this->cpf."<br>Nome: ".$this->nome."<br>Tel: ".$this->telefone. "<br>Genero: ".$this->gen. "".$this->endereco;
        }
    }



?>