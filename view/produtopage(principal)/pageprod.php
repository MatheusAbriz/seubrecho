<?php
session_start();    


   require_once '../../model/Manager.php';
   $managers = new Managers();
   $id = $_GET["id"];
   $statement =  $managers->listaJoin($id);
   if(!isset($id)){
    header('location: ../produto/index.php');
   }

   if(!isset($statement)){
    header('location: ../produto/index.php');
   }
 
   $stt = $statement;


?>
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


<div class="container">
  <div class="row">
  
    <div id="prod-img" class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" >
      <div class="container-main-img" >
      <img src="../img/Cards/<?php echo $stt[0]['img'];?>" class="img-fluid" id="img-1" alt="Responsive image">
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
      <div class="container-prod">
        <div class="row">
          <h3><?php echo $stt[0]['nome'];?></h3>
          <div class="desc-prod"> 
            <div class="name-prod">
              <p>por</p>
              <h3><?php echo $stt[0]['preco'];?></h3>
            </div>
            <p id="desc-prod"><?php echo $stt[0]['descricao'];?></p>
            <hr>
            <div class="prod-info">
              <h5>gênero:</h5>
              <p><?php echo $stt[0]['genero'];?></p>
          </div>
          <div class="prod-info">
            <h5>tamanho:</h5>
            <p><?php echo $stt[0]['tamanho'];?></p>
          </div>
          <div class="prod-info">
            <h5>cor:</h5>
            <p><?php echo $stt[0]['cor'];?></p>
          </div>
          <div class="prod-info">
            <h5>condição:</h5>
            <p><?php echo $stt[0]['condicao'];?></p>
      
          </div>
          <hr>
          <div class="purchase-button">
        
          <button  class="btn btn-xl" id="button-compra"><a href= "../carrinho/newcarrinho.php?add=carrinho&id=<?php echo $stt[0]['id'];?>">COMPRAR</a></button>
             
          </div>
               
          
        </div>
        <!--  -->
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Footer Inicio -->
   <?php

    require_once '../footer/footer.php';
?>
<!-- Footer Fim -->
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<?php
require_once 'prod.php';
?>
</html>
