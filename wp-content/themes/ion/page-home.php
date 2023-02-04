<?=
//Template Name: Home
get_header() ?>


<section class="bg-white-efeito">
  <div class="section-container">
    <div class="section-header">
      <h2>NUTRIMETABOLÔMICA</h2>
      <p>
        A nutrimetabolômica é a ciência que avalia o efeito da dieta sob a
        saúde de um individuo. Essa avaliação é importante pois nosso
        metabolismo é altamente dinâmico, vivendo sob interferências de
        fatores ambientais e genéticos, fatores estes que tornam um
        indivíduo único! Nesse cenário, ao invés de questionar quais
        alimentos um indivíduo consome, é possível determinar o caminho
        metabólico e os efeitos de sua passagem no organismo.
      </p>
      <div>
        <a class="section-botao" href="">Comprar Kit</a>
        <a class="section-botao-branco" href="">Tire suas dúvidas pelo Whastapp</a>
      </div>
    </div>

    <div class="swiper mySwiper">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <img class="section-header-imagem" src="<?= get_template_directory_uri(); ?>/assets/images/banner1.png" alt="" />
        </div>

        <div class="swiper-slide">
          <img class="section-header-imagem" src="<?= get_template_directory_uri(); ?>/assets/images/blog (1).png" alt="" />
        </div>
        <div class="swiper-slide">
          <img class="section-header-imagem" src="<?= get_template_directory_uri(); ?>/assets/images/banner1.png" alt="" />
        </div>
        <div class="swiper-slide">
          <img class="section-header-imagem" src="<?= get_template_directory_uri(); ?>/assets/images/banner1.png" alt="" />
        </div>
        <div class="swiper-slide">
          <img class="section-header-imagem" src="<?= get_template_directory_uri(); ?>/assets/images/banner1.png" alt="" />
        </div>

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
  <img src="<?= get_template_directory_uri(); ?>/assets/images/animacao.svg" class="animacao" alt="" />
  <img src="<?= get_template_directory_uri(); ?>/assets/images/animacao.svg" class="animacao-direita" alt="" />
  <img src="<?= get_template_directory_uri(); ?>/assets/images/animacao.svg" class="animacao-fundo" alt="" />
</section>

<section>
  <div class="section-container">
    <img class="section-imagem" src="<?= get_template_directory_uri(); ?>/assets/images/banner1.png" alt="" />
    <div class="section-conteudo">
      <span>A nutrição como você nunca viu! </span>
      <h3>O que é o teste?</h3>
      <p>
        É uma das avaliações mais abrangentes e avançadas da medicina de
        precisão. Consiste em um teste metabolômica salivar, desenvolvido
        para avaliar diferentes aspectos do metabolismo e detectar
        desequilíbrios metabólicos e nutricionais antes que se manifestem
        como doenças crônicas.
      </p>
      <a class="section-botao" href="">QUERO COMPRAR AGORA O MEU TESTE</a>
    </div>
  </div>
</section>

<section class="bg-white">
  <div class="section-container section-container-1">
    <img src="<?= get_template_directory_uri(); ?>/assets/images/animacao.svg" class="animacao-fundo-section-3-top" alt="" />
    <img src="<?= get_template_directory_uri(); ?>/assets/images/animacao.svg" class="animacao-fundo-section-3" alt="" />

    <div class="section-conteudo direita">
      <span>O Futuro da Nutrição Está Aqui! </span>
      <h3>Por que fazer o teste?</h3>
      <p>
        Os metabolitos avaliados pela IonNutri são produtos do seu
        metabolismo, ou seja, eles contam para gente a sua história! -
        Através da sua história podemos oferecer uma compreensão bioquímica
        integrada da sua saúde. - Identifica ponto-a-ponto os desequilíbrios
        metabólicos e seus impactos na saúde. - Revela a falta de um
        nutriente ou se a capacidade do corpo de produzir energia a partir
        dos alimentos está prejudicada. - Uma vez identificados os
        desequilíbrios, pode-se propor correções de modo individualizado e
        personalizado. - Possibilita o fornecimento adequado de nutrientes
        de acordo com a necessidade metabólica especifica do individuo,
        permitindo assim, que cada organismo alcance seu equilíbrio,
        prevenindo o desenvolvimento de doenças ou melhorando o prognóstico
        de doenças já existentes.
      </p>
      <a class="section-botao" href="">QUERO COMPRAR AGORA O MEU TESTE</a>
    </div>
    <img class="section-imagem" src="<?= get_template_directory_uri(); ?>/assets/images/banner1.png" alt="" />
  </div>
