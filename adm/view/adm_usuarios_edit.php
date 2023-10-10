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
    <link rel="stylesheet" href="css/adm_perfil.css">
    
    <style>

        body,html{
            background-color: #F5F5F5;
        }

        fieldset{
            border: none;
        }

        #formulario{
            background-color: #FFF;
        }

        fieldset table form{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 450px;
            box-shadow: 4px 4px 15px rgba(0, 0, 0, 0.25);
            border-radius: 19px;
            margin: 0 auto;
            margin-top: 106px;
        }
        fieldset table form h4, fieldset table form h2{
            font-family: 'Inter', Arial, Helvetica, sans-serif;
        }

        fieldset table form h2{
            margin-top: 25px;
        }

        fieldset table form h4{
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .form-modal-label{
            align-self: flex-start;
            margin-left: 13%;
            font-family: 'Inter', Arial, Helvetica, sans-serif;
            margin-bottom: 18px;
        }

        #form-modal-botao{
            margin: 0;
        }

        .form-modal-botao{
            margin-right: 11% !important;
            margin-top: 15px !important;
            margin-bottom: 50px !important;
        }

        #status-area{
            width: 100%;
        }

        input[type=radio]{
            margin-left: 60px;
            margin-top: 38px;
        }

        .form-voltar-botao{
            position: fixed;
            top: 0;
            left: 0;
            margin: -5px !important;
            border-radius: 0 15px 154px !important;
        }
    </style>
</head>
<body>
    <center>
        <br>
        <fieldset>
            <table>
                <tr>
                    <td>
                        <form action="../control/controla_administrador.php" value="1" name="myForm" id="formulario">

                        <center><h2>Usuários Administrativos</h2>
                        <h4>Editando Usuários</h4></center>
                        <input type="hidden" name="edita_usuario" value="1">
                        <input type="hidden" name="id" value="<?=$id;?>">
                        <label for="nome" class="form-modal-label">Nome</label>
                        <input type="text" class="form-modal-input" name="nome" value="<?=$dados[0]['nome'];?>" required>
                        <label for="email" class="form-modal-label">Email</label>
                        <input type="email" class="form-modal-input" name="email" value="<?=$dados[0]['email'];?>" required>
                        <input type="hidden" class="form-modal-input" name="senha" value="<?=$dados[0]['senha'];?>">
                        <input type="hidden" class="form-modal-input" name="datahora" value="<?=$dados[0]['datahora'];?>">
                        <label for="poder" class="form-modal-label">Poder</label>
                        <select name="poder" id="poder" class="form-modal-input">
                        
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
                       </form>
                        </select>
                        </fieldset>
                        <fieldset id="status-area">
                        <form>
                        <label for="status" class="form-modal-label">Status</label><br>
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
                        </fieldset>
                        <input type="submit" name="sbmt" value="Enviar" id="form-modal-botao" class="form-modal-botao">
                          </form>
                    </td>
                </tr>


            </table>
        </fieldset>
        <br><br>
        <form>
            <input type="button" value="voltar" onclick="location.href='adm_usuarios_list.php';" id="form-modal-botao" class="form-voltar-botao">
         </form>
    
</body>
</html> 