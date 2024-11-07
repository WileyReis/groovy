<?php
include_once "configs/database.php";
include_once "cardapio.php";

$banco= new database();
$bd= $banco->conectar();
$a= new Cardapio($bd);
$produtos=null;

function resultadobd(){
    global $produtos;
    $banco = new database();
    $bd= $banco->conectar();
    $a = new Cardapio($bd);
    $produtos = $a-> verProduto();
}



if(isset($_POST['cadastrar'])){
    $a->id = $_POST['id'];
    $a->nome = $_POST['nome'];
    $a->preco = $_POST['preco'];
    $a->descricao = $_POST['descricao'];

    if($a->cadastrar()){
        header("location:resultadobd.php");
    }
} else if(isset($_GET['id'])){
    $a->id = $_GET['id'];
    if($a->removerProduto()){
        header("location:resultadobd.php");
    }
}