 <?php get_header();?>
    <main>
        <div class="top_image_ac">
            <img class="image-home-hd" src="<?php echo get_template_directory_uri(); ?>/images/wallpaperbetter.jpg"/>
            <div  class="label_ac">NEWS</div>
        </div>
        <!-- <div class="">
            <img class="top_image" src="<?php echo get_template_directory_uri(); ?>/images/wallpaperbetter.jpg">
        </div> -->

       <?php if(have_posts()): ?>
        <?php while(have_posts()): ?>
        <?php the_post(); ?>
            <div class="post-new-box">
                <?php if(has_post_thumbnail()):?>
                    <?php $array = array('class' => 'image');
                    the_post_thumbnail('full',$array);?>
                <?php else:?>
                    <img class="image" src="<?php echo get_template_directory_uri();?>/images/nc209713.jpg">
                <?php endif; ?>
                <div class="caption">
                    <p class="title">
                    <?php the_title();?>
                    </p>
                    <p class="detail"><?php the_excerpt(); ?></p>
                </div>
            </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </main>
     <?php get_footer(); ?>