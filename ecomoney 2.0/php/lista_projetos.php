<?php
    include "../inc/ini_html.inc";
    include "../inc/menu_user.inc";
?>
<div class="container margem">
    </br>
    <center><h2>Acompanhe os projetos de investimento que você escolheu e não deixe de continuar a economizar.</h2>
    <div class="container tabela">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tipo escolhido</th>
                    <th colspan="2">Operações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Desafio das 52 semanas</td>
                    <td><a class="btn btn-danger" role="button">Remover</a></td>
                    <td><a class="btn btn-warning" role="button">Editar</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Desafio dos 10%</td>
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