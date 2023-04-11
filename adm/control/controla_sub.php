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
if(isset($_REQUEST["cria_sub"])){ //criar novoo usuario

require_once '../model/Manager.class.php';
require_once '../model/Ferramentas.class.php';
$manager = new Manager();
$ferr = new Ferramentas();

//organizando os dados

$dados["idmenu"] = $_REQUEST["idmenu"];
$dados["nomesub"] = $_REQUEST["nomesub"];
$dados["urlsub"] = $_REQUEST["urlsub"];
$dados["datahora"] = date('t-m-d h:i:s');
$dados["status"] = $_REQUEST["status"];

/*
var_dump($dados);
exit();
*/

$manager->insertClient("submenu", $dados);
//    exit();

?>
 <form action="../view/adm_menu_submenu.php" name="myForm" id="myForm" method="post">
    <input type="hidden" name="msg" value="BD52">
</form>
<script>
    document.getElementById('myForm').submit(); 
</script>

<?php


}else if(isset($_REQUEST["edita_sub"])){ //editando usuario

require_once '../model/Manager.class.php';
$manager = new Manager();



$id = $_REQUEST["id"];
$dados["nomesub"] = $_REQUEST["nomesub"];
$dados["urlsub"] = $_REQUEST["urlsub"];
$dados["datahora"] = $_REQUEST["datahora"];
$dados["status"] = $_REQUEST["status"];
$manager->updateClient("submenu", $dados, $id);


?>
<form action="../view/adm_menu_submenu.php" name="myForm" id="myForm" method="post">
<input type="hidden" name="msg" value="OP50">
</form>
<script>
document.getElementById('myForm').submit(); 
</script>

<?php


}else if(isset($_REQUEST["deleta_sub"])){ //deletando usuario

$id = $_REQUEST["id"];
require_once '../model/Manager.class.php';
$manager = new Manager();
$manager->deleteClient("submenu", $id);
}

?>
<form action="../view/adm_menu_submenu.php" name="myForm" id="myForm" method="post">
<input type="hidden" name="msg" value="BD54">
</form>
<script>
document.getElementById('myForm').submit(); 
</script>


