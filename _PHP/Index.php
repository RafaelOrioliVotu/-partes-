<?php

$name = $_POST['nome'];
$idade = $_POST['idade'];
$nasc= $_POST['nasc'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$doenca = $_POST['doenca'];

$linhas = date('d/m/Y'). " | " . $name . " | " . $idade . " | " . $nasc . " | " . $email . " | " . $cpf . " | " . $doenca . PHP_EOL;
file_put_contents('../Dados.txt',$linhas, FILE_APPEND);

header('location: ../_PHP/foreach.php');
exit();

?>