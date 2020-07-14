Ω<?php
/*
Template Name: Page Next Edition
*/
?>

<?php get_header() ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<section class="f--section-primary">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="f--title f--font-primary f--color-primary"><?php the_title() ?></h1>
        <h2 class="f--tagline f--font-fourth f--color-primary"><?php the_excerpt() ?></h2>
      </div>
    </div>
  </div>
</section>
<section class="f--section-third">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="f--img-wrapper">
          <img class="f--img-wrapper__img" src="https://ideolab.com/file/2019/06/keynote1.jpg" alt="">
        </div>
        <div class="f--title text-center">
          <h3 class="f--font-secondary f--color-primary">1-18 Octubre 2020</h3>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="f--section-third">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-2">
        <div class="b--content f--color-primary">
          <?php the_content() ?>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="f--section-third">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        <div class="row">
          <div class="col-lg-5">
            <a href="#" class="b--card-primary">
              <h4 class="b--card-primary__title">Actividades</h4>
              <p class="b--card-primary__subtitle">Conoce las actividades que vamos a llevar a cabo durante el encuentro de fotografía con móvil</p>
              <span class="b--card-primary__hash">#aprende</span>
            </a>
          </div>
          <div class="col-lg-5">
            <a href="#" class="b--card-primary">
              <h4 class="b--card-primary__title">Exposiciones</h4>
              <p class="b--card-primary__subtitle">Conoce las actividades que vamos a llevar a cabo durante el encuentro de fotografía con móvil</p>
              <span class="b--card-primary__hash">#observa</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer() ?>
