<?php require_once("cabecalho.php"); ?>
<?php
$id = $_POST['id'];
$territorioA = buscaParaAlterar($conexao,$id);

?>

<div class="form-group float-left">
  <form action="atualiza-alteracao-registro.php" name="formAdd" method="post">
  <div class="form-group">
    <label for="iniciolabel">Data Início do territorio</label>
    <input type="date" class="form-control datas" id="iniciodata" name="inicioData" value="<?=$territorioA['data_inicio']?>" placeholder="Insira uma Data" onclick="mascaraData(inicioData);" maxlength="10">
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
    <input type="text" class="form-control"  placeholder="Insira uma Observação" name="obsTerritorio" value="<?=$territorioA['obs']?>">
  </div>
  <div class="form-group">
    <label for="dirigente">Territorio Dirigido por:</label>
    <input class="form-control" type="text" name="dirigente" placeholder="Dirigido por:" value="<?=$territorioA['dirigente']?>">
  </div>
  <div>
    <input type="hidden" name="numTer" value="<?=$territorioA['numero_territorio']?>">
  </div>
  <input type="hidden" name="id" value="<?=$id?>">
  <button type="submit" class="btn btn-primary">Atualizar</button>
</form>
</div>
<?php require_once("rodape.php"); ?>
