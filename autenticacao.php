<?php
function realizarleitura(){

  //endereço de arquivo
  $arquivo = "./users.txt";

  // metod que abre o arquivo e executa uma operação
  
  $abrir = fopen($arquivo, 'r');

  // executa leitura se houver o conteudo
  $json = fread($abrir,filesize($arquivo));
  
  fclose($abrir);
// converter json em php
  $resposta = json_decode($json);
  return $resposta;
    
}

?>


