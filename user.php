<?php
 require './autenticacao.php';

  $usuarios = realizarleitura();


  $autoemail = $_POST['email'];
  $autosenha = $_POST['senha'];

  $soma = 0;
  $cont = count($usuarios);
  $cont = $cont;

 while ($soma < $cont) {
      if ($autoemail == $usuarios[$soma]->email && $autosenha == $usuarios[$soma]->senha) {
      require './next/logado.php';
      
        break;
      }
      else {
        $soma++;
      }
     require './next/erro.php';
    }
    
?>
