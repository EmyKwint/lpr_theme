<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allison&family=Bilbo+Swash+Caps&family=Cookie&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Oregano:ital@0;1&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.19/index.global.min.js'></script>

    <?php wp_head(); ?>
</head>


<body>
    <header class="header section">
        <nav class=" header__menu menu ">
            <a class="title header__title header__title-mobile" href="index.html">La Place Rouge</a>
            <ul class="menu__list list__sm">
                <li class="menu__item">
                    <a class="menu-btn" href="https://www.facebook.com/laplacerouge70/?locale=fr_FR">
                        <i class="bi bi-facebook"></i>
                    </a>
                </li>
                <li class="menu__item">
                    <a class="menu-btn" href="https://www.instagram.com/laplacerouge70/?hl=fr">
                        <i class="bi bi-instagram"></i>
                    </a>
                </li>
            </ul>
            <ul class="menu__list menu__center">
                <li class="menu__item menu__text">
                    <a class="menu__btn-txt" href="">Contact</a>
                </li>
                <li class="menu__item menu__text">
                    <a class="menu__btn-txt" href="#index__reservation">Réservation</a>
                </li>
                <li class="menu__item" >
                    <a class="title header__title" href="/laPlaceRouge/">
                        <h1>La Place Rouge</h1> 
                    </a>
                </li>
                <li class="menu_item menu__text">
                    <a class="menu__btn-txt" href="?page_id=149">Notre Carte</a>
                </li>
                <li class="menu_item menu__text">
                    <a class="menu__btn-txt" href="galerie.html">Galerie</a>
                </li>
            </ul>
            <ul class="menu__list">
                <li class="menu__item">
                    <a class="menu-btn" id="user__btn">
                        <i class="bi bi-person-square"></i>
                    </a>
                </li>
                <li class="menu__item menu-btn__bar">
                    <button class="menu-btn">
                        <span class=""></span>
                    </button>
                </li>
            </ul>
        </nav>
    </header>