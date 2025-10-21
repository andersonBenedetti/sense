<?php
// Template Name: Expositores
?>

<?php get_header(); ?>

<main id="pg-exhibitors">
  <section class="section-content">
    <div class="container">
      <div class="content-infos">
        <p class="subtitle">Expositores</p>
        <h1 class="title-section">Conheça nossos modelos para ponto de venda.</h1>
      </div>
    </div>
  </section>

  <section class="section-cards container">
    <div class="infos-item">
      <div class="img">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/expositor-escalonado.webp"
          alt="Expositor Escalonado" width="580" height="580">
      </div>
      <div class="content-item">
        <h3>Expositor Escalonado</h3>
        <strong>Especificação Ténica:</strong>
        <p>34 x 40 x 100 cm</p>
        <p>MDF Branco</p>
        <a class="btn laudo" href="#">
          <span>solicite o seu</span>
        </a>
      </div>
    </div>

    <div class="infos-item">
      <div class="content-item">
        <h3>Expositor de Mesa</h3>
        <strong>Especificação Ténica:</strong>
        <p>20 x 55 cm</p>
        <p>MDF Branco</p>
        <a class="btn laudo" href="#">
          <span>solicite o seu</span>
        </a>
      </div>
      <div class="img">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/expositor-mesa.webp" alt="Expositor de Mesa"
          width="580" height="580">
      </div>
    </div>
  </section>

</main><?php get_footer(); ?>