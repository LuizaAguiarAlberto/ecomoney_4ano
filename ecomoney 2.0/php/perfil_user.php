<?php
    session_start();
    include "../inc/ini_html.inc";
    include "../inc/cabecalho_conexao.inc";

    $id_usuario = $_SESSION['id'];

    $SQL = "SELECT `id_perfil` FROM `perfil` WHERE id_perfil = $id_usuario";

    $dados_recuperados = mysqli_query($con, $SQL);

    if(mysqli_num_rows($dados_recuperados) > 0){
        while( ($resultado = mysqli_fetch_array($dados_recuperados)) != null) {
            include "../inc/menu_user.inc";
            include "../inc/perfil_pronto.inc";            
        }
    }else{
        include "../inc/menu_user_sem_bot.inc";
        include "../inc/perfil.inc";
    }
    include "../inc/rodape_conexao.inc";
    include "../inc/rodape.inc";
    include "../inc/fim_html.inc";
?>