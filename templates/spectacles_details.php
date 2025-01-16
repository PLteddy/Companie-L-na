<?php 
 /* Template Name: spectacles_details */
?>
<?php get_header (); ?>

 <div class="blue_header-background"></div>
     <section class="shows_details">
     <?php $pictures_carousel = get_field("pictures_carousel");
    //echo '<pre>';
   //var_dump($pictures_carousel);
    //echo '</pre>';
    ?>
     <section id="tranding">
        <div class="shows_details-container">
            <div class="swiper tranding-slider">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                        <img src=<?php echo $pictures_carousel["carousel_picture-1"];?> alt="Animation Gif">
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                        <img src=<?php echo $pictures_carousel["carousel_picture-2"];?> alt="Animation Gif">
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                        <img src=<?php echo $pictures_carousel["carousel_picture-3"];?> alt="Animation Gif">
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

   <div class="shows_details-container">
        <div class="shows_details-description">
            <h2 class="shows_details-title">Description :</h2>
         <p class="shows_details-text">
          <?php 
            // Récupérer le champ ACF 'show_description'
         $show_description = get_field('show_description');
    
         // Vérifier et afficher le contenu
         if (!empty($show_description)) {
            echo $show_description;
         } else {
            echo 'Aucune description disponible pour ce spectacle.';
         }
         ?>
      </p>
        </div>
        <div class="shows_details-details">
            <div class="shows_details-detail-item">
                  <img class="shows_details-icon" src="<?php echo get_template_directory_uri(); ?>/assets/icon_age.png" alt="icone age">
                <span class="shows_details-detail-text">
                <?php 
                  // Récupérer le champ ACF 'show_description'
                  $age_range= get_field('age_range');
   
                  // Vérifier et afficher le contenu
                  if (!empty($age_range)) {
                     echo $age_range;
                  } else {
                     echo 'Aucun age disponible pour ce spectacle.';
                  }
                  ?>
                </span>
            </div>
            <div class="shows_details-detail-item">
            <img class="shows_details-icon" src="<?php echo get_template_directory_uri(); ?>/assets/icon_duration.png" alt="icone durée">
                <span class="shows_details-detail-text">
                <?php 
                  // Récupérer le champ ACF 'show_description'
                  $duration= get_field('duration');
   
                  // Vérifier et afficher le contenu
                  if (!empty($duration)) {
                     echo $duration;
                  } else {
                     echo 'Aucune durée disponible pour ce spectacle.';
                  }
                  ?>
                </span>
            </div>
            <div class="shows_details-detail-item shows_details-link">
                <img class="shows_details-icon" src="<?php echo get_template_directory_uri(); ?>/assets/icon_specification.png" alt="icone fiche technique">
                <?php 
               $technical_sheet = get_field('technical_sheet');
    
                if (!empty($technical_sheet)) {
               echo '<a class="shows_details-pdf-link" href="' . esc_url($technical_sheet) . '">Fiche technique (.pdf)</a>';
               } else {
               echo 'Aucune fiche technique disponible pour ce spectacle.';
               }
               ?>
            </div>
        </div>
    </div>
    </section>

 
   <?php get_footer(); ?>