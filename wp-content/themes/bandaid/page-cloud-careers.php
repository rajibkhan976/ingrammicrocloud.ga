<?php
/**
 * Template Name: Careers
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

<div id="cloud-store" class="platform-page cloud-careers">
    <section id="panel-header" style="background: url('<?php the_field('banner_image');?>') no-repeat center top;  color: #fff;background-size: cover;">
        <div class="container">
            <div class="row">
                <div id="left-column" class="col-md-3 col-sm-3 text-center">
                    <div class="v-center">
                        <div class="v-in">                            
                            <h1 class="platform"><?php the_field('heading_one'); ?></h1>
                        </div>
                    </div>
                </div>
                <div id="right-column" class="col-md-9 col-sm-9">
                    <div class="v-center">
                        <div class="v-in">
                            <div id="category-description">
                                <div class="pannel-header-right">
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
            <div id="main-content" class="col-sm-10">
                <?php
                if (have_posts()) : while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                endif;
                ?>
            </div>            
        </div>
    </div>
</div>
<?php get_footer(); ?>
