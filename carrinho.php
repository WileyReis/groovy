<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Groovy's Burguer</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Titan+One&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/stylecar.css">
  <script src="script/script.js"></script>
</head>

<body>

<?php include 'nav.php';?>
  <form action="comprarlz.php">
  <main class="main-section">
    <div class="animate__animated animate__swing animate__infinite	 shake" id="bx6">

      <img src="imagens/hamburguertitle.png" alt="" width="100" height="100">
    </div>
    <section class="container normal-section">
      <h1 id="nome" class="section-title">CARDÁPIO</h1><br>
      <h2 id="hmb" class="section-title">Hamburguer</h2>

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

        </div>

        <div class="movie-product card">
          <strong class="product-title" id="hmb">Route 66</strong>
          <div class="cdp">

            <h6><br>Nosso classico, é uma verdadeira celebração de sabores intensos
              e texturas irresistíveis. Começamos com duas suculentas carnes bovinas grelhadas na chapa, garantindo um
              sabor defumado
              e suculento em cada mordida.Para um toque de frescor, incluímos alface crocante e folhas de tomate maduro
              e um delicioso picles, proporcionando
              uma explosão de sabores e texturas frescas. Generosas fatias de queijo cheddar derretido cobrem as carnes,
              adicionando
              um sabor cremoso ao conjunto.
            </h6>
          </div>
          <img src="imagens/lanche2ps.jpg" alt="Poster 2" class="product-image">
          <div class="product-price-container">
            <span class="product-price">R$31,50</span>
            <button type="button" class="button-hover-background" type="submit" href="admin.php">Adicionar ao carrinho</button>
          </div>
        </div>

        <div class="movie-product card">
          <strong class="product-title" id="hmb">Rebel</strong>
          <div class="cdp">

            <h6><br>uma explosão de sabores intensos e suculentos.
              Começamos com uma combinação de três tipos de carne bovina: suculentos e grelhados filés mignon, costelas
              de Angus
              e carne brisket defumada lentamente.As carnes são cuidadosamente empilhadas em um pão brioche tostado, que
              adiciona uma textura macia
              e um leve toque adocicado. Entre as camadas de carne, generosas fatias de queijo cheddar derretido cobrem
              cada mordida,
              oferecendo um sabor cremoso e reconfortante e nosso delicioso bacon crocante.
            </h6>
          </div>
          <img src="imagens/lanche4ps.jpg" alt="Poster 3" class="product-image">
          <div class="product-price-container">
            <span class="product-price">R$39,99</span>
            <button type="button" class="button-hover-background" type="submit" href="admin.php">Adicionar ao carrinho</button>
          </div>
        </div>

        <div class="movie-product card">
          <strong class="product-title" id="hmb">Jukebox</strong>
          <div class="cdp">

            <h6><br>Tiras de frango macias e suculentas empanadas e fritas até ficarem douradas e crocantes.
              Os chicken tenders são servidos com um molho especial da casa, idealmente um molho de mostarda e mel ou um
              molho barbecue cremoso.
              alface fresca e tomate maduro, cebola roxa e picles entre duas fatias de pão tostado
            </h6>
          </div>
          <img src="imagens/lanche6ps.jpg" alt="Poster 4" class="product-image">
          <div class="product-price-container">
            <span class="product-price">R$36,99</span>
            <button type="button" class="button-hover-background" type="submit" href="admin.php">Adicionar ao carrinho</button>
          </div>
        </div>
      </div>
    </section>
    <div class="animate__animated animate__swing animate__infinite	 shake">

      <img src="imagens/milktitle.png" alt="" width="100" height="100">
    </div>
    <section class="container normal-section" id="milk">
      
      <h2 id="hmb" class="section-title" id="hmb">Milk's</h2>

      <div class="products-container">
        <div class="movie-product card">
          <strong class="product-title" id="hmb">Cherry Bomb Shake</strong>
          <div class="cdp">

            <h6><br>Viaje no tempo com o nosso Milk Shake de Baunilha Vintage, uma delícia atemporal que captura os
              sabores clássicos de uma época
              passada. Feito com sorvete de baunilha rico e cremoso, cuidadosamente misturado com leite integral, este
              shake é um prazer
              nostálgico para os sentidos.
              Servido em um copo gelado, decorado com uma cobertura de chantilly e cereja,
              oferece um gostinho da tradição a cada gole. Perfeito para acompanhar um suculento
              hambúrguer ou como uma delícia independente.
            </h6>
          </div>
          <img src="imagens/milk1ps.jpg" alt="Poster 3" class="product-image">
          <div class="product-price-container">
            <span class="product-price">R$18,50</span>
            <button type="button" class="button-hover-background" type = "submit" href="admin.php">Adicionar ao carrinho</button>
          </div>
        </div>


        <div class="movie-product card">
          <strong class="product-title" id="hmb">Vintage Vanilla Shake</strong>
          <div class="cdp">

            <h6><br>Viaje no tempo com o nosso Milk Shake de Baunilha Vintage, uma delícia atemporal que captura os
              sabores clássicos de uma época
              passada. Feito com sorvete de baunilha rico e cremoso, cuidadosamente misturado com leite integral, este
              shake é um prazer
              nostálgico para os sentidos.
              Servido em um copo gelado, decorado com uma cobertura de chantilly e cereja,
              oferece um gostinho da tradição a cada gole. Perfeito para acompanhar um suculento
              hambúrguer ou como uma delícia independente.
            </h6>
          </div>
          <img src="imagens/milk2ps.jpg" alt="milk" class="product-image">
          <div class="product-price-container">
            <span class="product-price">R$17,00</span>
            <button type="button" class="button-hover-background" type="submit" href="admin.php">Adicionar ao carrinho</button>
          </div>
        </div>


        <div class="products-container">
          <div class="movie-product card">
            <strong class="product-title" id="hmb">Creamy Shake</strong>
            <div class="cdp">

              <h6>Delicie-se com a suavidade e a riqueza cremosa do nosso Shake Cremoso com Morango, um deleite
                encantador que promete
                satisfazer seus desejos.
                Feito com sorvete cremoso misturado à perfeição com leite fresco integral e morangos frescos, este shake
                é uma experiência
                luxuosa para o paladar.
                Servido em um copo gelado, coberto com uma generosa camada de chantilly e um morango fresco no topo e
                oferece um delicioso
                contraste de texturas e sabores a cada gole. Seja desfrutado ao lado de um suculento hambúrguer
                ou como uma sobremesa refrescante por si só, este shake com certeza trará um sorriso ao seu rosto e
                evocará memórias dos
                clássicos prazeres das lanchonetes.
              </h6>
            </div>

            <img src="imagens/milk4ps.jpg" alt="" class="product-image">
            <div class="product-price-container">
              <span class="product-price">R$19,00</span>
              <button type="button" class="button-hover-background" type="submit" href="admin.php">Adicionar ao carrinho</button>
            </div>

          </div>


        </div>
        <div class="movie-product card">
          <strong class="product-title" id="hmb">Choco Delight</strong>
          <div class="cdp">

            <h6><br>Experimente a indulgência do nosso Milk Shake de Chocolate Crocante, uma combinação irresistível de
              sorvete
              de chocolate rico e pedaços crocantes de biscoito. O sorvete de chocolate é batido até ficar cremoso e
              misturado
              com pedaços de biscoito crocante, criando uma textura deliciosamente contrastante. Servido com chantilly
              coberto com pedaços de biscoito e um toque final de calda de chocolate,
              este milk shake é perfeito para os amantes de chocolate
            </h6>
          </div>
          <img src="imagens/milk3ps.jpg" alt="Poster 3" class="product-image">
          <div class="product-price-container">
            <span class="product-price">R$19,00</span>
            <button type="button" class="button-hover-background" type="submit" href="admin.php">Adicionar ao carrinho</button>
          </div>
        </div>

        <div class="movie-product card">
          <strong class="product-title" id="hmb">Fountain Shake</strong>
          <div class="cdp">

            <h6><br>Satisfaça seu desejo por uma combinação clássica de Cookies & Cream. Feito com sorvete de baunilha
              cremoso e
              pedaços generosos de biscoitos de chocolate crocantes, este milk shake oferece uma mistura irresistível de
              texturas e sabores.
              Batido até ficar cremoso e servido em um copo alto com uma camada de chantilly e biscoitos esfarelados no
              topo, este milk shake é
              uma opção que agrada a todos os paladares.
            </h6>
          </div>
          <img src="imagens/milk5ps.jpg" alt="milk" class="product-image">
          <div class="product-price-container">
            <span class="product-price">R$19,00</span>
            <button type="button" class="button-hover-background" type="submit" href="admin.php">Adicionar ao carrinho</button>
          </div>
        </div>

        <div class="movie-product card">
          <strong class="product-title" id="hmb">50's Dreams</strong>
          <div class="cdp">

            <h6><br>Nossa sobremesa de Sorvete e Frutas Tropicais, uma opção refrescante e vibrante que transporta você
              para um paraíso exótico.
              Com uma generosa porção de sorvete cremoso, harmoniosamente combinado com uma seleção fresca de frutas
              tropicais.
              Para adicionar ainda mais textura e sabor, decoramos com uma pitada de coco ralado e finalizamos com um
              toque de molho de
              maracujá ou outra calda à sua escolha. Esta sobremesa não só satisfaz o paladar,
              mas também é uma celebração de cores e aromas que lembram os dias ensolarados e brilhantes de uma ilha
              paradisíaca.
            </h6>
          </div>
          <img src="imagens/milk6ps.jpg" alt="milk" class="product-image">
          <div class="product-price-container">
            <span class="product-price">R$25,00</span>
            <button type="button" class="button-hover-background" type="submit" href="admin.php" >Adicionar ao carrinho</button>
          </div>
        </div>
      </div>
    </section>

    <section id="car" class="container normal-section">
      <h2 id="hmb" class="section-title">Carrinho</h2>
      <div class="container">
        <center>
          <img src="imagens/carrinho.png" alt="" width="90" height="90">
        </center> <br>
      </div>
      <table class="cart-table">
        <thead>
          <tr>
            <th class="table-head-item first-col">Item</th>
            <th class="table-head-item second-col">Preço</th>
            <th class="table-head-item third-col">Quantidade</th>
          </tr>
        </thead>

        <tbody>
          <tr class="cart-product">
            <td class="product-identification">
              <img src="imagens/lanche2ps.jpg" alt="" class="cart-product-image">
              <strong class="cart-product-title">Route 66 Burger</strong>
            </td>
            <td>
              <span class="cart-product-price">R$31,50</span>
            </td>
            <td>
              <input type="number" value="2" min="0" class="product-qtd-input">
              <button type="button" class="remove-product-button">Remover</button>
            </td>
          </tr>
          <tr class="cart-product">
            <td class="product-identification">
              <img src="imagens/milk1ps.jpg" alt="milk" class="cart-product-image">
              <strong class="cart-product-title">Cherry Bomb Shake</strong>
            </td>
            <td>
              <span class="cart-product-price">R$19,90</span>
            </td>
            <td>
              <input type="number" value="1" min="0" class="product-qtd-input">
              <button type="button" class="remove-product-button">Remover</button>
            </td>
          </tr>
        </tbody>

        <tfoot>
          <tr>
            <td colspan="3" class="cart-total-container">
              <strong>Total</strong>
              <span>R$00,00</span>
            </td>
          </tr>
        </tfoot>
      </table>

      <button type="button" class="purchase-button">Finalizar Compra</button>
    </section>
  </main>


  <div class="row">
    <div class="container">
      <a href="carrinho.php">
        <img src="imagens/seta-para-cima (3).png" alt="" width="120" height="120" id="bx6">
      </a>
    </div>
  </div>

  <?php include 'folder.php';?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>