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

 

if(isset($_REQUEST["cria_menu"])){ // CRIAR NOVO USUÁRIO

    require_once '../model/Manager.class.php';
    require_once '../model/Ferramentas.class.php';
    $manager = new Manager();
    $ferr = new Ferramentas();

    // Organizando os dados

    $dados["nome"] = $_REQUEST["nome"];
    $dados["url"] = $_REQUEST["url"];
    $dados["datahora"] = date('Y-m-d h:i:s');
    $dados["status"] = $_REQUEST["status"];

    $manager->insertClient("menu",$dados);
    ?>
    <form action="../view/adm_menu_submenu.php" name="myForm" id="myForm" method="post">
        <input type="hidden" name="msg" value="BD52">
    </form>
    <script>
        document.getElementById('myForm').submit(); 
    </script>
    <?php



}else if(isset($_REQUEST["edita_menu"])){ // EDITANDO USUÁRIO

    require_once '../model/Manager.class.php';
    $manager = new Manager();

    $id = $_REQUEST["id"];

    $dados["nome"] = $_REQUEST["nome"];
    $dados["url"] = $_REQUEST["url"];
    $dados["datahora"] = $_REQUEST["datahora"];
    $dados["status"] = $_REQUEST["status"];

    $manager->updateClient("menu",$dados,$id);
    ?>
<form action="../view/adm_menu_submenu.php" name="myForm" id="myForm" method="post">     
   <input type="hidden" name="msg" value="OP50">
    </form>
    <script>
        document.getElementById('myForm').submit(); 
    </script>
    <?php



}else if(isset($_REQUEST["deleta_menu"])){ // DELETANDO USUÁRIO

    $id = $_REQUEST["id"];
    print_r($id);
    require_once "../model/Manager.class.php";
    $manager = new Manager();
    $manager->deleteClient("menu", $id);

    ?>
    <form action="../view/adm_menu_submenu.php" name="myForm" id="myForm" method="post">
        <input type="hidden" name="msg" value="BD54">
    </form>
    <script>
        document.getElementById('myForm').submit(); 
    </script>
    <?php
}

?>