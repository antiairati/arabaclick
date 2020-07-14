<?php
/*
Template Name: Page Team
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
      <div class="col-12">
        <div class="b--logo-wrapper">
          <?php
            $socios_args = array(
              'post_type' => 'socios',
              'posts_per_page' => 16,
              'oderby' => 'date',
              'order' => 'DESC',
            );
            $socios_query = new WP_Query($socios_args);
            while ($socios_query -> have_posts()): $socios_query -> the_post(); ?>
            <div class="b--logo-wrapper__item">
              <img class="b--logo-wrapper__item__img" src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
            </div>
          <?php endwhile; ?>
          <?php wp_reset_query() ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer() ?>
