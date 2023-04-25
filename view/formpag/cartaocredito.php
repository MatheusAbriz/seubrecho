<!--Menu Início-->
<?php
  $title = "Seu Brechó";
  include_once("../header/header.php");
?>
<div class="mobile-menu" style="margin-top: -1px; background-color: #e6c2bf;">

<li class="nav-item">
<button class="btn" id="btn-home"><a class="inicio-button" href="#">INICIO</a></button>
</li>

<li class="nav-item">
<div class="dropdown">
  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    FEMININO
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="../produto/categoria.php?categoria=Feminino-sup">PARTE SUPERIOR</a>
    <a class="dropdown-item" href="../produto/categoria.php?categoria=Feminino-inf">PARTE INFERIOR</a>
    <a class="dropdown-item" href="../produto/categoria.php?categoria=Feminino-cal">CALÇADOS</a>
  </div>
</div>
</li>


<li class="nav-item">
<div class="dropdown">
<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  MASCULINO
</button>
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a class="dropdown-item" href="../produto/categoria.php?categoria=Masculino-sup">PARTE SUPERIOR</a>
  <a class="dropdown-item" href="../produto/categoria.php?categoria=Masculino-inf">PARTE INFERIOR</a>
  <a class="dropdown-item" href="../produto/categoria.php?categoria=Masculino-cal">CALÇADOS</a>
</div>
</div>
</li>


<li class="nav-item">
<div class="dropdown">
<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
  INFANTIL
</button>
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a class="dropdown-item" href="../produto/categoria.php?categoria=Infantil-sup">PARTE SUPERIOR</a>
  <a class="dropdown-item" href="../produto/categoria.php?categoria=Infantil-inf">PARTE INFERIOR</a>
  <a class="dropdown-item" href="../produto/categoria.php?categoria=Infantil-cal">CALÇADOS</a>
</div>
</div>
</li>
</ul>
</div>

</div>
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
		<form action="formPagC.php" method="POST" value='1' name="myform">
    <input type="hidden" name="cria_cartao" value="1">
			<h1>Formas de pagamento</h1>
            
<div id="check">

  <input type="radio" name="promocao" value="0"><h6>Cartão de crédito</h6><i class="fa-solid fa-credit-card"></i></input>

</div>
<div id="check">
  <input type="radio" name="promocao" value="1"><h6>Cartão de débito</h6><i class="fa-regular fa-credit-card"></i></input>
</div>

			

<fieldset>
  <div class="container">
    <input type="text" required name="name">

    <label>Número do cartão </label>
  </div>

  <div class="container">
    <input type="number" required name="lastname">
    <label>Código de segurança</label>
  </div>

  <div class="container">
    <input type="text" required name="name">

    <label>Nome do titular</label>
  </div>

  <div class="container">
    <input type="datetime" required name="lastname">
    <label>Validade</label>
  </div>

  
</fieldset>


<h1>Dados de entrega</h1>
 

			

<fieldset>
  <div class="container">
    <input type="text" required name="name">

    <label>CEP</label>
  </div>

  <div class="container">
    <input type="text" required name="lastname">
    <label>Endereço</label>
  </div>

  <div class="container">
    <input type="text" required name="name">

    <label>Número</label>
  </div>

  <div class="container">
    <input type="datetime" required name="lastname">
    <label>Complemento</label>
  </div>

  
</fieldset>


 
     


     
           
			<button id="bnt" href="../newconf/confirmacao.html">COMPRAR</button>
		

		
		</form>
	</section>
      <!-- Footer Inicio -->
      <?php
        require_once '../footer/footer.php';

?>  
      
        </body>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>