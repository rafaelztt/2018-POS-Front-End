
<?php

$nome = $_GET['nome'];

if($nome == 'Rafael'){

  echo '{
    "nome" : "Rafael Zottesso",
    "email": "rafael.zottesso@ifpr.edu.br",
    "fone": "(44) 99999-9999"
  }';

} else {

  echo '{
    "nome" : "Fulano de tal",
    "email": "fulano@tal",
    "fone": "(44) 888888-9999"
  }';

}

?>
