<?php require_once("cabecalho.php"); ?>
<?php require_once("conecta.php"); ?>
<?php require_once("banco-territorio.php"); ?>
<?php
$territorio = $_COOKIE['cookieNumTer'];

$territorioArray = buscaTerritorio($conexao,$territorio);

?>
<div class="">
<table class="table table-striped">
  <thead>
    <tr>

      <th>Data Inicio</th>
      <th>Data Término</th>
      <th>Observação</th>
      <th>Dirigente</th>



    </tr>
  </thead>
  <tbody>
    <?php while($territorioA = mysqli_fetch_array($territorioArray)){ ?>
    <?php #var_dump($territorioA); ?>
    <tr>

      <td id="datainicio"><?= $territorioA['data_inicio'] ?></td>
      <?php if ($territorioA['data_fim']==0) {?>
        <td class="text-danger"> Não Concluido</td>

      <?php
      }else {?>
        <td id="datafim"><?= $territorioA['data_fim'] ?></td>
      <?php
      }
      ?>
      <td id="obs"><?= $territorioA['obs']?></td>
      <td><?=$territorioA['dirigente']?></td>

      <?php if ($territorioA['data_fim']==0) {?>
        <td>
          <form class="" action="altera-territorio.php" method="post">
            <input type="hidden" name="id" value="<?=$territorioA['id']?>">
            <button class="btn btn-secondary" type="submit" name="button">Concluir</button>

          </form>
        </td>
      <?php
      }else {?>
        <td></td>
      <?php
      }
      ?>

      <td>
        <?php $id = $territorioA['id']; ?>
        <form class="" action="remove-territorio.php" method="post">
          <input type="hidden" name="id" value="<?=$id?>">
          <button class="btn btn-danger" type="submit" name="button">Deletar</button>
        </form>
      </td>
      <td></td>

    </tr>
  <?php
  }#endforeach;
  ?>

  </tbody>
</table>
</div>
<?php $territorio = $_COOKIE['cookieNumTer'];
?>
<!--<div class="float-right">
  <button type="button" class="btn btn-primary" id="btn">Mostrar Territorio</button>
</div>-->
<div class="btn btn-group ">
  <form class="" action="adicionar-registro.php" method="post">
    <input type="hidden" name="numeroTerritorio" value="<?=$territorio?>">
    <button class="btn btn-primary"type="submit" name="button">Adicionar Registro</button>
  </form>
</div>
<!--<div id="modau" class="modal modal-fade" style="display:none">
  <figure class="figure figure-img img-responsive">
    <img class="img-fluid " id="imagemterritorio" src="img/territorio<?=$territorio?>.png">
    <figcaption class="figure-caption">Territorio <?=$territorio?>.</figcaption>
  </figure>
</div>-->
<div>


  <button type="button" id="btnModal" class="btn btn-primary " data-toggle="modal" data-target="#meumodal" >
    Mostrar Território
  </button>

  <!-- Modal -->
  <div class="modal" id="meumodal" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">Tem algo aqui</span></button>
          <h4 class="modal-title">Território <?= $territorio ?></h4>
        </div>
        <div class="modal-body">
          <div class="container">
            <figure>
              <img src="img/territorio<?= $territorio ?>.png" alt="Imagem do territorio <?= $territorio ?>">
            </figure>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">CLOSE</button>
          <button type="button" class="btn btn-primary"> SAVE CHANGES</button>
        </div>
      </div>
    </div>
  </div>
</div>


<?php
?>

<?php require_once("rodape.php"); ?>
