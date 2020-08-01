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
      <?php
        $exposiciones_args = array(
          'post_type' => 'exposiciones',
          'posts_per_page' => 15,
          'oderby' => 'date',
          'order' => 'DESC',
        );
        $exposiciones_query = new WP_Query($exposiciones_args);
        while ($exposiciones_query -> have_posts()): $exposiciones_query -> the_post(); ?>
        <div class="col-lg-4">
          <a class="b--card-secondary" href="<?php the_permalink() ?>">
            <?php $imagen_de_la_exposicion = get_field( 'imagen_de_la_exposicion' ); ?>
            <?php if ( $imagen_de_la_exposicion ) : ?>
              <div class="b--card-secondary__img-wrapper">
                <img class="b--card-secondary__img-wrapper__img" src="<?php echo esc_url( $imagen_de_la_exposicion['url'] ); ?>" alt="<?php echo esc_attr( $imagen_de_la_exposicion['alt'] ); ?>" />
              </div>
            <?php endif; ?>
            <p class="b--card-secondary__text"><?php the_field( 'lugar_de_la_exposicion' ); ?></p>
          </a>
        </div>
      <?php endwhile; ?>
      <?php wp_reset_query() ?>
    </div>
  </div>
</section>
<section class="f--section-third">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <h3 class="f--title f--font-fourth f--color-third"><?php the_field( 'titulo_del_form' ); ?></h3>
        <div class="b--content f--title">
          <?php the_field( 'contenido_del_form' ); ?>
        </div>
        <?php echo do_shortcode( '[contact-form-7 id="333" title="Exposiciones"]' ); ?>
      </div>
    </div>
  </div>
</section>

<?php endwhile; ?>
<?php endif; ?>
<?php get_footer() ?>
