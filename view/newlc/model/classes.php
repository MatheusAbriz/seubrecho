<?php
    require_once "BancoDados.php";
    

    class Cadastro{
        //Atributos
        private $id_cadastro;
        private $nome;
        private $senha;
        private $email;
        //Métodos especiais
    
        public function setId_cadastro($id_cadastro){
            $this->id_cadastro = $id_cadastro;
        }
        public function getId_cadastro(){
            return $this->id_cadastro;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setSenha($senha){
            $this->senha = $senha;
        }
        public function getSenha(){
            return $this->senha;
        }
        public function setEmail($email){
            $this->email = $email;
        }
        public function getEmail(){
            return $this->email;
        }

    }
        class CadastroDao{
            private $cadastro;

            public function setCadastro($cadastro){
                $this->cadastro = $cadastro;
            }
            public function getCadastro(){
                return $this->cadastro;
            }
            
            ////////////////////////////////////////////////////////////INSERIR////////////////////////////////////////////////////////////////////////////
            public function inserir($nome, $senha, $email){
                    $sql = "insert into cadastro(nome, senha, email) values('".$this->cadastro->getNome(). "','" .$this->cadastro->getSenha(). "','".$this->cadastro->getEmail()."')";
                    $bd = new BancoDados();
                    $bd->executar($sql);
                    echo $email;
                }
            
            ////////////////////////////////////////////////////////DELETAR DO BANCO DE DADOS////////////////////////////////////////////////////////
            public function deletar($email, $senha, $nome){
                $sql = "delete from cadastro where email = '".$this->cadastro->getEmail()."'and senha = '".$this->cadastro->getSenha()."'and nome = '".$this->cadastro->getNome()."'";
                $bd = new BancoDados();
                $bd->executar($sql);
                }
            
                /////////////////////////////////////////////////////////CONSULTA BANCO DE DADOS PARA LOGIN////////////////////////////////////////////////////////
            public function logar($email, $senha){
                $sql = "select * from cadastro where email = '".$this->cadastro->getEmail()."' and senha = '".$this->cadastro->getSenha()."'";
                $bd = new BancoDados();
                $tab = $bd->consultar($sql);
                if (isset($tab[0][0])){
                  return true;
                } else {
                  return false;
                
            
            }	    
            
            }
        
            }
    


?>