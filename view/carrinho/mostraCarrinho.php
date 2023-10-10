<?php
  $title = "Seu Brechó";
  include_once("../header/header.php");
?>
<div class="mobile-menu" style="margin-top: -1px; background-color: #e6c2bf;">

<li class="nav-item">
<button class="btn" id="btn-home"><a class="inicio-button" href="../index.php">INICIO</a></button>
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
    <li  id="personal"><strong>Cadastro</strong></li>
    <li  id="payment"><strong>Pagamento</strong></li>
    <li id="confirm"><strong>Finalização</strong></li>
</ul>
</form>

	<main class="mainProdDet">
  <?php
      $total = null; // variavel total que recebe valor nulo
      $qtd = 1;
      require_once '../../model/Manager.php';
      // criando um loop para sessão carrinho recebe o $cd e a quantidade
      $_SESSION['dados'] = array();
      foreach ($_SESSION['itens'] as $id_prod => $qnt)  {
      $statement = new Managers();
      $exibe = $statement->getCarrinho($id_prod); 
      $produto = $exibe[0]['id'];  // variável que recebe o livro
      $preco = number_format(($exibe[0]['preco']),2,',','.'); // variável que recebe o preço
      $total += $exibe[0]['preco'] * $qtd
			?>
    <section>
    
		
			<img class="imgProdDet" src="../img/Cards/<?php echo $exibe[0]['img'];?>" alt="">
			<article class="descProdClass">
				<h3><?php echo $exibe[0]['nome'];?></h3>

				<p id="descProdId"> <?php echo $exibe[0]['descricao'];?></p>

				<h2>R$30,00</h2>
        <p>Previsão de entrega: 30/05/2003 - 25/06/2023</p>
			</article>
      
      <div class="vl">
        
      </div>
			
			<aside class="asideProdClass">
					
      <h2><?php echo $preco?></h2>
					<div class="apagarDiv">
            <p><?php echo $qtd;?></p>
					  <a href="removeCarrinho.php?remover=carrinho&id=<?php echo $id_prod ?>"><img src="img/lixo_carrinho.png" alt=""></a>
					</div>
			</aside>
     
      </section>
      <?php
							 array_push(
								$_SESSION['dados'],
								array(
								  'id_produto' => $id_prod,
								  'email'      => $_SESSION['email'],
								  'quantidade' => $qtd,
								  'preco'      => $exibe[0]['preco'],
								  'total'      => $total,
								  'nome'       => $exibe[0]['nome'],
								  'img'        =>$exibe[0]['img'],
								  'descricao'  =>$exibe[0]['descricao']
								)
								);
							 	
								}
								
							
								?>


	
	<script src="carrinho.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   
</body>
 

</html>
