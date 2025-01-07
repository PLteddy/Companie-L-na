<?php 
 /* Template Name: Contact */
?>
<?php get_header (); ?>
 <div>
     <section>
        <h1> Contact </h1>
        <p><?php the_field("email"); ?></p> <!--the field c pour afficher de la data du texte du json -->
        <h2> Coordonnées GPS </h2>
        <?php 
            $coordinates = get_field(selector:'coordinates');
        ?>
        <p> Latitude : <?php echo ($coordinates['latitude']) ?> </p>
        <p> Longitude : <?php echo ($coordinates['longitude']) ?> </p>
        <hr>
        <h2>Image de test</h2>
        <?php $image = get_field( selector :'image'); ?>
        <img src="<?php echo ($image ['sizes'['thumbnail']]);?>" alt='Image'> 
        <pre><?php var_dump($image); ?> </pre>

     </section>
   </div>

 
   <?php get_footer(); ?>