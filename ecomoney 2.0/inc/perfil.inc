<div class="transf">
    <form action="cadastro_perfil.php" method="POST">
        <div class="container margem">
            <div class="row">
                <div class= "mx-auto">
                    <div id="meucarrossel" class="carousel slide carousel-fade" data-interval="false">
                        
                        <?php
                            echo'<ol class="carousel-indicators">';
                            echo'<li data-target="#meucarrossel" data-slide-to="0" class="active"></li>';
                            for($i=1;$i<9;$i++){
                                echo'<li data-target="#meucarrossel" data-slide-to="'.$i.'"></li>';
                            }
                            echo'</ol>';
                            echo'<div class="carousel-inner">';

                            echo'<div class=" carousel-item active">
                                        <center><input type="image" class="img" value="../img/perfil/0.png" name="perfil_foto" src="../img/perfil/0.png"></center>
                                    </div>';
                            
                            $foto = ['../img/perfil/1.png', '../img/perfil/2.png', '../img/perfil/3.png', '../img/perfil/4.png', '../img/perfil/5.png', '../img/perfil/6.png', '../img/perfil/7.png', '../img/perfil/8.png'];
                            for($x=0;$x<7;$x++){
                                echo'<div class=" carousel-item">
                                        <center><input type="image" class="img" value="'.$foto[$x].'" name="perfil_foto$x+1" src="'.$foto[$x].'"/></center>
                                    </div>';
                            }
                        echo'</div>';
                        ?>
                        <a class="carousel-control-prev" href="#meucarrossel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#meucarrossel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Próximo</span>
                        </a>
                    </div>
                </div>
            </div class="row">
            <div class="transf">
                <div class="form-row">
                    <div class="form-group col-sm-6 col-xs-12">
                        <label>Salário:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">R$</span>
                                </div>
                                <input type="number" name="salario" min="0" step="0.01" class="form-control" id="salario" required>
                            </div>
                    </div>
                    <div class="form-group col-sm-6 col-xs-12">
                        <label for="qnt_pessoas">Quantas pessoas moram na sua casa:</label>
                        <input type="number" name="qnt_pessoas" class="form-control" min="1" id="qnt_pessoas" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-12 col-xs-12">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" name="arrimo" class="custom-control-input" id="arrimo">
                            <label class="custom-control-label" for="arrimo">Arrimo de Família</label>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-12 col-xs-12">
                        <div id="renda_familiar"></div>
                    </div>
                </div>
                <button class="btn btn-dark col-sm-12 col-xs-12" type="submit">Salvar</button>
            </div>
        </div>
    </form>
</div>