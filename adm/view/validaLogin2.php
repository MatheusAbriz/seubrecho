<?php
echo "teste";
session_start();
if(isset($_POST['email']) && $_POST['email'] != '' && isset($_POST['password']) && $_POST['password'] != ''){
    // Formulario com dados
    require_once "../model/Ferramentas.class.php";
    $ferr = new Ferramentas();
    $verificaEmail = $ferr->validaEmail($_POST['email']);
    if($verificaEmail == 0){
        session_destroy();
        
        ?>

        <form action="../index.php" name="myForm" id="myForm" method="post">
            <input type="hidden" name="msg" value="FR09">
        </form>
        <script>
            document.getElementById('myForm').submit(); 
            exit();
        </script>
        <?php
    }
    // Anti-Injection

    $vEmail = $ferr->antiInjection($_POST['email']);
    $VSenha = $ferr->antiInjection($_POST['password']);

    if($vEmail == 0 || $VSenha == 0){
        session_destroy();
        ?>
        <form action="../index.php" name="myForm" id="myForm" method="post">
            <input type="hidden" name="msg" value="FR24">
        </form>
        <script>
            document.getElementById('myForm').submit(); 
        </script>

        <?php
        exit();
    }

    // Se email existe no BD

    // Senha está certa
    require_once '../model/Manager.class.php';
    $manager = new Manager();
    $res = $manager->dadosClient("administrador",$_POST["email"]);
    $dados = array();
    if(count($res) > 0){
        for($i = 0;$i < count($res);$i++){
            foreach($res[$i] as $k => $v){
                $dados[$k] = $v;
            }
        }
    }

    if(isset($dados["id"])){
   
        require_once '../model/Ferramentas.class.php';
        $ferr = new Ferramentas();
        $senhaHash = $ferr->hash256($_POST['password']);



        if($dados["senha"] == $senhaHash){ //tudo validado

            $_SESSION["ADM-ID"] = $dados["id"];
            $_SESSION["ADM-NOME"] = $dados["nome"];
            $_SESSION["ADM-EMAIL"] = $dados["email"];
            $_SESSION["ADM-PODER"] = $dados["poder"];

            ?>
            
            <form action="adm.php" name="myForm" id="myForm" method="post">
                <input type="hidden" name="result" value="validado">
            </form>
            <script>
                document.getElementById("myForm").submit(); 
            </script>

            <?php


        }else{
           
            echo $_POST['password'];
            echo $dados["senha"];
            echo $senhaHash;
            ?>
         
            <?php
        
        }
    }
}
    
    // Formulario sem dados


?>