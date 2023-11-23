<?php /*
 * Template Name: O nama
 */
get_header(); ?>
    <section class="about_us">
    <div class="flex-wrap">
        <?php if ( have_rows('o_nama_repeater') ):
            while( have_rows('o_nama_repeater') ) : the_row(); ?>
                <div class="u-full u-large-1of2 about_us_img">
                    <?php
                    $videoSection = get_sub_field('video_img_section');
                    if ($videoSection):
                        echo $videoSection;
                     endif; ?>
                </div>
                <div class="u-full u-large-1of2 about_us_wrap center-all">
                    <div class="about-us-sesction">
                        <?php $textSection = get_sub_field('text_section');
                        if ($textSection):
                            echo $textSection;
                        endif;
                        ?>
                    </div>
                </div>
            <?php endwhile;
        endif; ?>
    </div>
    </section>
<?php get_footer(); ?>
