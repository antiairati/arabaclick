<?php
/*
Template Name: Page Home
*/
?>

<?php get_header() ?>
<div class="b--page-home">
  <div class="b--page-home__back-items">
    <video autoplay="autoplay" loop="loop" id="video_background" preload="auto" volume="50"/>
       <source src="/url/tuvideo.mp4" type="video/mp4" />
     </video/>
  </div>
  <div class="b--page-home__front-items">
    <div class="container" style="margin-top:100px;">
      <div class="row">
        <div class="col-lg-12">
          <h1><?php the_title() ?></h1>
        </div>
      </div>
    </div>
  </div>
</div>


<?php get_footer() ?>
