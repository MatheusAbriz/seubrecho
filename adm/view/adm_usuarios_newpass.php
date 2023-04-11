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
        <h2>Usuários Administrativos</h2>
        <h4>Criar Nova Senha</h4>
        <br>
        <fieldset>
            <table>
                <tr>
                    <td>
                        <form action="../control/controla_administrador.php" value="1" name="myForm">
                        <input type="hidden" name="criar_nova_senha" value="1">
                        <label for="senha">Senha</label><br>
                        <input type="password" name="senha1" value="" required><br>
                        <label for="senha">Digite novamente sua senha</label><br>
                        <input type="password" name="senha2" value="" required><br>
                        <input type="submit" name="sbmt" value="Enviar"><br>

                          </form>
                       
                    </td>
                </tr>


            </table>
        </fieldset>
        <br><br>
        <form>
            <input type="button" value="voltar" onclick="location.href='adm_usuarios_list.php';">
         </form>
</center>
<?php
     if(isset($_POST['msg'])){
        require_once 'msg.php';
        $msg = $_POST["msg"];
        $msgExibir = $MSG[$msg];
        echo "<script>alert('" . $msgExibir . "');</script>";
     }


  ?>
    
</body>
</html>