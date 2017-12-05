<?php require_once("cabecalho.php"); ?>
<?php require_once("banco-territorio.php"); ?>
<?php
// numero do territorio é colocado na variavel $territorio
$territorio = $_POST['numeroTerritorio'];
$userId = $_SESSION['userId'];
?>
<div class="form-group float-left">
  <form action="atualiza-registro.php" name="formAdd" method="post">
  <div class="form-group">
    <label for="iniciolabel">Data Início do territorio</label>
    <input type="date" class="form-control datas" id="iniciodata" name="inicioData" placeholder="Insira uma Data" onclick="mascaraData(inicioData);" maxlength="10">
  </div>
  <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input" id="2" name="concluido" onclick="javascript:desabilitaFim();"> Territorio Concluido</label>
  </div>
  <div class="form-group">
    <label for="fimlabel">Término do Territorio</label>
    <input type="date" class="form-control datas" id="1" placeholder="Insira uma Data" name="fimData" disabled>
  </div>
  <div class="form-group">
    <label for="fimlabel">Observação sobre o Territorio</label>
    <input type="text" class="form-control"  placeholder="Insira uma Observação" name="obsTerritorio">
  </div>
  <div class="form-group">
    <label for="dirigente">Territorio Dirigido por:</label>
    <input class="form-control" type="text" name="dirigente" placeholder="Dirigido por:">
  </div>
  <!-- Input com o número do território -->
  <input type="hidden" name="numeroTerritorio" value="<?=$territorio?>">
  <input type="hidden" name="userId" value="<?=$userId?>">
  <button type="submit" class="btn btn-primary">Registrar</button>
</form>
</div>

<?php require_once("rodape.php"); ?>
