<?php
    session_start();
    $id_usuario = $_SESSION['id'];
    $primeiro_nome = $_SESSION['primeiro_nome'];
    $ultimo_nome = $_SESSION['ultimo_nome'];
    $nome_conta = $_POST['nome_conta'];
    $preco_em_reais = $_POST['preco_em_reais'];

    //Abrindo conexão com o BD
    include "../inc/cabecalho_conexao.inc";

        $SQL = "INSERT INTO `conta` (`id_usuario`, `primeiro_nome`, `ultimo_nome`, `nome_conta`, `preco_em_reais`) 
                VALUES ($id_usuario, '$primeiro_nome', '$ultimo_nome', '$nome_conta', '$preco_em_reais')";

    include "../inc/rodape_conexao.inc";
    header ("Location:perfil_user.php");
?>