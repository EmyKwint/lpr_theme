<?php get_header(); ?>

<section class="container section-carte">
    <h1 class="menu__title menu__title-carte"><?php the_title(); ?></h1>
    
    <div class="carte">
        <?php
        $terms = get_terms(array(
            'taxonomy' => 'designation',
            'hide_empty' => true,
        ));

        if (!empty($terms) && !is_wp_error($terms)) {
            foreach($terms as $term) { 
            ?>
            <div class="carte__section">
                <h3 class="carte__title"><?php echo esc_html($term->name); ?></h3>

                <div class="carte__produit">
                    <div class="produit__img-title-desc">
                        <img 
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/carte/entree1.webp"
                            class="produit__img"
                            alt="image d'un blini tartiné de caviar" />
                        <div class="produit__title-desc">
                            <h4 class="produit__title">Caviar Noir :</h4>
                            <span class="produit__desc">Œufs d’esturgeon, à déguster avec nos blinis</span>
                        </div>
                    </div>
                    <div class="carte__price__div">
                        <span class="carte__price">30€</span>
                    </div>
                </div>
            </div> 
            <?php
            } 
        }
        ?>
    </div> </section>

<?php get_footer(); ?>