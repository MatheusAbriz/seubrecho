<?php
session_start();
if(!isset($_SESSION["ADM-ID"]) || empty($_SESSION["ADM-ID"])){
    session_destroy();
    ?>
    <form action="../index.php" name="myForm" id="myForm" method="post">
        <input type="hidden" name="msg" value="OA00">
    </form>
    <script>
        document.getElementById('myForm').submit(); 
    </script>
    <?php
    exit();
}else{

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php
    require_once 'dependencias.php';
   ?>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estiloAdm.css">
</head>
<body>
    <section id="adm-home">
    <!--Barra vertical-->
    <div class="barra-vertical">
                        <!-- Links -->
                        <?php
                if($_SESSION["ADM-PODER"] >= 7){
                    echo "<a href='produtoList.php' id='adm_button' target='screen'>Produtos</a><br><br>";
                                    
                }
                if($_SESSION["ADM-PODER"] >= 7){
                    echo "<a href='adm_usuarios_list.php' id='adm_button' target='conteudoAdm'>Usuários Administrativos</a>";
                    
                }
                echo "<br><br>";
                echo "<a href='adm_usuarios_newpass.php' id='adm_button' target='conteudoAdm'>Alterar senha </a>";
                ?>
    </div>
<div class="container-fluid">
<!-- Conteúdo de cards-->
<div class="container-cards">

<div class="card-pedidos">
    <div class="area-info">
        <img src="img/img-sacola.png" class='cards-img' alt="icone de uma sacola">
        <p class="card-titulo">Pedidos</p>
    </div>
    <div class="area-numero">
        <p class="card-numero">35</p>
        <p class="card-dias"><img src="img/img-relogio.png" img='' class="img-relogio" alt='icone de um relogio'>Nos últimos 30 dias</p>
    </div>
</div>

<div class="card-vendas">
    <div class="area-info">
    <img src="img/img-carteira.png" class='cards-img' alt="icone de uma carteira">
    <p class="card-titulo">Vendas</p>
    </div>
    <div class="area-numero">
        <p class="card-numero">R$500,00</p>
        <p class="card-dias"><img src="img/img-relogio.png" img='' class="img-relogio" alt='icone de um relogio'>Nos últimos 30 dias</p>
    </div>
</div>

<div class="card-usuarios">
    <div class="area-info">
    <img src="img/img-usuario.png" class='cards-img' alt="icone de um usuario">
    <p class="card-titulo titulo-usuarios">Novos usuários</p>
    </div>
    <div class="area-numero">
        <p class="card-numero">35</p>
        <p class="card-dias"><img src="img/img-relogio.png" img='' class="img-relogio" alt='icone de um relogio'>Nos últimos 30 dias</p>
    </div>
</div>

<div class="card-produtos">
    <div class="area-info">
    <img src="img/img-pedido.png" class='cards-img' alt="icone de uma caixa representando um pedido">
    <p class="card-titulo titulo-produto">Produtos em Estoque</p>
    </div>
    <div class="area-numero">
        <p class="card-numero">350</p>
    </div>
</div>
</div>

<!--ÚLTIMOS PEDIDOS-->
<div class="container-pedidos">
<h1 class="titulo-pedidos">Últimos pedidos</h1>
<div class="ultimos-pedidos">
    
</div>
</div>
        </div>
    </div>
    </section>
</body>
</html>
<?php
}
?>