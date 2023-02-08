<?php 

    namespace PHP\Modelo;

    require_once('DAO/Conexao.php');
    require_once('DAO/Inserir.php');
    require_once('DAO/Consultar.php');
    require_once('DAO/Atualizar.php');
    require_once('DAO/Deletar.php');

    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Inserir;
    use PHP\Modelo\DAO\Consultar;
    use PHP\Modelo\DAO\Atualizar;
    use PHP\Modelo\DAO\Deletar;

    $connect = new Conexao();
    $insert = new Inserir();
    $print = new Consultar();
    $del = new Deletar();
    $update = new Atualizar();
    

    $connect->conectar();

    //$insert ->cadastrarEnd($connect, 'SENAC', 400, 'Sao Bernardo do Campo', 'SP', '00000000');
    //$insert -> cadastrarCli($connect, '44444444470', 'Filipe Serra', '11999997777', 'Masculino', 1, 1);
    //$insert -> cadastrarFun($connect,'sample', 'sample', 'sample', 'sample', 'sample', 1000);
    //$insert -> cadastroEstoque($connect, 'Pão', 10, 100);

    $print ->consultarEstoqueTudo($connect);
    //$print ->consultarFunTudo($connect);
    //$print ->consultarCliTudo($connect);


    //$del ->deletar($connect, 'Estoque', 3);
    
    //echo $print ->consultarTudo($connect, 'Endereco');




?>