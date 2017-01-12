<?php
/**
 * Template Name: About
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
<div id="about" class="platform-page">
    <section id="panel-header" style="background: url('<?php the_field('banner_image'); ?>') no-repeat scroll center top; background-size: cover;">
        <div class="container">
            <div class="row">
                <div id="left-column" class="col-md-3 col-sm-3">
                    <h1 class="aboutus-title platform"><?php the_field('heading_one'); ?> <br > <?php the_field('heading_one_part'); ?></h1>
                    <img src="<?php the_field('image_one'); ?>" class="img-responsive about-img" alt="Welcome to Ingram Micro Cloud" />
                </div>
                <div id="right-column" class="col-md-9 col-sm-9">
                    <?php the_field('paragraph_one'); ?>
                    <div class="pannel-header-right-button pannel-header-watch-video-btn">
                        <a class="btn btn-outline-gray" href="#about-video" rel="modal:open" role="button"><?php the_field('button_one'); ?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden">
            <div id="about-video" class="modal">
                <iframe width="100%" height="664" src="https://www.youtube.com/embed/EmvmSO983-4" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div id="main-content" class="col-md-9 col-sm-12">
            <?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
            </div>
            <div class="col-md-3 col-sm-12">
                <?php echo get_sidebar('aboutus'); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
