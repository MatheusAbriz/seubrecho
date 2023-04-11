<?php
require_once "../model/classes.php";
require_once "../model/BancoDados.php";

$nome  = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];

if($nome != "" || $senha != "" || $email != ""){
$cadastro = new Cadastro();
$cadastro->setNome($nome);
$cadastro->setSenha($senha);
$cadastro->setEmail($email);

$cadasatroDao = new CadastroDao();
$cadasatroDao->setCadastro($cadastro);
$cadasatroDao->deletar($nome, $senha, $email);
$cadasatroDao->inserir($nome, $senha, $email);

header("location: ../view/logiin.php");

}else{
    echo 'Erro! Usuário não cadastrado';
}

?>