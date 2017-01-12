<?php
/*template name: new home*/

 get_header();
?>
<div id="home">
<?php
$banner_img =get_field('banner_image');
$banner_img_url =$banner_img['url'];
?>
    <section id="panel-hero" style="background: url('<?php echo $banner_img_url ;?>') no-repeat scroll center top / cover ; color: #000;min-height: 300px;padding: 18px 0;">
        <div class="container">
            <div class="bn-txt">
                <h1><strong><?php echo get_field('banner_title')?></strong></h1>
                <?php echo get_field('banner_text')?>
                <a href="/become-a-partner/#reseller" class="page-scroll btn btn-outline-gray" role="button"><?php echo get_field('button_label')?></a>
            </div>
        </div>
    </section>
<?php
if (have_posts()) : 
     while (have_posts()) : the_post();
 echo the_content();
 endwhile; 
 endif; 
?>


</div>
<?php get_footer();?>
