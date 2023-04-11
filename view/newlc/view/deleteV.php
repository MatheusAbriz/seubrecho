<?php
require_once "../model/classes.php";
require_once "../model/BancoDados.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Deletar Pessoa</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    
<section id="esquerda">
    <form method = "POST" action="../controll/controller.php">
        <h2>Deletar Conta</h2>
        <label for="nome">Nome</label>

        <input type="text" name="nome" id="nome" placeholder="Digite seu nome" minlength="3" required>

        <label for="telefone">Senha</label>

        <input type="password"  id="telefone" name="senha"  minlength="8" maxlength="15" placeholder="Digite sua senha" required>

        <label for = "email">Email</label>

        <input type="email" name = "email" id="email" placeholder="Digite seu email" required>
        <script>
        function funcao1()
        {
        alert("Deletado com sucesso! Redirecionando para o site"); //Era para redirecionar para o site, mas como não tem vou usar o index(cadastro) mesmo
        }
        </script>
        <input type="submit" onclick="funcao1()" value="Deletar">
 
    </form>
</section>
</body>
</html>
