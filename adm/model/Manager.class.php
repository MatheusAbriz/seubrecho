<?php

require_once 'Conexao.class.php';

class Manager extends Conexao {


	public function listClient($table) {
		$res = array();
        $cmd = $this->pdo->query("SELECT * FROM {$table} ORDER by id DESC");
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $res;
	}

    public function insertClient($table, $data) {
		$fields = implode(", ", array_keys($data));
		$values = ":".implode(", :", array_keys($data));
		$sql = "INSERT INTO $table ($fields) VALUES ($values)";
		$statement = $this->pdo->prepare($sql);
		foreach($data as $key => $value) {
			$statement->bindValue(":$key", $value, PDO::PARAM_STR);
		}
		$statement->execute();
	}

    public function getInfo($table, $id) {
		$sql = "SELECT * FROM $table WHERE id = :id";
		$statement = $this->pdo->prepare($sql);
		$statement->bindValue(":id", $id);
		$statement->execute();

		return $statement->fetchAll();
	}

    public function updateClient($table, $data, $id) {
		$new_values = "";
		foreach($data as $key => $value) {
			$new_values .= "$key=:$key, ";
		}
		$new_values = substr($new_values, 0, -2);
		$sql = "UPDATE $table SET $new_values WHERE id = :id";
		$statement = $this->pdo->prepare($sql);
		$statement->bindValue(":id", $id);
		foreach($data as $key => $value) {
			$statement->bindValue(":$key", $value, PDO::PARAM_STR);
		}
		$statement->execute();
	}

    public function deleteClient($table, $id) {
		$sql = "DELETE FROM $table WHERE id = :id";
		$statement = $this->pdo->prepare($sql);
		$statement->bindValue(":id", $id);
		$statement->execute();
	}

	public function dadosClient($table,$email) {
		
		$res = array();
		$sql = "SELECT * FROM  $table where email = :email";
		$statement = $this->pdo->prepare($sql);
		$statement->bindValue(":email",$email);
		$statement->execute();
		$res = $statement->fetchAll(PDO::FETCH_ASSOC);
		return $res;	
	}

	public function novaSenhaClient($table, $senha, $id){
		$sql = "UPDATE $table SET  senha = :senha WHERE id = :id;";
		$statement = $this->pdo->prepare($sql);
		$statement->bindValue(":senha", $senha);
		$statement->bindValue(":id", $id);
		$statement->execute();


	}

	public function listaProdutos($table){
		$res = array();
        $cmd = $this->pdo->query("SELECT * FROM {$table}");
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $res;
	}

	

	public function getProduto($table, $codigo) {
		$sql = "SELECT * FROM $table WHERE codigo = :codigo";
		$statement = $this->pdo->prepare($sql);
		$statement->bindValue(":codigo", $codigo);
		$statement->execute();
		return $statement->fetchAll();
		}
	
	}

?>