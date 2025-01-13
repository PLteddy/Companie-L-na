<footer>
    <?php dynamic_sidebar( 'footer-sidebar' ); ?> 
    <section class="footer">

<div class="footer_luma">
<img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="Logo">
<p> Lüma un univers où petits et grands rêvent ensemble. </p>
<p>© 2025 - Compagnie Lüma</p>
</div>
<div class="lien_pages">
<nav>
  <ul>
    <li><a href="<?php echo get_permalink(get_page_by_path('contact')->ID); ?>" data-key="contact">Contact</a></li>
    <li><a href="<?php echo get_permalink(get_page_by_path('la_compagnie')->ID); ?>" data-key="la_compagnie">La compagnie</a></li>
    <li><a href="<?php echo get_permalink(get_page_by_path('spectacles')->ID); ?>" data-key="spectacles">Spectacles</a></li>
    <li><a href="<?php echo get_permalink(get_page_by_path('agenda')->ID); ?>" data-key="agenda">Agenda</a></li>
</ul>
</nav>
</div>



</section>
  </footer>

  <?php wp_footer(); ?> <!-- c pour la barre wordpress en haut -->

  </body>
</html>