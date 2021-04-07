<?php
    include "../inc/ini_html.inc";
    include "../inc/menu_user.inc";
?>
<div class="container margem">
    </br>
    <center><h2>Lista de contas.</h2>
    <div class="container tabela">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tipo de conta</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Nome</th>
                    <th colspan="2">Operações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Essenciais</td>
                    <td>150</td>
                    <td>Conta de água</td>
                    <td><a class="btn btn-danger" role="button">Remover</a></td>
                    <td><a class="btn btn-warning" role="button">Editar</a></td>
                </tr>
            </tbody>
        </table>
    </div>
    </center>
</div>
<?php
    include "../inc/rodape.inc";
    include "../inc/fim_html.inc";
?>