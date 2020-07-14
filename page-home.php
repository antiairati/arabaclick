<?php
/*
Template Name: Page Home
*/
?>

<?php get_header() ?>
<div class="b--page-home">
  <div class="b--page-home__back-items">
    <div class="lamp">
        <div class="lava">
            <div class="blob"></div>
            <div class="blob"></div>
            <div class="blob"></div>
            <div class="blob"></div>
            <div class="blob"></div>
            <div class="blob"></div>
            <div class="blob"></div>
            <div class="blob"></div>
            <div class="blob top"></div>
            <div class="blob bottom"></div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
      <defs>
        <filter id="goo">
          <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
          <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
          <feBlend in="SourceGraphic" in2="goo" />
        </filter>
      </defs>
    </svg>
  </div>
  <div class="b--page-home__front-items">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1><?php the_title() ?></h1>
        </div>
      </div>
    </div>
  </div>
</div>


<?php get_footer() ?>
