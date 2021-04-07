<header>
  <nav class="navbar navbar-dark bg-dark">
    <img class="ecomoney" type="button" src="../img/cad.jpeg" href= "perfil_user.php"></img>
    <a href= "perfil_user.php"><button class="btn btn-sm btn-outline-secondary" type="button">Perfil</button></a>
    <div class="btn-group" role="group">
        <button id="btnGroupDrop1" type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cadastros
        </button>
        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <a class="dropdown-item" href="form_cadastro_conta.php">Cadastro de contas</a>
            <a class="dropdown-item" href="form_cadastro_economia.php">Cadastro de economias</a>
        </div>
    </div>
    <div class="btn-group" role="group">
        <button id="btnGroupDrop1" type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Listas
        </button>
        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <a class="dropdown-item" href="lista_conta.php">Lista de contas</a>
            <a class="dropdown-item" href="lista_projetos.php">Lista de projetos</a>
        </div>
    </div>
    <a href= "projetos_investimento.php"><button class="btn btn-sm btn-outline-secondary" type="button">Projetos de Investimentos</button></a>
    <a href= "acompanhe_seu_progresso.php"><button class="btn btn-sm btn-outline-secondary" type="button">Acompanhe seu progresso</button></a>
    <a href= "sair.php"><button class="btn btn-sm btn-outline-secondary" type="button">Sair</button></a>
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </nav>
</header>