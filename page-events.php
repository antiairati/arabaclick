<?php
/*
Template Name: Page Events
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
      <?php
        $talleres_args = array(
          'post_type' => 'talleres',
          'posts_per_page' => 4,
          'oderby' => 'date',
          'order' => 'DESC',
        );
        $talleres_query = new WP_Query($talleres_args);
        while ($talleres_query -> have_posts()): $talleres_query -> the_post(); ?>
        <div class="col-lg-12">
          <a class="b--card-third" href="<?php the_permalink() ?>">
            <div class="b--card-third__info">
              <h4 class="b--card-third__info__title"><?php the_field( 'titulo_del_taller' ); ?></h4>
              <h5 class="b--card-third__info__author"><?php the_field( 'profesor_de_taller' ); ?></h5>
            </div>
            <div class="b--card-third__content">
              <p class="b--card-third__content__date"><?php the_field( 'fecha_del_taller' ); ?></p>
              <p class="b--card-third__content__time"><?php the_field( 'hora_del_taller' ); ?></p>
            </div>
          </a>
        </div>
      <?php endwhile; ?>
      <?php wp_reset_query() ?>
    </div>
  </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer() ?>
