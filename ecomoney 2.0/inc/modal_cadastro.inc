<div class="modal" tabindex="-1" role="dialog" id="Novousuario">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Cadastro do Usuário</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="php/cadastro_usuario.php" method="POST">
	            <div class="modal-body">
		            <div class="row">
			            <div class="form-group col-sm-6 col-xs-12">
				            <label>Primeiro Nome</label>
				            <input type="text" name="primeiro_nome" id="primeiro_nome" class="form-control" required="required" />
			            </div>
			            <div class="form-group col-sm-6 col-xs-12">
				            <label>Último Nome</label>
				            <input type="text" name="ultimo_nome" id="ultimo_nome" class="form-control" required="required" />
			            </div>
		            </div>
	                <div class="row">
		                <div class="form-group col-sm-6 col-xs-12">
			                <label>Estado</label>
			                <select class="custom-select" name="uf">
			                    <option selected>Selecione um Estado</option>
			                    <option value="AC">AC</option>
                                <option value="AL">AL</option>
                                <option value="AM">AM</option>
                                <option value="AP">AP</option>
                                <option value="BA">BA</option>
        	                    <option value="CE">CE</option>
                                <option value="DF">DF</option>
                                <option value="ES">ES</option>
                                <option value="GO">GO</option>
                                <option value="MA">MA</option>
                                <option value="MG">MG</option>
                                <option value="MS">MS</option>
                                <option value="MT">MT</option>
                                <option value="PA">PA</option>
                                <option value="PB">PB</option>
                                <option value="PE">PE</option>
                                <option value="PI">PI</option>
                                <option value="PR">PR</option>
                                <option value="RJ">RJ</option>
                                <option value="RN">RN</option>
                                <option value="RO">RO</option>
                                <option value="RR">RR</option>
                                <option value="RS">RS</option>
                                <option value="SC">SC</option>
                                <option value="SE">SE</option>
                                <option value="SP">SP</option>
                                <option value="TO">TO</option>
		                    </select>
	                    </div>
		                <div class="form-group col-sm-6 col-xs-12">
			                <label>Cidade</label>
			                <input type="text" name="cidade" id="cidade" class="form-control" required="required" />
		                </div>
	                </div>
	                <div class="row">
	                    <div class="form-group col-sm-12 col-xs-12">
			                <label>E-mail</label>
			                <input type="email" name="cad_email" id="cad_email" class="form-control email" required="required" />
		                </div>
	                </div>
	                <div class="row">
		                <div class="form-group col-sm-6 col-xs-12">
		                    <label>Senha</label>
		                    <input type="password" name="senha" id="senha" class="form-control password" required="required" />
		                </div>
		                <div class="form-group col-sm-6 col-xs-12">
			                <label>Confirmação de senha</label>
			                <input type="password" name="senha" id="confirmacao_de_senha" class="form-control password" required="required" />
		                </div>
	                </div>
                    <div class="modal-footer">
		                <button type="submit" class="btn btn-secondary">Salvar</button>
	                </div>
                </div>
            </form>
        </div>
	</div>
</div>
