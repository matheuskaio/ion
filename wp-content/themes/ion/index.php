<?= get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <style>
      .post-content {
        margin-top: 80px;
      }
    </style>
    <section class="post-content container">
      <h1 class="titulo"><?= the_title(); ?> <?= get_post_type(); ?></h1>
      <span class="data">
        <?= the_date(); ?>
      </span>
      <div class="foto-principal-post">
        <?= the_post_thumbnail() ?>
      </div>

      <div class="conteudo-post">
        <?= the_content() ?>
      </div>

      <section class=" posts-relacionados">
        <h2 class="subtitulo">Veja mais posts</h2>


        <?php
        $novoPosts = get_posts(
          [
            'posts_per_page' => 3,
            'orderby' => 'rand'
            // 'order' => 'DESC'
          ]
        );

        ?>
        <div class="posts-segundarios posts-secundarios-post">

          <?php foreach ($novoPosts as $post) : ?>
            <a class="post" href="<?= the_permalink(); ?>" data-aos="fade-up">
              <div class="foto-post">
                <img src="<?= get_the_post_thumbnail() ?>" alt="postagem">
              </div>
              <div class="conteudo-post">
                <span><strong>postagem • </strong> <?= get_the_date() ?></span>
                <h3>
                  <?= get_the_title() ?>
                </h3>

              </div>
            </a>
          <?php endforeach; ?>
        </div>

      </section>
      <!-- <hr> -->

      <div class="conteudo-secundario-post">
        <!-- <div class="compartilhar">
          <h2>Compartilhar</h2>
          <div class="buttons-compartilhar">
            <button class="btn-face">
              <img src="assets/imagens/face.png" alt="facebook">
            </button>
            <button class="btn-face">
              <img src="assets/imagens/insta.png" alt="Instagram">
            </button>
            <button class="btn-face">
              <img src="assets/imagens/linkedin.png" alt="linkedin">
            </button>
          </div>
        </div> -->
        <!--
        <div class="filtros">
          <p>Classificar por: </p>
          <select name="" id="">
            <option value="antigos">Mais antigos</option>
            <option value="recentes">Mais recentes</option>
          </select> -->
      </div>
      </div>

      <!-- <div class="comentarios">
        <form action="">
          <textarea placeholder="Escreva um comentário" name="comentario" id="comentario" cols="30" rows="10"></textarea>
          <button class="btn">Enviar</button>
        </form>
      </div> -->

    </section>

  <?php endwhile; ?>

<?php else : ?>
  <section class="post-content container">
    <h1>Página não encontrada</h1>
  </section>
<?php endif; ?>

<?= get_footer(); ?>
