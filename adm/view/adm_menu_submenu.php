<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
if (!isset($_SESSION["ADM-ID"]) || empty($_SESSION["ADM-ID"])) {
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
    $dados = $manager->listClient("menu");

    // require_once "../model/submenu.class.php";
    // $sub = new Sub();
    // $dados = $sub->listSub("submenu");
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <script src="https://kit.fontawesome.com/3afc491b4b.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/estiloAdm.css">
        <script>
        
        function ConfirmDelete(id,destino){
            var resp = confirm("Tem certeza que deseja deletar este registro?");
            if(resp == true){
                if(destino == 'menu'){
                    location.href='../control/controla_menu.php?deleta_menu=1&id=' + id;
                }else{
                    location.href='../control/controla_sub.php?deleta_sub=1&id=' + id;
                }
            }else{
                return null;
            }
        }
    </script>

    </head>

    <body id="listaAdm">
        <center>
            <h2>Menus</h2>
            <h4>Listando Menus</h4>
            <br>
            <table style="width: 800px; background-color: #FFF;">
                <tr>
                    <td>
                        <a href="adm_menu_new.php" id="addNew_button">
                            <i class="fa fa-plus fa-xs"></i>
                        </a>
                    </td>
                </tr>
            </table>
            <!-- Lista menu -->
            <table>
                <thead>
                    <tr  id="tituloUsers">
                        <th scope="col" id="thList">#</th>
                        <th scope="col" id="thList">Nome</th>
                        <th scope="col" id="thList">URL</th>
                        <th scope="col" id="thList">Data</th>
                        <th scope="col" id="thList">Status</th>
                        <th scope="col" id="thList"><i class="fa fa-gear fa-spin fa-lg"></i></th>
                        <th scope="col" id="thList"><i class="fa fa-trash fa-lg"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (count($dados) > 0) {
                        for ($i = 0; $i < count($dados); $i++) {
                    ?>

                    <tr id="tabelaUsers">
                        <td id='tdList'><?= $dados[$i]["id"] ?></td>
                        <td id='tdList'><?= $dados[$i]["nome"] ?></td>
                        <td id='tdList'><?= $dados[$i]["url"] ?></td>
                        <td id='tdList'><?= $dados[$i]["datahora"] ?></td>

                            <?php

                            if ($dados[$i]["status"] == 1) {
                                echo "<td id='tdList'>ATIVO</td>";
                            } else {
                                echo "<td id='tdList'>INATIVO</td>";
                            }
                            ?>
                            <td id="idList">
                                <form>
                                <form>
                            <input type="button" name="editar" value="Editar" onclick="location.href='adm_menu_edit.php?edit=1&id=<?=$dados[$i]['id'];?>'" >
                        </form>

                            </td>
                            <td id="idList">
                            <form>
                        <input type="hidden" name="deleta_menu" value="">
                            <input type="button" value="Deletar" onclick="ConfirmDelete(<?=$dados[$i]['id'];?>,'menu');">
                        </form>

                            </td>
                            </tr>
                        <?php
                        }
                        ?>
                </tbody>
            <?php
                    } else {
                        echo "<tr><td colsspan='8'>Registro nao encontrado!</td></tr>";
                    }
            ?>
            </table>
            <br><br><br>
            <table style="width: 800px; background-color: #FFF;">
                <tr>
                    <td>
                        <a href="adm_submenu_new.php" id="addNew_button">
                            <i class="fa fa-plus fa-xs"></i>
                        </a>
                    </td>
                </tr>
            </table>
            
    </body>
    </html>
<?php
}
?>

<?php
if (!isset($_SESSION["ADM-ID"]) || empty($_SESSION["ADM-ID"])) {
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
    $dados = $manager->listClient("submenu");
?>
<?php
?>
<h2>Sub-menus</h2>
<h4>Listando sub-menus</h4>
<table>
    <thead>
        <tr  id="tituloUsers">
            <th scope="col" id="thList">#</th>
            <th scope="col" id="thList">IdMenu</th>
            <th scope="col" id="thList">Nome</th>
            <th scope="col" id="thList">URL</th>
            <th scope="col" id="thList">Data</th>
            <th scope="col" id="thList">Status</th>
            <th scope="col" id="thList"><i class="fa fa-gear fa-spin fa-lg"></i></th>
            <th scope="col" id="thList"><i class="fa fa-trash fa-lg"></i></th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (count($dados) > 0) {
            for ($i = 0; $i < count($dados); $i++) {
        ?>

        <tr id="tabelaUsers">
            <td id='tdList'><?= $dados[$i]["id"] ?></td>
            <td id='tdList'><?= $dados[$i]["idmenu"] ?></td>
            <td id='tdList'><?= $dados[$i]["nomesub"] ?></td>
            <td id='tdList'><?= $dados[$i]["urlsub"] ?></td>
            <td id='tdList'><?= $dados[$i]["datahora"] ?></td>

                <?php

                if ($dados[$i]["status"] == 1) {
                    echo "<td id='tdList'>ATIVO</td>";
                } else {
                    echo "<td id='tdList'>INATIVO</td>";
                }
                ?>
                <td id="idList">
                    <form>
                    <form>
                <input type="button" name="editar" value="Editar" onclick="location.href='adm_submenu_edit.php?edit=1&id=<?=$dados[$i]['id'];?>'" >
            </form>

                </td>
                <td id="idList">
                <form>
            <input type="hidden" name="deleta_sub" value="">
                <input type="button" value="Deletar" onclick="ConfirmDelete(<?=$dados[$i]['id'];?>,'sub');">
            </form>

                </td>
                </tr>
            <?php
            }
            ?>
    </tbody>
<?php
        } else {
            echo "<tr><td colsspan='8'>Registro nâo encontrado!</td></tr>";
        }
?>
</table>
</center>

<?php
if (isset($_POST['msg'])) {
require_once 'msg.php';
$msg = $_POST["msg"];
$msgExibir = $MSG[$msg];
echo "<script>alert('" . $msgExibir . "');</script>";
}


?>
<?php
}
?>
</body>
</html>