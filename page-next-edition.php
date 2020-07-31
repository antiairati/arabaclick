<?php
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
      <div class="col-lg-6 offset-lg-3">
        <div class="f--img-wrapper">
          <?php $foto_de_la_proxima_edicion = get_field( 'foto_de_la_proxima_edicion' ); ?>
          <?php if ( $foto_de_la_proxima_edicion ) : ?>
            <img class="f--img-wrapper__img" src="<?php echo esc_url( $foto_de_la_proxima_edicion['url'] ); ?>" alt="<?php echo esc_attr( $foto_de_la_proxima_edicion['alt'] ); ?>" />
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="f--section-third">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-2">
        <h3 class="f--font-fourth f--color-primary f--title"><?php the_field( 'fechas_de_la_proxima_edicion' ); ?></h3>
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
            <a href="http://arabaclick.com/proxima-edicion/actividades/" class="b--card-primary">
              <h4 class="b--card-primary__title"><?php the_field( 'titulo_de_actividades' ); ?></h4>
              <p class="b--card-primary__subtitle"><?php the_field( 'texto_de_actividades' ); ?></p>
            </a>
          </div>
          <div class="col-lg-5">
            <a href="http://arabaclick.com/proxima-edicion/exposiciones/" class="b--card-primary">
              <h4 class="b--card-primary__title"><?php the_field( 'titulo_de_exposiciones' ); ?></h4>
              <p class="b--card-primary__subtitle"><?php the_field( 'texto_de_exposiciones' ); ?></p>
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
