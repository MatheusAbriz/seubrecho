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
if(isset($_REQUEST["products_new"])){ //criar novo produto

require_once '../model/Manager.class.php';
require_once '../model/Ferramentas.class.php';
$manager = new Manager();
$ferr = new Ferramentas();

//organizando os dados


$dados["nome"] = $_REQUEST["nome"];
$dados["descricao"] = $_REQUEST["descricao"];
$dados["condicao"] = $_REQUEST["condicao"];
$dados["tamanho"] = $_REQUEST["tamanho"];
$dados["preco"] = $_REQUEST["preco"];
$dados["genero"] = $_REQUEST["genero"];
$dados["promocao"] = $_REQUEST["promocao"];
$dados["desc_promocao"] = $_REQUEST["desc_promocao"];
$dados["novidade"] = $_REQUEST["novidade"];
$dados["img"] = $_REQUEST["img"];
$dados["img_lado"] = $_REQUEST["img_lado"];
$dados["img_costa"] = $_REQUEST["img_costa"];
$dados["datahora"] = date('Y-m-d h:i:s');
$dados["cor"] = $_REQUEST["cor"];
$dados["status"] = $_REQUEST["status"];
$dados["categoria"] = $_REQUEST["categoria"];
$dados["destaque"] = $_REQUEST["destaque"];

/*
var_dump($dados);
exit();
*/

$manager->insertClient("produto", $dados);
//    exit();

?>
 


<?php
}else if(isset($_REQUEST["edita_produto"])){ // EDITANDO PRODUTO0

    require_once '../model/Manager.class.php';
    $manager = new Manager();

    $id = $_REQUEST["id"];
    $dados["nome"] = $_REQUEST["nome"];
    $dados["descricao"] = $_REQUEST["descricao"];
    $dados["condicao"] = $_REQUEST["condicao"];
    $dados["tamanho"] = $_REQUEST["tamanho"];
    $dados["preco"] = $_REQUEST["preco"];
    $dados["genero"] = $_REQUEST["genero"];
    $dados["promocao"] = $_REQUEST["promocao"];
    $dados["desc_promocao"] = $_REQUEST["desc_promocao"];
    $dados["novidade"] = $_REQUEST["novidade"];
    $dados["img"] = $_REQUEST["img"];
    $dados["img_lado"] = $_REQUEST["img_lado"];
    $dados["img_costa"] = $_REQUEST["img_costa"];
    $dados["datahora"] = date('Y-m-d h:i:s');
    $dados["cor"] = $_REQUEST["cor"];
    $dados["status"] = $_REQUEST["status"];
    $dados["categoria"] = $_REQUEST["categoria"]; 
    $dados["destaque"] = $_REQUEST["destaque"];
  

    

    $manager->updateClient("produto",$dados,$id);
    ?>
<form action="../view/produtoList.php" name="myForm" id="myForm" method="post">     
   <input type="hidden" name="msg" value="OP50">
    </form>
    <script>
        document.getElementById('myForm').submit(); 
    </script>
    <?php

}else if(isset($_REQUEST["deleta_produto"])){ //deletando usuario

    $id = $_REQUEST["id"];
    //var_dump($id);
    //exit();
    require_once '../model/Manager.class.php';
    $manager = new Manager();
    $manager->deleteClient("produto", $id);
    }
    ?>
    <form action="../view/produtoList.php" name="myForm" id="myForm" method="post">     
   <input type="hidden" name="msg" value="OP50">
    </form>
    <script>
        document.getElementById('myForm').submit(); 
    </script>
