<?php
# actions/categoria_salvar.php

require '../includes/conexao.php';
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$serie = filter_input(INPUT_POST, 'serie', FILTER_SANITIZE_SPECIAL_CHARS);
$celular = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);


$sql = "INSERT INTO usuario (nome, email, serie, telefone) VALUES ('$nome','$email','$serie','$celular')";

$conexao->query($sql);

#redireciona
header('Location:../feito.html');