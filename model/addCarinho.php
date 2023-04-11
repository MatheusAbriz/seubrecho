<?php

/**
 * Arquivo que vai adicionar todos os produtos selecionados pelo cliente no carrinho;
 * Primeiramente é verificado se o cliente está logado;
 * Caso esteja, recuperamos o cpf do usuario logado, e armazenamos as infomações do produto selecionado no banco
 */


include_once 'conexao.php';
include_once 'Manager.php';

session_start();
$user = new Managers();
$result = $user->isLoggedIn();

if($result == true){
    $produto = $_GET['produto'];
    $conn = new Conexao();
    $conn->__construct();
    $sql = ('SELECT id FROM carrinho WHERE carrinho.email ="'.$_SESSION["email"].'";');
    $stmt = $conn->pdo->prepare($sql);
    $stmt->execute();
    $resultado = $stmt->fetchAll();
    $idcarrinho = 1;
    $total = 3;
    if($resultado > 0){
        $stmt = $conn->pdo->prepare("INSERT INTO carrinho(id_carrinho, id, nome, preco, img, email, total ) VALUES(:idcarrinho, :id, :nome, :preco, :img, :email, :total);");
        $stmt->bindParam(':idcarrinho', $idcarrinho);
        $stmt->bindParam(':id', $statement["id"]);
        $stmt->bindParam(':nome', $statement["nome"]);
        $stmt->bindParam(':preco', $statement["preco"]);
        $stmt->bindParam(':img', $img["img"]);
        $stmt->bindParam(':img', $_SESSION["email"]);
        $stmt->bindParam(':total', $total);
        $stmt->execute();
        $resultado = $stmt->fetchAll();
    }else{
        echo "false";
       /*$stmt = $conn->pdo->prepare("INSERT INTO carrinho(email) VALUES(:email);");
        $stmt->bindParam(':email', $_SESSION['email']);
        $stmt->execute();
        $carrinhoId = ("SELECT id_carrinho FROM carrinho WHERE carrinho.email = :email");

        $stmt =  $conn->pdo->prepare("INSERT INTO carrinho_has_produto(id_carrinho,id, quantidade) VALUES(:carrinho, :produto, :quantidade);");
        $stmt->bindParam(':carrinho', $carrinhoId);
        $stmt->bindParam(':produto', $produto);
        $stmt->bindParam(':quantidade', $qts);
        $stmt->execute();
        $stmt = null;*/  
    }
    
    //header('Location: ../view/carrinho/newcarrinho.php'); 
}else{
    header('Location: ../view/newlc/view/logiin.php'); 
}



?>
