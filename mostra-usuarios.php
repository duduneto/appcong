<?php require_once("cabecalho.php");
$users = findAllUsers($conexao);?>

<table class="table table-striped">
  <thead>
      <tr>
        <th>Nome Usuário</th>
        <th>Ações</th>
      </tr>
  </thead>
  <tbody>
    <tr>
      <?php while ($usersArray = mysqli_fetch_array($users)) {?>
        <td><?=$usersArray['nome']?></td>
        <td>
          <form class="" action="remove-usuario.php" method="post">
            <input type="hidden" name="id" value="<?=$usersArray['id']?>">
            <button class="btn btn-danger" type="button" name="button">Deletar</button>
          </form>
        </td>
      }

    </tr>
  </tbody>
</table>
