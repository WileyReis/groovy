<?php
include_once "configs/database.php";
include_once "objetos/cardapio.php";

$banco= new database();
$bd= $banco->conectar();
$a= new Cardapio($bd);

function resultadobd(){
    global $produtos_pesquisar;
    $banco = new database();
    $bd= $banco->conectar();
    $a = new Cardapio($bd);
    $produtos_pesquisar = $a-> verProduto($_POST['pesquisa']);
}

function pesquisa(){
    global $produtos;
    $banco = new database();
    $bd= $banco->conectar();
    $a = new Cardapio($bd);
    $produtos = $a-> lerTodos();
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