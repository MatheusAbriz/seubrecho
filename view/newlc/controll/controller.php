<?php
require_once "../model/classes.php";
require_once "../model/BancoDados.php";

$nome  = $_POST['nome'];
$senha = $_POST['senha'];
$confSenha = $_POST['confSenha'];
$email = $_POST['email'];

if($senha != $confSenha){
    echo "<script>alert('Digite senhas iguais!');</script>";
    ?>
		<form action="../cadastro.php" name="controller" id="controller" method="post">
   		 <input type="hidden" name="msg" value="OP51">
		</form>
		<script>
   		 document.getElementById('controller').submit(); 
		</script>
	<?php	
}

else if($nome != "" || $senha != "" || $email != ""){
$cadastro = new Cadastro();
$cadastro->setNome($nome);
$cadastro->setSenha($senha);
$cadastro->setEmail($email);

$cadasatroDao = new CadastroDao();
$cadasatroDao->setCadastro($cadastro);
$cadasatroDao->deletar($nome, $senha, $email);
$cadasatroDao->inserir($nome, $senha, $email);

header("location: ../logiin.php");

}else{
    echo 'Erro! Usuário não cadastrado';
}
?>



