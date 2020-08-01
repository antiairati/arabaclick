<?php get_header() ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
<section class="f--section-primary">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="f--title f--font-secondary f--color-primary"><?php the_field( 'titulo_del_taller' ); ?></h1>
      </div>
    </div>
  </div>
</section>
<section class="f--section-secondary">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <h2 class="f--title f--font-third f--color-primary"><?php the_field( 'profesor_de_taller' ); ?></h2>
        <h3 class="f--tagline f--font-fourth f--color-primary"><?php the_field( 'lugar_del_taller' ); ?></h3>
        <h4 class="f--tagline f--font-fifth f--color-primary"><?php the_field( 'fecha_del_taller' ); ?>, <?php the_field( 'hora_del_taller' ); ?></h4>
        <p class="f--title f--font-fifth f--color-primary">Duración <?php the_field( 'duracion_del_taller' ); ?>h</p>
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
      <div class="col-lg-3">
        <div class="f--img-wrapper">
          <?php $foto_del_profesor_del_taller = get_field( 'foto_del_profesor_del_taller' ); ?>
          <?php if ( $foto_del_profesor_del_taller ) : ?>
            <img class="f--img-wrapper__img" src="<?php echo esc_url( $foto_del_profesor_del_taller['url'] ); ?>" alt="<?php echo esc_attr( $foto_del_profesor_del_taller['alt'] ); ?>" />
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-5">
        <h6 class="f--title f--font-fourth f--color-primary"><?php the_field( 'profesor_de_taller' ); ?></h6>
        <div class="b--content">
          <?php the_field( 'informacion_de_profesor' ); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer() ?>
