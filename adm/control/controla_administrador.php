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

if(isset($_REQUEST["cria_usuario"])){ //criar novoo usuario

    require_once '../model/Manager.class.php';
    require_once '../model/Ferramentas.class.php';
    $manager = new Manager();
    $ferr = new Ferramentas();

    //organizando os dados

    $dados["nome"] = $_REQUEST["nome"];
    $dados["email"] = $_REQUEST["email"];
    $dados["senha"] = $ferr->hash256($_REQUEST["senha"]);
    $dados["datahora"] = date('t-m-d h:i:s');
    $dados["poder"] = $_REQUEST["poder"];
    $dados["status"] = $_REQUEST["status"];

    $manager->insertClient("administrador", $dados);
//    exit();

    ?>
     <form action="../view/adm_usuarios_list.php" name="myForm" id="myForm" method="post">
        <input type="hidden" name="msg" value="BD52">
    </form>
    <script>
        document.getElementById('myForm').submit(); 
    </script>

    <?php


}else if(isset($_REQUEST["edita_usuario"])){ //editando usuario

require_once '../model/Manager.class.php';
$manager = new Manager();



$id = $_REQUEST["id"];

$dados["nome"] = $_REQUEST["nome"];
$dados["email"] = $_REQUEST["email"];
$dados["senha"] = $_REQUEST["senha"];
$dados["datahora"] = $_REQUEST["datahora"];
$dados["poder"] = $_REQUEST["poder"];
$dados["status"] = $_REQUEST["status"];
$manager->updateClient("administrador", $dados, $id);


?>
<form action="../view/adm_usuarios_list.php" name="myForm" id="myForm" method="post">
   <input type="hidden" name="msg" value="OP50">
</form>
<script>
   document.getElementById('myForm').submit(); 
</script>

<?php


}else if(isset($_REQUEST["deleta_usuario"])){ //deletando usuario

    $id = $_REQUEST["id"];
    require_once '../model/Manager.class.php';
$manager = new Manager();
$manager->deleteClient("administrador", $id);

?>
<form action="../view/adm_usuarios_list.php" name="myForm" id="myForm" method="post">
   <input type="hidden" name="msg" value="BD54">
</form>
<script>
   document.getElementById('myForm').submit(); 
</script>


<?php

}else if(isset($_REQUEST["criar_nova_senha"])){
    $senha1 = $_REQUEST["senha1"];
    $senha2 = $_REQUEST["senha2"];

    if($senha1 != $senha2){
        ?>
        <form action="../view/adm_usuarios_newpass.php" name="myForm" id="myForm" method="post">
            <input type="hidden" name="msg" value="FR04">
        </form>
        <script>
            document.getElementById('myForm').submit(); 
        </script>
        <?php
    }

    require_once '../model/Manager.class.php';
    require_once '../model/Ferramentas.class.php';
    $manager = new Manager();
    $ferr = new Ferramentas();

    //conersao da senha em hash
    $senhahash = $ferr->hash256($senha1);

    //fazer update da nova senha
    $manager->novaSenhaClient('administrador', $senhahash, $_SESSION["ADM-ID"]);
    ?>
        <form action="../view/adm_usuarios_newpass.php" name="myForm" id="myForm" method="post">
            <input type="hidden" name="msg" value="BD50">
        </form>
        <script>
            document.getElementById('myForm').submit(); 
        </script>
        <?php
}