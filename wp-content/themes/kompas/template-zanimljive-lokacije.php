<?php /*
 * Template Name: Zanimljive Lokacije
 */
get_header();
?>

    <section class="interesting-location">
        <div class="flex-wrap">
            <div class="u-full u-large-1of2">
                <div class="wrapper">
                    <div class="owl-carousel" id="slider3">
                        <?php if (have_rows('galerija')): ?>
                            <?php while (have_rows('galerija')): the_row(); ?>
                                <?php $galerijaPhoto = get_sub_field('galerija_photo');
                                if ($galerijaPhoto): ?>
                                    <img src="<?php echo esc_url($galerijaPhoto['url']); ?>"
                                         alt="<?php echo esc_attr($galerijaPhoto['alt']); ?>"/>
                                <?php endif; ?>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>


            <div class="u-full u-large-1of2 bus-bgd align-center">
                <div class="bus-wrap">
                    <?php
                    $naslov = get_field("naslov");
                    $opis = get_field("opis");

                    if ($naslov): ?>
                        <h3><?php echo $naslov; ?></h3>
                    <?php endif;
                    if ($galerijaPhoto): ?>
                        <p><?php echo $opis; ?></p>
                    <?php endif;
                    ?>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>