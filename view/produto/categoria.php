<?php

session_start();




                            require_once '../../model/Manager.php';
                            $managers = new Managers();
                            $pcat = $_GET['categoria'];
                            $statement = $managers->getCategoria($pcat);
                            if(empty($_GET['categoria'])){
                                ?>
                                <?php header('location: ../index.php');  ?>
                                <script>
                                alert('Não foram encontrados produtos');
                                </script>
                                <?php
                                
                            }
                             ?> 
  <!--Menu Início-->
  <?php
  $title = "Seu Brechó";
  include_once("../header/header.php");
?>
    <!-- Menu Fim -->


    <body>
 
    <div class = "products">
    <h1 class = "lg-title"><?php if(isset($_GET["categoria"])){
                                 if($_GET["categoria"] == 'Feminino-sup' or $_GET["categoria"] == 'Masculino-sup' or $_GET["categoria"] == 'Infantil-sup'){
                                echo "Parte Superior";
                                 }
                                 if($_GET["categoria"] == 'Feminino-inf' or $_GET["categoria"] == 'Masculino-inf' or $_GET["categoria"] == 'Infantil-inf'){
                                    echo "Parte Inferior";
                                     }
                                }
                                if($_GET["categoria"] == 'Feminino-cal' or $_GET["categoria"] == 'Masculino-cal' or $_GET["categoria"] == 'Infantil-cal'){

                                    echo "Calçados ";
                                     }

                                     ?></h1>
                <p class = "text-light">Camisetas, camisas, moletoms, blusas, blazers e muito mais!</p>
            <div class = "container" style="margin: 0 auto;">
               

                <div class = "product-items">
                <?php        
                                      foreach($statement as $statement) :
    ?>
                    <!-- single product -->
                    <div class = "product">
                        <div class = "product-content">
                          
                            <div class = "product-img">
                              
                                <a href="../produtopage(principal)/pageprod.php?id=<?php echo $statement['id'];?>"><img src = "../img/Cards/<?php  echo $statement['img'];?>" alt = "product image"></a>
                            </div>
                            <div class = "product-btns">
                                <button type = "button" class = "btn-buy"> Comprar  
                                    <span><i class = "fas fa-shopping-cart"></i></span>
                                </button>
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
                           
                            <a href = "#" class = "product-name"><?php echo $statement["nome"];?></a>
                            <p class = "product-price">R$ <?php echo $statement["valorantigo"]; ?> </p>
                            <p class = "product-price"><?php echo $statement["preco"];?></p>
                        </div>

                        <div class = "off-info">
                            <h2 class = "sm-title"><?php echo $statement["desc_promocao"];?>% off</h2>
                        </div>
                    </div>

                    <?php endforeach; ?>
                </div>
           </div>
                  

        </div>
<!-- Footer Fim -->  

<?php
    require_once '../footer/footer.php';
?>
    </body>
<script src="produto.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   
</html>