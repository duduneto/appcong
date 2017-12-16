function desabilitaFim(){
  if(document.getElementById('2').checked){
  document.getElementById('1').disabled=false;
}else {
  document.getElementById('1').disabled=true;

  }
}
 $(document).ready(function () {
    $('.datas').mask("99-99-9999");
   return false;

});
function mostraModal(e,a){

  document.getElementById('idParaDeletar').value = e;
  $('#myModal').modal('show');
  console.log(e);
  console.log(a);
  document.getElementById('iddir').innerHTML = a;
};
