<?php
/*
Template Name: Page Exhibition
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
      <div class="col-lg-10 offset-lg-1">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2925.483866068533!2d-2.6748412844503062!3d42.84151527915753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4fc271ec423353%3A0xb80eebb3710f0192!2sVitoria%20-%20Gasteiz!5e0!3m2!1ses!2ses!4v1593295467768!5m2!1ses!2ses" width="100%" height="400px" frameborder="0" style="border:0px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>
  </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer() ?>
