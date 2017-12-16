function validaSenha(){
  senha1 = document.getElementById('senha1').value;
  senha2 = document.getElementById('senha2').value;
  if (senha1 != senha2) {
    alert("Senhas diferentes! Digite novamente");
    $('#btnCadastra').click(function(e){
      e.preventDefault();
    });
  }else{
    document.getElementById('formCadastraUsuario').submit;
  }
}
