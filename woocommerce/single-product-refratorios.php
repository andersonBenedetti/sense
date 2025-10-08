<?php get_header(); ?>

<main id="single-product">

    <section class="section-content ref container">
        <?php if (have_posts()):
            while (have_posts()):
                the_post();
                global $product; ?>

                <div class="product-detail">
                    <?php
                    $terms = get_the_terms($product->get_id(), 'product_cat');
                    if (!empty($terms) && !is_wp_error($terms)) {
                        $main_cat = $terms[0];
                        echo '<span class="product-category">' . esc_html($main_cat->name) . '</span>';
                    }
                    ?>

                    <h1><?php the_title(); ?></h1>

                    <?php woocommerce_template_single_add_to_cart(); ?>

                </div>

                <div class="product-gallery">
                    <?php echo do_shortcode('[wcgs_gallery_slider]'); ?>
                </div>

            <?php endwhile; endif; ?>
    </section>

    <?php
    $upsell_ids = $product->get_upsell_ids();
    if (!empty($upsell_ids)) {
        $upsell_products = array_map('wc_get_product', $upsell_ids);
        $formatted_upsells = format_products($upsell_products);
        ?>
        <section class="section-products">
            <div class="container">
                <div class="products-top">
                    <h2 class="title-section">Conheça outras peças</h2>
                </div>

                <?php gabriella_product_list($formatted_upsells); ?>

                <a class="btn secondary" href="#">
                    <span>Ver todas as peças</span>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/arrow-btn-secondary.svg"
                        alt="icone arrow">
                </a>
            </div>
        </section>
    <?php } ?>

</main>

<?php get_footer(); ?>