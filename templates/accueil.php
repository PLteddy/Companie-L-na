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


<section class="headline-show" id="next-section">
    <h2>Spectacles à la une</h2>
    <div class="show_container">
    <div class="show_picture">
        <img src="<?php echo esc_url(get_field('headline_show_picture')); ?>" alt="Photo du spectacles à la une">
        <button>Voir plus de détails</button>
    </div>

    <div class="show_details">
        <p class="show_duration">Durée: 1h30</p>
        <div class="show_information">
            <h3 class="show_title">Petite peur</h3>
            <p class="show_resume">
                Venez et plongez dans des histoires pleines de douceur et de réflexion. Un petit spectacle parfait pour les petits et les grands.
            </p>
            <p class="show_schedule">20h00 - 21h00</p>
            <p class="show_location">Malraux, Chambéry</p>
        </div>
    </div>
</div>
</section>

<section class="home_company"> 
    <h2>La compagnie</h2>
    <section id="tranding">
        <div class="container">
            <div class="swiper tranding-slider">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/giphy.gif" alt="Animation gif" />
                        </div>
                        <div class="tranding-slide-content">
                            <h2 class="slider_title">Lien</h2>
                            <p>Renforcer la complicité entre enfants et parents</p>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/giphy.gif" alt="Animation gif" />
                        </div>
                        <div class="tranding-slide-content">
                            <h2 class="slider_title">Ünivers</h2>
                            <p>Plonger dans des mondes doux et sensibles</p>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/giphy.gif" alt="Animation gif" />
                        </div>
                        <div class="tranding-slide-content">
                            <h2 class="slider_title">Marionnette</h2>
                            <p>Donne vie à des personnages touchants et magiques</p>
                        </div>
                    </div>
                    <!-- Slide 4 -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/giphy.gif" alt="Animation gif" />
                        </div>
                        <div class="tranding-slide-content">
                            <h2 class="slider_title">Animations</h2>
                            <p>Offrir des instants joyeux et interactifs</p>
                        </div>
                    </div>
                    <!-- Slide 5 -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/giphy.gif" alt="Nouvelle animation gif" />
                        </div>
                        <div class="tranding-slide-content">
                            <h2 class="slider_title">Nouveau</h2>
                            <p>Un contenu original et captivant</p>
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


            

            <div class="tranding-slider-control">
              <div class="swiper-button-prev slider-arrow">
                <ion-icon name="arrow-back-outline"></ion-icon>
              </div>
              <div class="swiper-button-next slider-arrow">
                <ion-icon name="arrow-forward-outline"></ion-icon>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </section>
</section>



<section class="video_culturelle">
    <video autoplay muted loop playsinline class="background-video2">
    <source src="<?php echo esc_url(get_field('home_background_video')); ?>" type="video/mp4">
        Votre navigateur ne supporte pas la lecture de cette vidéo.
    </video>
    <button class="discover-button">Découvrir</button>
</section>




</section>
<script> document.querySelector('.scroll-arrow').addEventListener('click', function(e) {
    e.preventDefault();
    document.querySelector('#next-section').scrollIntoView({ behavior: 'smooth' });
}); </script>


   <?php get_footer(); ?>