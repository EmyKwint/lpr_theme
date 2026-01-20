    <?php get_header(); ?>
    
    <section class="user__connect" id="user__connect">
        <form class="user__form" action="login.php" method="post">
            <h2 class="title user__title">Connexion</h2>
            <input class="user__input" type="text" name="username" placeholder="Nom d'utilisateur" required>
            <input class="user__input" type="password" name="password" placeholder="Mot de passe" required>
            <button class="btn btn-cta user__btn" type="submit">Se connecter</button>
        </form>
    </section>

    <section class="section hero">   
            <div class="hero__cover">
                    <img id="image"
                        class="img hero__img"
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/hero_img_1.webp"
                        alt="img salade vinegrette"
                        loading="lazy" >
                    <i class="bi bi-arrow-left-circle-fill  hero__arrow-left"  onclick="slide(-1)" ></i>
                    <i class="bi bi-arrow-right-circle-fill hero__arrow-right" onclick="slide(1)"  ></i>
                    <div class="btn btn-cta">
                        <a class="text" href="carte.html">Regardez notre menu</a>
                    </div>
            </div>

    </section>


    <section class="section-bis section__index">
        <div class="container">
        <h3 class="title index__title">
            L'ambiance et le goût !
        </h3>

        <div class="index__presentation">
            <div class="index__présentation-row">
                <div class="index__presentation-txt index__text__1">
                    <span class="text text-black index__text__1">Venez découvrir notre cuisine</span>
                    <span class="text text-blue index__text__1">Eurasiatique</span>
                    <span class="text text-black index__text__1">, inspiré de plats traditionnels</span>
                    <span class="text text-blue index__text__1">Russes, Géorgiens, Tatares et Sibériens.<br /></span>
                    <span class="text text-black index__text__1">Au travers d'une cuisine</span>
                    <span class="text text-red index__text__1">faite maison</span>
                    <span class="text text-black index__text__1">par notre chef Andrey Nefedev, accompagné de sa femme Liudmila et leur fille Angelina</span>
                </div>
                <img class="img index__img"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/index_img_1.webp"
                    alt="L'équipe de restauration, dans l'ordre : La fille, le père et la mère"
                    loading="lazy" />
            </div>

            <div class="index__présentation-row">
                <img class="img index__img"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/index_img_2.webp"
                    alt="L'équipe de restauration, dans l'ordre : La fille, le père et la mère"
                    loading="lazy" />
                <div class="index__presentation-txt index__text__2">
                    <span class="text text-black index__text__2">Dans un cadre chaleureux,</span>
                    <span class="text text-red index__text__2">venez vous sentir comme à la datcha</span>
                    <span class="text text-black index__text__2">, goûtez les saveurs du</span>
                    <span class="text text-blue index__text__2">Caucase</span>
                    <span class="text text-black index__text__2">et voyagez lors d'une promenade culinaire qui vous fera visiter une partie du monde.<br />
                    Laissez vous porter par une gastronomie dépaysante et des boissons traditionnelles.<br /></span>
                    <span class="text text-red index__text__2">N'oubliez pas de réserver votre billet !</span>
                </div>
            </div>
        </div>
    </section>
        <h3 class="title index__title">
            Une cuisine authentique !
        </h3>

        <div class="container section index__middle__div">
            <div class="index__middle__carroussel">
                <img
                    class="img__carroussel"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/carroussel/plat1_1.webp"
                    alt="image d un plat"  />

           </div>
            <div class="index__middle__carroussel-description">
                <div class="index__middle__p">
                    <p class="index__middle__text">
                        Dans notre restaurant russe, chaque plat que nous vous servons est le résultat d’un savoir-faire authentique et d’une tradition culinaire transmise de génération en génération. Ici, tout est fait maison, chaque jour, avec patience et passion. Nous préparons nos recettes comme le veut la véritable gastronomie russe : à partir de produits frais, soigneusement choisis, et travaillés dans le respect des saveurs d’origine.<br><br>

                        Que vous veniez découvrir les spécialités russes pour la première fois ou retrouver des saveurs qui vous sont familières, nous mettons un point d’honneur à vous offrir une expérience authentique. Chez nous, vous pouvez savourer en toute confiance : tout est fait maison, chaque jour, avec passion et respect de la cuisine russe.
                    </p>
                </div>

            </div>
        </div>


        <h3 class="title index__title">
            Réservez dès maintenant !
        </h3>

        <div class="index__reservation">
            <div class="index__presentation-txt2">
                <span class="text text-red index__text__3">Connectez vous à vôtre compte</span>
                <span class="text text-black index__text__3">et réservez maintenant pour bénéficier de</span>
                <span class="text text-red index__text__3">points de fidélité ! <br /></span>
                <span class="text text-black index__text__3">Vous souhaitez voyager depuis chez vous ?</span>
                <span class="text text-red index__text__3">Connectez vous, commandez depuis le menu et venez chercher votre repas ! <br /></span>
            </div>
            <div class="calendar" id='calendar' style=" margin: auto;"></div>

        </div>

        <h3 class="title index__title title-left">
            Nous trouver :
        </h3>

        <div class="index__maps">
            <iframe class="maps__integration"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2686.233387929231!2d6.498762077095785!3d47.67988727119671!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47925b2c4b38882f%3A0xe963a76c9a7a5860!2sLa%20Place%20Rouge!5e0!3m2!1sfr!2sfr!4v1763370184635!5m2!1sfr!2sfr"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="index__maps__info">
                <span class="index__maps__text">06.37.58.78.50<br /></span>
                <span class="index__maps__text">51 rue Carnot<br /></span>
                <span class="index__maps__text">70200 Lure</span>
            </div>
        </div>

        <h3 class="title index__title title-left">
            Quelques Avis :
        </h3>
        <?php echo do_shortcode('[trustindex no-registration=google]'); ?>


    </section>

    <?php get_footer(); ?>