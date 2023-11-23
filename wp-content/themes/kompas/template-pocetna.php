<?php
/*
 * Template Name: Homepage
 */
get_header();
?>

<section class="banner">
    <div class="flex-wrap">
        <div class="bord-1 u-full">
            <?php if (have_rows('naslovna_sekcija')): ?>
                <?php while (have_rows('naslovna_sekcija')): the_row(); ?>
                    <?php
                    $naslov = get_sub_field('naslov_naslovna');
                    $opis = get_sub_field('opis_naslovna');
                    $photoNaslovna = get_sub_field('photo_naslovna');
                    ?>
                    <?php if ($photoNaslovna): ?>
                        <a class="full-height" href="/">
                            <img src="<?php echo esc_url($photoNaslovna['url']); ?>" alt="<?php echo esc_attr($photoNaslovna['alt']); ?>" />
                        </a>
                    <?php endif; ?>
                    <div class="bord-1-content">
                        <?php if ($naslov): ?>
                            <h1><?php echo esc_html($naslov); ?></h1>
                        <?php endif; ?>
                        <?php if ($opis): ?>
                            <h2><span><?php echo esc_html($opis); ?></span></h2>
                        <?php endif; ?>
                        <div class="banner-links">
                            <ul class="flex-wrap links">
                                <?php if (have_rows('naslovna_linkovi')): ?>
                                    <?php while (have_rows('naslovna_linkovi')): the_row(); ?>
                                        <?php
                                        $linkNaziv = get_sub_field('link_naziv_naslovna');
                                        $linkurl = esc_url(get_sub_field('url_link_naslovna'));
                                        ?>
                                        <li>
                                            <a href="<?php echo $linkurl ? $linkurl : '#'; ?>"><?php echo $linkNaziv ? $linkNaziv : ''; ?></a>
                                        </li>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>


<section class="vision">
    <div class="flex-wrap">
        <div class="u-full text-center">
            <?php if (have_rows('vizija_sekcija')): ?>
                <?php while (have_rows('vizija_sekcija')): the_row(); ?>
                    <?php
                    $vizijaNaslov = get_sub_field('naslov_vizije');
                    $vizijaOpis = get_sub_field('opis_vizije');
                    ?>
                    <?php if ($vizijaNaslov): ?>
                        <h2><?php echo esc_html($vizijaNaslov); ?></h2>
                    <?php endif; ?>
                    <?php if ($vizijaOpis): ?>
                        <div class="wrapper">
                            <p><?php echo esc_html($vizijaOpis); ?></p>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="location">
    <?php if (have_rows('zanimljive_lokacije_sekcija')): ?>
        <?php while (have_rows('zanimljive_lokacije_sekcija')): the_row(); ?>
            <?php
            $naslovLokacija = get_sub_field('naslov_lokacije');
            ?>
            <?php if ($naslovLokacija): ?>
                <h2><?php echo esc_html($naslovLokacija); ?></h2>
            <?php endif; ?>
            <div class="flex-wrap center-all product-wrap">
                <?php if (have_rows('lokacija_post')): ?>
                    <?php while (have_rows('lokacija_post')): the_row(); ?>
                        <?php
                        $lokacijaUrl = esc_url(get_sub_field('lokacija_url'));
                        $lokacijaNaziv = get_sub_field('lokacija_naziv_posta');
                        $lokacijaOpis = get_sub_field('lokacija_opis');
                        $lokacijaPhoto = get_sub_field('lokacija_photo');
                        ?>
                        <div class="box">
                            <a href="<?php echo $lokacijaUrl ? $lokacijaUrl : '#'; ?>">
                                <img class="gray-img" src="<?php echo esc_url($lokacijaPhoto['url']); ?>" alt="<?php echo esc_attr($lokacijaPhoto['alt']); ?>">
                            </a>
                            <div class="box-more">
                                <?php if ($lokacijaNaziv): ?>
                                    <span><?php echo esc_html($lokacijaNaziv); ?></span>
                                <?php endif; ?>
                                <?php if ($lokacijaUrl): ?>
                                    <a class="more-1" href="<?php echo esc_url($lokacijaUrl); ?>">
                                        <?php if ($lokacijaOpis): ?>
                                            <i class="fas fa-plus"></i><?php echo esc_html($lokacijaOpis); ?>
                                        <?php endif; ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="about-us">
    <div class="flex-wrap center-all">
        <?php if (have_rows('o_nama_sekcija')): ?>
            <?php while (have_rows('o_nama_sekcija')): the_row(); ?>
                <?php
                $oNamaPhoto = get_sub_field('o_nama_photo');
                $oNamaNaslov = get_sub_field('o_nama_naslov');
                $oNamaLink = esc_url(get_sub_field('o_nama_link'));
                $oNamaNazivLinka = get_sub_field('o_nama_naziv_linka');
                ?>
                <?php if ($oNamaPhoto): ?>
                    <div class="u-med-1of2">
                        <img src="<?php echo esc_url($oNamaPhoto['url']); ?>" alt="<?php echo esc_attr($oNamaPhoto['alt']); ?>" />
                    </div>
                <?php endif; ?>
                <div class="u-med-1of2">
                    <div class="flex align-center">
                        <div class="about-text">
                            <?php if ($oNamaNaslov): ?>
                                <h2><?php echo esc_html($oNamaNaslov); ?></h2>
                            <?php endif; ?>
                            <ul class="about-list">
                                <?php if (have_rows('o_nama_opisi')): ?>
                                    <?php while (have_rows('o_nama_opisi')): the_row(); ?>
                                        <?php $oNamaOpis = get_sub_field('o_nama_opis'); ?>
                                        <li class="flex align-center">
                                            <?php if ($oNamaOpis): ?>
                                                <div>
                                                    <p><?php echo esc_html($oNamaOpis); ?></p>
                                                </div>
                                            <?php endif; ?>
                                        </li>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>
                            <?php if ($oNamaLink): ?>
                                <a class="more" href="<?php echo $oNamaLink; ?>">
                                    <?php if ($oNamaNazivLinka): ?>
                                        <i class="fas fa-plus"></i><?php echo esc_html($oNamaNazivLinka); ?>
                                    <?php endif; ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

