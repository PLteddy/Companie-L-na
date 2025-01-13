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
<div class="hero">
    <h1>Des spectacles où marionnettes et musique se rencontrent</h1>
    <a href="<?php echo get_permalink(get_page_by_path('spectacles')->ID); ?>" data-key="spectacles"><button>Voir nos spectacles</button></a>
    <a href="#next-section" class="scroll-arrow">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/flèches.gif" alt="flèches">
</a>
</div>
     </section>

<section class="headline shows" id="next-section">
<h2> Spectacles à la une </h2>



</section>
<script> document.querySelector('.scroll-arrow').addEventListener('click', function(e) {
    e.preventDefault();
    document.querySelector('#next-section').scrollIntoView({ behavior: 'smooth' });
}); </script>


   <?php get_footer(); ?>