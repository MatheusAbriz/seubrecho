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
<header>
          <nav class="nav-bar">
            <div class="logo">
              
              <img src="../../img/logoylogo.png" class="img-fluid" alt="Imagem responsiva">
            </div>

            <div class="nav-list">
              <ul>	
            

                <button class="btn" id="button-home"><a href="../../../index.php" class="nav-item" style="text-decoration: none;
    color: #000;">INICIO</a></button>

              <li class="nav-item">
                <div class="dropdown">
                  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    FEMININO
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="../../produto/categoria.php?categoria=Feminino-sup">PARTE SUPERIOR</a>
                    <a class="dropdown-item" href="../../produto/categoria.php?categoria=Feminino-inf">PARTE INFERIOR</a>
                    <a class="dropdown-item" href="../../produto/categoria.php?categoria=Feminino-cal">CALÇADOS</a>
                  </div>
                </div>
            </li>


              <li class="nav-item">
                <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  MASCULINO
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="../../produto/categoria.php?categoria=Masculino-sup">PARTE SUPERIOR</a>
                  <a class="dropdown-item" href="../../produto/categoria.php?categoria=Masculino-inf">PARTE INFERIOR</a>
                  <a class="dropdown-item" href="../../produto/categoria.php?categoria=Masculino-cal">CALÇADOS</a>
                </div>
              </div>
            </li>


              <li class="nav-item">
                <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                  INFANTIL
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="../../produto/categoria.php?categoria=Infantil-sup">PARTE SUPERIOR</a>
                  <a class="dropdown-item" href="../../produto/categoria.php?categoria=Infantil-inf">PARTE INFERIOR</a>
                  <a class="dropdown-item" href="../../produto/categoria.php?categoria=Infantil-cal">CALÇADOS</a>
                </div>
              </div>
            </li>
          </ul>
                  
          </div>
          <div class="icons">
          <div class="login-button">
          <div class="img-icon"><a href="../../perfil/meuspedidos.php"><img src="../../Home/img/pay/user.png" style="width: 30px; height: 30px; margin-top: 15px;" id="img-profile-user"></a></div>
          </div>
          <div class="carrinho-button">
            <div class="img-icon"><a href="../../carrinho/newcarrinho.php"><img src="../../Home/img/pay/shopping-bag.png" style="width: 30px; height: 30px; margin-top: 15px;" id="img-shopping-bag"></a></div>
          </div>
          <div class="mobile-menu-icon">
            <button onclick="menuShow()">
              <img class="icon" src="../../home/img/menu/menu.png" style="margin-top: -4px;"></button>
        </div>
    </nav>
    
          </div>
          

         
    
    <div class="mobile-menu">
      
      <li class="nav-item">
      <button class="btn" id="btn-home"><a class="inicio-button" href="#" style="text-decoration: none;">INICIO</a></button>
    </li>

      <li class="nav-item">
        <div class="dropdown">
          <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            FEMININO
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="../../produto/categoria.php?categoria=Feminino-sup">PARTE SUPERIOR</a>
            <a class="dropdown-item" href="../../produto/categoria.php?categoria=Feminino-inf">PARTE INFERIOR</a>
            <a class="dropdown-item" href="../../produto/categoria.php?categoria=Feminino-cal">CALÇADOS</a>
          </div>
        </div>
    </li>


      <li class="nav-item">
        <div class="dropdown">
        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          MASCULINO
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="../../produto/categoria.php?categoria=Masculino-sup">PARTE SUPERIOR</a>
          <a class="dropdown-item" href="../../produto/categoria.php?categoria=Masculino-inf">PARTE INFERIOR</a>
          <a class="dropdown-item" href="../../produto/categoria.php?categoria=Masculino-cal">CALÇADOS</a>
        </div>
      </div>
    </li>


      <li class="nav-item">
        <div class="dropdown">
        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
          INFANTIL
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="../../produto/categoria.php?categoria=Infantil-sup">PARTE SUPERIOR</a>
          <a class="dropdown-item" href="../../produto/categoria.php?categoria=Infantil-inf">PARTE INFERIOR</a>
          <a class="dropdown-item" href="../../produto/categoria.php?categoria=Infantil-cal">CALÇADOS</a>
        </div>
      </div>
    </li>
  </ul>

<!-- 
  <li class="nav-item">
    <div class="icons">
          <div class="login-button">
          <div class="img-icon"><img src="img/pay/user.png" style="width: 30px; height: 30px;" id="img-profile-user"><a href="#"></div>
          </div>
          <div class="carrinho-button">
            <div class="img-icon"><img src="img/pay/shopping-bag.png" style="width: 30px; height: 30px;" id="img-shopping-bag"><a href="#"></div>
          </div>
    </li> -->

  </div>

    </div>
        </div>
        </header>
    <!-- Menu Fim -->
    <!--COMEÇO FORMULARIO-->
    <!--
      <span class="icon1"><i class="far fa-eye" id="togglePassword"></i></span> 
      <span class="icon2"><i class="far fa-eye" id="togglePassword2"></i></span>
    -->
    <section class="form-body">
      <form action="../controll/controller.php" method="POST" name="formCad" onsubmit="return validaForm();">
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
<!-- Footer Inicio -->
<footer class="section-p1">
    <div class="col">
      <a href="../../../index.php" style="margin: 0;"><img src="img/logoylogo.png" class="img-fluid"alt="Imagem responsiva"></a>
        <h4>Contato</h4>
        <p style="margin-left: 3%; margin-right: 15%;"><strong>Endereço: </strong>Av Jornalista Roberto Marinho 80, Cidade Monções, São Paulo</p>
        <p style="margin-left: 3%;"><strong>Telefone: </strong> 11 948607288</p>
        <p style="margin-left: 3%;"><strong>Horário </strong>10:00 - 18:00, Seg - Sex</p>
    <div class="follow">
      <h4>Redes sociais</h4>
        <i class="fa fa-facebook" aria-hidden="true"></i>
        <i class="fa fa-twitter" aria-hidden="true"></i>
        <i class="fa fa-instagram" aria-hidden="true"></i>
        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
        <i class="fa fa-youtube" aria-hidden="true"></i>
    </div>
    </div>
    <div class="col "  style="margin-bottom: 6%;" >
        <h4>Sobre</h4>
        <a href="../../NossaCausa/uscause.php">Sobre nós</a>
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>

    </div>
    <div class="col"  style="margin-bottom: 8%;">
        <h4>Minha conta</h4>
        <a href="../../newlc/view/logiin.php">Entrar</a>
        <a href="../../carrinho/mostraCarrinho.php">Ver carrinho</a>
        <a href="#"></a>
        
    </div>
    <div class="col pay" style="margin-bottom: 10%;">
        <h4>Formas de pagamento</h4>
        <p>Gateways de pagamento protegidos</p>
        <img src="./img/pay/pay.png" alt="">
    </div>
    <div class="copyright">
        <p><i class="fa fa-registered" aria-hidden="true"></i> Todos os Direitos Reservados</p>
    </div>
    
    
    </footer>

<!-- Footer Fim -->

  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="java.js"></script>

  <script>
  

</html>