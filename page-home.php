<?php
/*
Template Name: Page Home
*/
?>

<?php get_header() ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>

<div class="b--page-home">
  <div class="b--page-home__back-items">
    <img class="b--page-home__back-items__img" src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
  </div>
  <div class="b--page-home__front-items">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="b--page-home__front-items__wrapper">
            <h1 class="f--title f--font-secondary"><?php the_field( 'titulo' ); ?></h1>
            <h2  class="f--font-fourth"><?php the_field( 'fechas' ); ?></h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php endwhile; ?>
<?php endif; ?>


<?php get_footer() ?>
