<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Groovy's Burguer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Titan+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script>
        function cancelar(){
            alert("Compra Cancelada :(")
        }
    </script>
 
<body>
    <header>
        <nav class="navbar bx1">
            <div class="container">
                <a class="logo animate__animated animate__bounce" href="index.php">
                    <img src="imagens/logo5.png" alt="Bootstrap" height="150">
                </a>
                <a class="nav-link hvr-fade" href="carrinho.php">CARDÁPIO</a>
                <a class="nav-link hvr-fade" href="eventos.php">EVENTOS</a>
                <a class="nav-link hvr-fade" href="qsomos.php">QUEM SOMOS</a>
                <a class="nav-link hvr-fade" href="contato.php">CONTATO</a>
                <a class="nav-link hvr-fade" href="carrinho.php#car">
                    <img src="imagens/carrinhoamarelo.png" alt="" width="50" height="50">
                </a>


            </div>
        </nav>
    </header>
    <main>
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




    <div class="row bx3">
        <div class="container-flex">
            <footer>
                <div class="container">
                    <img src="imagens/logo5.png" alt="" width="150" height="150">
                    <a href="https://www.facebook.com/?locale=pt_BR">
                        <img src="imagens/facebook.png" alt="" width="30" height="30" id="bx9">
                    </a>
                    <a href="https://www.instagram.com/">
                        <img src="imagens/instagram.png" alt="" height="30" id="bx9">
                    </a>
                    <a href="https://www.whatsapp.com/?lang=pt_BR">
                        <img src="imagens/whatsapp.png" alt="" height="30" id="bx9">
                    </a>
                </div>
                <div class="container">
                    <center>SiteLab Inc. </center>
                </div>
            </footer>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>