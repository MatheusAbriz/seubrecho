<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php $key = uniqid(md5(rand())); ?>
    <link rel="stylesheet" href="../header/css/header.css?key=<?php echo $key?>">
    <link rel="stylesheet" href="css/home.css">
    <link rel="shortcut icon" href="#">
    <link rel="stylesheet" href="main.css">
   <script src="../home/js/navbar.js"></script>
   <link rel ="stylesheet" href="css/estilos.css">
   <link rel="stylesheet" href="css/cartaocredito.css">
   <link rel="stylesheet" href="confirmacao.css">
   <link rel="stylesheet" href="estilos.css">
   <link rel="stylesheet" href="identificacao.css">
   <link rel="stylesheet" href="meupedi.css">
   <link rel="stylesheet" href="css/style.css">

    <!-- <title> <?php echo $title ?> </title> -->
</head>
        <!--Menu Início-->
<header>
          <nav class="nav-bar">
            <div class="logo">
              <a href="../../index.php" style="margin: 0;"><img src="../img/icons/logo.png" class="img-fluid"alt="Imagem responsiva"></a>
            </div>

            <div class="nav-list">
              <ul>
              <?php
            $dados = array();
            require_once '../../model/Manager.php';
            $managers = new Managers();
            $num = $managers->pegaMaxIdMenu();
            $numb = 0;
            foreach ($num as &$valor) {
              $number = $valor;
          }

            //echo "*************" . $dados["num"];
            $dados = $managers->pegaMenuSubmenu();

            /*
            echo "<pre>";
            var_dump($dados);
            echo "</pre>";
            exit();
            */

            $keyMenu = array();
            $keySub = array();

        if($number > 0){
            
            
            for($i = 0; $i < $number; $i++){//menu
                if(isset($dados[$i]["menuId"])){
                    $reMenu = array_search($dados[$i]["menuNome"], $keyMenu, true);
                    if($reMenu == ""){
                        print "<div  class='dropdown'>";
                       // print "<a class='header btn dropdown-toggle' href='". $dados[$i]["menuURL"] ."'>" $dados[$i]["menuNome"] . "</a>";
                        $keyMenu[$i] =  $dados[$i]["menuNome"];

                        $drop = 0;
                        for($ii = 0;$ii < $number;$ii++){
                    if(isset($dados[$ii]["subId"])){
                            $reSub = array_search($dados[$ii]["subURL"], $keySub, true);
                        if($dados[$i]["menuId"] == $dados[$i]["subId"] && $reSub == ""){
                            print "<a href='". $dados[$i]["subURL"] ."'>" . $dados[$i]["subNome"] . "</a>";
                            $keySub[$i] =  $dados[$i]["subNome"] . "</a>";
                        }

                        }
                    } 
                }
            }

         }
    }
    
   ?>

<li class="nav-item">
  <div class="dropdown">
  <button class="btn menu-inicio"><a href="../../index.php" id="botao-inicio">Início</a></button>
  </div>

</li>

<li class="nav-item">
  <div class="dropdown">
    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Feminino
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="../produto/categoria.php?categoria=Feminino-sup">Parte Superior</a>
      <a class="dropdown-item" href="../produto/categoria.php?categoria=Feminino-inf">Parte Inferior</a>
      <a class="dropdown-item" href="../produto/categoria.php?categoria=Feminino-cal">Calçados</a>
    </div>
  </div>
</li>


<li class="nav-item">
  <div class="dropdown">
  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Masculino
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="../produto/categoria.php?categoria=Masculino-sup">Parte Superior</a>
    <a class="dropdown-item" href="../produto/categoria.php?categoria=Masculino-inf">Parte Inferior</a>
    <a class="dropdown-item" href="../produto/categoria.php?categoria=Masculino-cal">Calçados</a>
  </div>
</div>
</li>


<li class="nav-item">
  <div class="dropdown">
  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Infantil</button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="../produto/categoria.php?categoria=Infantil-sup">Parte Superior</a>
    <a class="dropdown-item" href="../produto/categoria.php?categoria=Infantil-inf">Parte Inferior</a>
    <a class="dropdown-item" href="../produto/categoria.php?categoria=Infantil-cal">Calçados</a>
  </div>
</div>
</li>
</ul>
</div>
<div class="botao-pesquisar">
<form action="indesds.dsad" method="post" id="form-pesquisa"> 
<input class="form-control mr-sm-2 form-input" type="search" placeholder="Pesquisar..." aria-label="Pesquisar">
<div class="area-pesquisar" id="area-pesquisar">
  <span class="img-pesquisar" onclick="pesquisar();"><img src="../img/icons/pesquisar.png" alt="logo de uma lupa" class="img-fluid"></span>
</div>
</div>
  </form>
<div class="icons">
<div class="login-button">
<div class="img-icon"><a href="../meusPedidos/perfilUsuario.php"><img src="../img/icons/icon.png" style="width: 40px; height: 40px;"id="img-profile-user"></a></div>
</div>
<div class="carrinho-button">
<div class="img-icon"><a href="../carrinho/newcarrinho.php"><img src="../img/icons/carrinho-compras.png" style="width: 40px; height: 40px;" id="img-shopping-bag"></a></div>
</div>
<div class="mobile-menu-icon">
<button onclick="menuShow()">
<img class="icon" src="../home/img/menu/menu.png" style="width: 30px; height: 30px;"></button>
</div>
</nav>

</div>

</header>
    <!-- Menu Fim -->

<script src="js/header.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>