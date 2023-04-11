<?php

class Conexao{
    public $pdo;
    
    public function __construct(){
        // CONEXAO
        try{
            //$this->pdo = new PDO("mysql:dbname=seubrecho;host=72.167.84.163","matheusAbriz","0505823513cris");
            $this->pdo = new PDO("mysql:dbname=seubrecho;host=localhost","root","");
        }catch(PDOException $e){
            echo "Erro com banco de dados: " . $e->getMessage() . "<br>";
            exit();
        }catch(Exception $e){
            echo "Erro generico: " . $e->getMessage() . "<br>";
            exit();
        }



    }



}



?>