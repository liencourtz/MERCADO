<?php 

    class Endereco{

        protected string $end;
        protected int $num;
        protected string $bairro;
        protected string $cidade;
        protected string $estado;
        protected string $cep;


        public function __construct(string $end, int $num, string $cidade, string $estado, string $cep){
            $this-> end = $end;
            $this-> num = $num;
            $this-> cidade = $cidade;
            $this-> estado = $estado;
            $this-> cep = $cep;
        }

        public function __set( string $var, string $esc){
            $this->var = $esc;
        }

        public function __get( string $var){
            return $this-> $var;
        } 
        
        public function __toString() : string
        {
            return "<br>Endereço: ".$this->end."<br>Numero: ".$this->num."<br>Cidade: ".$this->cidade."<br>Estado: ".$this->estado."<br>CEP: ".$this->cep;
        }

    }







?>