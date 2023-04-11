<?php
session_start();
if(!isset($_SESSION["ADM-ID"]) || empty($_SESSION["ADM-ID"])){
    session_destroy();
    ?>
    <form action="../index.php" name="myForm" id="myForm" method="post">
        <input type="hidden" name="msg" value="OA00">
    </form>
    <script>
        document.getElementById('myForm').submit(); 
    </script>
    <?php
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="css/estiloAdm.css">
</head>
<body>
<br>
<center>
<h2>Olá, <?=$_SESSION["ADM-NOME"];?>.<br> Seja bem vindo!</h2>
</center>
</body>
</html>
