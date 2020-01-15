<?php 
//gravando o conteudo do GET na variavel de $texto
if($_GET){
    $texto = $_GET['texto'];
    
    $arquivo = fopen('mensagemdeteste.txt','a'); //pode ser utilizado outros modos
    //escrevendo no arquivo $arquivo as informações recebidas pelo GET $texto
      fwrite($arquivo,$texto);
    
      fclose($arquivo);
    
      echo 'informação salva';
}

//abertura do arquivo em modo de escrever



?>