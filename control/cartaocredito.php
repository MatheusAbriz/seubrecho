<!DOCTYPE html>
<?php
  
?>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/cartaocredito.css">
    <link rel="stylesheet" href="./fontawesome-free-6.2.1-web/css/all.min.css">
	<title>Criar conta</title>
</head>
<body>





	  
	  


	<!--Menu Início-->
    <header>
        <nav>
          <div class="logo">
            <a href="#"><img src="img/logoylogo.png"  width="150rem"/></a>
          </div>
            <div class="mobile-menu">
                <div class="line-1"></div>
                <div class="line-2"></div>
                <div class="line-3"></div>
            </div>
          
        </nav>
    </header>
	<!-- Menu Fim -->
	
	<form id="msform">
		<ul id="progressbar">
		  <li class="active" id="account"><strong>Carrinho</strong></li>
		  <li class="active" id="personal"><strong>Cadastro</strong></li>
		  <li class="active" id="payment"><strong>Pagamento</strong></li>
		  <li id="confirm"><strong>Finalização</strong></li>
	  </ul>
	  </form>

	
	
	<section>
		<form action="formPagC.php" name="myForm" method="POST" value="1">
      <input type="hidden" name="cria_cartao" value="1">
			<h1>Formas de pagamento</h1>
            
<div id="check">
  <input type="radio" name="tipo_cartao" value="0"><h6>Cartão de crédito</h6><i class="fa-solid fa-credit-card"></i></input>

</div>
<div id="check">
  <input type="radio" name="tipo_cartao" value="1"><h6>Cartão de débito</h6><i class="fa-regular fa-credit-card"></i></input>
</div>

			

<fieldset>
  <div class="container">
    <input type="number" required name="numero_cartao">

    <label>Número do cartão </label>
  </div>

  <div class="container">
    <input type="number" required name="codigo_cartao">
    <label>Código de segurança</label>
  </div>

  <div class="container">
    <input type="text" required name="nome_titular">

    <label>Nome do titular</label>
  </div>

  <div class="container">
    <input type="date" required name="validade_cartao">
    <label>Validade</label>
  </div>
  </fieldset>
  <h1>Dados de entrega</h1>
 

			

<fieldset>
  <div class="container">
    <input type="text" required name="cep">

    <label>CEP</label>
  </div>

  <div class="container">
    <input type="number" required name="endereco">
    <label>Endereço</label>
  </div>

  <div class="container">
    <input type="text" required name="numero">

    <label>Número</label>
  </div>

  <div class="container">
    <input type="text" required name="complemento">
    <label>Complemento</label>
  </div>


</fieldset>


 
     


     
           
			<button id="bnt" href="../../control/formPagC.php">COMPRAR</button>
		

		
		</form>
	</section>
<!-- Footer Inicio -->
<footer class="section-p1">
    <div class="col" >
    <img class="logo" src="./img/logoylogo.png" alt="">
        <h4>Contato</h4>
        <p style="margin-right: 15%;"><strong>Endereço: </strong>Av Jornalista Roberto Marinho 80, Cidade Monções, São Paulo</p>
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
        <a href="#">Sobre nós</a>
        <a href="#">Informações para entrega</a>
        <a href="#">Política de Privacidade</a>
        <a href="#">Condições e Termos</a>
    </div>
    <div class="col"  style="margin-bottom: 8%;">
        <h4>Minha conta</h4>
        <a href="#">Entrar</a>
        <a href="#">Ver carrinho</a>
        <a href="#">Suporte</a>
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
</body>
<script src="assets/js/navbar.js"></script>
</html>