<?php

require_once 'conexao.php';

Class Managers extends Conexao{

    public function pegaMaxIdMenu(){
        $dados = array();
        $sql = "select MAX(ID) from menu";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        $row =  $statement->fetch(PDO::FETCH_ASSOC);
        $dados['num'] = $row["MAX(ID)"];
        return $dados;
    }

    public function pegaMenuSubmenu(){
    $dados = array();
    $sql = "select menu.id as menuId, menu.nome as menuNome, menu.url as menuURL, submenu.id as subId, submenu.nomesub as subNome, submenu.urlsub as subURL from menu inner join submenu on menu.id = submenu.idmenu where menu.status = 1;";
    $statement = $this->pdo->prepare($sql);
    $statement->execute();
    return $statement->fetchAll();
   
}


    public function getProdutos(){
        $sql = "select * from produto where status = 1";
		$statement = $this->pdo->prepare($sql);
		$statement->execute();
		return $statement->fetchAll();
    }

    public function getImage(){
        $sql = "select img from produto";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
      
        
    }
    
    public function isLoggedIn(){
        if (isset($_SESSION['email']) && $_SESSION['email'] == true){
            return true;
        }
        return false;
    }

    public  function allProdutos(){
        $sql = "select * from produto where status = 1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function listaJoin($id){
        $sql = "select * from produto where status = 1 and id = :id";
		$statement = $this->pdo->prepare($sql);
        $statement->bindValue(":id", $id);
		$statement->execute();
		return $statement->fetchAll(); 
    }

    public function getCategoria($categoria){
        $sql = "select * from produto where status = 1 and categoria = :categoria";
		$statement = $this->pdo->prepare($sql);
        $statement->bindValue(":categoria", $categoria);
		$statement->execute();
		return $statement->fetchAll(); 
    }
    public function getCarrinho($id_prod) {
        $sql = "select * from produto where id = :id";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(":id", $id_prod );
        $statement->execute();
        return $statement->fetchAll();
        }
    
        public function getCadastro($email) {
            $sql = "SELECT nome FROM cadastro where email = :email";
            $statement = $this->pdo->prepare($sql);
            $statement->bindValue(":email", $email);
           $statement->execute();
            return $statement->fetchAll();
            }
    
        public function inserePedido($table, $data){
       $statement = $this->pdo->prepare("INSERT INTO PEDIDO () VALUES (null, ?, ?, ?, ?, ?)");
       $fields = implode(", ", array_keys($data));
       $values = ":".implode(", :", array_keys($data));
       $sql = "INSERT INTO $table ($fields) VALUES ($values)";
       $statement = $this->pdo->prepare($sql);
       foreach($data as $key => $value) {
           $statement->bindValue(":$key", $value, PDO::PARAM_STR);
       }
       $statement->execute();
    }

    public function mostraPedido($email){
        $sql = "select * from pedido where email = :email";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(":email", $email );
        $statement->execute();
        return $statement->fetchAll();
        }
    
    public function Sair(){
        unset($_SESSION['email']);
        header("location: ../../index.php");
    }

    public function getDestaque(){
        $sql = "select * from produto where status = 1 and destaque = 1";
		$statement = $this->pdo->prepare($sql);
		$statement->execute();
		return $statement->fetchAll();
    }

    }

?>