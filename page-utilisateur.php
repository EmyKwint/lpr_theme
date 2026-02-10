<?php get_header(); ?>

<section class="container user__page">
    <div class="user__content">
        <h2 class="user__title"><?php echo $_SESSION['user_name'] . ' ' . $_SESSION['user_lastname'] ?? 'Utilisateur'; ?></h2>
        <div class="user__head">
            <img class="user__avatar" src="<?php echo get_template_directory_uri(); ?>/assets/img/avatar.jpg" alt="Avatar de l'utilisateur">
            <div class="user__fidelity">
                <p class="font_s user__fidelity-points">Points de fidélité : <span class="user__fidelity-value">nombre</span></p>
                <p class="font_s user__fidelity-level">Niveau de fidélité : <span class="user__fidelity-value">(####------)</span></p>
            </div>
            <button class="btn user__fidelity-btn">Voir les avantages</button>
        </div>
    <a href="#" id="user-logout-link" class="btn user__logout-btn">Se déconnecter</a>
    </div>
</section>

<?php get_footer(); ?>
