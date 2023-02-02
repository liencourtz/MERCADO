<?php 

    class Estoque{

        protected string $produto;
        public int $qnt;
        protected float $val;


        public function __construct( string $produto, int $qnt, float $val){
            $this->produto = $produto;
            $this->qnt     = $qnt;
            $this->val     = $val;
        }             

        public function __get(string $var) {
            return $this->$var;
        } 

        public function __set(string $var, string $esc){
            $this->var = $esc;
        }

        public function __toString() : string
        {
            return "<br>Descrição: ".$this->produto."<br>Uni: ".$this->qnt."<br>R$: ".$this->val;
        }
        












    }
?>