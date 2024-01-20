<?php
# actions/categoria_deletar.php

require '../includes/conexao.php';
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);


$sql = "DELETE FROM usuario WHERE id=$id";

if($conexao->query($sql)){
    //deu certo
}
else{
    // deu erro
}


#redireciona
header('Location:../rizer.php');