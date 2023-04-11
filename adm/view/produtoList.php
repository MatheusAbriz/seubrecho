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
    //Não sei se é aqui, mas rever video celso 12:50 número #42
    exit();
    }else{
    require_once "../model/Manager.class.php";
    $manager = new Manager();
    //QUERY PARA SOLICITAR A LISTA DE PRODUTOS, PROVAVELMENTE O CELSO VAI CRIAR POSTERIORMENTE
    $dados = $manager->listaProdutos("produto");
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="https://kit.fontawesome.com/3afc491b4b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estiloAdm.css" >
    <script>
        function ConfirmProductDelete(id){
            //"\n" faz com que quebre a linha
            var resp = confirm("Tem certeza que deseja deletar essse registro?\nRecomendamos que apenas mude o 'status' para 'inativo'.");
            if(resp == true){
                //caso a pessoa queira realmente apagar
                location.href='../control/controla_produto.php?deleta_produto=1&id=' + id;
            }else{
                return null;

            }
            
        
        }
    </script>

</head>
<body>
    <center>
        <h2>Administração de Produtos</h2>
        <h4>Listagem</h4>
        <br>
        <table style="width: 800px; background-color: #FFF;">
            <tr>
                <td>
                    <!--VAI SER NECESSÁRIO CRIAR ESSA PÁGINA "produtosNew"-->
                    <a href="productsNew.php" id="addNew_button">
                        <i class="fa fa-plus fa-xs"></i>
                    </a>
                </td>
            </tr>
        </table>
        <!-- Lista Produtos -->
        <table>
            <thead>
                <tr>
                    <th scope="col" id="thList">#</th>
                    <th scope="col" id="thList">Nome</th>
                    <th scope="col" id="thList">Descrição</th>
                    <th scope="col" id="thList">Gênero</th>
                    <th scope="col" id="thList">Condicao</th>
                    <th scope="col" id="thList">Tamanho</th>
                    <th scope="col" id="thList">Preço</th>
                    <th scope="col" id="thList">Promoção</th>
                    <th scope="col" id="thList">Descrição da Promoção</th>
                    <th scope="col" id="thList">Novidade</th>
                    <th scope="col" id="thList">Imagem</th>
                    <th scope="col" id="thList">Imagem Lado</th>
                    <th scope="col" id="thList">Imagem Costas</th>
                    <th scope="col" id="thList">Data/Hora</th>
                    <th scope="col" id="thList">Cor</th>
                    <th scope="col" id="thList">Status</th>
                    <th scope="col" id="thList">Categoria</th>
                    <th scope="col" id="thList">Destaque</th>
                    <th scope="col" id="thList">Valor Antigo</th>
                    <th scope="col" id="thList"><i class="fa fa-gear fa-spin fa-lg"></i></th>
                    <th scope="col" id="thList"><i class="fa fa-trash fa-lg"></i></th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(count($dados) > 0){
                    for($i = 0;$i < count($dados); $i++){
                    echo "<tr>";
                    echo "<th id='tdList' scope='row'>" . $dados[$i]["id"] . "</th>";
                    echo "<td id='tdList'>" . $dados[$i]["nome"] . "</td>";
                    echo "<td id='tdList'>" . $dados[$i]["descricao"] . "</td>";
                    echo "<td id='tdList'>" . $dados[$i]["genero"] . "</td>";
                    echo "<td id='tdList'>" . $dados[$i]["condicao"] . "</td>";
                    echo "<td id='tdList'>" . $dados[$i]["tamanho"] . "</td>";
                    echo "<td id='tdList'>" . $dados[$i]["preco"] . "</td>";
                    echo "<td id='tdList'>" . $dados[$i]["promocao"] . "</td>";
                    echo "<td id='tdList'>" . $dados[$i]["desc_promocao"] . "</td>";
                    echo "<td id='tdList'>" . $dados[$i]["novidade"] . "</td>";
                    echo "<td id='tdList'>" . $dados[$i]["img"] . "</td>";
                    echo "<td id='tdList'>" . $dados[$i]["img_lado"] . "</td>";
                    echo "<td id='tdList'>" . $dados[$i]["img_costa"] . "</td>";
                    echo "<td id='tdList'>" . $dados[$i]["datahora"] . "</td>";
                    echo "<td id='tdList'>" . $dados[$i]["cor"] . "</td>";
                    if($dados[$i]["status"] == 1){
                        echo "<td id='tdList'>ATIVO</td>";

                    }else{
                        echo "<td id='tdList'>INATIVO</td>";


                    }
                    echo "<td id='tdList'>" . $dados[$i]["categoria"] . "</td>";
                    echo "<td id='tdList'>" . $dados[$i]["destaque"] . "</td>";
                    echo "<td id='tdList'>" . $dados[$i]["valorantigo"] . "</td>";
                    ?>
                    <td id="idList">
                        <form>
                            <input type="button" value="Editar" onclick="location.href='produto_edit.php?edit=1&id=<?=$dados[$i]['id'];?>'">
                        </form>

                    </td>
                    <td id="idList">
                        <form>
                            <input type="button" value="Deletar" onclick="ConfirmProductDelete(<?=$dados[$i]['id'];?>)">
                        </form>

                    </td>
                    <?php
                
                    echo "</tr>";
                }
                ?>
            </tbody>
            <?php
                }else{
                    echo "<tr><td colsspan='8'>Registro nao encontrado!</td></tr>";
                }
            ?>
        </table>
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
<?php
}
?>