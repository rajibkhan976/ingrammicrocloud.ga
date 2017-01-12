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

<div id="contact-us" class="platform-page">
    <div class="container">
        <div class="row">
            <div id="main-content" class="col-md-7 col-sm-12">
                <section id="panel-1">
                    <div class="contact-form" id="request-demo-form">
                        <div class="header-logo">
                            <img src="<?php the_field('image_one'); ?>" alt="Ingram Micro Cloud" />
                        </div>
                        <div id="wufoo-qkx7m6e0b01xfx">
                            Fill out my <a href="<?php the_field('link'); ?>">online form</a>.
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-5 col-sm-12">
                <div class="contact-right text-left">
                    <?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
					<?php endwhile; // end of the loop. ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