</section>

<section class="bg-white">
  <div class="relatos-container">
    <div class="relatos-conteudo">
      <p>Veja os</p>
      <h3>Relatos de mudança de vida</h3>
      <span>Pellentesque etiam blandit in tincidunt at donec. Eget ipsum
        dignissim placerat nisi, adipiscing mauris non purus
        parturient.</span>
    </div>
    <div class="swiper mySwiperCard">
      <div class="relatos-cards swiper-wrapper">

        <?php $relatos = get_post_meta(get_the_ID(), 'home_section_relatos', true); ?>
        <?php if (isset($relatos)) : ?>
          <?php foreach ($relatos as $relato) : ?>
            <div class="swiper-slide">
              <div class="relato-card">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/quote-up.svg" alt="" />

                <p>
                  <?= $relato['home_section_relatos_link_corpo'] ?>
                </p>
                <div class="relato-card-footer">
                  <div class="relato-card-footer-pessoa">
                    <img src="<?= $relato['home_section_relatos_imagem'] ?>" alt="Foto de <?= $relato['home_section_relatos_nome'] ?>" />
                    <p><?= $relato['home_section_relatos_nome'] ?></p>
                  </div>
                  <div class="relato-card-footer-star">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/star.svg" alt="" />
                    <span><?= $relato['home_section_relatos_avaliacao'] ?></span>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>


      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</section>

<section>
  <img src="<?= get_template_directory_uri(); ?>/assets/images/animacao.svg" class="animacao-fundo-section-4-top" alt="" />
  <img src="<?= get_template_directory_uri(); ?>/assets/images/animacao.svg" class="animacao-fundo-section-3" alt="" />
  <div class="relatos-container">
    <div class="relatos-conteudo">
      <p>Como é</p>
      <h3>feito o teste ?</h3>
    </div>
    <div class="card-testes">
      <div class="card-teste">
        <img src="<?= get_template_directory_uri(); ?>/assets/images/card infos.svg" alt="" />
        <p>1º passo</p>
        <span>Após adquirir o teste, você receberá no e-mail de cadastro um
          link para preencher um questionário com as informações sobre sua
          saúde atual
        </span>
      </div>

      <div class="card-teste">
        <img src="<?= get_template_directory_uri(); ?>/assets/images/card infos.svg" alt="" />
        <p>2º passo</p>
        <span>Após o preenchimento e envio desse questionário de saúde, o seu
          kit de coleta do teste será encaminhado ao endereço fornecido
        </span>
      </div>

      <div class="card-teste">
        <img src="<?= get_template_directory_uri(); ?>/assets/images/Mask group.svg" alt="" />
        <p>3º passo</p>
        <span>Após a realização da sua coleta de saliva, você entrará em
          contato com a IonNutri para providenciarmos a retirada da amostra.
          Assim que amostra chegar em nosso laboratório, aguarde 20 dias
          úteis para receber seus resultados
        </span>
      </div>
    </div>
    <a class="section-botao" href="">Mais detalhes</a>
  </div>
