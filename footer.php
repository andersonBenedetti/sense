<?php $footer_menu_institucional = [
    ['label' => 'Sobre nós', 'url' => '/sobre-nos'],
    ['label' => 'Produtos', 'url' => '/produtos'],
    ['label' => 'Contato', 'url' => '/contato'],
    ['label' => 'Blog', 'url' => '/blog'],
];

$footer_menu_politicas = [
    ['label' => 'Política de Privacidade', 'url' => '/politica-de-privacidade'],
    ['label' => 'Termos de uso', 'url' => '/termos-de-uso'],
    ['label' => 'Expositores', 'url' => '/expositores'],
    ['label' => 'Baixar catálogo', 'url' => '/baixar-catalogo'],
];
?>

<footer id="footer">
    <div class="footer-top">
        <div class="column-left">
            <a href="/" class="header-logo" aria-label="Voltar para página inicial Sense">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-sense.webp"
                    alt="Gabriella Cerâmica - Logo rodapé" loading="lazy" width="220" height="63">
            </a>
        </div>

        <div></div>

        <div class="footer-social column-right">
            <a href="https://instagram.com" target="_blank" rel="noopener" aria-label="Instagram Gabriella">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/qlementine-icons_instagram-24.svg"
                    alt="Instagram Gabriella">
            </a>
            <a href="https://facebook.com" target="_blank" rel="noopener" aria-label="Facebook Gabriella">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/qlementine-icons_facebook-16.svg"
                    alt="Facebook Gabriella">
            </a>
            <a href="https://pinterest.com" target="_blank" rel="noopener" aria-label="Pinterest Gabriella">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/hugeicons_pinterest.svg"
                    alt="Pinterest Gabriella">
            </a>
            <a href="https://wa.me/554834317000" target="_blank" rel="noopener" aria-label="WhatsApp Gabriella">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/ic_baseline-whatsapp.svg"
                    alt="WhatsApp Gabriella">
            </a>
        </div>
    </div>

    <div class="footer-main ">
        <div class="footer-column column-left">
            <address>
                <a href="https://maps.google.com/?q=Rodovia+Governador+Jorge+Lacerda+10300,+Criciúma" target="_blank"
                    rel="noopener" aria-label="Ver endereço no Google Maps">
                    Rodovia Governador Jorge Lacerda 10300, Km 20, Bairro Verdinho, Criciúma/SC, </br>88814-552
                </a>
                <div class="footer-contact">
                    <a href="mailto:vendassense@gabcer.com.br">vendassense@gabcer.com.br</a>
                    <a href="tel:+554834317054">+55 (48) 3431-7054</a>
                    <a href="tel:+5548991464108">+55 (48) 9 9146-4108</a>
                </div>
            </address>
        </div>

        <div class="column-center">
            <nav class="footer-column" aria-labelledby="footer-institucional">
                <ul>
                    <?php foreach ($footer_menu_institucional as $item): ?>
                        <li>
                            <a class="link-footer" href="<?php echo esc_url($item['url']); ?>">
                                <?php echo esc_html($item['label']); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>

            <nav class="footer-column" aria-labelledby="footer-politicas">
                <ul>
                    <?php foreach ($footer_menu_politicas as $item): ?>
                        <li>
                            <a class="link-footer" href="<?php echo esc_url($item['url']); ?>">
                                <?php echo esc_html($item['label']); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </div>

        <div class="column-right">
            <?php echo do_shortcode('[language-switcher]'); ?>
        </div>

    </div>

    <div class="footer-bottom container">
        <p>Sense Decor.</br>
            Todos os direitos reservados.</p>

        <p>
            Desenvolvido por
            <a href="https://blumewebstudio.com.br" target="_blank" rel="nofollow noopener">Blume Web Studio</a>
        </p>
    </div>
</footer>

<a href="https://wa.me/5548999999999" class="whatsapp-float" target="_blank" aria-label="Fale conosco no WhatsApp">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/whatsapp-float.svg" alt="WhatsApp" width="60"
        height="60">
</a>

<div id="popup-imagem" class="popup">
    <div class="popup-conteudo">
        <span class="fechar">&times;</span>
        <img src="" alt="Imagem ampliada" id="imagem-popup">
    </div>
</div>

<script>
    const app = new Vue({
        el: '#app',
        data: {
            activeMenu: false,
        },
        created() { },
        methods: {}
    });
</script>

</div>
<script src="<?php echo get_template_directory_uri(); ?>/js/swiper-bundle.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slider.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/popup.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/toggle.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/quantity.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/counter-story.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/success-form.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/summary.js"></script>

<?php wp_footer(); ?>
</body>

</html>