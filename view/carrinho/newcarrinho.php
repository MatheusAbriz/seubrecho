<?php
@session_start();
if(!isset($_SESSION["email"]) || empty($_SESSION["email"])){
    session_destroy();
    ?>
    <form action="../newlc/view/logiin.php" name="myForm" id="myForm" method="post">
        <input type="hidden" name="msg" value="OA00">
    </form>
    <script>
        document.getElementById('myForm').submit(); 
    </script>
    <?php
    exit();
}

?>
<!--Menu Início-->
  <?php
    $title = "Seu Brechó";
  require_once '../header/header.php';
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



<body>
<?php

	// verificando se usuário está logado

  if(!isset($_SESSION['itens'])){
		
		$_SESSION['itens'] = array();
		
	}
	
	// verificando se o codigo do produto NÃO está vazio
	if (isset($_GET['add']) && $_GET['add'] == "carrinho")
 {
	
	//adicona ao carrinho
	$id_prod= $_GET['id'];

	if (!isset($_SESSION['itens'][$id_prod]))
   {
		  // será criado uma sessão chamado carrinho para receber um vetor
      $_SESSION['itens'][$id_prod] = 1;
	
    }else{
		  $_SESSION['itens'][$id_prod] += 1;

	}
}
 if(count($_SESSION['itens']) == 0){
  echo  "<script>alert('Carrinho Vazio!');</script>";
  ?>
   <form action="../../index.php" name="myForm" id="myForm" method="post">
        <input type="hidden" name="msg" value="OA00">
    </form>
    <script>
        document.getElementById('myForm').submit(); 
    </script>
  <?php
 }else{
  require_once 'mostraCarrinho.php';
 }

	?>
	


                   <li class="list-group-item py-3" id="caixa-valor-total">
                        <div class="text-end" >
                            <h4 class="text-dark mb-3" >
                                Valor Total:<?php echo number_format($total,2,',','.');?>
                            </h4>
                            <a href="../../index.php" class="btn btn-outline-success btn-lg">
                                Continuar Comprando                            
                            </a>

                            <?php 
                                if (isset($_SESSION["email"])) {
                            ?>
                                <a href="../formpag/cartaocredito.php" class="btn btn-danger btn-lg ms-2 mt-xs-3" id="btn-close-buy" >Fechar Compra</a>
                            <?php    
                                } else {   
                            ?>
                                <a href="../newiden/identificacao.php" class="btn btn-danger btn-lg ms-2 mt-xs-3" id="btn-close-buy" >Fechar Compra</a>
                            <?php 
                                };
                            ?>
                        </div>
                    </li>
                    </ul>
				    </div>
			</main>
	 </div>
</div>
    <!-- Footer Inicio -->
<?php

require_once '../footer/footer.php';
?>  
<!-- Footer Fim -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="carrinho.js"></script>
</body>

</html>













