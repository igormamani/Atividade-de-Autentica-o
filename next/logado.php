<?php 
echo '<script>alert("Usuario Logado, Página meramnete ilustrativa")</script>';
?>


<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="img/icon.png">
    <link rel="stylesheet" href="./next/css/style.css">
  

    <script defer src="./next/js/script.js"></script>

    <title>Pokédex</title>
</head>

<body>
 
    <main>
   

        <img src="#" alt="pokemon" class="pokemon-img">

        <form class="form">
            <input type="search" class="pesquisa" placeholder="Nome ou  ID" required />
        </form>

        <h1 class="pokemon-dados">
            <span class="id-pokemon"></span> -
            <span class="nome-pokemon"></span>
        </h1>



        <div class="btns">
            <button class="voltar">&lt; Voltar </button>
            <button class="proximo">Próximo &gt;</button>
        </div>

        <img src="./next/img/pokedex2.png" alt="pokedex" class="pokedex">
    </main>

</body>

</html>