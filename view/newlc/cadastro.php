<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">  
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
      <link rel="stylesheet" href="cadastro.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
      <title>Cadastro</title>
      
  </head>

  <script>
  function validaForm(){

  if(document.formCad.nome.value == ""){
      alert("Por Favor preencher o nome!");
          document.formCad.nome.focus();
          return false;
  }

  if(document.formCad.senha.value < 5){
      alert("Por Favor preencher a senha corretamente!");
          document.formCad.senha.focus();
          return false;
  }

  if(document.formCad.email.value < 11){
      alert("Por Favor preencher o email corretamente!");
          document.formCad.email.focus();
          return false;
  }
  

}
</script>
  
  <body style="background-color: #FAFBFD;">

    <!--Menu Início-->
        <!--Menu Início-->
        <?php

          include '../header/header.php';

        ?>
        <!-- Menu Fim -->

    <!--COMEÇO FORMULARIO-->
    <section class="form-body">
      <form action="controll/controller.php" method="POST" name="formCad" onsubmit="return validaForm();">
        <h1 class="form-titulo">Cadastro</h1>
        <fieldset>
          <div class="container">
            
          <input type="text" required name="nome" minlength="3">
            <label class="campo">Nome</label>
          </div>
          <div class="container">
          <input type="email" required name="email" minlength="7">
            <label class="campo">E-mail</label>

          </div>
          <div class="container">
          <input type="password" required name="senha" minlength="5" id="exampleInputPassword1">
            <label class="campo" for="exampleInputPassword">Senha</label>
            <span class="icon1"><i class="far fa-eye olho" id="togglePassword"></i></span>
          </div>
        
          <div class="container">
            <input type="password" required name="confSenha" minlength="5" id="exampleInputPassword2">
            <label class="campo" for="exampleInputPassword2">Confirmar senha</label>
            <span class="icon2"><i class="far fa-eye" id="togglePassword2"></i></span>
          </div>
        </fieldset>
          <fieldset>
          <center class="botao-centralizado"><button name="submit" id="botao-cadastro">Cadastrar-se</button></center>
        </fieldset>
      </form>
    </section>
      <!--FIM FORMULARIO-->
         <!-- Footer Inicio -->
         <?php
            require_once '../footer/footer.php';
          ?>

  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="java.js"></script>

</html>