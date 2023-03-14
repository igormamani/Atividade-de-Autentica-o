<?php
 require './autenticacao.php';

  $usuarios = realizarleitura();

  $user0 = $usuarios[0]->email;
  $senhas0 = $usuarios[0]->senha;

  $user1 = $usuarios[1]->email;
  $senhas1 = $usuarios[1]->senha;

  $user2 = $usuarios[2]->email;
  $senhas2 = $usuarios[2]->senha;

  $user3 = $usuarios[3]->email;
  $senhas3 = $usuarios[3]->senha;

  $user4 = $usuarios[4]->email;
  $senhas4 = $usuarios[4]->senha;

  $autoemail = $_POST['email'];
  $autosenha = $_POST['senha'];




  if($user0 == $autoemail && $senhas0 == $autosenha or $user1 == $autoemail && $senhas1 == $autosenha or $user2 == $autoemail && $senhas2 == $autosenha or $user3 == $autoemail && $senhas3 == $autosenha or $user4 == $autoemail && $senhas4 == $autosenha){
    require './next/logado.php';
}else{
   require './next/erro.php';
}

  


?>