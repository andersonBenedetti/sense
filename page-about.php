<?php
// Template Name: Sobre nós
?>

<?php get_header(); ?>

<main id="pg-about">
    <section class="section-about">
        <div class="container">
            <div class="about-top">
                <div class="about-left">
                    <p class="subtitle">Sobre nós</p>
                    <h2 class="title-section">Muito além do revestimento</h2>
                </div>

                <div class="about-right">
                    <p>A Sense surge com espírito inovador e atual, desenvolvendo produtos que vão além das expectativas
                        e necessidades de nossos clientes.</p>
                </div>
            </div>

            <div class="about-counter">
                <div class="story-counter">
                    <p>+ DE</p>
                    <p class="counter" data-target="5">0</p>
                    <p class="text">Anos de atuação</p>
                </div>

                <div class="story-counter">
                    <p>+ DE</p>
                    <p class="counter" data-target="13">0</p>
                    <p class="text">Coleções ativas</p>
                </div>

                <div class="story-counter">
                    <p>+ DE</p>
                    <p class="counter" data-target="500">0</p>
                    <p class="text">clientes</p>
                </div>

                <div class="story-counter">
                    <p>+ DE</p>
                    <p class="counter" data-target="106">0</p>
                    <p class="text">modelos</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-content container">
        <div class="content-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sobre-nos.webp" alt="Sobre nós" width="1200"
                height="421">
        </div>

        <div class="content-text">
            <p>Com um olhar para o futuro, a Sense busca incessante e incansavelmente desenvolver através de pesquisas
                em Tecnologia e Design, seus produtos com altíssimo nível, aliando modernidade e exclusividade.</p>

            <p>A conexão e as sensações geradas por cada produto Sense é essencial para que se possa obter ambientes com
                estilo próprio e inovadores, fazendo do seu espaço, um lugar melhor para se viver.</p>


            <h2>Porque escolher a Sense?</h2>

            <p>Porque projetamos produtos que escolheríamos para nós mesmos.</p>

            <p>Sense, marca criada para que você se sinta á vontade e livre nos espaços em que vive.</p>

            <strong>Sense, revestimentos com sensibilidade.</strong>
        </div>
    </section>

    <section class="section-gallery container">
        <div>
            <p class="subtitle">inspire-se</p>
            <h2 class="title-section">Explore combinações e criações</h2>
            <div class="gallery-content">
                <div class="img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/inspire-se-1.webp" alt="foto"
                        width="588" height="429">
                </div>
                <div class="img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/inspire-se-2.webp" alt="foto"
                        width="588" height="429">
                </div>
            </div>
        </div>

        <div class="gallery-content">
            <div class="img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/inspire-se-3.webp" alt="foto" width="588"
                    height="429">
            </div>
            <div class="img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/inspire-se-4.webp" alt="foto" width="588"
                    height="429">
            </div>
        </div>

        <a class="btn" href="#">
            <span>conheça todos os produtos</span>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/arrow-btn.svg" alt="icone arrow" width="9"
                height="9">
        </a>
    </section>

    <section class="section-contact container">
        <div class="contact-content">
            <p class="subtitle">entre em contato</p>
            <address>
                <a href="https://maps.google.com/?q=Rodovia+Governador+Jorge+Lacerda+10300,+Criciúma" target="_blank"
                    rel="noopener" aria-label="Ver endereço no Google Maps">
                    Rodovia Governador Jorge Lacerda 10300, Km 20, Bairro Verdinho, Criciúma/SC, 88814-552
                </a>
                <div class="address-contact">
                    <a href="mailto:vendassense@gabcer.com.br">vendassense@gabcer.com.br</a>
                    <a href="tel:+554834317054">+55 (48) 3431-7054</a>
                    <a href="tel:+5548991464108">+55 (48) 9 9146-4108</a>
                </div>
            </address>
        </div>
    </section>
</main>

<?php get_footer(); ?>