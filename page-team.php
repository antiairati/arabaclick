<?php
/*
Template Name: Page Team
*/
?>

<?php get_header() ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<section class="f--section-primary">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <h1 class="f--title f--font-secondary"><?php the_title() ?></h1>
        <h2 class="f--tagline f--font-fourth"><?php the_excerpt() ?></h2>
      </div>
    </div>
  </div>
</section>
<section class="f--section-third">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="b--content">
          <?php the_content() ?>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="f--section-third">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="b--logo-wrapper">
          <div class="b--logo-wrapper__item">
            <img class="b--logo-wrapper__item__img" src="https://lh3.googleusercontent.com/proxy/N5lyRuAYbaA89Uxq8-Hvm7LOpCWcyDVIaFiwuGr0rQVwIzwlnWPmjCUNVp04gMp1tL9kd8rriQ2H-pvMJ5tpO230F__hqdMwLMPrAd2AwkqFLKPfQ6UkRw" alt="">
          </div>
          <div class="b--logo-wrapper__item">
            <img class="b--logo-wrapper__item__img" src="https://avoz.info/wp-content/uploads/2016/10/escuela-artes-oficios-vitoria-gasteiz.png" alt="">
          </div>
          <div class="b--logo-wrapper__item">
            <img class="b--logo-wrapper__item__img" src="https://www.sanchoelsabio.eus/wp-content/uploads/2015/06/logosanchoelsabio.png" alt="">
          </div>
          <div class="b--logo-wrapper__item">
            <img class="b--logo-wrapper__item__img" src="https://fotogasteiz.com/vitorianos/wp-content/uploads/2019/02/logo-asociacio%CC%81n-fotogasteiz-blanco-800x800.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer() ?>
