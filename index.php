<?php
  $title = "Seu Brechó";
  include_once("view/Home/header.php");
?>

<!-- Carrosel Inicio -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="view/img/Carousel/banner1.png" alt="Primeiro Slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="view/img/Carousel/banner2.png" alt="Segundo Slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="view/img/Carousel/banner3.png" alt="Terceiro Slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>
      <!-- Carrossel Final -->

      <!--Cards Inicio -->
      <div class="container-fluid">
        <h3>CATEGORIA DE ROUPAS</h3>

        <div class="card-container">
          <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2" >
          <a href="view/produto/categoria.php?categoria=Feminino-cal">
          <img src="view/img/Cards/1.png" class="img-thumbnail">
          <center><span class="id1">FEMININO CALÇADOS</span></center>
        </a>
        </div>

          <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2">
          <a href="view/produto/categoria.php?categoria=Feminino-inf">
          <img src="view/img/Cards/inferior_Feminino.png" alt="..." class="img-thumbnail">
          <center><span class="id2">FEMININO INFERIOR</span></center>
        </a>
        </div>

        <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2">
          <a href="view/produto/categoria.php?categoria=Feminino-sup">
          <img src="view/img/Cards/2.png" class="img-thumbnail">
          <center><span class="id3">FEMININO SUPERIOR</span></center>
        </a>
        </div>

        <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2">
        <a href="view/produto/categoria.php?categoria=Masculino-sup">
          <img src="view/img/Cards/3.png" class="img-thumbnail">
          <center><span class="id4">MASCULINO SUPERIOR</span></center>
        </a>
        </div>

        <div class="col-4 col-sm-4 col-md-2 .col-lg-2 col-xl-2">
        <a href="view/produto/categoria.php?categoria=Masculino-inf">
          <img src="view/img/Cards/6.png" class="img-thumbnail">
          <center><span class="id5">MASCULINO INFERIOR</span></center>
          
        </a>
        </div>

        <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2">
        <a href="view/produto/categoria.php?categoria=Masculino-cal">
          <img src="view/img/Cards/5.png" class="img-thumbnail">
          <center><span class="id6">MASCULINO CALÇADOS</span></center>
          </a>
        </div>



      </div>
      </div> 

      <!-- Cards Fim -->
      <!-- Nossa Causa Inicio -->
    <div class="container" id="container-abtus">
            <div class="row" >
                <div class="col-12 col-sm-6 col-md-6">
                    <h3>Nossa Causa</h3>
                    <p>O Seu Brechó é um e-commerce que nasceu com o intuito de dar apoio a causa do consumo consciente, já que através dos brechós é promovida a ideia da reutilização de roupas que provavelmente iriam para o lixo, o que em grandes volumes causa um grande impacto ambiental, visto que a indústria têxtil é o terceiro setor mais poluente do mundo, e que o Brasil descarta mais de quatro milhões de toneladas de resíduos têxteis por ano.  Queremos através deste e-commerce, criar uma iniciativa de redução da poluição no Brasil, através de um meio simples que beneficia tanto esta causa, quanto nosso cliente.</p>
                     <a class="btn-abtus" href="view/NossaCausa/nossaCausa.php">Saiba mais!</a>
                </div>
                <div class="col-12 col-sm-6 col-md-6">
                    <div class="img1">
                        <img src="view/img/SobreNos/logo2.png" id="logoy">
                    </div>
                </div>
            </div>
        </div>
      <!-- Nossa Causa Fim -->
      <!-- Produtos -->

    <div class = "products">
        <div class = "container" id="products">
            <h1 class = "lg-title">ITENS EM DESTAQUE</h1>
            <p class = "text-light">Camisetas, camisas, moletoms, blusas, blazers e muito mais!</p> 

            <div class = "product-items">
            <?php
                            require_once 'model/Manager.php';
                            $managers = new Managers();
                            $statement = $managers->getDestaque();
                            foreach($statement as $statement) :
                             ?>
                <!-- single product -->
                <div class = "product">
                    <div class = "product-content">
                        <div class = "product-img">
                            <a href="view/produtopage(principal)/pageprod.php?id=<?php echo $statement['id'];?>"><img src = "view/img/Cards/<?php echo $statement['img'];?>" alt = "product image"></a>
                        </div>
                        <div class = "product-btns">
                        <div class = "product-btns">
                            <a href="view/produtopage(principal)/pageprod.php?id=<?php echo $statement['id'];?>" class = "btn-buy"> Comprar
                                <span><i class = "fas fa-shopping-cart"></i></span>
                            </a>
                        </div>
                        </div>
                    </div>

                    <div class = "product-info">
                        <div class = "product-info-top">
                            <div class = "rating">
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "far fa-star"></i></span>
                            </div>
                        </div>
                        <a href = "view/produtopage(principal)/pageprod.php?id=<?php echo $statement['id'];?>" class = "product-name"><?php echo $statement['nome'];?></a>
                        <p class = "product-price"><?php if($statement['valorantigo'] > ''){
						echo "R$ " . $statement['valorantigo'];}?></p>
						<p class = "product-price"><?php echo "R$ " . $statement["preco"];?></p>
                    </div>

                    <div class = "off-info">
                        <h2 class = "sm-title">25% off</h2>
                    </div>
                </div> 
                <!-- end of single product -->
                <?php
                endforeach;
                ?>
            </div>
        </div>
    </div>


<!--Cookies-->
<div class="container cookies active" id="cookies">
  <div class="text-area">
  
    <p class="cookies-texto">Ao continuar navegando, declaro que li e concordo com os <a href="#">Termos de Uso</a>, assim como concedo meu consentimento para a utilização dos meus dados e cookies para finalidades comerciais.</p>
  </div>
  <div class="button-area">
    <button id="botao-cookies" onclick="fecharCookies();">Aceitar 🍪  </button>
  </div>
</div>
    
<!-- Footer Inicio -->

    <?php
      require_once 'view/Home/footer.php';
    ?>

<!-- Footer Fim -->
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="view/Home/js/navbar.js"></script>
</html>