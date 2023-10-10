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
    $id = "";
    if(!isset($_REQUEST["id"]) && $_REQUEST["id"] == ""){
        
        ?>
    <form action="adm_menu_submenu.php" name="myForm" id="myForm" method="post">
        <input type="hidden" name="msg" value="OP04">
    </form>
    <script>
        document.getElementById('myForm').submit(); 
    </script>
    <?php
    exit();
  

    }else{
        $id = $_REQUEST["id"];
        require_once '../model/Manager.class.php';
        $manager = new Manager();
        $dados = $manager->getInfo("submenu", $id);


    }

 
    
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/estiloAdm.css" >
    

</head>
<body>
<center>
        <h2>Submenu</h2>
        <h4>Editando Submenu</h4>
        <br>
        <fieldset>
            <table>
                <tr>
                    <td>
                        <form action="../control/controla_sub.php" value="1" name="myForm">
                        <input type="hidden" name="edita_sub" value="1">
                        <input type="hidden" name="id" value="<?=$id;?>">

                        <label for="nome">Nome</label><br>
                        <input type="text" name="nomesub" value="<?=$dados[0]['nomesub'];?>" required><br>
                        <label for="urlsub">UrlSub</label><br>
                        <input type="text" name="urlsub" value="<?=$dados[0]['urlsub'];?>" required><br>
                        <input type="hidden" name="datahora" value="<?=$dados[0]['datahora'];?>">
                       <label for="status">Status</label><br>
                        <?php
                        if($dados[0]['status'] == 0){
                        ?>
                        <input type="radio" name="status" value="0" checked>Inativo &nbsp; &nbsp;
                        <input type="radio" name="status" value="1">Ativo<br><br>
                        <?php
                        }else{
                        
                        ?>
                         <input type="radio" name="status" value="0">Inativo &nbsp; &nbsp;
                        <input type="radio" name="status" value="1" checked>Ativo<br><br>
                        <?php
                        }
                        ?>
                        <input type="submit" name="sbmt" value="Enviar">
                          </form>
                       
                    </td>
                </tr>


            </table>
        </fieldset>
        <br><br>
        <form>
            <input type="button" values="voltar" onclick="location.href='adm_menu_submenu.php';">
         </form>
</center>
    
</body>
</html>