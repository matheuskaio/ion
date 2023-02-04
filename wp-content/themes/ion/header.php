<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;600;700&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
  <script src="https://unpkg.com/phosphor-icons"></script>

  <title>ION Nutri - Home</title>
</head>

<body>
  <div class="top-menu">
    <div class="container">
      <div class="top-menu-contato">
        <span><a href=""><i class="ph-envelope-simple"></i>claudia.gomes@ionnutri.com.br</a></span>
        <span><a href=""><i class="ph-envelope-simple"></i>contato@ionnutri.com.br</a></span>
        <span><a href="#"><i class="ph-phone-call"></i>(11) 3164-1214</a></span>
        <span><a href="#"><i class="ph-phone-call"></i>(11) 9 1081-3015</a></span>
      </div>
      <div class="top-menu-carrinho">
        <span><i class="ph-shopping-cart"></i>Carrinho</span><i class="fa-sharp fa-solid fa-envelope"></i>
      </div>
    </div>
  </div>

  <header class="menu">
    <div class="container">
      <a class="menu-logo" href=""><img src="<?= get_template_directory_uri(); ?>/assets/images/logo1.png" alt="" /></a>
      <nav id="nav">
        <button id="botao-mobile" aria-label="Abrir Menu" aria-haspopup="true" aria-controls="menu" aria-expanded="false">
          <span id="hamburger"></span>
        </button>
        <ul id="menu" class="menu-navegacao" role="menu">
          <li><a href="#">Home</a></li>
          <li><a href="#">Quem Somos</a></li>
          <li><a href="#">Área do Profissional</a></li>
          <li><a href="#">Contato</a></li>
          <li><a href="#">Blog</a></li>
        </ul>
      </nav>
      <a href="#" class="menu-botao">Comprar Kit</a>
    </div>
  </header>
