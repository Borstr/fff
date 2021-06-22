<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
  <?php
    wp_head();
  ?>
</head>
<body>
  <nav class="nav">
    <!-- <ul class="nav__menu">
      <li><a href="" class="nav__menu-link">Strona główna</a></li>
      <li><a href="" class="nav__menu-link">O mnie</a></li>
      <li><a href="" class="nav__menu-link">Podcast</a></li>
      <li><a href="" class="nav__menu-link">E-book</a></li>
      <li><a href="" class="nav__menu-link">Oferta</a></li>
      <li><a href="" class="nav__menu-link">Logo</a></li>
      <li><a href="" class="nav__menu-link">Aktualności</a></li>
      <li><a href="" class="nav__menu-link">Referencje</a></li>
      <li><a href="" class="nav__menu-link">FAQ</a></li>
      <li><a href="" class="nav__menu-link">Kontakt</a></li>
    </ul> -->
    <?php 
      wp_nav_menu(array(
        'menu_class' => 'nav__menu'
      ));
    ?>
  </nav>
  <main>