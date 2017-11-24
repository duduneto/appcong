<?php require_once("cabecalho.php"); ?>
<?php require_once("conecta.php"); ?>
<?php require_once("banco-territorio.php");?>
<?php require_once("banco-usuario.php"); ?>
<?php require_once("logica-usuario.php"); ?>
<?php
$territorioArray = buscaTerritorioData($conexao);
?>

<table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>No.</th>

      <th>Data Término</th>
      <th>Dirigente</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($territorioA = mysqli_fetch_array($territorioArray)){?>

      <tr>
        <td><?=$territorioA['numero_territorio']?></td>
        <?php if($territorioA['datareg'] == 0){?>
          <td class="text-danger">Não Concluido</td>
        <?php
      }else {?>
        <td class=""><?=$territorioA['datareg']?></td>
      <?php
      }
      ?>
        <td><?=$territorioA['dirigente']?></td>
      </tr>

      <?php
      }
      ?>



  </tbody>
</table>

<?php require_once("rodape.php"); ?>
