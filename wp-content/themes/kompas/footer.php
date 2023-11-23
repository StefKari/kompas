<!--.............................................FOOTER SECTION....................................................................-->

<footer>
    <div class="text-center">

        <?php
        $footNaslov = get_field('naslov_section', 'option');
        if ($footNaslov):
            echo $footNaslov;
        endif;
        ?>

        <img class="footer-line" src="<?php echo bloginfo('template_directory'); ?>/images/line.png">

        <?php if (have_rows('info_section', 'option')): ?>
            <ul class="f-contact flex-wrap center-all">
                <?php while (have_rows('info_section', 'option')) : the_row(); ?>
                    <?php $phoneMailLocation = get_sub_field('phone_mail_location_foot', 'option');
                    if ($phoneMailLocation):
                        echo $phoneMailLocation;
                    endif;
                    ?>

                <?php endwhile; ?>
            </ul>
        <?php endif; ?>


        <img class="footer-line" src="<?php echo bloginfo('template_directory'); ?>/images/line.png">

        <?php if (have_rows('social_section', 'option')): ?>
            <ul class="social flex center-all">
                <?php while (have_rows('social_section', 'option')) : the_row(); ?>
                    <?php $socialSection = get_sub_field('img_url_foot', 'option');

                    if ($socialSection):
                        echo $socialSection;
                    endif;
                    ?>

                <?php endwhile; ?>
            </ul>
        <?php endif; ?>

    </div>
</footer>

<section class="fotter-middle text-center">

    <p>Vrati se na vrh</p>

    <a href="#">
        <div class="top"></div>
    </a>

</section>

<script src="<?php echo bloginfo('template_directory'); ?>/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/js/slick.min.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/js/jquery.fancybox.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/js/main.js"></script>
</body>

<script>
    $('.autoplay').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
</script>

</html>

<?php wp_footer(); ?>


</body>

</html>