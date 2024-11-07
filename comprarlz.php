<?php
    include_once "nav.php";
?>
    <script>
        function cancelar(){
            alert("Compra Cancelada :(")
        }
    </script>
  <body>
    
  

    <main>

        <?php
            if($_SERVER("REQUEST_METHOD")){
                echo "Compra ok";
            }

        ?>
        <div class="container conteudo">
            <h1 id="hmb">Compra Realizada Com Sucesso!</h1>
            <h4>Seu pedido está sendo preparado,</h4>
            <h6>e logo será entregue!</h6>
            <div class="progress">
                <div class="progress-bar"></div>
            </div>
            <a href="carrinho.html">
             <button id="botaofinalizar" style="float: right; margin-top: 5%;" onclick="cancelar()">Cancelar Pedido</button>
            </a> 
        </div>

    </main>


    </body>

<?php
    include_once "footer.php"
?>