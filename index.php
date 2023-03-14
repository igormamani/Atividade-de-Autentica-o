<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Loop Nerd" content="Tela de login pronta HTML CSS" />
    <meta name="description" content="Códigos Html e Css Prontos" />
    <meta name="keywords" content="Html, Css, Jquery, Wordpress, Sites Grátis, Tema para Wordpress, Site Responsivo" />
    <meta name="author" content="Loop Nerd" />
    <meta name="URL" content="https://www.loopnerd.com.br/artigos/css3/tela-de-login-pronta-html-css/" />
    <meta http-equiv="content-language" content="pt-br" />
    <meta name="robots" content="index, follow" />


    <title>LOGIN</title>
    <link rel="stylesheet" href="estilo/style.css">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/1486/1486433.png" />
    <script src="js/script.js" type="text/javascript">
    </script>




</head>
<br><body>
  <form method="POST" action="user.php">
    <div class="wrapper fadeInDown">

        <div class="content-login">

            <h2 class="active"> Login </h2>

            <div class="box-login">
                <input type="email" id="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Digte o E-mail">

                <input type="password" id="senha" class="form-control" name="senha" placeholder="Digite a Senha">
          <div class="campo">
  					<label for="estado">Tipo</label>
  					<select name="estado" id="estado">
  						<option value="Cliente">Cliente</option>
  						<option value="Admistrador">Admistrador</option>
  					<select/>
  				</div>

                <button class="btn-primary">Enviar</button>
            </div>

        </div>
        <!--Form Content-->

    </div>
  </form>
    <!--wrapper--><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
 integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" 
 crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" 
crossorigin="anonymous"></script>
-->


</body>

</html>

