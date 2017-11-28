<?php require_once("cabecalho.php"); ?>

<!-- Aqui temos um formulário. Cada botão representado na página é um formulário.
    Mas só o que aparece é o botão. Pode ver q o input é type=hidden. Significa q ele está escondido.
    no <button> tem uma classe "largurabtn". Essa classe define a largura dos butoes para ficar
    tamanho único. Pois vc pode perceber que entra as tags <button> e </button> temos o valor do $i.
    E quando temos um valor com 2 digitos o botão fica mais largo do q quando temos 1 digito.

    O valor 27 é pq preciso de 26 botões pois na minha Cong tem 26 territórios.

    
    -->
<div class="btn btn-toolbar">
  <?php for ($i=1; $i<27 ; $i++) {?>
    <div class="ml-2 mr-2">
      <form class="" action="cookear-territorio.php" method="post">
        <input type="hidden" name="numero-territorio" value="<?= $i ?>">
        <button class="btn btn-secondary largurabtn" type="submit"><?= $i ?></button>
      </form>
    </div>

  <?php
      }
  ?>

  </div>
<?php require_once("rodape.php"); ?>
