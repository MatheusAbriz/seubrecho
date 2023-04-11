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
    <form action="produtoList.php" name="myForm" id="myForm" method="post">
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
        $dados = $manager->getInfo("produto", $id);


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
        <h2>Produto</h2>
        <h4>Editando Produto</h4>
        <br>
        <fieldset>
            <table>
                <tr>
                    <td>
                        <form action="../control/controla_produto.php" value="1" name="myForm">
                        <input type="hidden" name="edita_produto" value="1">
                        <input type="hidden" name="id" value="<?=$id;?>">

                        <label for="nome">Nome</label><br>
                        <input type="text" name="nome" value="<?=$dados[0]['nome'];?>" required><br>
                        
                        <label for="descricao">Descricao</label><br>
                        <textarea name="descricao" rows="6" style="height: 80px;" value="<?=$dados[0]['descricao'];?>" required>
                        </textarea><br><br>
                        
                        <label for="genero">Genero</label><br>
                        <select name="genero" id="genero">
                            <option value="Feminino" <?php  if($dados[0]['genero'] == "Feminino"){ echo " checked";}  ?>>Feminino</option>
                            <option value="Masculino" <?php  if($dados[0]['genero'] == "Masculino"){ echo " checked";}  ?>>Masculino</option>
                            <option value="Infantil" <?php  if($dados[0]['genero'] == "Infantil"){ echo " checked";}  ?>>Infantil</option>
                         </select><br><br>   

                         <label for="condicao">Condição</label>
                        <select name="condicao" id="condicao">
                            <option value="Nova" <?php  if($dados[0]['condicao'] == "Nova"){ echo " checked";}  ?>>Nova</option>
                            <option value="Seminovo" <?php  if($dados[0]['condicao'] == "Seminovo"){ echo " checked";}  ?>>Seminovo</option>
                            <option value="Usado" <?php  if($dados[0]['condicao'] == "Usado"){ echo " checked";}  ?>>Usado</option>
                         </select><br><br>   

                         <label for="tamanho">Tamanho</label>
                        <input type="text" id="tamanho" name="tamanho" value="<?=$dados[0]['tamanho'];?>" requiered="">

                         <label for="preco">Preço</label><br>
                        <input type="text" name="preco" value="<?=$dados[0]['preco'];?>" required><br><br>
        
                        <label for="promocao">Promocao</label><br>
                        <input type="radio" name="promocao" value="0" <?php  if($dados[0]['promocao'] == 0){ echo " checked";}  ?>>Sem promoção<br>
                        <input type="radio" name="promocao" value="1" <?php  if($dados[0]['promocao'] == 1){ echo " checked";}  ?>>Em promoção<br><br>

                        <label for="desc_promocao">Descricao da promoção</label><br>

                        <span class="textoExplica">(Desconto serve para produtos de tamanho médio e grande. Use porcentagem, mas não coloque o símbolo(%). Caso não exista desconto, deixe o 'hífen')<br></span>
                        <input type="text" name="desc_promocao" value="<?=$dados[0]['desc_promocao'];?>" required><br><br>
                        <label for="novidade">Novidade</label><br>
                        <input type="radio" name="novidade" value="0" <?php  if($dados[0]['novidade'] == 0){ echo " checked";}  ?>>Não é novidae<br>
                        <input type="radio" name="novidade" value="1" <?php  if($dados[0]['novidade'] == 1){ echo " checked";}  ?>>Sim, é novidade<br><br>

                        <label for="img_peq">Imagem pequena</label><br>
                        <input type="file" name="img" value="<?=$dados[0]['img'];?>" required><br>
                        <label for="img_med">Iamgem Média</label><br>
                        <input type="file" name="img_lado" value="<?=$dados[0]['img_lado'];?>" required><br>
                        <label for="img_gra">Iamgem Grande</label><br>
                        <input type="file" name="img_costa" value="<?=$dados[0]['img_costa'];?>" required><br>
                    
                        <label for="cor">Cor</label>
                        <input type="tetx" id="cor" name="cor" value="<?=$dados[0]['cor'];?>" required="">
                        
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
                        
                        <label for="categoria">Categoria</label>
                        <select name="categoria" id="categoria">
                            <option value="Feminino-sup" <?php if($dados[0]['categoria'] == "Feminino-sup")?>>Feminino - parte superior</option>
                            <option value="Feminino-inf" <?php if($dados[0]['categoria'] == "Feminino-inf")?>>Feminino - parte inferior</option>
                            <option value="Feminino-cal" <?php if($dados[0]['categoria'] == "Feminino-cal")?>>Feminino - calçados</option>
                            <option value="Masculino-sup" <?php if($dados[0]['categoria'] == "Masculino-sup")?>>Masculino - parte superior</option>
                            <option value="Masculino-inf" <?php if($dados[0]['categoria'] == "Masculino-inf")?>>Masculino - parte inferior</option>
                            <option value="Masculino-cal" <?php if($dados[0]['categoria'] == "Masculino-cal")?>>Masculino - calçados</option>
                            <option value="Infantil-sup" <?php if($dados[0]['categoria'] == "Infantil-sup")?>>Infantil - parte superior</option>
                            <option value="Infantil-inf" <?php if($dados[0]['categoria'] == "Infantil-inf")?>>Infantil - parte inferior</option>
                            <option value="Infantil-cal" <?php if($dados[0]['categoria'] == "Infantil-cal")?>>Infantil - calçados</option>
                         </select><br><br> 

                         <label for="destaque">Destaque</label><br>
                        <input type="radio" name="destaque" value="1" <?php  if($dados[0]['destaque'] == 1){ echo " checked";}  ?>>Em destaque &nbsp; &nbsp;
                        <input type="radio" name="destaque" value="0" <?php  if($dados[0]['destaque'] == 0){ echo " checked";}  ?>>checked>Não está em destaque<br><br>
        
                       
                        <input type="submit" name="sbmt" value="Enviar">
                          </form>
                       
                    </td>
                </tr>


            </table>
        </fieldset>
        <br><br>
        <form>
            <input type="button" values="voltar" onclick="location.href='produtoList.php';">
         </form>
</center>
    
</body>
</html>