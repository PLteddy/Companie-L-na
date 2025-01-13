<footer>
    <?php dynamic_sidebar( 'footer-sidebar' ); ?> 
    <section class="footer">




<p> Lüma un univers où petits et grands rêvent ensemble. </p>
<p>© 2025 - Compagnie Lüma</p>

<nav>
    <a href="<?php echo get_permalink(get_page_by_path('contact')->ID); ?>" data-key="contact">Contact</a>
    <a href="<?php echo get_permalink(get_page_by_path('la_compagnie')->ID); ?>" data-key="la_compagnie">La compagnie</a>
    <a href="<?php echo get_permalink(get_page_by_path('spectacles')->ID); ?>" data-key="spectacles">Spectacles</a>
    <a href="<?php echo get_permalink(get_page_by_path('agenda')->ID); ?>" data-key="agenda">Agenda</a>
</nav>
</section>

  </footer>

  <?php wp_footer(); ?> <!-- c pour la barre wordpress en haut -->

  </body>
</html>