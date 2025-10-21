<?php
// Template Name: Entre em contato
?>

<?php get_header(); ?>

<main id="pg-contact">
  <section class="section-content">
    <div class="container">
      <div class="content-infos">
        <p class="subtitle">contato</p>
        <h1 class="title-section">A Sense é feita para quem compartilha a paixnt por design e qualidade.</h1>
      </div>
      <div class="form-content">
        <?php echo do_shortcode('[contact-form-7 id="67c5b12" title="Formulário de Entre em contato"]'); ?>
      </div>
    </div>
  </section>

  <section class="section-infos container">
    <div class="infos-container">
      <address>
        <div class="infos-item">
          <h3 class="subtitle">contato</h3>
          <a href="tel:+554834317054">+55 (48) 3431-7054</a>
          <a href="tel:+5548991464108">+55 (48) 9 9146-4108</a>
        </div>

        <div class="infos-item">
          <h3 class="subtitle">E-mail</h3>
          <a href="mailto:vendassense@gabcer.com.br">vendassense@gabcer.com.br</a>
        </div>

        <div class="infos-item">
          <h3 class="subtitle">Endereço</h3>
          <a href="https://maps.google.com/?q=Rodovia+Governador+Jorge+Lacerda+10300,+Criciúma" target="_blank"
            rel="noopener" aria-label="Ver endereço no Google Maps">
            Rodovia Governador Jorge Lacerda 10300, Km 20, Bairro Verdinho, Criciúma/SC, </br>88814-552
          </a>
        </div>
      </address>
    </div>
  </section>

</main>

<?php get_footer(); ?>