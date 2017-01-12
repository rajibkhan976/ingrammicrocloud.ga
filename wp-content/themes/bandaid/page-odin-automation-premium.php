<?php
/**
 * Template Name: Odin Automation Premium
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bandaid
 */
get_header();
?>
<?php
$banner_img =get_field('odinpre_panel_header_banner');
$banner_img_url =$banner_img['url'];
$left_img =get_field('odinpre_crp_panel_left_logo');
$left_img_url =$left_img['url'];
?>
<div id="odin-automation-premium" class="platform-page">
    <section id="panel-header" style="background: url('<?php echo $banner_img_url ;?>') no-repeat center top; color: #fff; background-size: cover;">
        <div class="container">
            <div class="row">
                <div id="left-column" class="col-md-3 col-sm-3 text-center">
                    <div class="v-center">
                        <div class="v-in">                        
                            <img class="img-responsive" src="<?php echo $left_img_url;?>" alt="Odin Automation Premium" />
                            <h1 class="platform"><?php echo get_field('odin_pre_panel_left_logo_heading');?></h1>
                        </div>
                    </div>
                </div>
                <div id="right-column" class="col-md-9 col-sm-9">
                    <div class="v-center">
                        <div class="v-in">
                            <div class="category-description">
                                <div class="pannel-header-right">
                                    <?php echo get_field('odin_pre_panel_right_content');?>
                                </div>
                                <div class="pannel-header-right-button">
                                    <a class="btn btn-outline-gray" href="#video-oap" rel="modal:open" role="button"><?php echo get_field('odin_pre_button_label');?></a>
                                    <div class="hidden">
                                        <div id="video-oap" class="modal" style="max-width: 1240px">
                                            <iframe width="100%" height="664" src="<?php echo get_field('odin_pre_banner_butoon_url');?>" frameborder="0" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div id="main-content" class="">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        echo the_content();
                    endwhile;
                endif;
                ?>
             </div>
    </div>
</div>

<?php get_footer(); ?>