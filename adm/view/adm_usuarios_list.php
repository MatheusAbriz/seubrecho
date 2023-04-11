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
    <title></title>
    <script src="https://kit.fontawesome.com/3afc491b4b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estiloAdm.css" >
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
    <center>
        <h2>Usuários Administrativos</h2>
        <h4>Listando Usuários</h4>
        <br>
        <table style="width: 800px; background-color: #FFF;">
            <tr>
                <td>
                    <a href="adm_usuarios_new.php" id="addNew_button">
                        <i class="fa fa-plus fa-xs"></i>
                    </a>
                </td>
            </tr>
        </table>
        <!-- Lista Usuários -->
        <table>
            <thead>
                <tr>
                    <th scope="col" id="thList">#</th>
                    <th scope="col" id="thList">Nome</th>
                    <th scope="col" id="thList">E-mail</th>
                    <th scope="col" id="thList">Data</th>
                    <th scope="col" id="thList">Poder</th>
                    <th scope="col" id="thList">Status</th>
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
                    echo "<td id='tdList'>" . $dados[$i]["email"] . "</td>";
                    echo "<td id='tdList'>" . $dados[$i]["datahora"] . "</td>";
                    echo "<td id='tdList'>" . $dados[$i]["poder"] . "</td>";
                    if($dados[$i]["status"] == 1){
                        echo "<td id='tdList'>ATIVO</td>";

                    }else{
                        echo "<td id='tdList'>INATIVO</td>";

                    }
                    ?>
                    <td id="idList">
                        <form>
                            <input type="button" value="Editar" onclick="location.href='adm_usuarios_edit.php?edit=1&id=<?=$dados[$i]['id'];?>'">
                        </form>

                    </td>
                    <td id="idList">
                        <form>
                            <input type="button" value="Deletar" onclick="ConfirmDelete(<?=$dados[$i]['id'];?>);">
                        </form>

                    </td>
                    <?php
                
                    echo "</tr>";
                }
                ?>
            </tbody>
            <?php
                }else{
                    echo "<tr><td colsspan='8'>Registro naao encontrado!</td></tr>";
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