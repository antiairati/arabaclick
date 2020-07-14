<?php get_header() ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
<section class="f--section-primary">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="f--title f--font-primary f--color-primary"><?php the_field( 'titulo_del_taller' ); ?></h1>
        <h2 class="f--tagline f--font-fourth f--color-primary"><?php the_field( 'profesor_de_taller' ); ?></h2>

        <?php $foto_del_profesor_del_taller = get_field( 'foto_del_profesor_del_taller' ); ?>
        <?php if ( $foto_del_profesor_del_taller ) : ?>
        	<img src="<?php echo esc_url( $foto_del_profesor_del_taller['url'] ); ?>" alt="<?php echo esc_attr( $foto_del_profesor_del_taller['alt'] ); ?>" />
        <?php endif; ?>


        <?php $foto_del_taller = get_field( 'foto_del_taller' ); ?>
        <?php if ( $foto_del_taller ) : ?>
        	<img src="<?php echo esc_url( $foto_del_taller['url'] ); ?>" alt="<?php echo esc_attr( $foto_del_taller['alt'] ); ?>" />
        <?php endif; ?>

        <p><?php the_field( 'lugar_del_taller' ); ?></p>
        <p><?php the_field( 'fecha_del_taller' ); ?></p>
        <p><?php the_field( 'hora_del_taller' ); ?></p>
        <p><?php the_field( 'duracion_del_taller' ); ?>h</p>
        <p><?php the_field( 'precio_del_taller' ); ?>€</p>
        <div class="b--content">
          <?php the_content() ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer() ?>
