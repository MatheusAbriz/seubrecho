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
    }else{
    require_once "../model/Manager.class.php";
    $manager = new Manager();
    $dados = $manager->listClient("administrador");
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Perfil - ADM</title>
    <script src="https://kit.fontawesome.com/3afc491b4b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/adm_perfil.css" >
    <script>
        function ConfirmDelete(id){
            var resp = confirm("Tem certeza que deseja deletar essse registro?");
            if(resp == true){
                location.href='../control/controla_administrador.php?deleta_usuario=1&id=' + id;
            }else{
                return null;

            }
            
        
        }
    </script>

</head>
<body>
    <section class="adm-perfil">
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
            <h1 class="usuarios-adm"> <img src="img/img-adm-perfil.png" alt="imagem do perfil do adm" class="img-fluid img-logo-perfil">Usuários administrativos</h1>
            <div class="img-adicionar"><a href="adm_usuarios_new.php" id="addNew_button"><img src="img/img-adicionar.png" class="img-fluid"></a></div>
        </div>
        <div class="scroll">
        <!-- Lista Usuários -->
        <table class="usuario-tabela">
            <tbody style="height: 55px;">
                <tr class="lista-header">
                    <th class="texto-lista" scope="col">id</th>
                    <th class="texto-lista" scope="col" style="margin-left: unset; margin-right: unset;">Nome</th>
                    <th class="texto-lista" scope="col">Email</th>
                    <th class="texto-lista" scope="col">Data</th>
                    <th class="texto-lista" scope="col">Poder</th>
                    <th class="texto-lista" scope="col">Status</th>
                    <th class="texto-lista" scope="col"><img src="img/icone_editar.png"></th>
                    <th class="texto-lista" scope="col"><img src="img/icone_excluir.png"></th>
                </tr>
            </tbody>
            <tbody>
                <?php
                if(count($dados) > 0){
                    for($i = 0;$i < count($dados); $i++){
                    echo "<tr class='conteudo-lista-header'>";
                    echo "<td class='conteudo-lista' scope='row'>" . $dados[$i]["id"] . "</th>";
                    echo "<td class='conteudo-lista' style='margin-left: unset; margin-right: unset;'>" . $dados[$i]["nome"] . "</td>";
                    echo "<td class='conteudo-lista'>" . $dados[$i]["email"] . "</td>";
                    echo "<td class='conteudo-lista'>" . $dados[$i]["datahora"] . "</td>";
                    echo "<td class='conteudo-lista'>" . $dados[$i]["poder"] . "</td>";
                    if($dados[$i]["status"] == 1){
                        echo "<td class='conteudo-lista'>ATIVO</td>";

                    }else{
                        echo "<td class='conteudo-lista'>INATIVO</td>";

                    }
                    ?>
                    <td class="conteudo-lista">
                        <form>
                        <a href="#" class="botao-adicionar" onclick="location.href='adm_usuarios_edit.php?edit=1&id=<?=$dados[$i]['id'];?>'"><img src="img/icone_editar_rosa.png"></a>
                            <!--COMENTARIO, NAO EXCLUIR
                            onclick="location.href='adm_usuarios_edit.php?edit=1&id=<//$dados[$i]['id']>'" -->
                            <!-- <a href="#"  onnclick="location.href='adm_usuarios_edit.php?edit=1&id=<?//$dados[$i]['id'];?>'"><img src="img/icone_editar_Rosa.png"></a> -->
                        </form>

                    </td>
                    <td class="conteudo-lista">
                        <form>
                        <a href="#"  class="botao-remover" onclick="ConfirmDelete(<?=$dados[$i]['id'];?>);"><img src="img/icone_excluir_Rosa.png"></a>
                        </form>

                    </td>
                    <?php
                
                    echo "</tr>";
                }
                ?>
            </tbody>
            </div>
            <?php
                }else{
                    echo "<tr><td colsspan='8'>Registro naao encontrado!</td></tr>";
                }
            ?>
        </table>

    <?php
     if(isset($_POST['msg'])){
        require_once 'msg.php';
        $msg = $_POST["msg"];
        $msgExibir = $MSG[$msg];
        echo "<script>alert('" . $msgExibir . "');</script>";
     }


  ?>
    </div>
    </section>
</body>
</html>
<?php
}
?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>