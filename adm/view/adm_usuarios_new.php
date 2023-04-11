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
        <h4>Criando Novo Usuários</h4>
        <br>
        <fieldset>
            <table>
                <tr>
                    <td>
                        <form action="../control/controla_administrador.php" value="1" name="myForm">
                        <input type="hidden" name="cria_usuario" value="1">
                        <label for="nome">Nome</label><br>
                        <input type="text" name="nome" value="" required><br>
                        <label for="email">Email</label><br>
                        <input type="email" name="email" value="" required><br>
                        <label for="senha">Senha</label><br>
                        <input type="password" name="senha" value="" required><br>
                        <label for="poder">Poder</label><br>
                        <select name="poder" id="poder">
                            <option valuue="9">9 -  Poder Maximo</option>
                            <option valuue="7">7 -  Novo Usuario + Clientes + Produtos e Valores</option>
                            <option valuue="5">5 - Clientes + Produtos e Valores</option>
                            <option valuue="2" selected>2 - Produtos e Valores</option>
                        </select><br><br>
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
            <input type="button" value="voltar" onclick="location.href='adm_usuarios_list.php';">
         </form>
</center>
    
</body>
</html>