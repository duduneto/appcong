<?php require_once('cabecalho.php');?>


<form action="cria-usuario.php" method="post">
  <div class="form-group">
    <label for="inputUsuario">Usuário</label>
    <input type="text" class="form-control" id="usuarioId" name="usuario" placeholder="Usuário">
    <small id="emailHelp" class="form-text text-muted">Não compartilhe seu Usuário e sua Senha.</small>
  </div>
  <div class="form-group">
    <label for="inputNome">Nome</label>
    <input type="text" class="form-control" id="usuarioId" name="nomeDoUsuario" placeholder="Nome">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="senha" placeholder="Senha">
  </div>

  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>

<?php require_once('rodape.php');?>
