<?php
if(isset($_REQUEST["cria_cartao"])){
    require_once '../adm/model/Manager.class.php';
    require_once '../adm/model/Ferramentas.class.php';

    $manager = new Manager();

    $dados["tipo_cartao"] = $_REQUEST["tipo_cartao"];
    $dados["numero_cartao"] = $_REQUEST["numero_cartao"];
    $dados["codigo_cartao"] = $_REQUEST["codigo_cartao"];
    $dados["nome_titular"] = $_REQUEST["nome_titular"];
    $dados["validade_cartao"] = $_REQUEST["validade_cartao"];
    $dados["cep"] = $_REQUEST["cep"];
    $dados["endereco"] = $_REQUEST["endereco"];
    $dados["complemento"] = $_REQUEST["complemento"];

    $manager->insertClient("cartao", $dados);
    //var_dump($dados);
?>
<form action="../view/newconf/confirmacao.html" name="myForm" id="myForm" method="post">
<input type="hidden" name="msg" value="BD54">
</form>
<script>
document.getElementById('myForm').submit(); 
</script>
<?php
}
?>