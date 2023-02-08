<?php 
    namespace PHP\Modelo\DAO;

    require_once('Conexao.php');
    require_once('Consultar.php');
    require_once('Inserir.php');


    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Consultar;
    use PHP\Modelo\DAO\Inserir;

    class Atualizar{
        
      public function update(Conexao $conexao, string $campo, string $novoDado, string $codigo, string $nomeDaTabela){
        try{
            $conn = $conexao->conectar();
            $sql = "update $nomeDaTabela set $campo = '$novoDado' where codigo = '$codigo'";
            $result = mysqli_query($conn,$sql);

            mysqli_close($conn);

            if($result){
                echo "<br> Atualizado com sucesso!";
                return;
            }
            echo "<br> Error.";
        }catch(except $erro){
            echo $erro;
        }
      }

      public function compra(Conexao $conexao, Consultar $verif, Inserir $insert, int $qnt, int $codigo){
        try{

          $teste = $verif -> consultarEstoque($conexao, $codigo);
          if ($teste >= $qnt){

            $conn = $conexao ->conectar();
            $sql = "update estoque set qnt = qnt - $qnt  where codigo = '$codigo'";
            mysqli_query($conn, $sql);
            echo "<br>Inserido no carrinho!";

          }else{

            echo "<br> Estoque insuficiente";

          }
          
          

        }catch(except $erro){
          echo $erro;
        }
  }

    }
?>