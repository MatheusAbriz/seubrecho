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
    <form action="adm_usuarios_list.php" name="myForm" id="myForm" method="post">
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
        $dados = $manager->getInfo("administrador", $id);


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
        <h4>Editando Usuários</h4>
        <br>
        <fieldset>
            <table>
                <tr>
                    <td>
                        <form action="../control/controla_administrador.php" value="1" name="myForm">
                        <input type="hidden" name="edita_usuario" value="1">
                        <input type="hidden" name="id" value="<?=$id;?>">
                        <label for="nome">Nome</label><br>
                        <input type="text" name="nome" value="<?=$dados[0]['nome'];?>" required><br>
                        <label for="email">Email</label><br>
                        <input type="email" name="email" value="<?=$dados[0]['email'];?>" required><br>
                        <input type="hidden" name="senha" value="<?=$dados[0]['senha'];?>">
                        <input type="hidden" name="datahora" value="<?=$dados[0]['datahora'];?>">
                        <label for="poder">Poder</label><br>
                        <select name="poder" id="poder">
                        
                            <?php
                            if($dados[0]['poder'] == 9){
                            
                            
                            ?>
                            <option value="9" selected>9 -  Poder Maximo</option>
                            <option value="7">7 -  Novo Usuario + Clientes + Produtos e Valores</option>
                            <option value="5">5 - Clientes + Produtos e Valores</option>
                            <option value="2" selected>2 - Produtos e Valores</option>
                            <?php
                                }else if($dados[0]['poder'] == 7){
                            ?>
                            <option value="9">9 -  Poder Maximo</option>
                            <option value="7" selected>7 -  Novo Usuario + Clientes + Produtos e Valores</option>
                            <option value="5">5 - Clientes + Produtos e Valores</option>
                            <option value="2">2 - Produtos e Valores</option>
                            <?php
                              }else if($dados[0]['poder'] == 5){
                                ?>
                                <option value="9">9 -  Poder Maximo</option>
                                <option value="7">7 -  Novo Usuario + Clientes + Produtos e Valores</option>
                                <option value="5" selected>5 - Clientes + Produtos e Valores</option>
                                <option value="2">2 - Produtos e Valores</option>
                                <?php
                                  }else{
                                    ?>
                                    <option value="9">9 -  Poder Maximo</option>
                                    <option value="7">7 -  Novo Usuario + Clientes + Produtos e Valores</option>
                                    <option value="5">5 - Clientes + Produtos e Valores</option>
                                    <option value="2" selected>2 - Produtos e Valores</option>
                                    <?php
                                    
                            
                            }
                            ?>
                       
                        </select><br><br>
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
            <input type="button" values="voltar" onclick="location.href='adm_usuarios_list.php';">
         </form>
</center>
    
</body>
</html>