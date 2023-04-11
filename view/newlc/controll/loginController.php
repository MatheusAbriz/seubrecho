   
<?php
require_once "../model/classes.php";
require_once "../model/BancoDados.php";

	session_start();
	$email= $_POST["email"];
	$senha= $_POST["senha"];

	$cadastro = new Cadastro();
	$cadastro->setEmail($email);
	$cadastro->setSenha($senha);

	$cadastroDao = new CadastroDao();
	$cadastroDao->setCadastro($cadastro);
	$cadastroDao->logar($email, $senha);

	if ($cadastroDao->logar($email, $senha)){
		$_SESSION["email"] = $email;
		echo "<script>alert('Você foi logado com sucesso!');</script>";
		?>
		<form action="../../../index.php" name="controller" id="controller" method="post">
   		 <input type="hidden" name="msg" value="OP51">
		</form>
		<script>
   		 document.getElementById('controller').submit(); 
		</script>
	<?php	
	} else {
		echo "<script>alert('Login não encontrado!');</script>";
	?>	
		<form action="../view/logiin.php" name="myForm" id="myForm" method="post">
   		 <input type="hidden" name="msg" value="Não deu">
		</form>
		<script>
   		 document.getElementById('myForm').submit(); 
		</script>	
	<?php
	}		
	
?>