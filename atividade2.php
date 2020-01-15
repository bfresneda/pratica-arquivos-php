<?php 
$arquivo = 'mensagemdeteste.txt';
$texto = file_get_contents($arquivo);
echo 'arquivo lido';
echo $texto;



?>