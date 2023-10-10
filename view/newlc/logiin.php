<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">  
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
      <link rel="stylesheet" href="logiin.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
      <title>Login</title>
      
  </head>
  
  <body style="background-color: #FAFBFD;">

     <!--Menu Início-->
     <?php

        include '../header/header.php';

      ?>

    <!--COMEÇO FORMULARIO-->
    <!--
      <span class="icon1"><i class="far fa-eye" id="togglePassword"></i></span> 
      <span class="icon2"><i class="far fa-eye" id="togglePassword2"></i></span>
    -->
    <section class="form-body">
      <form action="controll/loginController.php" method="POST">
        <h1 class="form-titulo">Login</h1>
        <fieldset>
          <div class="container">
          <input type="email" name="email" minlength="7" required id="input">
            <label class="campo">E-mail</label>
          </div>
          <div class="container">
          <input type="password" required name="senha" minlength="5" id="exampleInputPassword1">
            <label class="campo" for="exampleInputPassword">Senha</label>
            <span class="icon1"><i class="far fa-eye olho" id="togglePassword"></i></span>

          </div>
        </fieldset>
          <fieldset>
          <center class="botao-centralizado">
            <button name="submit" href="#" class="botao-submit"><a  class="botao">Logar</a></button></center>
           
        </fieldset>
       <center><a href="cadastro.php" id="ntc">Não tenho conta</a></center>
      </form>
    </section>
      <!--FIM FORMULARIO-->

    <?php
      require_once '../footer/footer.php';
    ?>

  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="java.js"></script>

  
</html>