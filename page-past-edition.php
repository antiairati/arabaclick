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
          <?php the_field( 'texto_edicion_2019' ); ?>
        </div>
      </div>
      <div class="col-lg-5 offset-lg-1">
        <div class="f--img-wrapper">
          <?php $foto_principal_edicion_2019 = get_field( 'foto_principal_edicion_2019' ); ?>
          <?php if ( $foto_principal_edicion_2019 ) : ?>
          	<img class="f--img-wrapper__img" src="<?php echo esc_url( $foto_principal_edicion_2019['url'] ); ?>" alt="<?php echo esc_attr( $foto_principal_edicion_2019['alt'] ); ?>" />
          <?php endif; ?>
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
          <?php $imagen_secundaria_1 = get_field( 'imagen_secundaria_1' ); ?>
          <?php if ( $imagen_secundaria_1 ) : ?>
          	<img class="f--img-wrapper__img" src="<?php echo esc_url( $imagen_secundaria_1['url'] ); ?>" alt="<?php echo esc_attr( $imagen_secundaria_1['alt'] ); ?>" />
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="f--img-wrapper">
          <?php $imagen_secundaria_2 = get_field( 'imagen_secundaria_2' ); ?>
          <?php if ( $imagen_secundaria_2 ) : ?>
          	<img class="f--img-wrapper__img" src="<?php echo esc_url( $imagen_secundaria_2['url'] ); ?>" alt="<?php echo esc_attr( $imagen_secundaria_2['alt'] ); ?>" />
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="f--img-wrapper">
          <?php $imagen_secundaria_3 = get_field( 'imagen_secundaria_3' ); ?>
          <?php if ( $imagen_secundaria_3 ) : ?>
          	<img  class="f--img-wrapper__img" src="<?php echo esc_url( $imagen_secundaria_3['url'] ); ?>" alt="<?php echo esc_attr( $imagen_secundaria_3['alt'] ); ?>" />
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="f--img-wrapper">
          <?php $imagen_secundaria_4 = get_field( 'imagen_secundaria_4' ); ?>
          <?php if ( $imagen_secundaria_4 ) : ?>
          	<img  class="f--img-wrapper__img" src="<?php echo esc_url( $imagen_secundaria_4['url'] ); ?>" alt="<?php echo esc_attr( $imagen_secundaria_4['alt'] ); ?>" />
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="f--img-wrapper">
          <?php $imagen_secundaria_5 = get_field( 'imagen_secundaria_5' ); ?>
          <?php if ( $imagen_secundaria_5 ) : ?>
          	<img  class="f--img-wrapper__img" src="<?php echo esc_url( $imagen_secundaria_5['url'] ); ?>" alt="<?php echo esc_attr( $imagen_secundaria_5['alt'] ); ?>" />
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="f--img-wrapper">
          <?php $imagen_secundaria_6 = get_field( 'imagen_secundaria_6' ); ?>
          <?php if ( $imagen_secundaria_6 ) : ?>
          	<img  class="f--img-wrapper__img" src="<?php echo esc_url( $imagen_secundaria_6['url'] ); ?>" alt="<?php echo esc_attr( $imagen_secundaria_6['alt'] ); ?>" />
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="f--img-wrapper">
          <?php $imagen_secundaria_7 = get_field( 'imagen_secundaria_7' ); ?>
          <?php if ( $imagen_secundaria_7 ) : ?>
          	<img  class="f--img-wrapper__img" src="<?php echo esc_url( $imagen_secundaria_7['url'] ); ?>" alt="<?php echo esc_attr( $imagen_secundaria_7['alt'] ); ?>" />
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="f--img-wrapper">
          <?php $imagen_secundaria_8 = get_field( 'imagen_secundaria_3' ); ?>
          <?php if ( $imagen_secundaria_8 ) : ?>
          	<img  class="f--img-wrapper__img" src="<?php echo esc_url( $imagen_secundaria_8['url'] ); ?>" alt="<?php echo esc_attr( $imagen_secundaria_8['alt'] ); ?>" />
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="f--img-wrapper">
          <?php $imagen_secundaria_9 = get_field( 'imagen_secundaria_9' ); ?>
          <?php if ( $imagen_secundaria_9 ) : ?>
          	<img  class="f--img-wrapper__img" src="<?php echo esc_url( $imagen_secundaria_9['url'] ); ?>" alt="<?php echo esc_attr( $imagen_secundaria_9['alt'] ); ?>" />
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="f--img-wrapper">
          <?php $imagen_secundaria_10 = get_field( 'imagen_secundaria_10' ); ?>
          <?php if ( $imagen_secundaria_10 ) : ?>
          	<img  class="f--img-wrapper__img" src="<?php echo esc_url( $imagen_secundaria_10['url'] ); ?>" alt="<?php echo esc_attr( $imagen_secundaria_10['alt'] ); ?>" />
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="f--img-wrapper">
          <?php $imagen_secundaria_11 = get_field( 'imagen_secundaria_11' ); ?>
          <?php if ( $imagen_secundaria_11 ) : ?>
          	<img  class="f--img-wrapper__img" src="<?php echo esc_url( $imagen_secundaria_11['url'] ); ?>" alt="<?php echo esc_attr( $imagen_secundaria_11['alt'] ); ?>" />
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="f--img-wrapper">
          <?php $imagen_secundaria_12 = get_field( 'imagen_secundaria_12' ); ?>
          <?php if ( $imagen_secundaria_12 ) : ?>
          	<img  class="f--img-wrapper__img" src="<?php echo esc_url( $imagen_secundaria_12['url'] ); ?>" alt="<?php echo esc_attr( $imagen_secundaria_12['alt'] ); ?>" />
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer() ?>
