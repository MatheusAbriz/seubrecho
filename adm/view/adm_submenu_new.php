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
    <link rel="stylesheet" href="css/estiloAdm.css" >
    

</head>
<body>
<center>
        <h2>Submenu</h2>
        <h4>Criando Submenu</h4>
        <br>
        <fieldset>
            <table>
                <tr>
                    <td>
                        <form action="../control/controla_sub.php" value="1" name="myForm">
                            <?php
                            require_once ('../model/Manager.class.php');
                            $manager = new Manager();
                            $dados = $manager->listClient("menu");
                            // var_dump($dados);
                        ?>
                        <select name="idmenu">
                            <?php
                            if(count($dados) > 0){
                                for($i = 0;$i < count($dados); $i++){
                                    print "<option value='" . $dados[$i]['id'] . "'>" . $dados[$i]['nome']. "</option>";
                                }
                            }
                            ?>
                        </select>
                        <input type="hidden" name="cria_sub" value="1">
                        <label for="nome">Nome Sub</label><br>
                        <input type="text" name="nomesub" value="" required><br>
                        <label for="urlsub">Url Sub</label><br>
                        <input type="text" name="urlsub" value="" required><br>
                        <label for="status">Status</label><br>
                        <input type="radio" name="status" value="0">Inativo &nbsp; &nbsp;
                        <input type="radio" name="status" value="1" checked>Ativo<br><br>
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