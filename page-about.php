<?php
/*
Template Name: Page About
*/
?>

<?php get_header() ?>
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
      <div class="col-lg-5 offset-lg-1 position-relative">
        <div class="position-sticky b--content f--color-primary f--title" style="top:130px;">
          <?php the_field( 'primer_texto' ); ?>
        </div>
      </div>
      <div class="col-lg-5 offset-lg-1">
        <div class="f--img-wrapper">
          <?php $primera_imagen = get_field( 'primera_imagen' ); ?>
          <?php if ( $primera_imagen ) : ?>
          	<img class="f--img-wrapper__img" src="<?php echo esc_url( $primera_imagen['url'] ); ?>" alt="<?php echo esc_attr( $primera_imagen['alt'] ); ?>" />
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="f--section-third">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3 text-center">
        <h3 class="f--font-third f--color-primary f--color-primary text-center f--tagline">“<?php the_field( 'frase' ); ?>”</h3>
        <span class="f--font-fourth f--color-primary f--color-primary text-center"> - <?php the_field( 'autor_de_la_frase' ); ?> - </span>
      </div>
    </div>
  </div>
</section>
<section class="f--section-third">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <div class="f--img-wrapper f--title">
          <?php $segunda_imagen = get_field( 'segunda_imagen' ); ?>
          <?php if ( $segunda_imagen ) : ?>
          	<img class="f--img-wrapper__img" src="<?php echo esc_url( $segunda_imagen['url'] ); ?>" alt="<?php echo esc_attr( $segunda_imagen['alt'] ); ?>" />
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-5 offset-lg-1 position-relative">
        <div class="position-sticky b--content f--color-primary" style="top:130px;">
          <?php the_field( 'segundo_texto' ); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 offset-lg-2">
        <a href="http://arabaclick.com/quienes-somos/equipo/" class="b--card-primary">
          <h4 class="b--card-primary__title"><?php the_field( 'titulo_equipo' ); ?></h4>
          <p class="b--card-primary__subtitle"><?php the_field( 'descripcion_equipo' ); ?></p>
        </a>
      </div>
      <div class="col-lg-4">
        <a href="http://arabaclick.com/quienes-somos/patrocinadores/" class="b--card-primary">
          <h4 class="b--card-primary__title"><?php the_field( 'titulo_patrocinadores' ); ?></h4>
          <p class="b--card-primary__subtitle"><?php the_field( 'descripcion_patrocinadores' ); ?></p>
        </a>
      </div>
    </div>
  </div>
</section>

<?php get_footer() ?>
