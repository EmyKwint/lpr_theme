<?php
  
  function lprtheme_setup() {
    // permet aux plugins et aux thèmes de gérer la balise de titre du document.
    add_theme_support( 'title-tag' );

    // permet la prise en charge des images mises en avant.
    add_theme_support( 'post-thumbnails' );

    // permet de rendre le code valide pour HTML5.
    add_theme_support('html5', array (
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      'style',
      'script'
    ) );

    //permet la prise en charge d'un logo personnalisé.
    add_theme_support( 'custom-logo', array(
      'height'      => 250,
      'width'       => 250,
      'flex-width'  => true,
      'flex-height' => true,
    ) );

    // permet la prise en charge des extraits.
    add_post_type_support( 'page', 'excerpt' );

    // Tailles d'images personalisées
    add_image_size('square', 1024, 1024, true);
    add_image_size('paysage', 1024, 1024, true);
  }

    function lprtheme_register_menus() {
    register_nav_menus( array(
      'main-menu' => esc_html__('En-tête de page', 'crdtheme'),
      'footer-menu' => esc_html__('Pied de page', 'crdtheme')
    ) );
  }

function lprtheme_scripts_styles() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/src/scss/style.css' );
    
    // Carroussel script
    wp_enqueue_script( 'carroussel', get_template_directory_uri() . '/src/js/carroussel.js', array(), '1.0.0', true );
    wp_localize_script('carroussel', 'wp_path', array(
      'template_dir' => get_template_directory_uri()
    ));
    
    add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);
}

function add_defer_attribute($tag, $handle) {
    if ('carroussel' === $handle || 'user-connexion-js' === $handle) {
        return str_replace(' src', ' defer src', $tag);
    }
    return $tag;
}


	