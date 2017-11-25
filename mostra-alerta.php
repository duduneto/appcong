


<!-- // $loginErro = $_GET['login'];

// function mostraAlerta(){
//   if (isset($_COOKIE['login-error']) and $_COOKIE == true) { -->
    <?php
    if (isset($_GET['login'])){?>
      <p class="text-danger">Usuário ou Senha Incorretos.</p>
    <?php
  }else {?>
    <p class="text-success">Faça seu Login</p>
  <?php
  }
//   }
// }
?>
