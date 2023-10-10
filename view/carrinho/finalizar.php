<?php
session_start();

foreach($_SESSION['dados'] as $produtos){
    require_once '../../model/Manager.php';
    $managers = new Managers();
    $data['id_pedido'] = null;
    $data['id_produto'] = $produtos['id_produto'];
    $data['email'] = $produtos['email'];
    $data['quantidade'] = $produtos['quantidade'];
    $data['preco'] = $produtos['preco'];
    $data['total'] = $produtos['total'];
    $data['nome'] = $produtos['nome'];
    $data['img']  = $produtos['img'];
    $insert = $managers->inserePedido("pedido", $data);
    
}
unset($_SESSION['itens']);
?>
<form action="../newconf/confirmacao.php" name="myForm" id="myForm" method="post">
<input type="hidden" name="msg" value="OA00">
</form>

<script>
document.getElementById('myForm').submit(); 
</script>
