<?php

get_header();
?>

    <main id="primary" class="site-main">
    <section class="banner">
    <div class="container">
        <video id="myVideo" class="background-video" style="position: absolute; z-index: 1;" loop autoplay muted>
            <source src="<?php echo get_template_directory_uri() . './assets/images/Studio+Koukaki-vidéo+header+sans+son+(1).mp4';?>" type="video/mp4">
        </video>
        <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>" alt="logo Fleurs d'oranger & chats errants" style="z-index: 2;">
    </div>
    </section>
    <section id="story" class="story">
    <h2><span class="titre word animatedFadeInUp fadeInUp one">L'histoire</span></h2>
        <article class="story__article">
            <p><?php echo get_theme_mod('story'); ?></p>
        </article>
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
        <article id="characters">
        <div class="main-character">
        <h3><span class="word animatedFadeInUp fadeInUp one">Les</span>&nbsp;<span class="word animatedFadeInUp fadeInUp two">personnages</span></h3>
        <div class="swiper">
            <?php get_template_part('/template-parts/swiper'); ?>
        </div>
        </div>
        </article>
        <article id="place">
            <div>
            <h3><span class="word animatedFadeInUp fadeInUp one">Le</span>&nbsp;<span class="word animatedFadeInUp fadeInUp two">Lieu</span></h3>
                <p><?php echo get_theme_mod('place'); ?></p>
            </div>
            <img id="animatedImage" src="wp-content/themes/foce-child/images/big_cloud.png" alt="Image animée">
            <img class="animationimage2" id="animatedImage" src="wp-content/themes/foce-child/images/big_cloud.png" alt="Image animée">
        </article>
        </section>
        <section id="studio">
        <h2><span class="word animatedFadeInUp fadeInUp one">Studio</span>&nbsp;<span class="word animatedFadeInUp fadeInUp two">Koukaki</span></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>        
        <section id="oscar">
        <?php get_template_part('/template-parts/oscar'); ?>
        </section>
    </main><!-- #main -->

<?php
get_footer();
