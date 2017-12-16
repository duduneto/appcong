<?php require_once("cabecalho.php");
require_once("conecta.php");
require_once("banco-territorio.php");
// Vamos ler o Cookie com o numero do território e colocar na variavel $territorio.
$territorio = $_COOKIE['cookieNumTer'];
// Com o Cookie em "mãos" vamos fazer uma busca por todas as informações do territorio.
// Que irá nos retornar um array que será colocado na variavel $territorioArray;
$territorioArray = buscaTerritorio($conexao,$territorio);
$userId = $_SESSION['userId'];
?>
<div class="">
  <h1>Território No. <?=$territorio?></h1>
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
    <!-- Vou colocar a Array em outra variavel com todos os campos definidos com nome de $territorioA
          Cada campo do território vai popular a tabela
    -->
    <?php while($territorioA = mysqli_fetch_array($territorioArray)){?>

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

        <?php $id = $territorioA['id'];
        if ($_SESSION['userAdm']==1 || ($territorioA['userId'] == $userId)) {?>
          <td>
            <form class="" action="remove-territorio.php" method="post">
              <input type="hidden" name="id" value="<?=$id?>">
              <button class="btn btn-danger" type="submit" name="button">Deletar</button>
            </form>
          </td>
        <?php
        }
        ?>

        <td></td>


    </tr>
  <?php
  }#endforeach;
  ?>

  </tbody>
</table>
</div>
<?php
$territorio = $_COOKIE['cookieNumTer'];
?>
<!-- Esse botão irá levar o usuário para uma página para adicionar um novo Registro de Territorio -->
<div class="btn btn-group ">
  <!-- O numero do território é passado via metodo post do formulário abaixo -->
  <form class="" action="adicionar-registro.php" method="post"> <!--Esse metodo -->
    <input type="hidden" name="numeroTerritorio" value="<?=$territorio?>">
    <button class="btn btn-primary"type="submit" name="button">Adicionar Registro</button>
  </form>
</div>

<div>

<!-- Temos aqui um Botão Trigger que vai ativar o Modal -->
  <button type="button" id="btnModal" class="btn btn-secondary" data-toggle="modal" data-target="#meumodal">
    Mostrar Território
  </button>

  <!-- Modal com a foto do territorio -->
  <div class="modal" id="meumodal" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span></button>
          <h4 class="modal-title">Território <?= $territorio ?></h4>
        </div>
        <div class="modal-body">
          <div class="container">
            <figure class="">
              <!-- ATENÇÃO AQUI para o Nome da Foto-->
              <img class="img-fluid" src="img/territorio<?= $territorio ?>.png" alt="Imagem do territorio <?= $territorio ?>">
              <!-- A tag img faz apenas um src para a pasta img procurando a foto que tem como:
                    territorio+A variavel com o numero do territorio+.png
             -->
            </figure>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require_once("rodape.php"); ?>
