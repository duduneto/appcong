function desabilitaFim(){
  if(document.getElementById('2').checked){
  document.getElementById('1').disabled=false;
}else {
  document.getElementById('1').disabled=true;

  }
}
 $(document).ready(function () {
    $('.datas').mask('99-99-9999');
   return false;

});
