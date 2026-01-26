<?php get_header(); ?>

<section class="container section-carte">
    <h2 class="menu__title menu__title-carte"><?php the_title(); ?></h2>
    
    <div class="carte">
        <?php
        $terms = get_terms(array(
            'taxonomy' => 'designation',
            'hide_empty' => true,
            'orderby' => 'description',
            'order' => 'DESC'
        ));

        if (!empty($terms) && !is_wp_error($terms)) :
            foreach($terms as $term) : 
            ?>
            <div class="carte__section">
                <h3 class="carte__title"><?php echo esc_html($term->name); ?></h3>
                
                <?php 
                $args = array(
                    'post_type'     => 'produit',
                    'posts_per_page' => -1,
                    'tax_query'     => array(
                        array(
                            'taxonomy' => 'designation',
                            'field'    => 'term_id',
                            'terms'    => $term->term_id,
                        ),
                    ),
                );

                $productQuery = new WP_Query($args);
                if($productQuery->have_posts()) :
                    while ($productQuery->have_posts()) : $productQuery->the_post();
                        $image   = get_field('img_item');
                        $size    = 'thumbnail';
                        $libelle = get_field('libelle');
                        $desc    = get_field('champ_card');
                        $prix    = get_field('prix');
                    ?>
                <div class="carte__produit">
                    <div class="produit__img-title-desc">
                           <?php if($image){
                            echo wp_get_attachment_image($image, $size, false, array('class' => 'produit__img'));
                           } ?>
                        <div class="produit__title-desc">
                            <h4 class="produit__title"><?php echo esc_html($libelle); ?></h4>
                            <span class="produit__desc"><?php echo esc_html($desc); ?></span>
                        </div>
                    </div>
                    <div class="carte__price__div">
                        <span class="carte__price"><?php echo esc_html($prix); ?></span>
                    </div>
                </div>
                <?php endwhile;
                endif;
                wp_reset_postdata();?>
            </div> 
            <?php
            endforeach;
            endif; 
        ?>
    </div> 
</section>

<?php get_footer(); ?>