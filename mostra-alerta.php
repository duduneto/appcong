
<?php

function mostraAlerta(){
  if (isset($_COOKIE['login-error']) and $_COOKIE == true) {?>
    <p class="text-danger">Usuário ou Senha Incorretos.</p>
    <?php
  }
}
?>
