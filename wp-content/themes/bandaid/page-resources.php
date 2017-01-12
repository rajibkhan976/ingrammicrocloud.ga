<?php
/**
 * Template Name: Page Resources
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
<div id="resources" class="platform-page" xmlns="http://www.w3.org/1999/html">
    <section id="panel-header" style="background:url('<?php the_field('banner_image'); ?>') no-repeat center top; background-size: cover; padding: 50px 0;">
        <div class="container">
            <div class="row">
                <div id="left-column" class="col-md-3 col-sm-3 text-center">
                    <div class="v-center">
                        <div class="v-in">
                            <h1 class="bs-ap-title platform"><?php the_field('banner_heading'); ?></h1>
                        </div>
                    </div>
                </div>
                <div id="right-column" class="col-md-9 col-sm-9"></div>
            </div>
        </div>
    </section>
    <div id="panel-tabs" class="container">
        <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
            <ul class="nav nav-tabs" id="myTabs" role="tablist">
                <li role="presentation" class="active"><a href="#case-studies" id="case-studies-tab" role="tab" data-toggle="tab" aria-controls="case-studies" aria-expanded="true"><strong><?php the_field('tab_one'); ?></strong></a>
                </li>
                <li role="presentation" class=""><a href="#cloud-primers" role="tab" id="cloud-primers-tab" data-toggle="tab" aria-controls="cloud-primers" aria-expanded="false"><strong><?php the_field('tab_two'); ?></strong></a>
                </li>
                <li role="presentation" class=""><a href="#cloud-playbooks" role="tab" id="cloud-playbooks-tab" data-toggle="tab" aria-controls="cloud-playbooks" aria-expanded="false"><strong><?php the_field('tab_three'); ?></strong></a>
                </li>
            </ul>
            <div id="myTabContent" class="tab-content">
				<div class="tab-pane fade active in" role="tabpanel" id="case-studies" aria-labelledby="case-studies-tab">
					<?php the_field('tab_one_content'); ?>
					</div>
					
					<!-- Case study end-->
<div class="tab-pane fade" role="tabpanel" id="cloud-primers" aria-labelledby="cloud-primers-tab">
	<?php the_field('tab_two_content'); ?>
	</div>
                                        <!-- Cloud premers end-->
                                        <div class="tab-pane fade" role="tabpanel" id="cloud-playbooks" aria-labelledby="cloud-playbooks-tab">
                                            <?php the_field('tab_three_content'); ?>
                                        </div>
                                        </div>
            </div>
            </div>
                </div>
    <?php get_footer(); ?>
