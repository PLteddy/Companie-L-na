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
    <div class="menu-item">La compagnie</div>
    <div class="menu-item">Les spectacles</div>
    <div class="logo-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="Logo">
        <span>Chambéry et alentours</span>
    </div>
    <div class="menu-item">Agenda</div>
    <div class="menu-item">Contact</div>
</div>
</section>
    </header>
    