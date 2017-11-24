<?php require_once("cabecalho.php"); ?>


<div class="btn btn-toolbar">
  <?php for ($i=1; $i<16 ; $i++) {?>
    <div class="ml-2 mr-2">
      <form class="" action="cookear-territorio.php" method="post">
        <input type="hidden" name="numero-territorio" value="<?= $i ?>">
        <button class="btn btn-secondary"type="submit"><?= $i ?></button>
      </form>
    </div>

  <?php
      }
  ?>

  </div>
<?php require_once("rodape.php"); ?>
