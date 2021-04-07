<?php
    include "../inc/ini_html.inc";
    include "../inc/menu_user.inc";
?>
<div class="container">
</br>
<center><h2>Escolha um projeto de investimento para cumprir e alcançar suas metas.</h2>
</br>
    <div class="input-group">
        <div class="input-group-text">
            <input class="form-check-input" type="radio" value="1">
        </div>
    <input class="form-control" type="text" placeholder="Desafio das 52 semanas" aria-label="readonly input example" readonly>
    </div>
    <div class="input-group">
        <div class="input-group-text">
            <input class="form-check-input" type="radio" value="2">
        </div>
    <input class="form-control" type="text" placeholder="Desafio dia 'zero gastos'" aria-label="readonly input example" readonly>
    </div>
    <div class="input-group">
        <div class="input-group-text">
            <input class="form-check-input" type="radio" value="3">
        </div>
    <input class="form-control" type="text" placeholder="Desafio dos 10%" aria-label="readonly input example" readonly>
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