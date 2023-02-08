<?php 

    namespace PHP\Modelo\DAO;

    require_once('Conexao.php');

    use PHP\Modelo\DAO\Conexao;

    class Consultar{
        public function consultarIndividual(Conexao $conexao, string $nomeDaTabela, int $codigo){
            try{
                $conn = $conexao->Conectar();
                $sql = "select * from $nomeDaTabela where codigo = '$codigo'";
                $result = mysqli_query($conn, $sql);

                while($dados = mysqli_fetch_array($result)){
                    if($dados['codigo'] == $codigo){
                        echo "<br>Codigo: ".$dados['codigo']."     CPF: ".$dados['cpf']."     Nome: ".$dados['nome']. "     Telefone: ".$dados['telefone']."    Genero: ".$dados['genero']." Compras: ".$dados['compra']."  Gasto:".$dados["gasto"];
                        return;
                    }
                }
                echo "Não localizado";

                mysqli_close($conn);
            }catch(except $erro){
                echo $erro;
            }
        }


        public function consultarCliTudo(Conexao $conexao){
            try{

                $conn = $conexao->Conectar();
                $sql = "select * from cliente";
                $result = mysqli_query($conn, $sql);

                while($dados = mysqli_fetch_array($result)){
                    echo "<br>Codigo: ".$dados['codigo']."     CPF: ".$dados['cpf']."     Nome: ".$dados['nome']. "     Telefone: ".$dados['telefone']."    Genero: ".$dados['genero']." Compras: ".$dados['compra']."  Gastos:".$dados["gasto"];
                }
                
                mysqli_close($conn);
            }catch(except $erro){
                echo $erro;
            }
        }

        public function consultarFunTudo(Conexao $conexao){
            try{

                $conn = $conexao->Conectar();
                $sql = "select * from funcionario";
                $result = mysqli_query($conn, $sql);

                while($dados = mysqli_fetch_array($result)){
                    echo "<br>Codigo: ".$dados['codigo']."     CPF: ".$dados['cpf']."     Nome: ".$dados['nome']. "     Telefone: ".$dados['telefone']."    Genero: ".$dados['genero']." Cargo: ".$dados['cargo']."  Salario:".$dados["salario"];
                }
                
                mysqli_close($conn);
            }catch(except $erro){
                echo $erro;
            }
        }

        public function consultarEstoqueTudo(Conexao $conexao){
            try{

                $conn = $conexao->Conectar();
                $sql = "select * from estoque";
                $result = mysqli_query($conn, $sql);

                while($dados = mysqli_fetch_array($result)){
                    echo "<br>Codigo: ".$dados['codigo']."     Produto: ".$dados['produto']."     Quantidade: ".$dados['qnt']. "     Valor: ".$dados['val'];
                }
                
                mysqli_close($conn);
            }catch(except $erro){
                echo $erro;
            }
        }



        
    }


?>