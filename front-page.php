<?php 
 /* Template Name: Accueil */
?>
<?php get_header (); ?>
<div class="video-background">
    <video autoplay muted loop playsinline>
        <source src="<?php echo esc_url(get_field('home_background_video')); ?>" type="video/mp4">
        Votre navigateur ne supporte pas la lecture de cette vidéo.
    </video>
</div>
    <div class="hero">
        <h1>Des spectacles où marionnettes et musique se rencontrent</h1>
        <a href="<?php echo get_permalink(get_page_by_path('spectacles')->ID); ?>" data-key="spectacles">
            <button>Voir nos spectacles</button>
        </a>
        <a href="#headline-show" class="scroll-arrow">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/flèches.gif" alt="flèches">
        </a>
    </div>
    <?php 
        //$headline = get_field("headline_show");
        //echo '<pre>'; 
        //var_dump($headline);
        //echo '</pre>';
    ?>
    <?php 
if (have_rows('headline_show')): 
    $headline_show = []; // Stocke les spectacles pour tri
    while (have_rows('headline_show')): the_row();
        $headline_show[] = [
            'photo' => get_sub_field('headline_picture'),
            'titre' => get_sub_field('headline_title'),
            'resume' => get_sub_field('headline_resume'),
            'duree' => get_sub_field('headline_duration'),
            'horaire' => get_sub_field('headline_schedule'),
            'lien' => get_sub_field('headline_link'),
            'location' => get_sub_field('headline_location'),
        ];
    endwhile;
endif; // Fin 
?>

<section class="headline-show" id="next-section"> 
    <h2>Spectacles à la une</h2>
    <?php if (!empty($headline_show)): ?>
            <?php foreach ($headline_show as $headline_show): ?>
                <div class="show_container">
                    <div class="show_picture">
                        <img src="<?php echo esc_url($headline_show['photo']); ?>" alt="Photo du spectacle à la une">
                        <?php if (isset($headline_show['lien']['url'])) : //Pour le lien ici ça doit retourné un tableau pas un url?> 
                            <button onclick="window.location.href='<?php echo esc_url($headline_show['lien']['url']); ?>'" target="<?php echo esc_attr($headline_show['lien']['target']); ?>">
                                Voir plus de détails
                            </button>
                        <?php else : ?>
                            <p>Le lien n'est pas disponible.</p>
                        <?php endif; ?>
                    </div>
                    <div class="show_details">
                        <p class="show_duration">Durée: <?php echo esc_html($headline_show['duree']); ?></p>
                        <div class="show_information">
                            <h3 class="show_title"><?php echo esc_html($headline_show['titre']); ?></h3>
                            <p class="show_resume"><?php echo esc_html($headline_show['resume']); ?></p>
                            <p class="show_schedule"><?php echo esc_html($headline_show['horaire']); ?></p>
                            <p class="show_location"><?php echo esc_html($headline_show['location']); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="no_shows">
                <h2>Il n'y a pas de spectacles pour l'instant.</h2>
            </div>
        <?php endif; ?>
</section>

<?php $gifs = get_field("gifs");
    // echo '<pre>';
   // var_dump($gifs);
    //echo '</pre>';
    ?>
<?php $carousel = get_field("home_carousel");
      echo '<pre>';
    var_dump($carousel);
    echo '</pre>';
    ?>

<section class="home_company">  <!-- le css de toute la section est dans slider.css -->
    <h2>La compagnie</h2>
    <section id="tranding">
        <div class="container">
            <div class="swiper tranding-slider">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                        <img src=<?php echo $gifs["gif_link"];?> alt="Animation Gif">
                        </div>
                        <div class="tranding-slide-content">
                            <h2 class="slider_title">Lien</h2>
                            <p>Créer des connexions entre enfants, enseignants et parents.</p>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                        <img src=<?php echo $gifs["gif_universe"];?> alt="Animation Gif">

                        </div>
                        <div class="tranding-slide-content">
                            <h2 class="slider_title">Ünivers</h2>
                            <p>Explorer un monde où les arts se rencontrent – musique, marionnette, cirque.</p>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                        <img src=<?php echo $gifs["gif_puppet"];?> alt="Animation Gif">

                        </div>
                        <div class="tranding-slide-content">
                            <h2 class="slider_title">Merveilleux</h2>
                            <p>Plonger dans un univers sensible et poétique.</p>
                        </div>
                    </div>
                    <!-- Slide 4 -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                        <img src=<?php echo $gifs["gif_animation"];?> alt="Animation Gif">

                        </div>
                        <div class="tranding-slide-content">
                            <h2 class="slider_title">Artistique</h2>
                            <p>Utiliser le pouvoir de l'art pour aborder émotions et thématiques sensibles.</p>
                        </div>
                    </div>
                    <!-- Slide 5 -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                        <img src=<?php echo $gifs["gif_luma"];?> alt="Animation Gif">
                        </div>
                        <div class="tranding-slide-content">
                            <h2 class="slider_title"></h2>
                            <p>Plongez dans l’univers poétiques de Lüma</p>
                        </div>
                    </div>
                </div>
                <!-- Pagination and Navigation -->
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
</section>



<section class="video_culturelle">
    <video autoplay muted loop playsinline class="background-video2">
    <source src="<?php echo esc_url(get_field('home_video-action')); ?>" type="video/mp4">
        Votre navigateur ne supporte pas la lecture de cette vidéo.
    </video>
    <h2>Action culturelle </h2>
    <button class="discover-button">Découvrir</button>
</section>




</section>
<script> document.querySelector('.scroll-arrow').addEventListener('click', function(e) {
    e.preventDefault();
    document.querySelector('#next-section').scrollIntoView({ behavior: 'smooth' });
}); </script>


   <?php get_footer(); ?>