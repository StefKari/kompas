<?php /*
 * Template Name: Projekti
 */
get_header();
?>


<div class="main-banner-projekti">
  <div class="banner-text text-center">
    <h2>PROJEKTI</h2>
    <p class="baner-text"></p>
  </div>
</div>
</a>


<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
  'post_type' => 'projekti',
  'posts_per_page' => 4,
  'order' => 'DESC', 
  'paged' => $paged 
);

$wp_query = new WP_Query($args);
while ($wp_query->have_posts()) : $wp_query->the_post();
?>


  <div class="u-full flex-wrap center-all blog-content-1">
    <div class="u-med-2of3 blog_wrap">
      <div class="date-1"><?php echo get_the_time('d.m.'); ?><?php echo get_the_time('Y'); ?></div>
      <?php the_title('<h3>', '</h3>'); ?>
      <p><?php the_excerpt(); ?></p>
      <a class="blog-more" href="<?php echo get_permalink(); ?>"><span>SAZNAJ VIŠE</span></a>
    </div>

    <div class="u-med-1of3 blog_img gray-img">
      <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('full', array('class' => 'vesti_slika')); ?></a>
    </div>
  </div>

<?php endwhile; ?>
<div class="pagination">
	<?php echo paginate_links( array(
		'prev_text' => '<span><i class="fas fa-solid fa-arrow-left"></i></span>',
		'next_text' => '<span><i class="fas fa-regular fa-arrow-right"></i></span>'
	)); ?>
</div>
<?php get_footer(); ?>