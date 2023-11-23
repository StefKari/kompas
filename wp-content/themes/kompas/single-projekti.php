<?php

get_header(); ?>

<!-- <section class="novosti-single flex-wrap items-center" style="background:url('<?php echo $bgpicture; ?>'); "> -->

<div class="main-banner-projekti">
  <div class="banner-text text-center">
    <h2>PROJEKTI</h2>
    <!-- <h2><?php the_title(); ?></h2> -->
    <!-- <?php if (!empty($short_text)){ ?>
          <p class="banner-text"><?php echo $short_text; ?></p>
        <?php } ?> -->
  </div>
</div>


    <div class="u-full">
      <div class="">
        <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
      </div>
      <div class="blog-content-1 flex-wrap">
        <div class="u-full blog-single">
            <div class="u-full">
              <div class="date-1"><?php echo get_the_time('d.m.'); ?><?php echo get_the_time('Y'); ?></div>
              <?php the_title( '<h3>', '</h3>' ); ?>
            </div>
              <p><?php the_content(); ?></p>
        </div>
        <div class="u-full single-blog">
          <?php the_post_thumbnail( 'large' ); ?>
        </div>
      </div>

      <div class="prev_next flex align-center">
        <div class="arL"><?php previous_post_link('%link', '<i class="fas fa-angle-left"> <span>Prethodna</span> </i>'); ?></div>
        <div class="arR"><?php next_post_link('%link', '<span>Sledeća</span> <i class="fas fa-angle-right"></i>'); ?></div>
      </div>
    </div>

<?php endwhile; ?>
<?php endif; ?>



<?php get_footer(); ?>