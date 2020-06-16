<?php if ( have_posts() ): ?>
  <?php while ( have_posts()): the_post() ?>
    <article class="post hentry">
      <header>
        <?php if ( has_post_thumbnail() ): ?>
          <div class="featured-image">
            <?php if ( is_page() ): ?>
              <?php the_post_thumbnail( 'featured-page' ); ?>
            <?php else: ?>
              <?php the_post_thumbnail( 'featured-medium' ); ?>
            <?php endif; ?>
          </div>
        <?php endif; ?>
        <p class="post-categories"><?php echo get_the_category_list( ' / ' ); ?></p>
        <?php if ( is_single() ): ?>
          <h2 class="post-title"><?php echo the_title(); ?></h2>
        <?php else: ?>
          <h2 class="post-title"> <a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a> </h2>
        <?php endif; ?>
      </header>
      <div class="entry-content">
        <time class="updated" datetime="<?php echo get_the_time( 'c' ); ?>">
          <?php the_date(); ?>
        </time>
        <?php if ( is_single() ): ?>
          <?php echo the_content(); ?>
        <?php else: ?>
          <?php echo the_excerpt(); ?>
        <?php endif; ?>
      </div>
      <footer>
        <ul class="post-tags"><?php the_tags( '<li>', '</li><li>', '</li>' ); ?></ul>
        <span class="edit-link"><?php edit_post_link( __( '(Edit)', 'domestika' ) ); ?></span>
      </footer>
    </article>
  <?php endwhile; ?>
<?php endif; ?>
