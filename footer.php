<footer>
    <?php dynamic_sidebar( 'footer-sidebar' ); ?> 


<div class="barre"></div>
<section class="footer">
<div class="footer_luma">
<img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="Logo">
<p> Lüma un univers où petits et <br> grands rêvent ensemble. </p>
<p>© 2025 - Compagnie Lüma</p>
</div>
<div class="footer_links">
<nav>
  <ul>
    <li><a href="<?php echo get_permalink(get_page_by_path('la_compagnie')->ID); ?>" data-key="la_compagnie">La compagnie</a></li>
    <li><a href="<?php echo get_permalink(get_page_by_path('spectacles')->ID); ?>" data-key="spectacles">Spectacles</a></li>
    <li><a href="<?php echo get_permalink(get_page_by_path('agenda')->ID); ?>" data-key="agenda">Agenda</a></li>
    <li><a href="<?php echo get_permalink(get_page_by_path('action_culturelle')->ID); ?>" data-key="action_culturelle">Action culturelle</a></li>
    <li><a href="mailto:compagnieluma@gmail.com?subject=Demande d'informations&body=Bonjour, j'aimerais obtenir plus de détails.">
    Contact
    </a></li>
</ul>
</nav>
</div>
<div class="footer_follow">
<p>Nous suivre: </p>
<p> Les coulisses et dernières nouvelles de Lüma </p>
<nav>
<a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/icon_facebook.png" alt="icone facebook"></a>
<a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/icon_instagram.png" alt="icone instagram"></a>
<a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/icon_youtube.png" alt="icone youtube"></a>
<?php 
$mentions_page = get_page_by_path('mentions-legales'); 
if ($mentions_page): ?>
    <li><a href="<?php echo get_permalink($mentions_page->ID); ?>">Mentions légales</a></li>
<?php endif; ?>
</nav>
</div>
</section>


  </footer>

  <!--<//?php wp_footer(); ?>  c pour la barre wordpress en haut -->

  </body>
</html>