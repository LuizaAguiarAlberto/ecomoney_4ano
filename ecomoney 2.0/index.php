<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoMoney - Site de Empreendedorismo</title>
    <link rel="stylesheet" href="css/paginas.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" type="favicon/png" href="img/favicon.png"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
<?php
    $acumulo=0;
        if($acumulo==0){
            include "inc/cabecalho_cad_ent.inc";
            include "inc/texto_inicial.inc";
        }
    include "inc/modal_cadastro.inc";
?>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>        
        <script src="js/validaform.min.js"></script>
    </body>
</html>
