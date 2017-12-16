<?php require_once("cabecalho.php"); ?>
<?php require_once("conecta.php"); ?>
<?php require_once("banco-territorio.php");?>
<?php require_once("banco-usuario.php"); ?>
<?php require_once("logica-usuario.php"); ?>
<?php
$territorioArray = buscaTerritorioData($conexao);
// $valorSessionUserId = $_SESSION['userId'];
?>
<!-- Tabela que vai expor todos as últimas atividades dos Territórios. -->

<table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>No.</th>

      <th>Data Término</th>
      <th>Dirigente</th>
    </tr>
  </thead>
  <tbody>
    <!-- Quando é chamada função buscaTerritorioData ela retorna um Array e
          enquanto houver algum valor dentro desse array ele vai excecutar a criação de <td>'s.
          Cara campo nessa array é utilizado para preencher o <ts>.
   -->
    <?php while ($territorioA = mysqli_fetch_array($territorioArray)){?>

      <tr onclick="location.href='cookear-territorio-index.php?numter=<?=$territorioA['numero_territorio']?>'">
        <td><?=$territorioA['numero_territorio']?></td>
        <!-- Esse pequeno IF é feito para tratar os territórios que não foram concluídos
              colocando um "Não Concluido" para todos que não tiveram o checkbox marcado como Concluido.
       -->
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
<!-- O Rodapé é só o fechamento das tags q foram abertas no Cabecalho. Ah! E alguns Scripts de Javascripts -->
<?php require_once("rodape.php"); ?>
