<?php get_header (); ?>
 <div>
     <section>
        <h1> <?php the_title(); ?> </h1>
        <p> <?php  the_content();   ?></p>
        <script>
        console.log('Le js fonctionne');
        </script>  
     </section>
   </div>
 
   <?php get_footer(); ?>