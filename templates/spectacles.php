<?php 
 /* Template Name: spectacles  */
?>
<?php get_header (); ?>

<div class="shows_header-background">
<video autoplay muted loop playsinline>
        <source src="<?php echo esc_url(get_field('shows_header-background')); ?>" type="video/mp4">
        Votre navigateur ne supporte pas la lecture de cette vidéo.
    </video>
</div>
<h1 class="title_shows"> Nos spectacles </h1>
     <section class="shows"> <!-- le css de ça est dans accueil.css -->
        <div class="show_container">
    <div class="show_picture">
        <img src="<?php echo esc_url(get_field('show_picture')); ?>" alt="Photo du spectacles à la une">
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

 
   <?php get_footer(); ?>