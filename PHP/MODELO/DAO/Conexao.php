<?php 
    namespace PHP\Modelo\DAO;

    class Conexao{
        public function conectar(){
            try{
                $conn = mysqli_connect('localhost','root','' , 'Mercado');
                if($conn){//testa se conectou
                    return $conn;
                }
                else{
                    echo "<br> Erro";
                }
                
            }catch(Except $erro){
                echo $erro;
            }
        }
    }

?>