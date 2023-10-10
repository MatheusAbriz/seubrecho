<?php
session_start();
require __DIR__.'/vendor/autoload.php';


if(isset($_REQUEST["calFrete"]) && !empty($_REQUEST["calFrete"])){
    $DestinoCep = $_REQUEST["frete"];
}
use \app\webservice\Correios;

$obCorreios = new Correios();
    $codigoServico      = Correios::SERVICO_PAC;
    $cepOrigem          = "04814550";
    $cepDestino         = $DestinoCep;
    $peso               = 10;
    $formato            =  Correios::FORMATO_CAIXA_PACOTE; 
    $comprimento        = 15; 
    $altura             = 15;
    $largura            =  15; 
    $diametro           = 0; 
    $maoPropria         = false; 
    $valorDeclarado     = 0; 
    $avisoRecebimento   = false;
    

$frete = $obCorreios->calcularFrete(
    $codigoServico, 
    $cepOrigem, 
    $cepDestino, 
    $peso, 
    $formato, 
    $comprimento, 
    $altura, 
    $largura, 
    $diametro, 
    $maoPropria,
    $valorDeclarado,  
    $avisoRecebimento

);


if(!$frete){
    die('Problemas para calcular  o  frete');
}

if(strlen($frete->MsgErro)){
    echo "<script>alert('CEP inserido não está em nossa área de cobertura!');</script>";
    ?>
		<form action="../../carrinho/newcarrinho.php" name="controller" id="controller" method="post">
   		 <input type="hidden" name="msg" value="OP51">
		</form>
		<script>
   		 document.getElementById('controller').submit(); 
		</script>
	<?php
}else{
    $valorFrete = $frete->Valor;
    header("location: ../../carrinho/newcarrinho.php?valor=$valorFrete&previsao=$frete->PrazoEntrega");
}



?>