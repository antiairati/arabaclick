  <?php get_header() ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
<section class="f--section-primary">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="f--title f--font-primary f--color-primary"><?php the_field( 'lugar_de_la_exposicion' ); ?></h1>
        <h2 class="f--tagline f--font-fourth f--color-primary"><?php the_field( 'fecha_de_inicio_de_la_exposicion' ); ?>  -  <?php the_field( 'fecha_de_cierre_de_la_exposicion' ); ?></h2>
      </div>
    </div>
    <div class="f--section-third">
      <div class="row">
        <div class="col-lg-5 offset-lg-1">
          <div class="b--content">
            <?php the_content() ?>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="f--img-wrapper">
            <?php $imagen_de_la_exposicion = get_field( 'imagen_de_la_exposicion' ); ?>
            <?php if ( $imagen_de_la_exposicion ) : ?>
            	<img class="f--img-wrapper__img" src="<?php echo esc_url( $imagen_de_la_exposicion['url'] ); ?>" alt="<?php echo esc_attr( $imagen_de_la_exposicion['alt'] ); ?>" />
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-5 offset-lg-1">
        <div class="b--content">
          <?php the_field( 'horario_de_la_exposicion' ); ?>
        </div>
      </div>
      <div class="col-lg-5 offset-lg-1">
        <div class="b--content">
          <?php the_field( 'localizacion_de_la_exposicion' ); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer() ?>
