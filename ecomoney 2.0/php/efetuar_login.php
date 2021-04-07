<?php
    session_start();
    include "../inc/cabecalho_conexao.inc";

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $SQL = "SELECT `email`, `senha`, `id`, `primeiro_nome`, `ultimo_nome` FROM `usuarios` WHERE email = '$email' AND senha = '$senha'";

        $dados_recuperados = mysqli_query($con, $SQL);

        if(mysqli_num_rows($dados_recuperados) > 0){
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            while( ($resultado = mysqli_fetch_array($dados_recuperados)) != null) {
                if(($resultado[0] == 'ecomoney.financa@gmail.com')&&($resultado[1]=='123')){
                    $_SESSION['id'] = $resultado[2];
                    $_SESSION['primeiro_nome'] = $resultado[3];
                    $_SESSION['ultimo_nome'] = $resultado[4];
                    include "../inc/rodape_conexao.inc";
                    header ("Location:perfil_adm.php");
                }else{
                    $_SESSION['id'] = $resultado[2];
                    $_SESSION['primeiro_nome'] = $resultado[3];
                    $_SESSION['ultimo_nome'] = $resultado[4];
                    include "../inc/rodape_conexao.inc";
                    header ("Location:perfil_user.php");
                }
                
            }
        }else{
            include "../inc/rodape_conexao.inc";
            header ("Location:../index.php");
        }
?>