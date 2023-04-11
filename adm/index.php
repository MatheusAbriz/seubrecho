<!DOCTYPE HTML>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login</title>

      <?php
    require_once "view/dependencias.php";
    ?>
      <link rel="stylesheet" href="view/css/logiin.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
      <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap" rel="stylesheet">
    
      </head>
  <body class="body">
    <div class="container-fluid">
      <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
          <div id="quadro">
          <div id="container5"></div>
          <section class="form-body">
            <form action="view/validaLogin.php"  method="post" name="formLogin">
        <h1 class="form-titulo">Login</h1>
        <fieldset>
          <div class="container">
          <input type="email" name="email" minlength="7" required id="input">
            <label class="campo">E-mail</label>
          </div>
          <div class="container">
          <input type="password" required name="password" minlength="5" id="exampleInputPassword1">
            <label class="campo" for="exampleInputPassword">Senha</label>
            <span class="icon1"><i class="far fa-eye olho" id="togglePassword"></i></span>

          </div>
        </fieldset>
          <fieldset>
          <center class="botao-centralizado">
            <button name="submit" href="#" class="botao-submit"><a  class="botao">Logar</a></button></center>
           
        </fieldset>
      </form>
    </section>
      <!--FIM FORMULARIO-->

          </div>
        </div>
        <div class="col-2"></div>
      </div>
    </div>
    
    <?php
     if(isset($_POST['msg'])){
        require_once 'view/msg.php';
        $msg = $_POST["msg"];
        $msgExibir = $MSG[$msg];
        echo "<script>alert('" . $msgExibir . "');</script>";
     }
  ?>
  </body>
</html>