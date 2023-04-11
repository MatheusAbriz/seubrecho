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
   <link rel="stylesheet" href="css/estiloAdm.css">
</head>
<body>
<div class="container-fluid">
        <header>
            <div class="row">
                <div class="col-4 text-warning" id="logo"> Seu Brecho
                    <img src="peixe.png" alt="">
                </div>
                <div class="col-5 text-warning" id="logo"> &nbsp;</div>
                <div class="col-3" id="informacoes"> 
              
                </div>
            </div>
        </header>
        <div class="row">
            <div class="col-2" id="nav">
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
                
                echo "<br><br>";
                echo "<a href='adm_menu_submenu.php' id='adm_button' target='conteudoAdm'>Menu e Submenu </a>";
                ?>
                
            </div>
            <div class="col-10" id="main">
                <iframe src="saudacao.php" name="conteudoAdm" id="conteudoAdm" frameborder="0" width="100%" height="900" seamless></iframe>
            </div>
        </div>
    </div>
</body>
</html>
<?php
}
?>