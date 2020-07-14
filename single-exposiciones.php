<?php get_header() ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
<section class="f--section-primary">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="f--title f--font-primary f--color-primary"><?php the_field( 'lugar_de_la_exposicion' ); ?></h1>
        <h2 class="f--tagline f--font-fourth f--color-primary"><?php the_field( 'fecha_de_inicio_de_la_exposicion' ); ?></h2>
        <h2><?php the_field( 'fecha_de_cierre_de_la_exposicion' ); ?></h2>
        <p><?php the_field( 'horario_de_la_exposicion' ); ?></p>
        <p><?php the_field( 'fecha_y_hora_de_inauguracion_de_la_exposicion' ); ?></p>

        <?php $localizacion_de_la_exposicion = get_field( 'localizacion_de_la_exposicion' ); ?>
        <?php if ( $localizacion_de_la_exposicion ) : ?>
        	<?php echo $localizacion_de_la_exposicion['address']; ?>
        	<?php echo $localizacion_de_la_exposicion['lat']; ?>
        	<?php echo $localizacion_de_la_exposicion['lng']; ?>
        	<?php echo $localizacion_de_la_exposicion['zoom']; ?>
        	<?php $optional_data_keys = array('street_number', 'street_name', 'city', 'state', 'post_code', 'country'); ?>
        	<?php foreach ( $optional_data_keys as $key ) : ?>
        		<?php if ( isset( $localizacion_de_la_exposicion[ $key ] ) ) : ?>
        			<?php echo $localizacion_de_la_exposicion[ $key ]; ?>
        		<?php endif; ?>
        	<?php endforeach; ?>
        <?php endif; ?>

        <?php $imagen_de_la_exposicion = get_field( 'imagen_de_la_exposicion' ); ?>
        <?php if ( $imagen_de_la_exposicion ) : ?>
        	<img src="<?php echo esc_url( $imagen_de_la_exposicion['url'] ); ?>" alt="<?php echo esc_attr( $imagen_de_la_exposicion['alt'] ); ?>" />
        <?php endif; ?>
        
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
