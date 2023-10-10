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
    <title>Meu Perfil</title>
    <link rel="stylesheet" href="css/perfilUsuario.css">
</head>
<body>
    <div class="header"></div>

    <article>

    <!-- Navegação Padrão -->
    <nav class="navPadrao">
        <div>
            <ul id="listaMenu01">
                <a href="perfilUsuario.php"><li><img src="img/perfilImgDest.png" alt="Perfil" srcset=""><span> Meu Perfil </span> </li></a>
            </ul> 
            <ul id="listaMenu02">
                <a href="pedidosUsuario.php"><li><img src="img/sacolaImg.png" alt="Sacola" srcset=""><span> Meus Pedidos </span> </li></a>
            </ul>
            <ul id="listaMenu03">
                <a href="logout.php"><li><img src="img/sairImg.png" alt="Sair" srcset=""> <span> Sair </span> </li></a>
            </ul>
        </div>
    </nav>

    <!-- Área do usuário + Pedidos -->
    <main id="meuUsuario">
        <div class="meusPedidosPerfil">
            <img src="img/imgFalsa.png" alt="fakeImg">
            <?php
            require_once '../../model/Manager.php';
            $manager = new Managers();
            $statement = $manager->getInfo($_SESSION['email']);

            foreach($statement as $statement){
            ?>
            <section>
                <h1><?php echo $statement['nome']; ?></h1>
                <h3><?php echo $statement['email']; }?></h3>
            </section>
        </div>
        <div class="meusPedidosRecentes">
            <h1><img id="sacolaPedidos" src="img/meusPedidosBolsa.png" alt="Sacola" srcset=""><span> Pedidos recentes </span></h1>
            <section>      
            <?php
              $dados = $manager->mostraPedido($_SESSION['email']);
              if($dados){
                foreach($dados as $stt){
            ?>
            <container class="itemInfoClass">
                    <figure class="itemFoto"><img src="img/<?php echo $stt['img'];?>" alt="" srcset=""></figure>
                    <div id="itemInfoDiv">
                        <img src="../../img/Cards/<?php echo $stt['img'];?>" alt="">
                        <h3><?php echo $stt['nome'];?></h3>
                        <p><?php $stt['descricao'];?></p>
                        <p>#<?php echo $stt['codigo'];?></p>
                        
                    </div>
        
                    <div id="itemPagDiv">
                        <h2>R$<?php echo number_format( $stt['total'],2,',','.');}?></h2>
                        <?php
                        $dias = $stt['previsao'];
                        $d=strtotime("+$dias Months");
                        ?>
                        <p>Previsão de entrega: <?php echo date("d/m/y");?> - <?php  echo date("d/m/y", $d)?></p>
                        <br>
                        <p><?php echo $stt['endereco'];?>
                        </p>
                    </div>
                  </container>
                <?php
              }else{
                echo 'Não há pedidos realizados!';
              }
                ?>
            </section>
        </div>
    </main>    

    <!-- Área de somente -dos -->

    
    </article>

</body>

<script src="js/meusPedidos.js"></script>
</html>

