<!DOCTYPE html>
<html lang="en">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&display=swap" rel="stylesheet">
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <section class="header">
    <div class="header-container">
    <div class="menu-item"><a href="<?php echo get_permalink(get_page_by_path('la_compagnie')->ID); ?>" data-key="la_compagnie">La compagnie</a></div>
    <div class="menu-item"><a href="<?php echo get_permalink(get_page_by_path('spectacles')->ID); ?>" data-key="spectacles">Spectacles</a></div>
    <div class="logo-container">
      <a href="<?php echo get_permalink(get_page_by_path('accueil')); ?>">
      <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="Logo">
      </a>
        <p>Chambéry et alentours</p>
    </div>
    <div class="menu-item"><a href="<?php echo get_permalink(get_page_by_path('agenda')->ID); ?>" data-key="agenda">Agenda</a></div>
    <div class="menu-item"><a href="<?php echo get_permalink(get_page_by_path('action_culturelle')->ID); ?>" data-key="action_culturelle">Action culturelle</a></div>
</div>
</section>
    </header>
    