<?php
session_start();
if(isset($_GET['remover']) && $_GET['remover'] == "carrinho")
{

    $id_prod = $_GET['id'];
    unset($_SESSION['itens'][$id_prod]);
    include_once("newcarrinho.php");
 
}

?>