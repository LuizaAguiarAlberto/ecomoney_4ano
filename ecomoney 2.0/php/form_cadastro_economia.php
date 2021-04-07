<?php
    include "../inc/ini_html.inc";
    include "../inc/menu_user.inc";
?>
<div class="container margem">
</br>
<center><h2>Cadastre sua economia.</h2>
</br>
    <select class="form-control" aria-label="Default select example">
        <option selected>Selecione o mês</option>
        <option value="1">Janeiro</option>
        <option value="2">Fevereiro</option>
        <option value="3">Março</option>
        <option value="4">Abril</option>
        <option value="5">Maio</option>
        <option value="6">Junho</option>
        <option value="7">Julho</option>
        <option value="8">Agosto</option>
        <option value="9">Setembro</option>
        <option value="10">Outubro</option>
        <option value="11">Novembro</option>
        <option value="12">Dezembro</option>
    </select>
    </br>
    <div class="input-group">
    <input class="form-control" type="text" placeholder="Insira o quanto economizou neste mês" aria-label="readonly input example"/>
    </div>
    </br>
    <div>
		<button type="submit" class="btn btn-secondary">Salvar</button>
	</div>
</center>
</div>
<?php
    include "../inc/rodape.inc";
    include "../inc/fim_html.inc";
?>