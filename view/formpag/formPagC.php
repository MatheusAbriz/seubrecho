<?php
if(isset($_REQUEST["cria_cartao"])){
    require_once '../../adm/model/Manager.class.php';
    require_once '../../adm/model/Ferramentas.class.php';

    $manager = new Manager();
    $dados["tipo_cartao"] = $_REQUEST["promocao"];
    $dados["numero_cartao"] = $_REQUEST["name"];
    $dados["codigo_cartao"] = $_REQUEST["lastname"];
    $dados["nome_titular"] = $_REQUEST["name"];
    $dados["validade_cartao"] = $_REQUEST["lastname"];
    $dados["cep"] = $_REQUEST["name"];
    $dados["endereco"] = $_REQUEST["lastname"];
    $dados["complemento"] = $_REQUEST["name"];

    $manager->insertClient("cartao", $dados);
    //var_dump($dados);
?>
<form action="../carrinho/finalizar.php" name="myForm" id="myForm" method="post">
<input type="hidden" name="msg" value="BD54">
</form>
<script>
document.getElementById('myForm').submit(); 
</script>
<?php
}
?>