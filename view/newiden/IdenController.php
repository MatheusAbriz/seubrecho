   
<?php
require_once "../newlc/model/classes.php";
require_once "../newlc/model/BancoDados.php";

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
		
		?>
		<form action="../formpag/cartaocredito.php" name="controller" id="controller" method="post">
   		 <input type="hidden" name="msg" value="OP51">
		</form>
		<script>
   		 document.getElementById('controller').submit(); 
		</script>
	<?php	
	} else {
	?>	
		<form action="identificacao.php" name="myForm" id="myForm" method="post">
   		 <input type="hidden" name="msg" value="Não deu">
		</form>
		<script>
   		 document.getElementById('myForm').submit(); 
		</script>	
	<?php
	}		
	
?>