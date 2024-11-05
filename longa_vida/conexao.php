<?php

$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'longa_vida';

$conn = mysqli_connect($host,$usuario,$senha,$banco);

if(!$conn){
    die("Erro de conexão: " . mysqli_connect_error());
}

?>