
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
include_once "objetos/cardapio.php";
include_once "funcoes.php";

resultadobd();
pesquisa();
// $banco= new database();
// $bd= $banco->conectar();
// $a = new Cardapio($bd);
// global $produtos;
foreach ($produtos_pesquisar as $rows){
    echo $rows->nome;
    echo $rows->descricao;
}

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
