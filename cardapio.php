<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CARDAPIO</title>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>
<body>
<?php include 'nav.php';?>
<main class="main-section">
    <div class="animate__animated animate__swing animate__infinite	 shake" id="bx6">

      <img src="imagens/hamburguertitle.png" alt="" width="100" height="100">
    </div>
    <section class="container normal-section">
      <h1 id="nome" class="section-title">CARDÁPIO</h1><br>
      <h2 id="hmb" class="section-title">Hamburguer</h2>
    <form action="">
        <label name="">
        <div class="products-container">
        <div class="movie-product card">
          <strong class="product-title" id="hmb">Rockabilly Burguer</strong>
          <div class="cdp">

            <h6><br>Feito com fatias de corned beef (carne bovina curada), sauerkraut (chucrute), bacon defumado
              crocante,
              cebola caramelizada, queijo suíço derretido e
              molho Thousand Island, servido em pão de centeio tostado. O Reuben é grelhado até que o queijo derreta e o
              pão fique
              crocante, oferecendo uma combinação irresistível de sabores salgados e ácidos.

            </h6>
          </div>

          <img src="imagens/testenovolanche.jpg" alt="" class="product-image">
          <div class="product-price-container">
            <span class="product-price">R$29,99</span>
            <button type="button" class="button-hover-background" type="submit" href="admin.php">Adicionar ao carrinho</button>
          </div>
        </label>
    </form>
</body>
</html>