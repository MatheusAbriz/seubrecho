<?php
@session_start();
if(!isset($_SESSION["email"]) || empty($_SESSION["email"])){
    session_destroy();
    ?>
    <form action="../newlc/logiin.php" name="myForm" id="myForm" method="post">
        <input type="hidden" name="msg" value="OA00">
    </form>
    <script>
        document.getElementById('myForm').submit(); 
    </script>
    <?php
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Pedidos</title>
    <link rel="stylesheet" href="css/pedidosUsuario.css">
</head>
<body>
    <div class="header"></div>

    <article>

    <nav class="navPadrao">
        <div>
            <ul id="listaMenu01">
                <a href="perfilUsuario.php"><li><img src="img/perfilImg.png" alt="Perfil" srcset=""><span> Meu Perfil </span> </li>
            </ul> </a>
            <ul id="listaMenu02">
                <a href="pedidosUsuario.php"><li><img src="img/sacolaImgDest.png" alt="Sacola" srcset=""><span> Meus Pedidos </span> </li></a>
            </ul>
            <ul id="listaMenu03">
                <a href="logout.php"><li><img src="img/sairImg.png" alt="Sair" srcset=""> <span> Sair </span> </li></a>
            </ul>
        </div>
    </nav>
    <main id="meusPedidos">
        <div class="pedidosUsuario">
            <h1><img id="sacolaPedidos" src="img/meusPedidosBolsa.png" alt="Sacola" srcset=""><span> Meus pedidos </span></h1>
            <section>   
            <?php
              require_once '../../model/Manager.php';
              $manager = new Managers();
              $dados = $manager->mostraPedido($_SESSION['email']);
              if ($dados){
                foreach($dados as $stt){
            ?>
                <container class="itemInfoClass">
                    <figure class="itemFoto"><img src="img/<?php echo $stt['img'];?>" alt="" srcset=""></figure>
                    <div id="itemInfoDiv">
                         <img src="../../img/Cards/<?php echo $stt['img'];?>" alt="">
                        <h3><?php echo $stt['nome'];?></h3>
                        <p><?php echo $stt['descricao'];?></p>
                        <p>#<?php echo $stt['codigo'];?></p>
                        
                    </div>
        
                    <div id="itemPagDiv">
                        <?php echo '<h2>R$'.number_format($stt['total'],2,',','.').'</h2>';}
                        $dias = $stt['previsao'];
                        $d=strtotime("+$dias Days");
                        ?>
                        <p>Previsão de entrega: <?php  echo date("d/m/y");?> - <?php echo date("d/m/y", $d);?>.</p>
                        <br>
                        <p><?php echo $stt['endereco'];?>
                        </p>
                    </div>
                </containe>
            <?php
              }else{
                echo 'Não há pedidos realizados!';
              }
            ?>
            </section>
            
        </div>
        
    </main>
</article>
    
</body>
</html>