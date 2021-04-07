<?php
    session_start();
    $id_perfil = $_SESSION['id'];
    $primeiro_nome = $_SESSION['primeiro_nome'];
    $ultimo_nome = $_SESSION['ultimo_nome'];
    $salario = $_POST['salario'];
    $qnt_pessoas = $_POST['qnt_pessoas'];
    $renda_familiar = $_POST['renda_familiar'];
    $foto = $_POST['perfil_foto'];
    $_SESSION['perfil_foto'] = $foto;

    //Abrindo conexão com o BD
    include "../inc/cabecalho_conexao.inc";

        $SQL = "INSERT INTO `perfil` (`id_perfil`, `primeiro_nome`, `ultimo_nome`, `salario`, `qnt_pessoa`, `renda_familiar`, `foto`) 
                VALUES ($id_perfil, '$primeiro_nome', '$ultimo_nome', '$salario', '$qnt_pessoas', '$renda_familiar', '$foto')";

    include "../inc/rodape_conexao.inc";
    header ("Location:perfil_user.php");
?>