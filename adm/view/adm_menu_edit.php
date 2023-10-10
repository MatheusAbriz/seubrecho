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
        $dados = $manager->getInfo("menu", $id);


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
        <h2>Menu</h2>
        <h4>Editando Menu</h4>
        <br>
        <fieldset>
            <table>
                <tr>
                    <td>
                        <form action="../control/controla_menu.php" value="1" name="myForm">
                        <input type="hidden" name="edita_menu" value="1">
                        <input type="hidden" name="id" value="<?=$id;?>">
                        <label for="nome">Nome</label><br>
                        <input type="text" name="nome" value="<?=$dados[0]['nome'];?>" required><br>
                        <label for="url">Url</label><br>
                        <input type="text" name="url" value="<?=$dados[0]['url'];?>" required><br>
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
            <input type="button" value="voltar" onclick="location.href='adm_menu_submenu.php';">
         </form>
</center>
    
</body>
</html>