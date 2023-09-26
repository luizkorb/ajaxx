<?php

$matricula = $_POST["matricula"];
$nome = $_POST["nome"];

$alunos = []; 

$resposta = 
      [
         "matricula"  => $matricula,
         "nome" => $nome
      ];

array_push($alunos, $resposta);


$json_texto = json_encode(["alunos" => $alunos]);
echo($json_texto); 

?>