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
    <link rel="stylesheet" href="css/produtoList.css">
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
    <section class="adm-perfil">

    <!--BARRA VERTICAL-->
    <div class="barra-vertical">
                        <!-- Links -->
                        <?php
                if($_SESSION["ADM-PODER"] >= 7){
                    echo "<a href='produtoList.php' id='adm_button' target='screen'>Produtos</a><br><br>";
                                    
                }
                if($_SESSION["ADM-PODER"] >= 7){
                    echo "<a href='adm_usuarios_list.php' id='adm_button' target='conteudoAdm'>Usuários Administrativos</a>";
                    
                }
                echo "<br><br>";
                echo "<a href='adm_usuarios_newpass.php' id='adm_button' target='conteudoAdm'>Alterar senha </a>";
                ?>
    </div>
        <div class="conteudo-area">
            <div class="usuario-conteudo">
                <h1 class="usuarios-adm">Administração de produtos</h1>
                <h4>Listagem</h4>
            </div>
            <div class="scroll">
        <!-- Lista Produtos -->
        <table class="usuario-tabela">
            <thead>
                <tr class="lista-header">
                    <th scope="col" class="texto-lista">#</th>
                    <th scope="col" class="texto-lista">Nome</th>
                    <th scope="col" class="texto-lista">Descrição</th>
                    <th scope="col" class="texto-lista">Gênero</th>
                    <th scope="col" class="texto-lista">Condicao</th>
                    <th scope="col" class="texto-lista">Tamanho</th>
                    <th scope="col" class="texto-lista">Preço</th>
                    <th scope="col" class="texto-lista">Promoção</th>
                    <th scope="col" class="texto-lista">Descrição da Promoção</th>
                    <th scope="col" class="texto-lista">Novidade</th>
                    <th scope="col" class="texto-lista">Imagem</th>
                    <th scope="col" class="texto-lista">Imagem Lado</th>
                    <th scope="col" class="texto-lista">Imagem Costas</th>
                    <th scope="col" class="texto-lista">Data/Hora</th>
                    <th scope="col" class="texto-lista">Cor</th>
                    <th scope="col" class="texto-lista">Status</th>
                    <th scope="col" class="texto-lista">Categoria</th>
                    <th scope="col" class="texto-lista">Destaque</th>
                    <th scope="col" class="texto-lista">Valor Antigo</th>
                    <th scope="col" class="texto-lista"><i class="fa fa-gear fa-spin fa-lg"></i></th>
                    <th scope="col" class="texto-lista"><i class="fa fa-trash fa-lg"></i></th>
                    <th scope="col" class="texto-lista"><a href="productsNew.php" id="addNew_button"><i class="fa fa-plus fa-xs"></i></th>
                    </a>
                </tr>
            </thead>
            <tbody>
                <?php
                if(count($dados) > 0){
                    for($i = 0;$i < count($dados); $i++){
                    echo "<tr class='lista-header-produtos'>";
                    echo "<th class='conteudo-lista' scope='row'>" . $dados[$i]["id"] . "</th>";
                    echo "<td class='conteudo-lista'>" . $dados[$i]["nome"] . "</td>";
                    echo "<td class='conteudo-lista'>" . $dados[$i]["descricao"] . "</td>";
                    echo "<td class='conteudo-lista'>" . $dados[$i]["genero"] . "</td>";
                    echo "<td class='conteudo-lista'>" . $dados[$i]["condicao"] . "</td>";
                    echo "<td class='conteudo-lista'>" . $dados[$i]["tamanho"] . "</td>";
                    echo "<td class='conteudo-lista'>" . $dados[$i]["preco"] . "</td>";
                    echo "<td class='conteudo-lista'>" . $dados[$i]["promocao"] . "</td>";
                    echo "<td class='conteudo-lista'>" . $dados[$i]["desc_promocao"] . "</td>";
                    echo "<td class='conteudo-lista'>" . $dados[$i]["novidade"] . "</td>";
                    echo "<td class='conteudo-lista'>" . $dados[$i]["img"] . "</td>";
                    echo "<td class='conteudo-lista'>" . $dados[$i]["img_lado"] . "</td>";
                    echo "<td class='conteudo-lista'>" . $dados[$i]["img_costa"] . "</td>";
                    echo "<td class='conteudo-lista'>" . $dados[$i]["datahora"] . "</td>";
                    echo "<td class='conteudo-lista'>" . $dados[$i]["cor"] . "</td>";
                    if($dados[$i]["status"] == 1){
                        echo "<td class='conteudo-lista'>ATIVO</td>";

                    }else{
                        echo "<td class='conteudo-lista'>INATIVO</td>";


                    }
                    echo "<td class='conteudo-lista'>" . $dados[$i]["categoria"] . "</td>";
                    echo "<td class='conteudo-lista'>" . $dados[$i]["destaque"] . "</td>";
                    echo "<td class='conteudo-lista'>" . $dados[$i]["valorantigo"] . "</td>";
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
            </div>
        </div>
    </section>
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