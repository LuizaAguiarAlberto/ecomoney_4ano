<header>
  <nav class="navbar navbar-dark bg-dark">
    <img class="ecomoney" src="img/cad.jpeg"></img>
    <div class= "inline">
      <table>
      <tr>
        <form action="php/efetuar_login.php" method="POST" class="my-2 my-sm-0">
            <div class="cor">
              <td>
                <input type="email" class="text_input" name="email" id="email_login" placeholder="E-mail" required="required"/>
              </td>
              <td>
                <input type="password"  class="text_input" name="senha" id="senha_login" placeholder="Senha" required="required"/>
              </td>
            </div>
            <td></td>
            <td>
              <button class="btn btn-outline-success my-2 my-sm-0">Entrar</button>
            </td>
            <td></td>
            <td></td>
            <td></td>
        </form>
        <td>
          <button class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-target="#Novousuario">Cadastrar</button>
        </td>
      </tr>
      </table>
    </div>
  </nav>
</header>