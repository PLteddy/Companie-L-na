<?php 
 /* Template Name: Accueil */
?>
<?php get_header (); ?>

<section>
 <div class="video-background">
    <video autoplay muted loop playsinline>
        <source src="<?php echo esc_url(get_field('home_background_video')); ?>" type="video/mp4">
        Votre navigateur ne supporte pas la lecture de cette vidéo.
    </video>
</div>

<div class="content-section">
    <h1>Bienvenue sur le site</h1>
    <p>Voici le contenu de votre section...</p>
</div>
     </section>

 
   <?php get_footer(); ?>