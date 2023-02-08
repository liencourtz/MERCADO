<?php 
    namespace PHP\Modelo\DAO;

    require_once('Conexao.php');

    use PHP\Modelo\DAO\Conexao;

    class Inserir{

        public function cadastrarCli(Conexao $conexao, string $cpf, string $nome, string $telefone, string $gen, int $compras, float $gasto){
            try{
                $conn = $conexao->Conectar();
                $sql = "insert into cliente(codigo, cpf, nome, telefone, genero, compra, gasto) values ('','$cpf','$nome','$telefone','$gen', '$compras', '$gasto')";
                $result = mysqli_query($conn,$sql);//Execut as ações no BD
                mysqli_close($conn);

                if($result){
                    return "<br><br>Inserido com sucesso!";
                }
                return "<br><br> Não inserido!";
                
            }catch(Except $erro){
                echo $erro;
            }
        }


        public function cadastrarFun(Conexao $conexao, string $cpf, string $nome, string $telefone, string $gen, string $cargo, float $salario){
            try{
                $conn = $conexao->Conectar();
                $sql = "insert into funcionario(codigo, cpf, nome, telefone, genero, cargo, salario) values ('','$cpf','$nome','$telefone','$gen', '$cargo', '$salario')";
                $result = mysqli_query($conn,$sql);//Execut as ações no BD
                mysqli_close($conn);

                if($result){
                    return "<br><br>Inserido com sucesso!";
                }
                return "<br><br> Não inserido!";
                
            }catch(Except $erro){
                echo $erro;
            }
        }

        public function cadastrarEnd(Conexao $conexao, string $end, int $num, string $cidade, string $estado, string $cep){
            try{
                $conn = $conexao->Conectar();
                $sql = "insert into endereco(codigo, enderec, num, cidade, estado, cep) values ('','$end','$num','$cidade','$estado', '$cep')";
                $result = mysqli_query($conn,$sql);//Execut as ações no BD
                mysqli_close($conn);

                if($result){
                    return "<br><br>Inserido com sucesso!";
                }
                return "<br><br> Não inserido!";
                
            }catch(Except $erro){
                echo $erro;
            }
        }

        public function cadastroEstoque(Conexao $conexao, string $produto, int $qnt, float $val){
            try{
                $conn = $conexao->Conectar();
                $sql = "insert into estoque(codigo, produto, qnt, val) values ('','$produto','$qnt','$val')";
                $result = mysqli_query($conn,$sql);//Execut as ações no BD
                mysqli_close($conn);

                if($result){
                    return "<br><br>Inserido com sucesso!";
                }
                return "<br><br> Não inserido!";
                
            }catch(Except $erro){
                echo $erro;
            }
        }



    }
?>