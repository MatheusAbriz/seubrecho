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

	<div class="d-flex flex-column wrapper">
        

	  <main class="flex-fill" style="border-right: 1px solid #ccc; border-left: 1px solid #ccc; border-top: 1px solid #ccc; border-bottom: 1px solid #ccc; margin: 0 auto;">
		  <div class="container">
			
	
	

  
  
  
			  <ul class="list-group mb-3"  style="width: 90%;">
				  <li class="list-group-item py-3">
					  <div class="row g-3">
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
	
						
	
	
	
								
	
							<div class="col-4 col-md-3 col-lg-2">
							  <a href="#">
								  <img src="../produto/img/<?php echo $exibe[0]['img'];?>" class="img-thumbnail">
							  </a>
						  </div>
						  <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left align-self-center" >
							  <h4 >
								  <b><a href="#" class="text-decoration-none text-danger"><?php echo $exibe[0]['nome'];?></a></b>
							  </h4>
							  <h5>
							  <?php echo $exibe[0]['descricao'];?></h5>
						  </div>
						  <div
							  class="col-6 offset-6 col-sm-6 offset-sm-6 col-md-4 offset-md-8 col-lg-3 offset-lg-0 col-xl-2 align-self-center mt-3">
							  <div class="input-group">
								 
								  <input type="text" class="form-control text-center border-dark" value="<?php echo $qtd;?>">
								 
								  <button class="btn btn-outline-danger border-dark btn-sm" type="button"><a href="removeCarrinho.php?remover=carrinho&id=<?php echo $id_prod ?>">
									  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" color="#FFAFAF" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
										  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
										  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
										</svg>
										</a>
								  </button>
								  
							  </div>
							  <div class="text-end mt-2">
								  <span class="text-dark">Valor Item:<?php echo $preco?></span>
							  </div>
							  
							</div>

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
								  'img'        =>$exibe[0]['img']
								)
								);
							 	
								}
								
							
								?>				  		
							</div>
						</li>
    </div>
	<script src="carrinho.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   
</body>
 

</html>