</section>
<section class="bg-white">
  <img src="<?= get_template_directory_uri(); ?>/assets/images/animacao.svg" class="animacao-fundo-section-4-top" alt="" />
  <img src="<?= get_template_directory_uri(); ?>/assets/images/animacao.svg" class="animacao-fundo-section-3" alt="" />
  <div class="relatos-container">
    <div class="relatos-conteudo">
      <p>Nosso</p>
      <h3>Diferencial</h3>
    </div>
    <div class="diferenciais">
      <?php $diferenciaisCard = get_post_meta(get_the_ID(), 'home_inicio_diferencial_section', true); ?>
      <?php if (isset($diferenciaisCard)) : ?>
        <?php foreach ($diferenciaisCard as $diferencial) : ?>
          <div class="diferencial">
            <img src="<?= $diferencial['home_inicio_diferencial_section_imagem'] ?>" alt="Imagem que representa o diferencial" />
            <div class="diferencial-conteudo">
              <p><?= $diferencial['home_inicio_diferencial_section_titulo'] ?></p>
              <span><?= $diferencial['home_inicio_diferencial_section_resumo'] ?></span>
              <a href="<?= $diferencial['home_inicio_diferencial_section_link'] ?>">Saber mais</a>
            </div>
          </div>

        <?php endforeach; ?>
      <?php endif; ?>


    </div>

    <div class="swiper myDiferenciaiMobile">
      <div class="swiper-wrapper">
        <div class="diferencial swiper-slide">
          <img src="<?= get_template_directory_uri(); ?>/assets/images/blog.png" alt="" />
          <div class="diferencial-conteudo">
            <p>Metaboloma individualizado (n=1)</p>
            <span>More off this less hello samlande lied much over tightly
              circa horse taped mightly</span>
            <a href="">Saber mais</a>
          </div>
        </div>
        <div class="diferencial swiper-slide">
          <img src="<?= get_template_directory_uri(); ?>/assets/images/blog.png" alt="" />
          <div class="diferencial-conteudo">
            <p>Metaboloma individualizado (n=1)</p>
            <span>More off this less hello samlande lied much over tightly
              circa horse taped mightly</span>
            <a href="">Saber mais</a>
          </div>
        </div>
        <div class="diferencial swiper-slide">
          <img src="<?= get_template_directory_uri(); ?>/assets/images/blog.png" alt="" />
          <div class="diferencial-conteudo">
            <p>Metaboloma individualizado (n=1)</p>
            <span>More off this less hello samlande lied much over tightly
              circa horse taped mightly</span>
            <a href="">Saber mais</a>
          </div>
        </div>
        <div class="diferencial swiper-slide">
          <img src="<?= get_template_directory_uri(); ?>/assets/images/blog.png" alt="" />
          <div class="diferencial-conteudo">
            <p>Metaboloma individualizado (n=1)</p>
            <span>More off this less hello samlande lied much over tightly
              circa horse taped mightly</span>
            <a href="">Saber mais</a>
          </div>
        </div>

      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>
