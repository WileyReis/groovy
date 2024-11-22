<?php
include_once "configs/database.php";

$banco = new database();
$bd = $banco->conectar();

class Cardapio{
  public $id;
  public $nome;
  public $preco;
  public $descricao;  
  public $bd;

  public function __construct($bd){
    $this->bd = $bd;
  }

  public function lerTodos(){
    $sql = "SELECT * FROM cardapio";
    $resultado = $this->bd->query($sql);
    $resultado->execute();

    return  $resultado->fetchAll(PDO::FETCH_OBJ);        
  }

  public function verProduto($id){
    $sql = "SELECT * FROM cardapio WHERE id = :id;";
    $resultado = $this->bd->prepare($sql);
    $resultado->bindParam(":id", $id);
    $resultado->execute();

    return $resultado->fetchAll(PDO::FETCH_OBJ);
  }

  public function cadastrar(){
    $sql = "INSERT INTO cardapio(id, nome, preco, descricao) values (:id, :nome, :preco, :descricao)";
    $stmt = $this->bd->prepare($sql);
    $stmt-> bindParam(':id', $this->id, PDO::PARAM_INT);
    $stmt-> bindParam(':nome', $this->nome, PDO::PARAM_STR);
    $stmt-> bindParam(':preco', $this->preco, PDO::PARAM_INT);
    $stmt-> bindParam(':descricao', $this->descricao, PDO::PARAM_STR);

    if($stmt->execute()){
      return true;
    }else{
      return false;
    }
  }


  public function removerProduto(){
    $sql ="DELETE FROM cardapio WHERE id=:id;";
    $stmt = $this->bd->prepare($sql);
    $stmt-> bindParam(':id', $this->id, PDO::PARAM_STR);
 
    if($stmt->execute()){
      return true;
    }else{
      return false;
    }      
  }
}