<!DOCTYPE html>
<html lang="en">
<head>
   <?php
    require_once 'dependencias.php';
   ?>
   <link rel="stylesheet" href="css/estiloAdm.css">
</head>
<body>
<div class="container-fluid">
        <header>
            <div class="row">
                <div class="col-4 text-warning" id="logo"> NOME DA EMPRESA </div>
                <div class="col-5 text-warning" id="logo"> &nbsp;</div>
                <div class="col-3" id="informacoes"> 
                    
                </div>
            </div>
        </header>
        <div class="row">
            <div class="col-2" id="nav">
                
            </div>
            <div class="col-10" id="main">
                <iframe src="saudacao.php" name="conteudoAdm" id="conteudoAdm" frameborder="0" width="100%" height="900" seamless></iframe>
            </div>
        </div>
    </div>
</body>
</html>