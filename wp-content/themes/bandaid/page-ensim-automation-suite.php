<?php
/**
 * Template Name: Ensim Automation Suite
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
<div id="ensim" class="platform-page">
    <section id="panel-header" style="background:url('<?php the_field('banner_image'); ?>') no-repeat center top; color: #fff; background-size: cover;">
        <div class="container">
            <div class="row">
                <div id="left-column" class="col-md-3 col-sm-3 text-center">
                    <div class="v-center">
                        <div class="v-in">
                            <img class="img-responsive" src="<?php the_field('image_one'); ?>" alt="Ensim Automation Suite" />
                            <h1 class="platform"><?php the_field('heading_one'); ?></h1>
                        </div>
                    </div>
                </div>
                <div id="right-column" class="col-md-9 col-sm-9">
                    <div class="v-center">
                        <div class="v-in">
                            <div class="category-description">
                                <div class="pannel-header-right-small">
                                    <?php the_field('paragraph_one'); ?>
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
           <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
           <?php endwhile; // end of the loop. ?> 
        </div>
    </div>
</div>
<?php get_footer(); ?>
