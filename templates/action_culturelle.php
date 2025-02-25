<?php 
 /* Template Name: Action culturelle */
?>
<?php get_header (); ?>
<div class="shows_header-background">
    <video autoplay muted loop playsinline>
        <source src="<?php echo esc_url(get_field('action_background')); ?>" type="video/mp4">
        Votre navigateur ne supporte pas la lecture de cette vidéo.
    </video>        
</div>

<h1 class="actionh1"><?php the_title(); ?></h1>
<section class="action">

<div class="one"> 
    <?php 
        //$action_groupe = get_field("action_one");
        //echo '<pre>'; 
        //var_dump($action_groupe);
        //echo '</pre>';
    ?>
    <?php 
        if (have_rows('action_one')):
        $one = []; // Stocke les spectacles pour tri
        while (have_rows('action_one')): the_row();
            $one[] = [
                'title' => get_sub_field('action_one-title'), // Titre
                'text' => get_sub_field('action_one-text'), // Contenu WYSIWYG
            ];
        endwhile;
    endif;
    if (!empty($one)):
    ?>
    <h2><?php echo esc_html($one[0]['title']); ?></h2>
    <div><?php echo wp_kses_post($one[0]['text']); ?></div>
    <?php
    endif; 
    ?>
</div>
<?php 
        //$action_groupe = get_field("action_two");
        //echo '<pre>'; 
        //var_dump($action_groupe);
        //echo '</pre>';
    ?>
<?php 
$two = []; // Tableau vide pour stocker les éléments
if (have_rows('action_two')): 
    while (have_rows('action_two')): the_row();
        $two[] = [
            'title' => get_sub_field('action_two-title'),
            'text' => get_sub_field('action_two-text'),
            'image' => get_sub_field('action_two-image'),
        ];
    endwhile;
endif;
// Vérifiez si le tableau n'est pas vide
if (!empty($two)):
?>


    <div class="two">
    <div class="wave"></div>
        <div class="two_text">
            <h2><?php echo esc_html($two[0]['title']); ?></h2>
            <p><?php echo wp_kses_post($two[0]['text']); ?></p>
        </div>
        <div class="two_img">
        <img src="<?php 
        $action_two = get_field('action_two');
        echo $action_two['action_two-image']['sizes']['large'];
        ?>">
        </div>
    </div>
    <?php endif; ?>


    <?php 
$three = []; // Tableau vide pour stocker les éléments
if (have_rows('action_three')): 
    while (have_rows('action_three')): the_row();
        $three[] = [
            'title' => get_sub_field('action_three-title'),
            'text' => get_sub_field('action_three-text'),
            'image' => get_sub_field('action_three-image'),
        ];
    endwhile;
endif;
// Vérifiez si le tableau n'est pas vide
if (!empty($three)):
?>
    <div class="three">
        <div class="two_img">
        <img src="<?php 
        $action_three = get_field('action_two');
        echo $action_three['action_two-image']['sizes']['large'];
        ?>">
        </div>
        <div class="two_text">
            <h2><?php echo esc_html($three[0]['title']); ?></h2>
            <p><?php echo wp_kses_post($three[0]['text']); ?></p>
        </div>
    </div>
    <?php endif; ?>

    <?php 
$four = []; // Tableau vide pour stocker les éléments
if (have_rows('action_four')): 
    while (have_rows('action_four')): the_row();
        $four[] = [
            'title' => get_sub_field('action_four-title'),
            'text' => get_sub_field('action_four-text'),
            'image' => get_sub_field('action_four-image'),
        ];
    endwhile;
endif;
// Vérifiez si le tableau n'est pas vide
if (!empty($four)):
?>

    <div class="two">
    <div class="wave"></div>
        <div class="two_text">
            <h2><?php echo esc_html($four[0]['title']); ?></h2>
            <p><?php echo wp_kses_post($four[0]['text']); ?></p>
        </div>
        <div class="two_img">
        <img src="<?php 
        $action_two = get_field('action_four');
        echo $action_two['action_four-image']['sizes']['large'];
        ?>">
        </div>
    </div>
    <?php endif; ?>


    <div class="one"> 
    <?php 
        if (have_rows('action_contact')):
            $contact = []; // Stocke les spectacles pour tri
            while (have_rows('action_contact')): the_row();
                $contact[] = [
                    'title' => get_sub_field('action_contact-title'), // Titre
                    'text' => get_sub_field('action_contact-text'), // Contenu WYSIWYG
                    'email' => get_sub_field('contact_email'), // email
                ];
            endwhile;
        endif;

        if (!empty($contact)):
    ?>
        <h2><?php echo esc_html($contact[0]['title']); ?></h2>
        <div><?php echo wp_kses_post($contact[0]['text']); ?></div>
        
        <?php if (!empty($contact[0]['email'])): ?>
            <button class="contact-button"><a href="mailto:<?php echo esc_attr($contact[0]['email']); ?>?subject=Demande d'informations&body=Bonjour, j'aimerais obtenir plus de détails." 
               class="contact-button">
                C’est par ici !
            </a></button>
        <?php else: ?>
            <button class="contact-button disabled" disabled>Contact indisponible</button>
        <?php endif; ?>
    <?php 
        endif; 
    ?>
</div>

</section>
<?php get_footer(); ?>