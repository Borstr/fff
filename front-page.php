<?php
  get_header();
?>
  
<section class="about container">
  <div class="about__container">
    <h1><?php the_title(); ?></h1>
    <?php the_content();?>
    <?php the_field('test'); ?>
  </div>
  <div class="about__container"></div>
</section>
<section class="info container">
  <h2>Ebooki, newslettery</h2>
  <div class="info__image-container">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/OKLADKA-NAWYKI.jpg" alt="" class="info__image">
  </div>
</section>
<section class="offer container">
  <p>
    UWAGA: Na pierwszym treningu bądź treningu jednorazowym przeprowadzane są testy funkcjonalne, 
    na podstawie których zostają wydane rekomendacje lub (w przypadku kontynuacji współpracy) dobrany odpowiedni plan treningowy.
  </p>
  <div class="offer__container">
    <ul class="offer__list">
      <li class="offer__single">
        <h3 class="offer__title">Pakiet BASIC</h3>
        <div class="offer__background">
          <p class="offer__price">520 zł</p>
          <p class="offer__description">4 treningi w miesiącu</p>
        </div>
        <div class="offer__color"></div>
      </li>
      <li class="offer__single">
        <h3 class="offer__title">Pakiet SILVER</h3>
        <div class="offer__background">
          <p class="offer__price">960 zł</p>
          <p class="offer__description">8 treningów w miesiącu</p>
        </div>
        <div class="offer__color"></div>
      </li>
      <li class="offer__single">
        <h3 class="offer__title">Pakiet GOLD</h3>
        <div class="offer__background">
          <p class="offer__price">1320 zł</p>
          <p class="offer__description">12 treningów w miesiącu</p>
        </div>
        <div class="offer__color"></div>
      </li>
    </ul>
  </div>
</section>

<?php
  get_footer();
?>