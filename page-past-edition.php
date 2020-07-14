<?php
/*
Template Name: Page Past Edition
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
      <div class="col-lg-6">
        <div class="b--content f--color-primary">
          <?php the_content() ?>
        </div>
      </div>
      <div class="col-lg-5 offset-lg-1">
        <div class="f--img-wrapper">
          <img class="f--img-wrapper__img" src="https://ideolab.com/file/2019/06/keynote1.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
<section class="f--section-third">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="f--img-wrapper">
          <img class="f--img-wrapper__img" src="https://ideolab.com/file/2019/06/arabaclick_expo1-1116x744.jpg" alt="">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="f--img-wrapper">
          <img class="f--img-wrapper__img" src="https://pbs.twimg.com/media/D8xYp1EXoAAxUnI.jpg" alt="">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="f--img-wrapper">
          <img class="f--img-wrapper__img" src="https://ideolab.com/file/2019/06/mockup_cartel.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer() ?>
