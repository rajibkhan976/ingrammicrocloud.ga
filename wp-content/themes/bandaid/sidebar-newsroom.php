<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bandaid
 */
?>

<div id="sidebar-platform" class="sidebar-container newsroom-sidebar">
    <h3>Media Inquiries</h3>
    <div class="text-section">
        <p>Need commentary or insight into current cloud industry news, trends, or other hot topics? </p>
        <p>If so, please contact our global media relations team for a copy of our latest media kit or to arrange an interview with one of our senior cloud executives or subject matter experts.</p>
        <p>We understand deadlines and will respond immediately.</p>
    </div>
    <a class="a-no-underline" href="#request-demo-form" rel="modal:open">
        <button class="btn btn-default btn-outline-gray">Contact Our global Media relations Team</button>
    </a>
    <div class="hidden">
        <div id="request-demo-form" class="modal request-pricing-form">
            <div class="header-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/ingram-micro-white.png"></img>
            </div>
            <div id="wufoo-qgpnmi70mi1l0q">
                Fill out my <a href="https://channelmarketing.wufoo.com/forms/qgpnmi70mi1l0q">online form</a>.
            </div>
            <script type="text/javascript">
                var qgpnmi70mi1l0q;
                (function (d, t) {
                    var s = d.createElement(t), options = {
                        'userName': 'channelmarketing',
                        'formHash': 'qgpnmi70mi1l0q',
                        'autoResize': true,
                        'height': '637',
                        'async': true,
                        'host': 'wufoo.com',
                        'header': 'show',
                        'ssl': true};
                    s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'www.wufoo.com/scripts/embed/form.js';
                    s.onload = s.onreadystatechange = function () {
                        var rs = this.readyState;
                        if (rs)
                            if (rs != 'complete')
                                if (rs != 'loaded')
                                    return;
                        try {
                            qgpnmi70mi1l0q = new WufooForm();
                            qgpnmi70mi1l0q.initialize(options);
                            qgpnmi70mi1l0q.display();
                        } catch (e) {
                        }
                    };
                    var scr = d.getElementsByTagName(t)[0], par = scr.parentNode;
                    par.insertBefore(s, scr);
                })(document, 'script');
            </script>
        </div>
    </div>
</div>