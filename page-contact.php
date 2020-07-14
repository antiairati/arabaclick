<?php
/*
Template Name: Page Contact
*/
?>

<?php get_header() ?>
<section class="f--section-primary">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="f--title f--font-primary f--color-primary"><?php the_title() ?></h1>
      </div>
    </div>
  </div>
</section>
<section class="f--section-third">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="f--font-third f--color-primary">Organiza: </h3>
        <p class="f--font-fourth f--color-primary"><?php the_field( 'organizador' ); ?></p>
      </div>
    </div>
  </div>
</section>
<section class="f--section-third">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="f--font-third f--color-primary">Email: </h3>
        <a href="#" class="f--font-fourth f--color-primary"><?php the_field( 'email_1' ); ?></a>
      </div>
    </div>
  </div>
</section>
<section class="f--section-third">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="f--font-third f--color-primary">Email: </h3>
        <a href="#" class="f--font-fourth f--color-primary"><?php the_field( 'email_2' ); ?></a>
      </div>
    </div>
  </div>
</section>
<?php get_footer() ?>
