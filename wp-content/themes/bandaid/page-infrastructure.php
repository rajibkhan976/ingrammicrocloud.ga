<?php
/**
 * Template Name: Category
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
$banner_img =get_field('infra_panel_header_banner');
$banner_img_url =$banner_img['url'];
$left_img =get_field('infra_panel_left_logo');
$left_img_url =$left_img['url'];
?>
<div id="infrastructure" class="category-page">
    <section id="panel-header" style="background: url('<?php echo $banner_img_url ;?>') no-repeat center top;  color: #fff;background-size: cover;">
        <div class="container">
            <div class="row">
                <div id="left-column" class="col-md-3 col-sm-3 text-center">
                    <div class="v-center">
                        <div class="v-in">
                            <img class="img-responsive" src="<?php echo $left_img_url;?>" alt="Infrastructure" />
                            <h1 class="bs-ap-title"><?php echo get_field('infra_panel_left_heading'); ?></h1>
                        </div>
                    </div>                
                </div>
                <div id="right-column" class="col-md-9 col-sm-9">
                    <div class="v-center">
                        <div class="v-in">
                            <?php echo get_field('infra_panel_right_content'); ?>
                        </div>
                    </div>
                </div>
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

<?php get_footer(); ?>