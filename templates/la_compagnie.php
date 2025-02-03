<?php 
 /* Template Name: la_compagnie */
?>
<?php get_header (); ?>
<div class="blue_header-background"></div>
     <section class="company">
      <div class="c_one">
      <?php 
        //$action_groupe = get_field("c_one");
        //echo '<pre>'; 
        //var_dump($action_groupe);
        //echo '</pre>';
    ?>
    <?php 
        if (have_rows('c_one')):
        $c_one = []; // Stocke les spectacles pour tri
        while (have_rows('c_one')): the_row();
            $c_one[] = [
                'title' => get_sub_field('c_one-title'), // Titre
                'text' => get_sub_field('c_one-text'), // Contenu WYSIWYG
            ];
        endwhile;
    endif;
    if (!empty($c_one)):
    ?>
    <h1><?php echo esc_html($c_one[0]['title']); ?></h1>
    <div><?php echo wp_kses_post($c_one[0]['text']); ?></div>
    <?php
    endif; 
    ?>
      </div>
      <?php 
        //$action_groupe = get_field("c_two");
        //echo '<pre>'; 
        //var_dump($action_groupe);
        //echo '</pre>';
    ?>
<div class="c_two">
    <?php 
    $c_two = get_field('c_two'); // Récupère les données principales du groupe
    
    if ($c_two): ?>
        <div class="c_two-left">
            <img src="<?php echo esc_url($c_two['c_two-image']['sizes']['large']); ?>">
            <h2><?php echo esc_html($c_two['c_two-title']); ?></h2>
            <p><?php echo wp_kses_post($c_two['c_two-subtitle']); ?></p>
        </div>
        <div class="c_two-right">
            <p><?php echo wp_kses_post($c_two['c_two-text']); ?></p>
        </div>
    <?php endif; ?>
</div>
<img  class="wave" src="<?php echo get_template_directory_uri(); ?>/assets/wave.svg" alt="wave" class="wave">
<?php 
      //$action_groupe = get_field("c_three");
        //echo '<pre>'; 
        //var_dump($action_groupe);
        //echo '</pre>';
    ?>
<div class="c_three">
    <?php 
    $c_three = get_field('c_three'); // Récupère les données principales du groupe
    
    if ($c_three): ?>
            <div class="c_three-right">
            <p><?php echo wp_kses_post($c_three['c_three-text']); ?></p>
        </div>
        <div class="c_three-left">
            <img src="<?php echo esc_url($c_three['c_three-image']['sizes']['large']); ?>">
            <h2><?php echo esc_html($c_three['c_three-title']); ?></h2>
            <p><?php echo wp_kses_post($c_three['c_three-subtitle']); ?></p>
        </div>
    <?php endif; ?>
</div>
     </section>
   <?php get_footer(); ?>