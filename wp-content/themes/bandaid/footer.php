<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bandaid
 */
?>
<footer>
    <div id="big-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <h6>Join Us</h6>
                    <a href="/become-a-partner/#reseller" class="page-scroll btn btn-primary" role="button">Become a Reseller</a>
                    <a href="/become-a-partner/#vendor" class="page-scroll btn btn-primary" role="button">Become a Vendor</a>
                </div>
                <div class="col-md-4 col-sm-4">
                    <h6>Contact Us</h6>
<!--                    <a href="https://us.cloud.im/en/products/microsoft/office-365/" target="_blank" class="page-scroll btn btn-primary" role="button">SHOP MARKETPLACE</a>-->
                    <p>Phone: +1 (800) 705 7057</p>
                    <p>Address: 3351 Michelson Drive, Suite 100<br />Irvine, CA 92612, United States</p>
                </div>
                <div class="col-md-4 col-sm-4">
                    <h6>Newsletter Sign Up</h6>                    
                    <form method="post" action="<?php echo admin_url('admin-ajax.php'); ?>" class="newsletter-ajax-form">
                        <p class="bg-success"></p>
                        <p class="bg-danger"></p>
                        <input name="email" id="email_address" type="email" placeholder="Email Address" />
                        <input type="hidden" name="action" value="newsletter_submit_action">
                        <?php wp_nonce_field('newsletter_action_nonce', 'newsletter_nonce'); ?>
                        <input type="submit" value="Submit" />
                    </form>
                    <br />
                    <h6>Follow Us</h6>                    
                    <ul class="social-icons">
                        <li><a class="icon-linkedin" href="https://www.linkedin.com/company/im_cloud" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a class="icon-twitter" href="https://twitter.com/IngramCloud" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a class="icon-facebook" href="https://www.facebook.com/ingrammicrocloud" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a class="icon-youtube" href="https://www.youtube.com/user/IngramMicroServices" target="_blank"><i class="fa  fa-youtube" aria-hidden="true"></i></a></li>
                        <li><a class="icon-google-plus" href="https://plus.google.com/u/0/b/114901709326239147387/+Ingrammicrocloud" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a class="icon-instagram" href="https://www.instagram.com/ingrammicrocloud/?hl=en" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="corporate-footer">
        <div class="container">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="copyright">&copy; <?php echo date('Y'); ?>. All Rights Reserved. Ingram Micro Inc.</div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8">
                <a href="/about">About Us</a> | 
                <a href="/blog/">Blog</a> |
                <a href="http://phx.corporate-ir.net/phoenix.zhtml?c=98566&p=irol-IRHome">Investor Relations</a> | 
                <a href="/cloud-careers/">Careers</a> |
                <a href="/newsroom/">Newsroom</a> |
                <a href="http://corp.ingrammicro.com/Terms-of-Use/Privacy-Statement.aspx">Privacy</a>
            </div>
        </div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
<script type="text/javascript">
    jQuery.getScript("/wp-content/themes/bandaid/js/custom/global-helpers.js", function () {
        jQuery('nav #business-applications-icon').append(getSvgIcon('business-applications'));
        jQuery('nav #communication-collaboration-icon').append(getSvgIcon('communication-collaboration'));
        jQuery('nav #infrastructure-icon').append(getSvgIcon('infrastructure'));
        jQuery('nav #cloud-management-services-icon').append(getSvgIcon('cloud-management-services'));
        jQuery('nav #security-icon').append(getSvgIcon('security'));
        jQuery('nav #vertical-solutions-icon').append(getSvgIcon('vertical-solutions'));
        jQuery('nav #marketplace-icon').append(getSvgIcon('marketplace'));
        jQuery('nav #referral-icon').append(getSvgIcon('referral'));
        jQuery('nav #store-icon').append(getSvgIcon('store'));
        jQuery('nav #oae-icon').append(getSvgIcon('oae'));
        jQuery('nav #oap-icon').append(getSvgIcon('oap'));
        jQuery('nav #ensim-icon').append(getSvgIcon('ensim'));
    });
</script>
<?php 
$ver= '20161213';
?>
<script type='text/javascript' src='<?php echo get_template_directory_uri() . '/js/custom/global-helpers.js'; ?>?ver=<?php echo $ver; ?>'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri() . '/js/custom/component-nav.js'; ?>?ver=<?php echo $ver; ?>'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri() . '/js/custom/config-vars.js'; ?>?ver=<?php echo $ver; ?>'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri() . '/js/custom/component-footer.js'; ?>?ver=<?php echo $ver; ?>'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri() . '/js/jquery.queryloader2.js'; ?>?ver=<?php echo $ver; ?>'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri() . '/js/jquery.prettyPhoto.js'; ?>?ver=<?php echo $ver; ?>'></script>

<?php if (is_front_page()) { ?>
<script type='text/javascript' src='<?php echo get_template_directory_uri() . '/js/custom/page-home.js'; ?>?ver=<?php echo $ver; ?>'></script>
   <?php } else { 
        if (is_page('become-a-partner')) { ?>
        <script type='text/javascript' src='<?php echo get_template_directory_uri() . '/js/custom/page-become-a-partner.js'; ?>?ver=<?php echo $ver; ?>'></script>
        <?php  } ?>
        <script type='text/javascript' src='<?php echo get_template_directory_uri() . '/js/custom/page-categories.js'; ?>?ver=<?php echo $ver; ?>'></script>             
       
        <?php if (is_page('newsroom') || is_page('newsroom-pagination')) { ?>            
            <script type='text/javascript' src='<?php echo get_template_directory_uri() . '/js/custom/page-newsroom.js'; ?>?ver=<?php echo $ver; ?>'></script>
   <?php  } ?>
       <script type='text/javascript' src='<?php echo get_template_directory_uri() . '/js/custom/component-sidebar-ads.js'; ?>?ver=<?php echo $ver; ?>'></script>        
   <?php  } ?>
    
</body>
</html>