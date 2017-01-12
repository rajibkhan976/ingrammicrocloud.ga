<?php
/**
 * Template Name: Marketplace
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

    <div id="cloud-store" class="platform-page cloud-marketplace">
        <?php
        $banner_img = get_field('panel_header_banner');
        $banner_img_url = $banner_img['url'];
        ?>
        <section id="panel-header"
                 style="background: url('<?php echo $banner_img_url; ?>') no-repeat center top ; color: #fff; background-size: cover;">
            <div class="container">
                <div class="row">
                    <div id="left-column" class="col-md-3 col-sm-3 text-center">
                        <div class="v-center">
                            <div class="v-in">
                                <img class="img-responsive"
                                     src="<?php echo get_template_directory_uri(); ?>/img/icons/platforms/marketplace-blue-circle.png"
                                     alt="Cloud Marketplace"/>
                                <h1 class="platform"><?php echo get_field('panel_left_logo_heading'); ?></h1>
                            </div>
                        </div>
                    </div>
                    <div id="right-column" class="col-md-9 col-sm-9">
                        <div class="v-center">
                            <div class="v-in">
                                <div class="category-description">
                                    <div class="pannel-header-right">
                                        <?php echo get_field('panel_right_content'); ?>
                                    </div>
                                    <div class="btn-section">
                                        <a class="btn-right-margin btn btn-outline-gray" href="#video" rel="modal:open"
                                           role="button"><?php echo get_field('button_label') ?></a>
                                    </div>
                                    <div class="hidden">
                                        <div id="video" class="modal">
                                            <iframe width="1180" height="664" src="<?php echo get_field('video_url') ?>"
                                                    frameborder="0" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
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