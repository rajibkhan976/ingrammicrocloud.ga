<?php
/**
 * Template Name: Become a Partner
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
<div id="become-a-partner">
    <div id="panel-intro" style="background:url('<?php the_field('banner_image'); ?>') no-repeat center top; background-size: cover; padding: 50px 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <h1><?php the_field('heading'); ?></h1>
                    <img class="img-responsive" src="<?php the_field('image_banner'); ?>" alt="group of people having a meeting"/>
                </div>
                <div class="col-md-9 col-sm-9">
                 <?php the_field('paragraph'); ?>
                </div>
            </div>
        </div>
    </div>
    <div id="panel-tabs" class="container">
        <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
            <ul class="nav nav-tabs" id="myTabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#reseller" id="reseller-tab" role="tab" data-toggle="tab" aria-controls="reseller" aria-expanded="true"><strong><?php the_field('tab_one'); ?></strong></a>
                </li>
                <li role="presentation">
                    <a href="#vendor" role="tab" id="vendor-tab" data-toggle="tab" aria-controls="vendor" aria-expanded="false"><strong><?php the_field('tab_two'); ?></strong></a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
			<div class="tab-pane fade active in" role="tabpanel" id="reseller" aria-labelledby="reseller-tab">
				<?php the_field('tab_one_content'); ?>
            <div class="hidden">
                            <div id="BecomeReseller" class="modal request-pricing-form">
                                <div class="header-logo">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logos/ingram-micro-white.png" alt="Ingram Micro Cloud" />
                                </div>
                                <div id="wufoo-qbvra8t15i0dwt">
                                    Fill out my <a href="https://channelmarketing.wufoo.com/forms/qbvra8t15i0dwt">online form</a>.
                                </div>
                                <script type="text/javascript">var qbvra8t15i0dwt;
                                    (function (d, t) {
                                        var s = d.createElement(t), options = {
                                            'userName': 'channelmarketing',
                                            'formHash': 'qbvra8t15i0dwt',
                                            'autoResize': true,
                                            'height': '882',
                                            'async': true,
                                            'host': 'wufoo.com',
                                            'header': 'show',
                                            'ssl': true
                                        };
                                        s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'www.wufoo.com/scripts/embed/form.js';
                                        s.onload = s.onreadystatechange = function () {
                                            var rs = this.readyState;
                                            if (rs)
                                                if (rs != 'complete')
                                                    if (rs != 'loaded')
                                                        return;
                                            try {
                                                qbvra8t15i0dwt = new WufooForm();
                                                qbvra8t15i0dwt.initialize(options);
                                                qbvra8t15i0dwt.display();
                                            } catch (e) {
                                            }
                                        };
                                        var scr = d.getElementsByTagName(t)[0], par = scr.parentNode;
                                        par.insertBefore(s, scr);
                                    })(document, 'script');</script>
                            </div>
                        </div>
                    </div>
           
                <div class="tab-pane fade" role="tabpanel" id="vendor" aria-labelledby="vendor-tab">
                    <div class="row">
						<?php the_field('tab_two_content'); ?>
						<div class="hidden">
                            <div id="BecomeVendor" class="modal request-pricing-form">
                                <div class="header-logo">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logos/ingram-micro-white.png" alt="Ingram Cloud Micro" />
                                </div>
                                <div id="wufoo-qysxzm717k55lx">
                                    Fill out my <a href="https://channelmarketing.wufoo.com/forms/qysxzm717k55lx">online form</a>.
                                </div>
                                <script type="text/javascript">var qysxzm717k55lx;
                                    (function (d, t) {
                                        var s = d.createElement(t), options = {
                                            'userName': 'channelmarketing',
                                            'formHash': 'qysxzm717k55lx',
                                            'autoResize': true,
                                            'height': '767',
                                            'async': true,
                                            'host': 'wufoo.com',
                                            'header': 'show',
                                            'ssl': true
                                        };
                                        s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'www.wufoo.com/scripts/embed/form.js';
                                        s.onload = s.onreadystatechange = function () {
                                            var rs = this.readyState;
                                            if (rs)
                                                if (rs != 'complete')
                                                    if (rs != 'loaded')
                                                        return;
                                            try {
                                                qysxzm717k55lx = new WufooForm();
                                                qysxzm717k55lx.initialize(options);
                                                qysxzm717k55lx.display();
                                            } catch (e) {
                                            }
                                        };
                                        var scr = d.getElementsByTagName(t)[0], par = scr.parentNode;
                                        par.insertBefore(s, scr);
                                    })(document, 'script');</script>
                            </div>
                            </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>      
<?php get_footer(); ?>
