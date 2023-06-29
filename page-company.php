<?php get_header();?>
<?php 
/*
Template Name: 会社案内
*/
?>
    <main>
   <div class="top_image_cm">
    <img class="image-home-hd" src="<?php echo get_template_directory_uri(); ?>/images/wallpaperbetter.jpg"/>
        <div  class="label_cm">COMPANY</div>
    </div>
        <div class="main_title">
        </div>
            <table class="tbl-r02">
                <tr>
                    <th >会社名</th>
                    <td><?php echo CFS()->get('name')?></td>
                </tr>
                <tr>
                    <th>設立日</th>
                    <td><?php echo CFS()->get('day')?></td>
                </tr>
                <tr class="last">
                    <th>代　表</th>
                    <td><?php echo CFS()->get('ceo')?></td>
                </tr>
                <tr class="last">
                    <th>住　所</th>
                    <td><?php echo CFS()->get('address')?></td>
                </tr>
                <tr class="last">
                    <th>電　話</th>
                    <td><?php echo CFS()->get('tel')?></td>
                </tr>
                <tr class="last">
                    <th>事業内容</th>
                    <td><?php echo CFS()->get('business')?></td>
                </tr>
        </table>
    </main>
    <?php get_footer(); ?>
