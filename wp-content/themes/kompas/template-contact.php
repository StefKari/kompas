<?php /*
 * Template Name: Contact
 */
get_header();
?>

<section class="contact">
  <div class="flex-wrap">
  <div class="u-full u-med-1of2 img-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23188.02427990456!2d20.613741676547285!3d43.40831565132287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47563613b10f28b9%3A0xb9047865119739ce!2z0JHQsNGZ0LXQstCw0YY!5e0!3m2!1ssr!2srs!4v1700330052969!5m2!1ssr!2srs" width="100%" height="100%" style="border:none;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <!-- <iframe src="https://snazzymaps.com/embed/142563" width="100%" height="100%" style="border:none;"></iframe> -->
  </div>
  <div class="u-full u-med-1of2 contact-wrap">
    <div class="contact-us text-center">
      <h2>Kontakt</h2>
      <p>Udruženje građana</p>
        <?php echo do_shortcode('[gravityform id="2" title="false" description="false"]'); ?>
      <ul>
        <li><span>ADRESA:</span></br>36344 Baljevac na Ibru, Srbija</li>
<!--        <li><a href="tel:0113982-104"><span>TELEFON:</span>06555555</a></li>-->
        <li><a href="mailto:kompasbaljevac@gmail.com"><span>EMAIL:</span>kompasbaljevac@gmail.com</a></li>
    </ul>
    </div>
  </div>
</div>
</section>

<?php get_footer(); ?>