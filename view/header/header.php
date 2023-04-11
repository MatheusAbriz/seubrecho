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

    <title> <?php echo $title ?> </title>
</head>
        <!--Menu Início-->
<header>
          <nav class="nav-bar">
            <div class="logo">
              <a href="../../index.php" style="margin: 0;"><img src="../img/logoylogo.png" class="img-fluid"alt="Imagem responsiva"></a>
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

              
<button class="btn"><a href="../../index.php" class="nav-item">INICIO</a></button>

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
<div class="icons">
<div class="login-button">
<div class="img-icon"><a href="../perfil/meuspedidos.php"><img src="../home/img/pay/user.png" style="width: 30px; height: 30px;" id="img-profile-user"></a></div>
</div>
<div class="carrinho-button">
<div class="img-icon"><a href="../carrinho/newcarrinho.php"><img src="../home/img/pay/shopping-bag.png" style="width: 30px; height: 30px;" id="img-shopping-bag"></a></div>
</div>
<div class="mobile-menu-icon">
<button onclick="menuShow()">
<img class="icon" src="../home/img/menu/menu.png" style="width: 30px; height: 30px;"></button>
</div>
</nav>

</div>

</header>
    <!-- Menu Fim -->