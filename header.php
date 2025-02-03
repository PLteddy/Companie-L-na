<!DOCTYPE html>
<html lang="en">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&display=swap" rel="stylesheet">

<head>
  <meta charset="utf-8">
  <title>Compagnie Lüma – Offrez à vos enfants un moment inoubliable</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="description" content="Découvrez Lüma, une compagnie de spectacles spécialisée dans les marionnettes et les animations pour enfants, proposant des activités captivantes dans le bassin chambérien.">
  
  <meta name="keywords" content="spectacle marionnettes, animation enfants, théâtre de marionnettes, compagnie Lüma, divertissement famille, spectacle jeune public, bassin chambérien">
  
  <meta name="author" content="Compagnie Lüma">
  
  <meta property="og:title" content="Compagnie Lüma – Offrez à vos enfants un moment inoubliable">
  <meta property="og:description" content="Des spectacles de marionnettes enchanteurs pour enfants et familles dans le bassin chambérien.">
  <meta property="og:url" content="https://www.compagnie-luma.fr/">
  <meta property="og:type" content="website">


  <?php wp_head(); ?>
</head>


<body>
  <header>
    <!-- Header version Desktop -->
    <section class="header header-desktop">
      <div class="header-container">
        <div class="menu-item">
          <a href="<?php echo get_permalink(get_page_by_path('la_compagnie')->ID); ?>" data-key="la_compagnie">La compagnie</a>
        </div>
        <div class="menu-item">
          <a href="<?php echo get_permalink(get_page_by_path('spectacles')->ID); ?>" data-key="spectacles">Spectacles</a>
        </div>
        <div class="logo-container">
          <a href="<?php echo get_permalink(get_page_by_path('accueil')); ?>">
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="Logo">
          </a>
          <p>Chambéry et alentours</p>
        </div>
        <div class="menu-item">
          <a href="<?php echo get_permalink(get_page_by_path('agenda')->ID); ?>" data-key="agenda">Agenda</a>
        </div>
        <div class="menu-item">
          <a href="<?php echo get_permalink(get_page_by_path('action_culturelle')->ID); ?>" data-key="action_culturelle">Action culturelle</a>
        </div>
      </div>
    </section>

    <!-- Header version Mobile -->
  <div class="menu">
    <a class="trigger" href="#">&equiv;</a>
    <a class="close" href="#">&times;</a>
  </div>
  <div class="drop-down">
    <nav role="navigation">
      <h1>- Navigation -</h1>
      <div class="logo-container">
          <a href="<?php echo get_permalink(get_page_by_path('accueil')); ?>">
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="Logo">
          </a>
          <p>Chambéry et alentours</p>
        </div>
      <ul>
        <li><a href="<?php echo get_permalink(get_page_by_path('la_compagnie')->ID); ?>">La compagnie</a></li>
        <li><a href="<?php echo get_permalink(get_page_by_path('spectacles')->ID); ?>">Spectacles</a></li>
        <li><a href="<?php echo get_permalink(get_page_by_path('agenda')->ID); ?>">Agenda</a></li>
        <li><a href="<?php echo get_permalink(get_page_by_path('action_culturelle')->ID); ?>">Action culturelle</a></li>
      </ul>
    </nav>
  </div>

