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
    }
    
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/adm_alterarSenha.css">
    

</head>
<body>
    <section class="adm-alterarSenha">

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

    <div class="conteudo-area">
        <div class="usuarios-adm">
        <img src="img/img-usuarios.png" class="img-fluid img-usuarios">
        <h1 class="titulo-usuarios">Usuários administrativos</h1>
        </div>
        <!--COMEÇO FORMULÁRIO-->
        <div class="formulario">
        <form action="../control/controla_administrador.php" value="1" name="myForm">
        <h1 class="form-titulo">Alterar senha</h1>
            <input type="hidden" name="criar_nova_senha" value="1">

            <input type="password" name="senha1" value="" required placeholder="Antiga senha" class="input-senha">

            <input type="password" name="senha2" value="" required placeholder="Nova senha" class="input-nova-senha">

            <input type="submit" name="sbmt" value="Alterar" class="botao-submit">
        </form>
        </div>
        </div>
        <form>
            <input type="button" value="voltar" onclick="location.href='adm_usuarios_list.php';">
         </form>
<?php
     if(isset($_POST['msg'])){
        require_once 'msg.php';
        $msg = $_POST["msg"];
        $msgExibir = $MSG[$msg];
        echo "<script>alert('" . $msgExibir . "');</script>";
     }


  ?>
    </section>
</body>
</html>