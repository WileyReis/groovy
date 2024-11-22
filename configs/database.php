<?php

class database{
    private $host = "localhost";
    private $banco = "groovys_bd";
    private $usuario = "root";
    private $senha = "";
    public $con;

    public function conectar(){
        $this-> con=null;

        try{
            $this-> con = new PDO("mysql:host=$this->host;dbname=$this->banco",$this->usuario,$this->senha);
        }catch(PDOException $e){
            echo "Erro: ".$e->getMessage();
        }

        return $this->con;
    }
}