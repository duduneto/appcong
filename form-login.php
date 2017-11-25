<?php require_once("cabecalho-login.php"); ?>
<?php require_once("mostra-alerta.php"); ?>
<?php



?>

<form action="valida-usuario.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Usuário</label>
    <input type="text" class="form-control" id="usuarioId" name="usuario" placeholder="Nome Usuário">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="senha" placeholder="Senha">
  </div>

  <button type="submit" class="btn btn-primary">Entrar</button>
</form>

<?php require_once('rodape.php'); ?>