<section class="reference-news">
    <div class="flex-wrap">
        <?php if (have_rows('reference_sekcija')): ?>
            <?php while (have_rows('reference_sekcija')): the_row(); ?>
                <div class="u-full u-med-1of2 text-center">
                    <?php
                    $refNaslov = get_sub_field('reference_naslov');
                    if ($refNaslov): ?>
                        <h2><?php echo esc_html($refNaslov); ?></h2>
                    <?php endif; ?>
                    <div class="wrapper">
                       <!-- <div class="owl-carousel" id="slider1"> -->
                            <?php if (have_rows('reference_galerija')): ?>
                                <?php while (have_rows('reference_galerija')): the_row();
                                    $refPhotoGalerija = get_sub_field('ref_photo_galerija');
                                    if ($refPhotoGalerija): ?>
                                        <a href="">
                                            <img src="<?php echo esc_url($refPhotoGalerija['url']); ?>" alt="<?php echo esc_attr($refPhotoGalerija['alt']); ?>" />
                                        </a>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        <!-- </div> -->
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

<section class="blog">
    <h2>OGLASI</h2>
    <div class="flex-wrap">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
         $args = array(
             'post_type' => 'oglasi',
             'posts_per_page' => 2,
             'paged' => $paged
         );
         $wp_query = new WP_Query($args);
         while ($wp_query->have_posts()) : $wp_query->the_post();
            ?>
            <div class="u-large-1of2 flex-wrap center-all">
                <div class="u-med-1of2 blog-img">
                    <a href="<?php echo esc_url(get_permalink()); ?>"><?php the_post_thumbnail('full', array('class' => 'vesti_slika')); ?></a>
                </div>
                <div class="u-med-1of2 blog-content">
                    <h3><?php the_title(); ?></h3>
                    <div class="date"><?php echo get_the_time('d.m.Y'); ?></div>
                    <a class="blog-more" href="<?php echo esc_url(get_permalink()); ?>"><span>POGLEDAJ OGLAS</span></a>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</section>


<?php get_footer(); ?>
