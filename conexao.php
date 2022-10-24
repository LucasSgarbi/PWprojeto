<?php
$servidor= 'localhost';
$usuario = 'rott';
$senha = '';
$bancoDados ='pwtarde';

$conexao =mysqli_connect($servidor.$usuario,$senha) or die("Erro de Conexão");

mysqli_select_db($conexao,$bancoDados);

?>