<?php
    $primeiro_nome = $_POST['primeiro_nome'];
    $ultimo_nome = $_POST['ultimo_nome'];
    $uf = $_POST['uf'];
    $cidade = $_POST['cidade'];
    $cad_email = $_POST['cad_email'];
    $senha = $_POST['senha'];
    $conf_senha = $_POST['senha'];
    //Abrindo conexão com o BD
    include "../inc/cabecalho_conexao.inc";

        $SQL = "INSERT INTO `usuarios` (`id`, `primeiro_nome`, `ultimo_nome`, `uf`, `cidade`, `email`, `senha`, `confirmacao_senha`) 
                VALUES (NULL, '$primeiro_nome', '$ultimo_nome', '$uf', '$cidade', '$cad_email', '$senha', '$conf_senha')";

    include "../inc/rodape_conexao.inc";
    header ("Location:../index.php");
?>