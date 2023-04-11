<?php
session_start();
if(!isset($_SESSION["ADM-ID"]) || empty($_SESSION["ADM-ID"])){ 
    session_destroy();
    ?>
    <!--Alterado 'myForm' para 'productsNew' -->
    <form action="../index.php" name="productsNew" id="productsNew" method="post">
        <input type="hidden" name="msg" value="OA00">
    </form>
    <script>
        //Alterado 'myForm' para 'productsNew'
        document.getElementById('productsNew').submit(); 

        function enviarForm(){
            if(document.productsNew.nome.value == "" || document.productsNew.nome.value < 5){
                alert("preencha campo NOME corretamente");
                document.productsNew.nome.focus();
                return false;
            }

            if(document.productsNew.descricao.value == "" || document.productsNew.descricao.value < 5){
                alert("preencha campo DESCRIÇÃO corretamente");
                document.productsNew.descricao.focus();
                return false;
            }

            if(document.productsNew.pre_med.value == ""){
                alert("preencha campo PREÇO MÉDIO corretamente");
                document.productsNew.pre_med.focus();
                return false;
            }

            if(document.productsNew.pre_gra.value == ""){
                alert("preencha campo PREÇO GRANDE corretamente");
                document.productsNew.pre_gra.focus();
                return false;
            }

            if(document.productsNew.desc_promocao.value.length < 3){
                var str = document.productsNew.desc_promocao.value.length;
                var result = str.indexOf("%") > -1;
                if(result == true){
                    alert("Não coloque porcentagem no desconto promocional!");
                    document.productsNew.desc_promocao.focus();
                    return false;
            }

            return true;
        }
    }

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
        <h2>Administração de produtos</h2>
        <h4>Novo Produto</h4>
        <br>

        
        <fieldset>
            <table>
                <tr>
                    <td>
                        <form method="POST" action="../control/controla_produto.php" value="1" name="productsNew" enctype="multipart/from-data" onsubmit="return enviarForm()">
                        <input type="hidden" name="products_new" value="1">
        
                        <label for="nome">Nome</label><br>
                        <input type="text" name="nome" value="" required><br>
        
                        <!--Criando um objeto que consiga pegar bastante informação dos produtos(de ingredientes para descrição)-->
                        <label for="descricao">Descrição:</label><br>
                        <textarea name="descricao" rows="6" style="height: 80px;" value="" required>
                        </textarea><br><br>

                        <!--Se é masculino ou feminino(no vídeo está salgado/doce)-->
                        <label for="genero">Gênero</label><br>
                        <!--Deixando o produto - que geralmente tem mais em lojas - selecionado -->
                        <select name="genero" id="genero">
                            <option value="Feminino">Feminino</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Infantil">Infantil</option>
                         </select><br><br>   

                        <label for="condicao">Condição</label><br>
                        <select name="condicao" id="condicao">
                            <option value="Nova">Nova</option>
                            <option value="Seminovo">Seminovo</option>
                            <option value="Usado">Usado</option>
                         </select><br><br>   

                         <label for="tamanho">Tamanho</label><br>
                        <input type="text" id="tamanho" name="tamanho" value="" requiered=""><br><br> 
                        
                        <!--Celso agora cria mais um label, chamado "preço da pizza média" (alterei para "preço do produto médio") #45 min 7:42-->
                        <label for="preco">Preço do produto</label><br>
                        <input type="text" name="preco" value="" required><br><br>
                        
                        <!--Checkando se o produto está em promoção(o professor substitui a URL, mas eu vou deixar) -->
                        <label for="promocao">Promoção</label><br>
                        <!--Value = 1(ativo) value = 0(inativo) -->
                        <input type="radio" name="promocao" value="0">Sem promoção<br>
                        <input type="radio" name="promocao" value="1">Em promoção<br><br>
        
                        <!--Adicionando um desc_promocao, o celso coloca em porcentagem mas talvez tenha que ser alterado-->
                         <label for="desc_promocao">Descrição da promoção:</label><br>
                        <span class="textoExplica">(Desconto serve para produtos de tamanho médio e grande. Use porcentagem, mas não coloque o símbolo(%). Caso não exista desconto, deixe o 'hífen')<br></span>
                        <input type="text" name="desc_promocao" value="-"><br><br>

                        <label for="novidade">Novidade</label><br>
                        <input type="radio" name="novidade" value="0" checked>Não é novidae<br>
                        <input type="radio" name="novidade" value="1">Sim, é novidade<br><br>
                          
                        <label for="img">Imagem Pequena (120x120)</label><br>
                        <input type='file' name='img' value="" required><br><br>
        
                        <label for="img_lado">Imagem de Lado (120x120)</label><br>
                        <input type="file" name="img_lado" value="" required><br><br>
        
                        <label for="img_costa">Imagem de Costas (120x120)</label><br>
                        <input type="file" name="img_costa" value="" required><br><br>

                        <label for="cor">Cor</label>
                        <input type="tetx" id="cor" name="cor" value="" required=""><br><br>
                        
                        <label for="status">Status</label><br>
                        <input type="radio" name="status" value="0">Inativo &nbsp; &nbsp;
                        <input type="radio" name="status" value="1" checked>Ativo<br><br>

                        <label for="categoria">Categoria</label>
                        <select name="categoria" id="categoria">
                            <option value="Feminino-sup">Feminino - parte superior</option>
                            <option value="Feminino-inf">Feminino - parte inferior</option>
                            <option value="Feminino-cal">Masculino - calçados</option>
                            <option value="Masculino-sup">Masculino - parte superior</option>
                            <option value="Masculino-inf">Masculino - parte inferior</option>
                            <option value="Masculino-cal">Masculino - calçados</option>
                            <option value="Infantil-sup">Infantil - parte superior</option>
                            <option value="Infantil-inf">Infantil - parte inferior</option>
                            <option value="Infantil-cal">Infantil - calçados</option>
                         </select><br><br> 

                         <label for="destaque">Destaque</label><br>
                        <input type="radio" name="destaque" value="1">Em destaque &nbsp; &nbsp;
                        <input type="radio" name="destaque" value="0" checked>Não está em destaque<br><br>

                        <label for="valorantigo">Valor antigo</label><br>
                        <input type="text" name="valorantigo" value="" required><br><br>
        
                        <input type="submit" name="submt" value="Enviar">

                          </form>
                       
                    </td>
                </tr>


            </table>
        </fieldset>
        <br><br>
        <form>
            <!--AO VOLTAR, IRÁ PARA A productsList.php (LISTA DE PRODUTOS). NO VIDEO DO CELSO TA UMA "function voltar()" #45 min 1:20!-->
            <input type="button" value="voltar" onclick="location.href='produtoList.php';">
         </form>
</center>
    
</body>
</html>