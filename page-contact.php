 <?php get_header();?>
  <main>
  <div class="top_image_co">
    <img class="image-home-hd" src="<?php echo get_template_directory_uri(); ?>/images/wallpaperbetter.jpg"/>
        <div  class="label_co">CONTACT</div>
    </div>
    <main class="main_contact">
     <div class="menu_bar">お問い合わせ</div>
     <table class="tbl-r02">
         <div class="contact-form">
        <?php echo do_shortcode('[contact-form-7 id="7" title="Contact form 1"]') ?>
         </div>
     </table>
    </main>
    </table>
    </main>
    <?php get_footer(); ?>