<?php 
 /* Template Name: spectacles  */
?>
<?php get_header(); ?>

<div class="shows_header-background">
    <video autoplay muted loop playsinline>
        <source src="<?php echo esc_url(get_field('shows_header-background')); ?>" type="video/mp4">
        Votre navigateur ne supporte pas la lecture de cette vidéo.
    </video>
</div>

<h1 class="title_shows">Nos spectacles</h1>

<?php 
if (have_rows('the_show')): 
    $show = []; // Stocke les spectacles pour tri
    while (have_rows('the_show')): the_row();
        $show[] = [
            'photo' => get_sub_field('the_show-picture'),
            'titre' => get_sub_field('the_show-title'),
            'resume' => get_sub_field('the_show-resume'),
            'duree' => get_sub_field('the_show-duration'),
            'age' => get_sub_field('the_show-age'),
            'horaire' => get_sub_field('the_show-schedule'),
            'date' => get_sub_field('the_show-date'),
            'lien' => get_sub_field('the_show-link'),
            'location' => get_sub_field('the_show-location'),
        ];
    endwhile;
endif; // Fin de have_rows 
?>

<section class="the_shows">
    <div class="shows">
        <?php if (!empty($show)): ?>
            <?php foreach ($show as $spectacle): ?>
                <div class="show_container">
                    <div class="show_right">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/spirale.png" alt="spirale">
                        <div class="datannee">
                            <p><?php echo esc_html($spectacle['date']); ?></p> 
                            <div class="line-separator"></div>
                        </div>
                    </div>
                    <div class="show_picture">
                        <img src="<?php echo esc_url($spectacle['photo']); ?>" alt="Photo du spectacle à la une">
                        <?php if (isset($spectacle['lien']['url'])) : ?>
                            <button onclick="window.location.href='<?php echo esc_url($spectacle['lien']['url']); ?>'" target="<?php echo esc_attr($spectacle['lien']['target']); ?>">
                                Voir plus de détails
                            </button>
                        <?php else : ?>
                            <p>Le lien n'est pas disponible.</p>
                        <?php endif; ?>
                    </div>
                    <div class="show_details">
                        <p class="show_duration">Durée: <?php echo esc_html($spectacle['duree']); ?></p>
                        <div class="show_information">
                            <h3 class="show_title"><?php echo esc_html($spectacle['titre']); ?></h3>
                            <p class="show_resume"><?php echo esc_html($spectacle['resume']); ?></p>
                            <p class="show_age">Âge: <?php echo esc_html($spectacle['age']); ?></p>
                            <p class="show_schedule"><?php echo esc_html($spectacle['horaire']); ?></p>
                            <p class="show_location"><?php echo esc_html($spectacle['location']); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="no_shows">
                <h2>Il n'y a pas de spectacles pour l'instant.</h2>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
