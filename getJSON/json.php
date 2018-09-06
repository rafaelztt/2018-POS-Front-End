<?php

// Recebe os dados enviados pela requisição
$id = $_REQUEST['id'];

// Faz a consulta no banco, etc
if(isset($id)){

  echo '
    {
      "pessoas" : [
        {
          "id"    : 1,
          "nome"  : "Rafael Zottesso",
          "email" : "fulano@ifpr.edu.br",
          "fone"  : "(44) 9999-9876"
        }
      ]
    }';

} else {

  echo '
    {
      "pessoas" : [
        {
          "id"    : 2,
          "nome"  : "Fulano de Tal",
          "email" : "fulano@ifpr.edu.br",
          "fone"  : "(44) 9999-9876"
        },
        {
          "id"    : 3,
          "nome"  : "Ciclano da Silva Sauro",
          "email" : "ciclano@ifpr.edu.br",
          "fone"  : "(44) 9999-1234"
        },
        {
          "id"    : 4,
          "nome"  : "Beltrano Segundo",
          "email" : "fulano@ifpr.edu.br",
          "fone"  : "(44) 9999-4444"
        }
      ]
    }';
}

 ?>
