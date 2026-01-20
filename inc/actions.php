<?php

  // Initialisation des fonctions personnalisées du thème.
  add_action( "after_setup_theme", "lprtheme_setup" );

  //Register menu location
  add_action("init", "lprtheme_register_menus");

  add_action( 'wp_enqueue_scripts', 'lprtheme_scripts_styles' );
