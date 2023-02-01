<?php 

    class Estoque{

    private string $produto;
    private int $qnt;
    private float $val;


        public function __construct( string $produto, int $qnt, float $val){
        $this->produto = $produto;
        $this->qnt     = $qnt;
        $this->val     = $val;

        }             

        public function __set( string $var, string $esc){
        $this->var = $esc;
        }

        public function __get( string $var){
        return $this->var;
        } 
        
        public function __toString() : string
        {
            return "<br>Descrição: ".$this->produto."<br>Uni: ".$this->qnt."<br>R$: ".$this->val;
        }
        












    }
?>