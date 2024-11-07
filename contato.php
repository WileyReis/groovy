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
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Titan+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet">
    <script src="script/script.js"></script>

</head>

<body>

    <?php include 'nav.php';?>

        <main>
            <div class="container animate__animated animate__bounce">
        <center>
            <h1 id="nome">FAÇA SEU LOGIN!</h1>
        </center>
            </div>
        <div class="container">
            <div class="row">
                <div class="col contato">
                    <div>
                        <div id="formcontato" style="width: 400px;">
                        <form action="admin.php"></form>
                            <label for="email1">Email:</label>
                            <input class="form-control contato" type="email" name="emial1">
                            <label for="nome1">Nome Completo:</label>
                            <input class="form-control contato" type="text" name="nome1">
                            <label for="tele1">Telefone:</label>
                            <input class="form-control contato" type="number" name="tele1">
                            <div class="form-check">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                    <p> Aceito Receber Notificações no meu e-mail.</p>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    <p>Não, obrigado(a)!</p>
                                </label>
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">

                                <button class="btn btn-primary" type="submit" href="admin.php" onclick="enviar()">Enviar</button>
                            </div>
                        </div>
                    </div>
                    <div>
                        <img src="imagens/imgcontatonv.jpeg" alt="" width="500" height="300" id="imgcontato">
                    </div>
                </div>
            </div>
        </div>
    </main>
<div class="folder-cont">
    <?php include 'footer.php';?>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>