<section>
  <img src="<?= get_template_directory_uri(); ?>/assets/images/animacao.svg" class="animacao-fundo-section-4-top" alt="" />
  <img src="<?= get_template_directory_uri(); ?>/assets/images/animacao.svg" class="animacao-fundo-section-3" alt="" />
  <div class="relatos-container">
    <div class="relatos-conteudo">
      <div class="depoimentos">
        <div class="depoimento">
          <img src="<?= get_template_directory_uri(); ?>/assets/images/boneco.png" alt="" />
          <h2>Nome do cliente - Profissão</h2>
          <p>
            Tive a oportunidade de visitar o laboratório, conhecer o
            processo de extração da amostra e comprovar a qualidade e
            seriedade do trabalho executado. Me senti muito segura em
            realizar o exame, satisfeita com o resultado e com suporte
            prestado. Feliz com a parceria firmada e a oportunidade de levar
            saúde de uma forma assertiva e preventiva aos meus pacientes!
          </p>
          <span>Dra Daniela Monteiro</span>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="bg-white">
  <img src="<?= get_template_directory_uri(); ?>/assets/images/animacao.svg" class="animacao-fundo-section-4-top" alt="" />
  <img src="<?= get_template_directory_uri(); ?>/assets/images/animacao.svg" class="animacao-fundo-section-3" alt="" />
  <div class="relatos-container">
    <div class="nossos-parceiros">
      <div class="parceiros-conteudo">
        <p>Venha ser</p>
        <h3>Nosso Parceiro</h3>
        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eu eget
          feugiat habitasse nec, bibendum condimentum.</span>
        <div class="parceiros-conteudo-items">
          <span>Material expose like metals</span>
          <span>Simple neutral colours.</span>
          <span>Clear lines and geomatric figures</span>
          <span>Material expose like metals</span>
        </div>
        <a class="section-botao" href="">ENTRE EM CONTATO</a>
      </div>



      <div class="swiper carrouselParceiros">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/image 1189.png" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/image 1189.png" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/image 1189.png" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/image 1189.png" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/image 1189.png" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/image 1189.png" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/image 1189.png" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/image 1189.png" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/image 1189.png" alt="" />
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </div>
</section>
<section>
  <img src="<?= get_template_directory_uri(); ?>/assets/images/animacao.svg" class="animacao-fundo-section-4-top" alt="" />
  <img src="<?= get_template_directory_uri(); ?>/assets/images/animacao.svg" class="animacao-fundo-section-3" alt="" />
  <div class="relatos-container">
    <div class="trabalhe-conosco">
      <img src="<?= get_template_directory_uri(); ?>/assets/images/imagem-trabalhe.png" alt="" />
      <div class="trabalhe-conosco-area">
        <h3>
          área aberta para <span>técnica, referências científicas</span>
        </h3>
        <p>
          Cada um de nós apresenta uma assinatura bioquímico metabólica, tão
          individual quanto nossas impressões digitais. Por outro lado,
          nosso metabolismo é altamente dinâmico, vivendo sob interferência
          de fatores externos e internos, como gênero, idade, fatores
          genéticos e epigenéticos, estilo de vida, composição da
          microbiota, dieta e exposição ao meio ambiente.
        </p>
        <form class="trabalhe-conosco-form" action="#">
          <input type="text" placeholder="Nome" />
          <input type="email" placeholder="Email" />
          <button type="submit">
            <i class="ph-file-pdf"></i> BAIXAR PDF
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<section>
  <img src="<?= get_template_directory_uri(); ?>/assets/images/animacao.svg" class="animacao-fundo-section-4-top" alt="" />
  <img src="<?= get_template_directory_uri(); ?>/assets/images/animacao.svg" class="animacao-fundo-section-3" alt="" />
  <div class="relatos-container">
    <div class="relatos-conteudo">
      <p>Entre em</p>
      <h3>Contato</h3>
    </div>
    <div class="section-contato">
      <div class="contatos">
        <h3>Informações Gerais</h3>

        <div class="contato-fone">
          <h5>Telefone / Whastapp</h5>
          <span>(11) 3164-1214</span>
          <span>(11) 9 1081-3015</span>
        </div>
        <div class="contato-email">
          <h5>Email</h5>
          <span>claudia.gomes@ionnutri.com.br</span>
          <span>contato@ionnutri.com.br</span>
        </div>
        <div class="contato-localizacao">
          <h5>Localização</h5>
          <span>Rua Apiacás, 247, sobreloja, Perdizes, São Paulo, SP.</span>
        </div>
      </div>
      <div class="contato-mensagem">
        <h3>Mande sua mensagem</h3>
        <input type="text" placeholder="Nome" />
        <input type="text" placeholder="Email" />
        <input type="text" placeholder="Assunto" />
        <textarea name="" placeholder="Mensagem" id="" cols="30" rows="10"></textarea>
        <button class="section-botao" type="submit">Enviar</button>
      </div>
    </div>
  </div>
</section>
<?= get_footer(); ?>
