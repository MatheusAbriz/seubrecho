<?php
class BancoDados{
    private $host ="localhost";
    private $usuario = "root";
    private $senha = "";
    private $banco = "seubrecho";

    public function executar($sql){
        $conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);
        mysqli_query($conexao, $sql);
        $conexao->close();
         
    }

	public function consultar($sql){
        $tabela = []; 	
        $conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);
        $resultado = mysqli_query($conexao, $sql);
        
        //$tabela = null;
        while($linha = mysqli_fetch_row($resultado)) {
          $tabela[] = $linha;
        }
        $conexao->close();
        return $tabela;
      }
      
  }

?>