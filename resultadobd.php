
<body>
    <form action="resultadobd.php" method="post">
        <label>Pesquisar: </label>
        <input type="text" name="pesquisa">
        <button>ok</button> <br><br>
    </form>
</body>
</html>


<?php
include_once "configs/database.php";
include_once "cardapio.php";
include_once "funcoes.php";

resultadobd();
$banco= new database();
$bd= $banco->conectar();
$aluno = new Cardapio($bd);
global $produtos;

if($produtos){
    echo "<table>";
    echo "<tr><td>ID: </td>
           <td>Nome: </td>
           <td>Preço: </td>
           <td>Descrição: </td></tr>";

    foreach($produtos as $row){
        echo "<tr>";
        echo "<td>".$row->id."</td>";
        echo "<td>".$row->nome."</td>";
        echo "<td>".$row->preco."</td>";
        echo "<td>".$row->descricao."</td>";
        echo "<td>"."<a href='funcoes.php?id=$row->id'>Deletar"."</a>"."</td>";
        echo "</tr>";
    

    }
    echo "</table>";

}else{
    echo "Falha ao conectar";
}

if(isset($_POST["pesquisa"])){
    foreach($produto->verProduto($_POST["pesquisa"]) as $item){
        echo "<p>".$item->nome."</p>";
    }
}
