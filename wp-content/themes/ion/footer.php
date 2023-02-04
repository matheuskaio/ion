  <footer class="bg-white">
    <img src="<?= get_template_directory_uri(); ?>/assets/images/animacao.svg" class="animacao-fundo-section-4-top" alt="" />
    <img src="<?= get_template_directory_uri(); ?>/assets/images/animacao.svg" class="animacao-fundo-section-3" alt="" />
    <div class="relatos-container">
      <div class="footer-conteudo">
        <img src="<?= get_template_directory_uri(); ?>/assets/images/logo.png" alt="" />
        <div class="footer-contato">
          <h5>Contatos</h5>
          <span>contato@ionnutri.com.br</span>
          <span><strong>claudia.gomes@ionnutri.com.br</strong></span>
          <span>(11) 3164-1214</span>
          <span>(11) 9 1081-3015</span>
        </div>
        <div class="footer-paginas">
          <h5>Páginas</h5>
          <span>Home</span><span>Quem somos</span>
          <span>Área Profissional</span>
          <span>Contato</span>
          <span>Blog</span>
          <span>Política de Privacidade</span>
        </div>
        <div class="footer-localicazao">
          <h5>Localização</h5>
          <span>Rua Apiacás, 247 sobreloja, Perdizes, São Paulo, SP.</span>
          <img src="./assets/images/maps.png" alt="" />
          <button>Códido de Direiros dos Pacientes</button>
        </div>
      </div>
    </div>
  </footer>
  <div class="footer-after">
    <div class="footer-after-container">
      <span>©ionnutri - All Rights Reserved</span>
      <div class="footer-after-redes-sociais">
        <img src="<?= get_template_directory_uri(); ?>/assets/images/instagram.svg" alt="" />
        <img src="<?= get_template_directory_uri(); ?>/assets/images/telegram.svg" alt="" />
        <img src="<?= get_template_directory_uri(); ?>/assets/images/twitter.svg" alt="" />
      </div>
    </div>
  </div>
  </body>
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
      },
    });

    var swiperCard = new Swiper(".mySwiperCard", {
      slidesPerView: 3,
      spaceBetween: 30,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        // when window width is >= 480px
        480: {
          slidesPerView: 1,
          spaceBetween: 30,
        },
        // when window width is >= 640px
        800: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
        // "@1.50": {
        //   slidesPerView: 3,
        //   spaceBetween: 30,
        // },
      },
    });

    var swiperParceiros = new Swiper(".carrouselParceiros", {
      slidesPerView: 3,
      grid: {
        rows: 2,
      },
      spaceBetween: 10,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });

    var swiper = new Swiper(".myDiferenciaiMobile", {
      slidesPerView: 2,
      centeredSlides: true,
      spaceBetween: 15,
      grabCursor: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });

    const botaoMobile = document.getElementById("botao-mobile");

    function toggleMenu(event) {
      if (event.type === "touchstart") {
        event.preventDefault();
      }
      const menu = document.getElementById("nav");
      menu.classList.toggle("active");
      const active = nav.classList.contains("active");
      event.currentTarget.setAttribute("aria-expanded", active);

      if (active) {
        event.currentTarget.setAttribute("aria-label", "Fechar Menu");
      } else {
        event.currentTarget.setAttribute("aria-label", "Abrir Menu");
      }
    }

    botaoMobile.addEventListener("click", toggleMenu);
    botaoMobile.addEventListener("touchstart", toggleMenu);
  </script>

  </html>
