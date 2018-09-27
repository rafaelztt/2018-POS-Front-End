<?php

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

// Procedimento para verificar este usuário
if($usuario != "" && $senha != ""){
// fecha o PHP para colocar HTML direto
?>
  <span class="text-success">Autenticação realizada!</span>
<?php
// Volta ao PHP para usar o jeito tradicional
} else {

  echo "<span class='text-danger'>Login ou senha inválido!</span>";

}


?>
