<?php
    include "../inc/ini_html.inc";
    include "../inc/menu_user.inc";
?>
<div class="container margem">
</br>
<center><h2>Cadastre sua conta.</h2>
</br>
    <form action="cadastro_conta.php" method="POST">
        <select class="form-control" aria-label="Default select example">
            <option selected>Selecione um tipo de conta</option>
            <option value="1">Essenciais</option>
            <option value="2">Prestações</option>
            <option value="3">Normal</option>
        </select>
        </br>
        <div class="input-group">
            <input class="form-control" type="text" name="nome_conta" placeholder="Nome da conta" aria-label="readonly input example"/>
        </div>
        </br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">R$</span>
            </div>
            <input class="form-control" type="number" name="preco_em_reais" placeholder="Preço da conta em reais" aria-label="readonly input example"/>
        </div>
        </br>
        <div>
            <button type="submit" class="btn btn-secondary">Salvar</button>
        </div>
    </form>
</center>
</div>
<?php
    include "../inc/rodape.inc";
    include "../inc/fim_html.inc";
?>