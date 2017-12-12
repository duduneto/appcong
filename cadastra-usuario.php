<?php require_once('cabecalho.php');
verificaAdm();
?>
<form id="formCadastraUsuario" action="cria-usuario.php" method="post">
  <div class="form-group">
    <label for="inputUsuario">Usuário</label>
    <input type="text" class="form-control" id="usuarioId" name="usuario" placeholder="Usuário">
    <small id="emailHelp" class="form-text text-muted">Usuário para efetuar o login</small>
  </div>
  <div class="form-group">
    <label for="inputNome">Nome</label>
    <input type="text" class="form-control" id="usuarioId" name="nomeDoUsuario" placeholder="Nome">
    <small id="emailHelp" class="form-text text-muted">Nome do dirigente</small>
  </div>
  <!-- CheckBox para selecionar se o usuário que será criado tem privilégio de Admin. -->
  <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input" name="adm" value="1"> Administrador</label>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="senha1" name="senha" placeholder="Senha">
    <small class="form-text text-muted">Digite sua Senha</small>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword2">Confirme a Senha</label>
    <input type="password" class="form-control" id="senha2" placeholder="Confirme sua Senha">
    <small class="form-text text-muted">Digite Novamente sua Senha</small>
  </div>

  <button type="submit" class="btn btn-primary" id="btnCadastra" onclick="validaSenha()">Cadastrar</button>
</form>

<?php require_once('rodape.php');?>
