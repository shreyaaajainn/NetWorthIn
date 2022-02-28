<?php include('header.php') ?>
<!DOCTYPE html>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="pingback" href="xmlrpc.php">
    				<script>document.documentElement.className = document.documentElement.className + ' yes-js js_active js'</script>
            <title>NetWorthIn</title>
<style type="text/css" media="screen">
#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td a.ui-state-active,#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td a.ui-state-active:hover,body #booked-profile-page input[type=submit].button-primary:hover,body .booked-list-view button.button:hover, body .booked-list-view input[type=submit].button-primary:hover,body table.booked-calendar input[type=submit].button-primary:hover,body .booked-modal input[type=submit].button-primary:hover,body table.booked-calendar th,body table.booked-calendar thead,body table.booked-calendar thead th,body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button:hover,body #booked-profile-page .booked-profile-header,body #booked-profile-page .booked-tabs li.active a,body #booked-profile-page .booked-tabs li.active a:hover,body #booked-profile-page .appt-block .google-cal-button > a:hover,#ui-datepicker-div.booked_custom_date_picker .ui-datepicker-header{ background:#c4f2d4 !important; }body #booked-profile-page input[type=submit].button-primary:hover,body table.booked-calendar input[type=submit].button-primary:hover,body .booked-list-view button.button:hover, body .booked-list-view input[type=submit].button-primary:hover,body .booked-modal input[type=submit].button-primary:hover,body table.booked-calendar th,body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button:hover,body #booked-profile-page .booked-profile-header,body #booked-profile-page .appt-block .google-cal-button > a:hover{ border-color:#c4f2d4 !important; }body table.booked-calendar tr.days,body table.booked-calendar tr.days th,body .booked-calendarSwitcher.calendar,body #booked-profile-page .booked-tabs,#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar thead,#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar thead th{ background:#039146 !important; }body table.booked-calendar tr.days th,body #booked-profile-page .booked-tabs{ border-color:#039146 !important; }#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td.ui-datepicker-today a,#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td.ui-datepicker-today a:hover,body #booked-profile-page input[type=submit].button-primary,body table.booked-calendar input[type=submit].button-primary,body .booked-list-view button.button, body .booked-list-view input[type=submit].button-primary,body .booked-list-view button.button, body .booked-list-view input[type=submit].button-primary,body .booked-modal input[type=submit].button-primary,body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button,body #booked-profile-page .booked-profile-appt-list .appt-block.approved .status-block,body #booked-profile-page .appt-block .google-cal-button > a,body .booked-modal p.booked-title-bar,body table.booked-calendar td:hover .date span,body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active,body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active:hover,.booked-ms-modal .booked-book-appt /* Multi-Slot Booking */{ background:#56c477; }body #booked-profile-page input[type=submit].button-primary,body table.booked-calendar input[type=submit].button-primary,body .booked-list-view button.button, body .booked-list-view input[type=submit].button-primary,body .booked-list-view button.button, body .booked-list-view input[type=submit].button-primary,body .booked-modal input[type=submit].button-primary,body #booked-profile-page .appt-block .google-cal-button > a,body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button,body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active,body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active:hover{ border-color:#56c477; }body .booked-modal .bm-window p i.fa,body .booked-modal .bm-window a,body .booked-appt-list .booked-public-appointment-title,body .booked-modal .bm-window p.appointment-title,.booked-ms-modal.visible:hover .booked-book-appt{ color:#56c477; }
.booked-appt-list .timeslot.has-title .booked-public-appointment-title { color:inherit; }
.flip-box {
  background-color: transparent;
  width: 300px;
  height: 200px;
  border: 1px solid #f1f1f1;
  perspective: 1000px;
}

.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);
}

.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-box-front {
  background-color: #bbb;
  color: black;
}

.flip-box-back {
  background-color: #555;
  color: white;
  transform: rotateY(180deg);
  
}

</style>
        <script type="text/javascript">
            var custom_blog_css = "";
            if (document.getElementById("custom_blog_styles")) {
                document.getElementById("custom_blog_styles").innerHTML += custom_blog_css;
            } else if (custom_blog_css !== "") {
                document.head.innerHTML += '<style id="custom_blog_styles" type="text/css">'+custom_blog_css+'</style>';
            }
        </script>
                            <script>
                            /* You can add more configuration options to webfontloader by previously defining the WebFontConfig with your options */
                            if ( typeof WebFontConfig === "undefined" ) {
                                WebFontConfig = new Object();
                            }
                            WebFontConfig['google'] = {families: ['Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic']};

                            (function() {
                                var wf = document.createElement( 'script' );
                                wf.src = '../../../../ajax.googleapis.com/ajax/libs/webfont/1.5.3/webfont.js';
                                wf.type = 'text/javascript';
                                wf.async = 'true';
                                var s = document.getElementsByTagName( 'script' )[0];
                                s.parentNode.insertBefore( wf, s );
                            })();
                        </script>
                        <meta name='robots' content='max-image-preview:large' />
<link rel='dns-prefetch' href='http://s.w.org/' />
<link rel="alternate" type="application/rss+xml" title="Tech Therapy&raquo; Feed" href="feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="Tech Therapy&raquo; Comments Feed" href="comments/feed/index.html" />
<meta property="og:title" content="Home I"/><meta property="og:type" content="article"/><meta property="og:url" content="https://livewp.site/wp/md/optima/"/><meta property="og:site_name" content="Optima"/><meta property="og:image" content="https://livewp.site/wp/md/optima/wp-content/uploads/sites/15/2018/02/logo-1.png"/>		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/livewp.site\/wp\/md\/optima\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.7.2"}};
			!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([55357,56424,8205,55356,57212],[55357,56424,8203,55356,57212])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='flick-css'  href='wp-content/plugins/mailchimp/css/flick/flick9f31.css?ver=5.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='mailchimpSF_main_css-css'  href='wp/md/optima/index4833.html?mcsf_action=main_css&amp;ver=5.7.2' type='text/css' media='all' />
<!--[if IE]>
<link rel='stylesheet' id='mailchimpSF_ie_css-css'  href='https://livewp.site/wp/md/optima/wp-content/plugins/mailchimp/css/ie.css?ver=5.7.2' type='text/css' media='all' />
<![endif]-->
<link rel='stylesheet' id='sb_instagram_styles-css'  href='wp-content/plugins/instagram-feed/css/sbi-styles.minbf47.css?ver=2.9.1' type='text/css' media='all' />
<link rel='stylesheet' id='wp-block-library-css'  href='wp-includes/css/dist/block-library/style.min9f31.css?ver=5.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='wc-block-vendors-style-css'  href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/vendors-style0e7d.css?ver=5.1.0' type='text/css' media='all' />
<link rel='stylesheet' id='wc-block-style-css'  href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/style0e7d.css?ver=5.1.0' type='text/css' media='all' />
<link rel='stylesheet' id='jquery-selectBox-css'  href='wp-content/plugins/yith-woocommerce-wishlist/assets/css/jquery.selectBox7359.css?ver=1.2.0' type='text/css' media='all' />
<link rel='stylesheet' id='yith-wcwl-font-awesome-css'  href='wp-content/plugins/yith-woocommerce-wishlist/assets/css/font-awesome1849.css?ver=4.7.0' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce_prettyPhoto_css-css'  href='wp-content/plugins/woocommerce/assets/css/prettyPhoto005e.css?ver=3.1.6' type='text/css' media='all' />
<link rel='stylesheet' id='yith-wcwl-main-css'  href='wp-content/plugins/yith-woocommerce-wishlist/assets/css/style7ee6.css?ver=3.0.23' type='text/css' media='all' />
<link rel='stylesheet' id='booked-icons-css'  href='wp-content/plugins/booked/assets/css/iconsa361.css?ver=2.3' type='text/css' media='all' />
<link rel='stylesheet' id='booked-tooltipster-css'  href='wp-content/plugins/booked/assets/js/tooltipster/css/tooltipster9b70.css?ver=3.3.0' type='text/css' media='all' />
<link rel='stylesheet' id='booked-tooltipster-theme-css'  href='wp-content/plugins/booked/assets/js/tooltipster/css/themes/tooltipster-light9b70.css?ver=3.3.0' type='text/css' media='all' />
<link rel='stylesheet' id='booked-animations-css'  href='wp-content/plugins/booked/assets/css/animationsa361.css?ver=2.3' type='text/css' media='all' />
<link rel='stylesheet' id='booked-css-css'  href='wp-content/plugins/booked/dist/bookeda361.css?ver=2.3' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='wp-content/plugins/contact-form-7/includes/css/stylesc225.css?ver=5.4.1' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-layout-css'  href='wp-content/plugins/woocommerce/assets/css/woocommerce-layoutc225.css?ver=5.4.1' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-smallscreen-css'  href='wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreenc225.css?ver=5.4.1' type='text/css' media='only screen and (max-width: 768px)' />
<link rel='stylesheet' id='woocommerce-general-css'  href='wp-content/plugins/woocommerce/assets/css/woocommercec225.css?ver=5.4.1' type='text/css' media='all' />
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel='stylesheet' id='gt3_default_style-css'  href='wp-content/themes/optima/style9f31.css?ver=5.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='gt3_theme_icon-css'  href='wp-content/themes/optima/fonts/theme-font/theme_icon9f31.css?ver=5.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='font_awesome-css'  href='wp-content/themes/optima/css/font-awesome.min1849.css?ver=4.7.0' type='text/css' media='all' />
<link rel='stylesheet' id='gt3_theme-css'  href='wp-content/themes/optima/css/theme9f31.css?ver=5.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='gt3_composer-css'  href='wp-content/themes/optima/css/base_composer9f31.css?ver=5.7.2' type='text/css' media='all' />
<style id='gt3_composer-inline-css' type='text/css'>
/* Custom CSS */body,.woocommerce ul.products li.product h3,.woocommerce form .qty,.woocommerce form .variations select,body .widget .yit-wcan-select-open,body .widget-hotspot {font-family:Lato;}body {background:#ffffff;font-size:16px;line-height:24px;font-weight:400;color: #5c656d;}ol.commentlist:after{background:#ffffff;}.gt3-page-title__content .breadcrumbs a,blockquote .blockquote-01__author,.gt3_team_list__item--content_on_right_side.gt3_team_list__item .gt3_team_list_social__item,.gt3_team_list__item--content_on_right_side .gt3_team_list__position,.gt3_portfolio_single .gt3_portfolio__footer .gt3_portfolio_info__item_share li a,.share_wrap a span:before,.woocommerce-cart .cart_totals table.shop_table .shipping-calculator-button,.woocommerce table.shop_table td,.wrapper_404 .pp_container p {color: #5c656d;}.gt3-page-title.gt3-page-title_small_header h1,.gt3-page-title.gt3-page-title_small_header,.comment-reply-link,.comment_info,.recent_posts_content .listing_meta,.tagcloud a,.gt3_portfolio_info__item_tag_wrapper a,.widget .calendar_wrap table thead,.widget .calendar_wrap table tfoot,.widget.widget_archive ul li,.widget.widget_categories ul li,.gt3_widget.widget_nav_menu .menu .menu-item,.widget.widget_pages ul li,.widget.widget_meta ul li,.widget.widget_recent_comments ul li,.widget.widget_recent_entries ul li,.widget.widget_nav_menu ul li,.blog_post_preview.format-quote .post_media_info,.item-team-member .team-positions,.gt3_practice_list__filter,.isotope-filter,.single-member-page .team_info h5,.gt3_twitter,.gt3_module_featured_posts .listing_meta,.blog_post_preview .listing_meta,.blog_post_preview .learn_more,.top_header,.main_footer > .top_footer,.main_footer > .copyright,.main_footer .widget-title,.module_testimonial.type2 .testimonials_title,input[type="submit"],input[type="date"],input[type="email"],input[type="number"],input[type="password"],input[type="search"],input[type="tel"],input[type="text"],input[type="url"],select,textarea,.price_item .shortcode_button,.price_item .item_cost_wrapper h3,.gt3_image_box .gt3_icon_box__title h2,.gt3_image_box .gt3_icon_box__title h3,.gt3_image_box .gt3_icon_box__title h4,.gt3_image_box .gt3_icon_box__title h5,.gt3_image_box .gt3_icon_box__title h6,.gt3_icon_box__link .learn_more,.gt3_practice_list__title,.gt3_practice_list__title a,.gt3_practice_list__link,.wpb_heading.wpb_pie_chart_heading,.vc_row .vc_tta.vc_general.vc_tta-style-accordion_bordered .vc_tta-panel-title>a span,.stripe_item-title,.countdown-section .countdown-amount,.countdown-period,.icon-box_number,.gt3_module_button {font-family:Lato;}/* Custom Fonts */.learn-press-content-item-only .navigation.post-navigation .nav-link .post-title,.gt3_team_list__item.gt3_team_list__item--content_on_bottom .gt3_team_list__title_link .gt3_team_list__title,.vc_tta.vc_tta-tabs.vc_tta-o-shape-group.vc_tta-tabs-position-top .vc_tta-panels-container .vc_tta-panel-body ul li,.gt3_dark_pie .vc_pie_wrapper span.vc_pie_chart_value,.gt3_dark_pie .vc_pie_chart h4.wpb_heading.wpb_pie_chart_heading,blockquote p,h1, h1 span, h1 a,h2, h2 span, h2 a,h3, h3 span, h3 a,h4, h4 span, h4 a,h5, h5 span, h5 a,h6, h6 span, h6 a,.calendar_wrap tbody,.vc_tta.vc_general .vc_tta-tab,.widget.widget_posts .recent_posts .post_title a,.module_testimonial.type3 .testimonials_title,.gt3_team_list__item--content_on_right_side .gt3_team_list__title,.widget.gt3_widget.woocommerce ul li a,.main_footer .widget.gt3_widget.widget_nav_menu ul li a:hover,.search .wrapper_404 h2,.wrapper_404 .pp_container h2 {color: #42474c;}.learn-press-content-item-only .navigation.post-navigation .nav-link .post-title,h1, h1 span, h1 a,h2, h2 span, h2 a,h3, h3 span, h3 a,h4, h4 span, h4 a,h5, h5 span, h5 a,h6, h6 span, h6 a,.strip_template .strip-item a span,.column1 .item_title a,.index_number,.price_item_btn a,.prev_next_links a b,.shortcode_tab_item_title,.gt3_twitter .twitt_title {font-family: Lato;font-weight: 300}h1, h1 a, h1 span {font-size:42px;line-height:53px;}h2, h2 a, h2 span {font-size:34px;line-height:38px;}h3, h3 a, h3 span,.sidepanel .title,.gt3_module_blog:not(.items1) .blogpost_title,.gt3_module_blog:not(.items1) .blogpost_title a{font-size:30px;line-height:36px;}h4, h4 a, h4 span,.prev_next_links a b {font-weight:400;font-size:24px;line-height:28px;}h5, h5 a, h5 span {font-weight:700;font-size:14px;line-height:24px;}h6, h6 a, h6 span {font-weight:700;font-size:12px;line-height:20px;}.diagram_item .chart,.item_title a,.contentarea ul {color:#42474c;}.vc_row .vc_progress_bar:not(.vc_progress-bar-color-custom) .vc_single_bar .vc_label:not([style*="color"]) span{color: #42474c !important;}/* Theme color */blockquote:before,a,#back_to_top:hover,.top_footer a:hover,body .learn-press-user-profile .user-basic-info p a,.gt3_header_builder a:hover,.gt3_header_builder .gt3_header_builder_component.gt3_header_builder_text_component i,.main-menu>ul>li:hover>a>span,.main-menu>ul>li:hover>a:after,.main-menu ul li ul .menu-item a:hover,.main-menu ul li ul .menu-item.current-menu-item > a,.main-menu ul li.menu-item.current-menu-ancestor > a,.main-menu ul li.menu-item.current-menu-item > a,.widget.widget_archive ul li:hover:before,.widget.widget_categories ul li:hover:before,.widget.widget_pages ul li:hover:before,.widget.widget_meta ul li:hover:before,.widget.widget_recent_comments ul li:hover:before,.widget.widget_recent_entries ul li:hover:before,.widget.widget_nav_menu ul li:hover:before,.widget.widget_archive ul li:hover > a,.widget.widget_categories ul li:hover > a,.widget.widget_pages ul li:hover > a,.widget.widget_meta ul li:hover > a,.widget.widget_recent_comments ul li:hover > a,.widget.widget_recent_entries ul li:hover > a,.widget.widget_nav_menu ul li:hover > a,.top_footer .widget.widget_archive ul li > a:hover,.top_footer .widget.widget_categories ul li > a:hover,.top_footer .widget.widget_pages ul li > a:hover,.top_footer .widget.widget_meta ul li > a:hover,.top_footer .widget.widget_recent_comments ul li > a:hover,.top_footer .widget.widget_recent_entries ul li > a:hover,.top_footer .widget.widget_nav_menu ul li > a:hover,.calendar_wrap thead,.gt3_practice_list__image-holder i,.load_more_works:hover,.price_item .shortcode_button:hover,.price_item .shortcode_button.alt,.copyright a:hover,.module_team .team_title a:hover,.module_testimonial.type2 .testimonials-text:before,input[type="submit"]:hover,button:hover,.price_item .items_text ul li:before,.gt3_practice_list__title a:hover,.mc_form_inside #mc_signup_submit:hover,.pre_footer input[type="submit"]:hover,#learn-press-form-login input[type="submit"]:hover,.main_wrapper ul li:before,.team-icons .member-icon:hover,.gt3-page-title__content .breadcrumbs .delimiter,.gt3-page-title__content .gt3_breadcrumb .delimiter:before,.gt3-page-title__content .breadcrumbs a:hover,.comment-reply-link:hover,.prev_next_links a:hover,body .wpml-ls-legacy-dropdown a:hover,.single-team .gt3_single_team_socials__item a:hover,.gt3_team_list__item--content_on_right_side.gt3_team_list__item .gt3_team_list_social__item:hover,.gt3_team_list__item--content_on_right_side .gt3_team_list__title:hover,.gt3_portfolio_single .gt3_portfolio__footer .gt3_portfolio_info__item_share li a:hover,.share_wrap a span:hover:before,.widget.widget_product_categories ul.children li>a:hover,.widget.widget_product_categories ul li > a:hover,.widget.gt3_widget.woocommerce ul li a:hover,.main_footer .widget.gt3_widget.widget_nav_menu ul li a{color: #4eaac8;}.price_item .item_cost_wrapper h3 {color: #4eaac8;}body .gt3_custom_text p a {color: #4eaac8;}body.wpb-js-composer .vc_tta.vc_general.vc_tta-tabs .vc_tta-tab.vc_active a,body .vc_tta.vc_tta-tabs .vc_tta-panel.vc_active .vc_tta-panel-heading .vc_tta-panel-title>a{background-color: #271d57;}.pagerblock li a:hover,.pagerblock li a:focus,.learn-press-pagination .page-numbers li a:hover,.learn-press-pagination .page-numbers li a:focus,.price_item .item_cost_wrapper .bg-color,.main_menu_container .menu_item_line,.load_more_works,.content-container .vc_progress_bar .vc_single_bar .vc_bar,input[type="submit"],button,.mc_form_inside #mc_signup_submit,.pre_footer input[type="submit"],.wpb_images_carousel .vc_images_carousel .vc_carousel-control:hover,.gt3_module_title .carousel_arrows a:hover,.grid_load_more,.packery_load_more {background-color: #4eaac8;}.calendar_wrap caption,.widget .calendar_wrap table td#today:before,.price_item .shortcode_button,.price_item .shortcode_button.alt:hover{background: #4eaac8;}.gt3_module_button a,#back_to_top {border-color: #4eaac8;background: #4eaac8;}.gt3_submit_wrapper:hover > i,.gt3_team_list__item--content_on_bottom .gt3_team_list__content .gt3_team_list__title_link .gt3_team_list__title:hover{color:#4eaac8;}ul.pagerblock li a,ul.pagerblock li span,.learn-press-pagination ul.page-numbers li span,.price_item .shortcode_button,.load_more_works,.vc_row .vc_tta.vc_tta-style-accordion_alternative .vc_tta-controls-icon.vc_tta-controls-icon-plus::before,.vc_row .vc_tta.vc_tta-style-accordion_alternative .vc_tta-controls-icon.vc_tta-controls-icon-plus::after,.vc_row .vc_tta.vc_tta-style-accordion_alternative .vc_tta-controls-icon.vc_tta-controls-icon-chevron::before,.vc_row .vc_tta.vc_tta-style-accordion_alternative .vc_tta-controls-icon.vc_tta-controls-icon-triangle::before,button {border-color: #4eaac8;}.woocommerce-cart table.cart td.actions>.button,.woocommerce-cart .shipping-calculator-form .button,.woocommerce ul.product_list_widget li .gt3-widget-product-wrapper ins .woocommerce-Price-amount {color: #4eaac8;}.woocommerce-cart table.cart td.actions > .button:hover {border-color: #271d57;}.gt3_portfolio_list__item .swipebox.links_block_title:hover::before,.gt3_portfolio_list__item .links_block_title:hover::before {background-color: #4eaac8;}.gt3_module_button a:hover {border-color: #4eaac8;}.isotope-filter a:hover,.isotope-filter a.active,.gt3_practice_list__filter a:hover, .gt3_practice_list__filter a.active {border-bottom-color: #4eaac8;}.gt3_module_button a:hover,.gt3_module_button a:hover .gt3_btn_icon.fa {color: #4eaac8;}.widget_nav_menu .menu .menu-item:before,.gt3_icon_box__link a:before,.module_team .view_all_link:before {background-color: #4eaac8;}.widget_nav_menu .menu .menu-item:hover>a,.single-member-page .team-link:hover,.module_team .view_all_link {color: #4eaac8;}.module_team .view_all_link:after {border-color: #4eaac8;}/* menu fonts */.main-menu>ul,.main-menu>ul>li,.main-menu>div>ul {font-family:Lato;font-weight:400;line-height:20px;font-size:16px;}/* sub menu styles */.main-menu ul li ul,.main_header .header_search__inner .search_form,.mobile_menu_container {background-color: rgba(255,255,255,1) ;color: #303638 ;}.main_header .header_search__inner .search_text::-webkit-input-placeholder {color: #303638 !important;}.main_header .header_search__inner .search_text:-moz-placeholder {color: #303638 !important;}.main_header .header_search__inner .search_text::-moz-placeholder {color: #303638 !important;}.main_header .header_search__inner .search_text:-ms-input-placeholder {color: #303638 !important;}.header_search__inner .search_text {color: #303638;}/* blog */.listing_meta a,.like_count,.likes_block .icon,ul.pagerblock li a,ul.pagerblock li span,.learn-press-pagination ul.page-numbers li a,.learn-press-pagination ul.page-numbers li span,.gt3_module_featured_posts .listing_meta,.gt3_module_featured_posts .listing_meta a,.recent_posts .listing_meta a:hover,.comment-reply-link,.prev_next_links a,.tagcloud a{color: #5c656d;}.tagcloud a:hover,.gt3_portfolio_info__item_tag_wrapper a:hover{border: 1px solid #4eaac8;}.post_share > a,.listing_meta a:hover,.blogpost_title a:hover,.post_share:hover > a:before,.gt3_module_featured_posts .listing_meta a:hover,.recent_posts .listing_meta a,.widget.widget_posts .recent_posts li > .recent_posts_content .post_title a:hover,.gt3_portfolio_list .gt3_portfolio_list__item .gt3_portfolio_list__title_link .gt3_portfolio_list__title:hover,.format-link .blogpost_title a:hover {color: #4eaac8;}.tagcloud a:hover,.gt3_portfolio_info__item_tag_wrapper a:hover{background: #4eaac8;}.listing_meta span:after{border-color: transparent transparent transparent #4eaac8;}.blogpost_title i {color: #4eaac8;}.learn_more:hover,.module_team .view_all_link:hover {color: #42474c;}.module_team .view_all_link:hover:before{background-color: #42474c;}.module_team .view_all_link:hover:after {border-color: #42474c;}.learn_more span,.gt3_module_title .carousel_arrows a:hover span,.prev_next_links a span i {background: #4eaac8;}.learn_more span:before,.gt3_module_title .carousel_arrows a:hover span:before,.prev_next_links a:hover span i:before {border-color: #4eaac8;}.learn_more:hover span,.gt3_module_title .carousel_arrows a span {background: #42474c;}.learn_more:hover span:before,.gt3_module_title .carousel_arrows a span:before {border-color: #42474c;}.likes_block:hover .icon,.likes_block.already_liked .icon,.isotope-filter a:hover,.isotope-filter a.active {color: #4eaac8;}.post_media_info,.gt3_practice_list__filter {color: #42474c;}.post_media_info:before {background: #42474c;}ul.pagerblock li a.current,ul.pagerblock li span {background: #4eaac8;}.gt3_module_title .external_link .learn_more {line-height:24px;}.blog_type1 .blog_post_preview:before {background: #42474c;}body .learn-press-user-profile .learn-press-tabs > li,body .learn-press-tabs .learn-press-nav-tabs .learn-press-nav-tab,.post_share > a:before,.share_wrap a span {font-size:16px;}h3#reply-title a,.comment_author_says a:hover,.prev_next_links a:hover b,.dropcap,.gt3_custom_text a,.gt3_custom_button i {color: #4eaac8;}h3#reply-title a:hover,.comment_author_says,.comment_author_says a,.prev_next_links a b {color: #42474c;}.main_wrapper ol > li:before,.main_footer ul li:before,.gt3_twitter a {color: #4eaac8;}body.wpb-js-composer .vc_toggle.vc_toggle_active .vc_toggle_title > h4,body.wpb-js-composer .vc_general.vc_tta-accordion.vc_tta-style-classic .vc_tta-panels .vc_tta-panel.vc_active .vc_tta-panel-title a span,body.wpb-js-composer .vc_general.vc_tta-accordion.vc_tta-style-accordion_bordered .vc_tta-panels .vc_tta-panel.vc_active .vc_tta-panel-heading .vc_tta-panel-title a span,body.wpb-js-composer .vc_general.vc_tta-accordion.vc_tta-style-accordion_solid.gt3_accordion_custom_color .vc_tta-panels .vc_tta-panel.vc_active .vc_tta-panel-title a span {color: #4eaac8;}body.wpb-js-composer .vc_general.vc_tta-accordion.vc_tta-style-accordion_solid .vc_tta-panels .vc_tta-panel.vc_active .vc_tta-panel-title a,body.wpb-js-composer .vc_toggle.vc_toggle_active.vc_toggle_accordion_solid .vc_toggle_title,body.wpb-js-composer .vc_toggle.vc_toggle_active.vc_toggle_accordion_alternative .vc_toggle_title {background-color: #4eaac8;}body.wpb-js-composer .vc_toggle.vc_toggle_active .vc_toggle_title .vc_toggle_icon::before,body.wpb-js-composer .vc_general.vc_tta-accordion.vc_tta-style-accordion_bordered .vc_tta-panels .vc_tta-panel.vc_active .vc_tta-panel-heading,body.wpb-js-composer .vc_general.vc_tta-accordion.vc_tta-style-classic .vc_tta-panels .vc_tta-panel.vc_active .vc_tta-controls-icon.vc_tta-controls-icon-plus::before,body.wpb-js-composer .vc_general.vc_tta-accordion .vc_tta-panels .vc_tta-panel.vc_active .vc_tta-controls-icon.vc_tta-controls-icon-chevron::before,body.wpb-js-composer .vc_general.vc_tta-accordion .vc_tta-panels .vc_tta-panel.vc_active .vc_tta-controls-icon.vc_tta-controls-icon-chevron::before,body.wpb-js-composer .vc_general.vc_tta-accordion.vc_tta-style-classic .vc_tta-panels .vc_tta-panel.vc_active .vc_tta-controls-icon.vc_tta-controls-icon-triangle::before,body.wpb-js-composer .vc_general.vc_tta-accordion.vc_tta-style-accordion_bordered .vc_tta-panels .vc_tta-panel.vc_active .vc_tta-controls-icon.vc_tta-controls-icon-triangle::before,body.wpb-js-composer .vc_general.vc_tta-accordion.vc_tta-style-accordion_bordered .vc_tta-panels .vc_tta-panel.vc_active .vc_tta-controls-icon.vc_tta-controls-icon-plus::before,body.wpb-js-composer .vc_toggle.vc_toggle_active.vc_toggle_classic.vc_toggle_color_chevron .vc_toggle_title .vc_toggle_icon::before,body.wpb-js-composer .vc_toggle.vc_toggle_active.vc_toggle_accordion_bordered .vc_toggle_title,body.wpb-js-composer .vc_toggle.vc_toggle_active.vc_toggle_accordion_bordered.vc_toggle_color_chevron .vc_toggle_title .vc_toggle_icon::before,body.wpb-js-composer .vc_toggle.vc_toggle_active.vc_toggle_accordion_alternative .vc_toggle_title {border-color: #4eaac8;}.icon-box_number {background-color: #271d57;}::-moz-selection{background: #4eaac8;}::selection{background: #4eaac8;}.gt3_single_team_socials__item a {color: rgba(92,101,109, 0.4);}.woocommerce .wishlist_table td.product-add-to-cart a {border-color: #4eaac8;background: #4eaac8;}.woocommerce .wishlist_table td.product-add-to-cart a:hover,.woocommerce .widget_shopping_cart .buttons a:hover,.woocommerce.widget_shopping_cart .buttons a:hover,.gt3_header_builder_cart_component .button:hover {color:#4eaac8;}.woocommerce ul.products li.product .price,.woocommerce .widget_price_filter .price_slider_amount .price_label span,.widget.gt3_widget.woocommerce ul li:hover{color:#4eaac8;}.woocommerce .widget_shopping_cart .total,.woocommerce.widget_shopping_cart .total {color: #42474c;}.gt3_header_builder_cart_component.woocommerce .woo_icon .woo_mini-count span {background-color: #271d57;}#customer_login .woocommerce-LostPassword a,.gt3_header_builder__login-modal_container .woocommerce-LostPassword a,.woo_mini-count > span:not(:empty) {color: #271d57;}.main_header .sticky_header .header_search {height: 0px !important;}.gt3_practice_list__overlay:before,.stripe_item:after{background-color: #4eaac8;}input::-webkit-input-placeholder,textarea::-webkit-input-placeholder {color: #42474c;}input:-moz-placeholder,textarea:-moz-placeholder { /* Firefox 18- */color: #42474c;}input::-moz-placeholder,textarea::-moz-placeholder {/* Firefox 19+ */color: #42474c;}input:-ms-input-placeholder,textarea:-ms-input-placeholder {color: #42474c;}.top_footer .widget-title,.top_footer .widget.widget_posts .recent_posts li > .recent_posts_content .post_title a,.top_footer .widget.widget_archive ul li > a,.top_footer .widget.widget_categories ul li > a,.top_footer .widget.widget_pages ul li > a,.top_footer .widget.widget_meta ul li > a,.top_footer .widget.widget_recent_comments ul li > a,.top_footer .widget.widget_recent_entries ul li > a,.top_footer strong {color: #42474c ;}.top_footer{color: #5c656d;}.main_footer .copyright {color: #42474c;}.content-container .vc_progress_bar .vc_single_bar .vc_bar {background:linear-gradient(to right, #83c3d8, #3d3272);}body table.booked-calendar thead th, .ooooooo {background: #4eaac8 !important;}body table.booked-calendar tr.days,body table.booked-calendar tr.days th,body .booked-modal p.booked-title-bar {background: #271d57 !important;}#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td.ui-datepicker-today a,#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td.ui-datepicker-today a:hover,body #booked-profile-page input[type=submit].button-primary,body table.booked-calendar input[type=submit].button-primary,body .booked-list-view button.button, body .booked-list-view input[type=submit].button-primary,body .booked-list-view button.button, body .booked-list-view input[type=submit].button-primary,body .booked-modal input[type=submit].button-primary,body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button,body #booked-profile-page .booked-profile-appt-list .appt-block.approved .status-block,body #booked-profile-page .appt-block .google-cal-button > a,body .booked-modal p.booked-title-bar,body table.booked-calendar td:hover .date span,body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active,body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active:hover,.booked-ms-modal .booked-book-appt {background:#4eaac8;}body #booked-profile-page input[type=submit].button-primary,body table.booked-calendar input[type=submit].button-primary,body .booked-list-view button.button, body .booked-list-view input[type=submit].button-primary,body .booked-list-view button.button, body .booked-list-view input[type=submit].button-primary,body .booked-modal input[type=submit].button-primary,body #booked-profile-page .appt-block .google-cal-button > a,body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button,body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active,body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active:hover {border-color:#4eaac8;}body .booked-modal .bm-window p i.fa,body .booked-modal .bm-window a,body .booked-appt-list .booked-public-appointment-title,body .booked-modal .bm-window p.appointment-title,.booked-ms-modal.visible:hover .booked-book-appt,body .booked-calendar-wrap .booked-appt-list .timeslot .timeslot-title,body .booked-form .booked-appointments .appointment-info i,body .booked-calendar-wrap .booked-appt-list .timeslot .timeslot-time i.booked-icon {color:#4eaac8;}.booked-appt-list .timeslot.has-title .booked-public-appointment-title {color:inherit;}body table.booked-calendar td.today .date span {border:1px solid #4eaac8;}body table.booked-calendar td.today:hover .date span {background:#4eaac8 !important;}body .booked-form .field label.field-label,body .booked-modal .bm-window p.appointment-info {color:#42474c;}body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button:hover,body .booked-modal input[type="submit"].button-primary:hover,body .booked-modal button.cancel:hover {background:#271d57 !important;border-color:#271d57 !important;}body #booked-profile-page input[type="submit"],body #booked-profile-page button,body .booked-list-view input[type="submit"],body .booked-list-view button,body table.booked-calendar input[type="submit"],body table.booked-calendar button,body .booked-modal input[type="submit"],body .booked-modal button,body .tooltipster-light .tooltipster-content {font-family:Lato;}body .booked-modal button.cancel {border-color:#4eaac8 !important;}.gt3_services_box_content {background: #4eaac8;font-family:Lato;}.gt3_services_img_bg {background-color: #4eaac8;}.widget_search .search_form:before {background-color: #4eaac8;}.widget_search .search_form:hover:before{background-color: #271d57;}ul.pagerblock li a:hover,.woocommerce nav.woocommerce-pagination ul li a:focus,.woocommerce nav.woocommerce-pagination ul li a:hover,.woocommerce-Tabs-panel h2,.woocommerce-Tabs-panel h2 span,.woocommerce ul.product_list_widget li .gt3-widget-product-wrapper .product-title,.woocommerce-cart .cart_totals h2,.woocommerce-checkout h3,.woocommerce-checkout h3 span,.gt3-shop-product .gt3-product-title {font-family:Lato;}.easyzoom-flyout,.products.hover_bottom li.product:hover .gt3-product-info{background:#ffffff;}.gt3-category-item__title {font-family: Lato;}.yith-wcwl-add-button .add_to_wishlist,.widget.widget_product_categories ul li.current-cat > a,.woocommerce div.product span.price,.woocommerce div.product form.cart .button:hover,.main_wrapper .image_size_popup_button,.woocommerce .gt3_woocommerce_top_filter_button span:hover,.woocommerce .widget_layered_nav ul li.chosen a,body public-modal .public-hotspot-info-holder .public-hotspot-info .public-hotspot-info__btn-buy.snpt-cta-btn:hover>span,.product_share > a{color: #271d57;}.woocommerce ul.products li.product .price del,.widget.widget_product_categories ul.children li > a,.woocommerce #reviews .comment-reply-title,.woocommerce.single-product #respond #commentform .comment-form-rating label,.woocommerce ul.product_list_widget li .gt3-widget-product-wrapper .product-title,.woocommerce ul.product_list_widget li .gt3-widget-product-wrapper ins,.widget.widget_product_categories > ul > li > a,.widget.widget_product_categories > ul > li > a:before,.woocommerce table.shop_table thead th,.woocommerce-cart .cart_totals h2,.woocommerce form.woocommerce-checkout .form-row label,.woocommerce form.woocommerce-form-login .form-row label,.woocommerce-checkout h3,.woocommerce-checkout h3 span,.woocommerce form .form-row .required,.woocommerce table.woocommerce-checkout-review-order-table tfoot th,#add_payment_method #payment label,.woocommerce-cart #payment label,.woocommerce-checkout #payment label,.woocommerce div.product .gt3-product_info-wrapper span.price ins,.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover,.woocommerce-cart .cart_totals table.shop_table tr th{color: #42474c;}.gt3-category-item__title {color: #42474c !important;}.woocommerce #reviews #respond input#submit,.woocommerce #reviews a.button,.woocommerce #reviews button.button,.woocommerce #reviews input.button,body.woocommerce a.button,#yith-quick-view-close:after,#yith-quick-view-close:before,#yith-quick-view-content .slick-prev,#yith-quick-view-content .slick-next,.image_size_popup .close:hover:before,.image_size_popup .close:hover:after,.cross-sells .slick-prev,.cross-sells .slick-next,.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,.woocommerce #respond input#submit.alt:hover,.woocommerce button.button.alt:hover,.woocommerce input.button.alt:hover {background-color: #4eaac8;}.woocommerce div.product p.price {color: #4eaac8;}.woocommerce a.button,.woocommerce #respond input#submit.alt,.woocommerce button.button.alt,.woocommerce input.button.alt,.woocommerce #respond input#submit,.woocommerce button.button,.woocommerce input.button,.woocommerce .woocommerce-message a.woocommerce-Button.button,.woocommerce .widget_layered_nav ul.yith-wcan-label li a:hover,.woocommerce-page .widget_layered_nav ul.yith-wcan-label li a:hover,.woocommerce .widget_layered_nav ul.yith-wcan-label li.chosen a,.woocommerce-page .widget_layered_nav ul.yith-wcan-label li.chosen a{background-color: #4eaac8;border-color: #4eaac8;}.woocommerce a.button:hover,.woocommerce .widget_price_filter .price_slider_amount .button:hover,.gt3-woo-filter .product-filter.active,.gt3-woo-filter .product-filter:hover,#yith-quick-view-modal .woocommerce div.product p.price ins,.single-product.woocommerce div.product p.price ins,.woocommerce div.product .gt3-product_info-wrapper span.price ins,#yith-quick-view-content .product_meta,.woocommerce div.product form.cart .variations td,.woocommerce div.product .gt3-single-product-sticky .woocommerce-tabs ul.tabs li.active a,.gt3-product-title_quantity,.woocommerce #respond input#submit:hover,.woocommerce button.button:hover,.woocommerce input.button:hover,.woocommerce #respond input#submit.alt,.woocommerce button.button.alt,.woocommerce input.button.alt,.widget_product_search .woocommerce-product-search:before,.gt3-product-outofstock .gt3-product-outofstock__inner,body div[id*="ajaxsearchlitesettings"].searchsettings .label,body .widget .yit-wcan-select-open,.woocommerce .widget_layered_nav ul.yith-wcan-label li a,.woocommerce-page .widget_layered_nav ul.yith-wcan-label li a,.woocommerce .widget_layered_nav ul.yith-wcan-label li span,.woocommerce-page .widget_layered_nav ul.yith-wcan-label li span,.woocommerce div.product span.price ins,.gt3_social_links .gt3_social_icon span,.cart-collaterals .cart_totals .shop_table .cart-subtotal .woocommerce-Price-amount,.cart-collaterals .cart_totals .shop_table .order-total .woocommerce-Price-amount,.woocommerce-cart table.cart td.actions button.button{color: #4eaac8;}.woocommerce-message::before {color: #4eaac8;}.woocommerce div.product .woocommerce-tabs ul.tabs li.active a {background-color: #271d57;}.woocommerce div.product .woocommerce-tabs ul.tabs li a:before,.woocommerce .widget_price_filter .ui-slider .ui-slider-range,.woocommerce-cart table.cart td.actions>.button:hover,.woocommerce-cart .shipping-calculator-form .button:hover,.woocommerce button.button.alt.disabled,.woocommerce button.button.alt.disabled:hover,#yith-quick-view-content .onsale,.yith-wcwl-add-button:hover,.woocommerce .gt3_woocommerce_top_filter_button span,body public-modal .public-hotspot-info-holder .public-hotspot-info .public-hotspot-info__btn-buy.snpt-cta-btn,.no-touch body .snpt-pict-item:hover .widget-hotspot,.no-touch body .snptwdgt__item:hover .widget-hotspot {background-color: #271d57;}.woocommerce span.onsale.hot-product,.woocommerce div.product form.cart .button:hover {background-color: #271d57;}.woocommerce div.product form.cart .button:hover {border-color: #271d57;}.woocommerce div.product form.cart .button,.woocommerce span.onsale.new-product,.woocommerce .widget_price_filter .ui-slider-horizontal .ui-slider-range,.woocommerce .widget_price_filter .ui-slider .ui-slider-handle{background-color: #4eaac8;}.yith-wcwl-add-button:hover,.woocommerce .gt3_woocommerce_top_filter_button span,body public-modal .public-hotspot-info-holder .public-hotspot-info .public-hotspot-info__btn-buy.snpt-cta-btn {border-color: #271d57;}.woocommerce div.product .woocommerce-tabs ul.tabs li a:after {border-bottom-color: #271d57 !important;}body div[id*="ajaxsearchlitesettings"].searchsettings .option label:after,.woocommerce .widget_layered_nav ul li a::before,.woocommerce .widget_layered_nav_filters ul li a::before{-webkit-box-shadow: inset 0px 0px 0px 1px #e4e5de, inset 0px 0px 0px 8px #fff, inset 0px 0px 0px 5px #271d57;box-shadow: inset 0px 0px 0px 1px #e4e5de, inset 0px 0px 0px 8px #fff, inset 0px 0px 0px 5px #271d57;}body div[id*="ajaxsearchlitesettings"].searchsettings .option input[type=checkbox]:checked + label:after,.woocommerce .widget_layered_nav ul li.chosen a::before,.woocommerce .widget_layered_nav_filters ul li.chosen a::before{-webkit-box-shadow: inset 0px 0px 0px 1px #e4e5de, inset 0px 0px 0px 5px #fff, inset 0px 0px 0px 8px #271d57;box-shadow: inset 0px 0px 0px 1px #e4e5de, inset 0px 0px 0px 5px #fff, inset 0px 0px 0px 8px #271d57;}body div[id*="ajaxsearchlitesettings"].searchsettings .option label:hover:after,.woocommerce .widget_layered_nav_filters ul li:hover a::before{-webkit-box-shadow: inset 0px 0px 0px 1px #271d57, inset 0px 0px 0px 8px #fff, inset 0px 0px 0px 8px #271d57;box-shadow: inset 0px 0px 0px 1px #271d57, inset 0px 0px 0px 8px #fff, inset 0px 0px 0px 8px #271d57;}body div[id*="ajaxsearchlitesettings"].searchsettings .option input[type=checkbox]:checked:hover + label:after,.woocommerce .widget_layered_nav ul li.chosen:hover a::before,.woocommerce .widget_layered_nav_filters ul li.chosen:hover a::before{-webkit-box-shadow: inset 0px 0px 0px 1px #a00, inset 0px 0px 0px 8px #fff, inset 0px 0px 0px 8px #271d57;box-shadow: inset 0px 0px 0px 1px #a00, inset 0px 0px 0px 8px #fff, inset 0px 0px 0px 8px #271d57;}.product-categories>li.cat-parent .gt3-button-cat-open:before,.yit-wcan-select-open::after{border-color: #271d57 transparent transparent transparent;}body #ajaxsearchlite1 .probox,body div[id*="ajaxsearchlite"] .probox{border: 1px solid #271d57 !important;}body div[id*="ajaxsearchlite"] .probox div.prosettings,body div[id*="ajaxsearchlite"] .probox .promagnifier,body div[id*="ajaxsearchliteres"].vertical{background-color: #271d57 !important;}body div[id*="ajaxsearchlite"] .probox div.asl_simple-circle{border: 3px solid #271d57 !important;}body div[id*="ajaxsearchlite"] .probox .proclose svg{fill: #4eaac8 !important;}.woocommerce a.button[class*="product_type_"],.woocommerce a.button.add_to_cart_button {background-color: #4eaac8;}.woocommerce-loop-product__link:hover .gt3-product-title {color: #4eaac8;}.woocommerce nav.woocommerce-pagination ul li .current.page-numbers {background-color: #4eaac8;}.woocommerce nav.woocommerce-pagination ul li a:focus,.woocommerce nav.woocommerce-pagination ul li a:hover {background-color: #4eaac8;}.toggle-inner, .toggle-inner:before, .toggle-inner:after {background-color:;}.toggle-inner, .toggle-inner:before, .toggle-inner:after {background-color:;}.gt3_header_builder__section--top {background-color:rgba(245,245,245,1);color:#42474c;height:46px;}.gt3_header_builder__section--top .gt3_header_builder__section-container {height:46px;}.gt3_header_builder__section--middle{background-color:rgba(255,255,255,1);color:#000000;}.gt3_header_builder__section--middle .gt3_header_builder__section-container {height:100px;}.gt3_header_builder__section--bottom {background-color:rgba(255,255,255,1);color:#42474c;}.gt3_header_builder__section--bottom .gt3_header_builder__section-container {height:50px;}.tp-bullets.custom .tp-bullet:after,.tp-bullets.custom .tp-bullet:hover:after,.tp-bullets.custom .tp-bullet.selected:after {background: #271d57;}.main_wrapper ul.gt3_list_wine li:before {content: url('data:image/svg+xml; utf8, <svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="32" width="40" fill="#271d57"><circle cx="10" cy="10" r="6" /><circle cx="30" cy="10" r="6" /><circle cx="20" cy="25" r="6" /></svg>');}.gt3_header_builder__section--middle{border-bottom: 1px solid rgba(236,239,241,1);}.gt3_header_builder__section--bottom{border-bottom: 1px solid rgba(236,239,241,1);}.sticky_header .gt3_header_builder__section--bottom{background-color:rgba(255,255,255,1);color:#42474c;}.sticky_header .gt3_header_builder__section--bottom .gt3_header_builder__section-container {height:45px;}
</style>
<link rel='stylesheet' id='gt3_responsive-css'  href='wp-content/themes/optima/css/responsive9f31.css?ver=5.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-css'  href='wp-content/themes/optima/woocommerce/css/woocommerce9f31.css?ver=5.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='booked-wc-fe-styles-css'  href='wp-content/plugins/booked/includes/add-ons/woocommerce-payments/css/frontend-style9f31.css?ver=5.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='js_composer_front-css'  href='wp-content/plugins/js_composer/assets/css/js_composer.min31dc.css?ver=6.6.0' type='text/css' media='all' />
<link rel='stylesheet' id='grid-list-layout-css'  href='wp-content/plugins/woocommerce-grid-list-toggle/assets/css/style9f31.css?ver=5.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='grid-list-button-css'  href='wp-content/plugins/woocommerce-grid-list-toggle/assets/css/button9f31.css?ver=5.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='dashicons-css'  href='wp-includes/css/dashicons.min9f31.css?ver=5.7.2' type='text/css' media='all' />
<style id='dashicons-inline-css' type='text/css'>
[data-font="Dashicons"]:before {font-family: 'Dashicons' !important;content: attr(data-icon) !important;speak: none !important;font-weight: normal !important;font-variant: normal !important;text-transform: none !important;line-height: 1 !important;font-style: normal !important;-webkit-font-smoothing: antialiased !important;-moz-osx-font-smoothing: grayscale !important;}
</style>
<script type='text/javascript' src='wp-includes/js/jquery/jquery.min9d52.js?ver=3.5.1' id='jquery-core-js'></script>
<script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2' id='jquery-migrate-js'></script>
<script type='text/javascript' src='wp-content/plugins/mailchimp/js/scrollTo00e2.js?ver=1.5.7' id='jquery_scrollto-js'></script>
<script type='text/javascript' src='wp-includes/js/jquery/jquery.form.min50fa.js?ver=4.2.1' id='jquery-form-js'></script>
<script type='text/javascript' id='mailchimpSF_main_js-js-extra'>
/* <![CDATA[ */
var mailchimpSF = {"ajax_url":"https:\/\/livewp.site\/wp\/md\/optima\/"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/mailchimp/js/mailchimp00e2.js?ver=1.5.7' id='mailchimpSF_main_js-js'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/core.min35d0.js?ver=1.12.1' id='jquery-ui-core-js'></script>
<script type='text/javascript' src='wp-content/plugins/mailchimp/js/datepicker9f31.js?ver=5.7.2' id='datepicker-js'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70' id='jquery-blockui-js'></script>
<script type='text/javascript' id='wc-add-to-cart-js-extra'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp\/md\/optima\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/wp\/md\/optima\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/livewp.site\/wp\/md\/optima\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.minc225.js?ver=5.4.1' id='wc-add-to-cart-js'></script>
<script type='text/javascript' src='wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart31dc.js?ver=6.6.0' id='vc_woocommerce-add-to-cart-js-js'></script>
<script type='text/javascript' src='wp-content/themes/optima/woocommerce/js/theme-woo9f31.js?ver=5.7.2' id='gt3_main_woo_js-js'></script>
<script type='text/javascript' src='wp-content/themes/optima/js/slick.min9f31.js?ver=5.7.2' id='gt3_slick_js-js'></script>
<script type='text/javascript' src='wp-content/themes/optima/woocommerce/js/easyzoom9f31.js?ver=5.7.2' id='gt3_zoom-js'></script>
<script type='text/javascript' id='booked-wc-fe-functions-js-extra'>
/* <![CDATA[ */
var booked_wc_variables = {"prefix":"booked_wc_","ajaxurl":"https:\/\/livewp.site\/wp\/md\/optima\/wp-admin\/admin-ajax.php","i18n_confirm_appt_edit":"Are you sure you want to change the appointment date? By doing so, the appointment date will need to be approved again.","i18n_pay":"Are you sure you want to add the appointment to cart and go to checkout?","i18n_mark_paid":"Are you sure you want to mark this appointment as \"Paid\"?","i18n_paid":"Paid","i18n_awaiting_payment":"Awaiting Payment","checkout_page":"https:\/\/livewp.site\/wp\/md\/optima\/checkout\/"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/booked/includes/add-ons/woocommerce-payments/js/frontend-functions9f31.js?ver=5.7.2' id='booked-wc-fe-functions-js'></script>
<link rel="https://api.w.org/" href="wp-json/index.html" /><link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/39.json" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 5.7.2" />
<meta name="generator" content="WooCommerce 5.4.1" />
<link rel="canonical" href="index.html" />
<link rel='shortlink' href='index.html' />
<link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embedf6a9.json?url=https%3A%2F%2Flivewp.site%2Fwp%2Fmd%2Foptima%2F" />
<link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed4f6c?url=https%3A%2F%2Flivewp.site%2Fwp%2Fmd%2Foptima%2F&amp;format=xml" />
<script type="text/javascript">
        jQuery(function($) {
            $('.date-pick').each(function() {
                var format = $(this).data('format') || 'mm/dd/yyyy';
                format = format.replace(/yyyy/i, 'yy');
                $(this).datepicker({
                    autoFocusNextInput: true,
                    constrainInput: false,
                    changeMonth: true,
                    changeYear: true,
                    beforeShow: function(input, inst) { $('#ui-datepicker-div').addClass('show'); },
                    dateFormat: format.toLowerCase(),
                });
            });
            d = new Date();
            $('.birthdate-pick').each(function() {
                var format = $(this).data('format') || 'mm/dd';
                format = format.replace(/yyyy/i, 'yy');
                $(this).datepicker({
                    autoFocusNextInput: true,
                    constrainInput: false,
                    changeMonth: true,
                    changeYear: false,
                    minDate: new Date(d.getFullYear(), 1-1, 1),
                    maxDate: new Date(d.getFullYear(), 12-1, 31),
                    beforeShow: function(input, inst) { $('#ui-datepicker-div').removeClass('show'); },
                    dateFormat: format.toLowerCase(),
                });

            });

        });
    </script>
	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	<meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress."/>
<script type='text/javascript'>
jQuery(document).ready(function(){

});
</script><style type="text/css" data-type="vc_shortcodes-custom-css">
.vc_custom_1522412222679{margin-top: -60px !important;margin-bottom: 0px !important;background-image: url(wp-content/uploads/sites/15/2018/01/endow_banner.png?id=44) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}
.vc_custom_1513939060418{margin-bottom: 95px !important;}.vc_custom_1513947487010{margin-bottom: 90px !important;}
.vc_custom_1513954567668{padding-top: 76px !important;padding-bottom: 5px !important;background-color: #f6f8f9 !important;}
.vc_custom_1517400468774{margin-bottom: 0px !important;padding-top: 40px !important;padding-bottom: 73px !important;}
.vc_custom_1517397910551{margin-bottom: 0px !important;padding-top: 90px !important;padding-bottom: 0px !important;background-color: #f6f8f9 !important;}
.vc_custom_1514200615995{margin-bottom: 0px !important;padding-top: 60px !important;padding-bottom: 50px !important;}.vc_custom_1514208111186{margin-bottom: 48px !important;}
.vc_custom_1522412505986{margin-bottom: 0px !important;padding-top: 65px !important;padding-bottom: 73px !important;background-image: url(https://livewp.site/wp/md/optima/wp-content/uploads/sites/15/2018/01/home_testimonials_bg.jpg?id=53) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}
.vc_custom_1514211460946{padding-top: 90px !important;padding-bottom: 70px !important;background-color: #ffffff !important;}
.vc_custom_1514292183498{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;background-color: #4eaac8 !important;}
.vc_custom_1513937409062{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;}
.vc_custom_1513939337378{margin-right: 20px !important;}.vc_custom_1513939345072{margin-right: 20px !important;}
.vc_custom_1513940974061{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 55px !important;padding-right: 18% !important;padding-bottom: 65px !important;padding-left: 12% !important;background-color: #271d57 !important;}
.vc_custom_1513940984676{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 55px !important;padding-right: 18% !important;padding-bottom: 65px !important;padding-left: 12% !important;background-color: #4eaac8 !important;}
.vc_custom_1513940990165{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 55px !important;padding-right: 18% !important;padding-bottom: 65px !important;padding-left: 12% !important;background-color: #f6f8f9 !important;}
.vc_custom_1513947718877{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;}.vc_custom_1513947725833{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 41px !important;padding-bottom: 10px !important;padding-left: 45px !important;}
.vc_custom_1513947445479{margin-bottom: 32px !important;}.vc_custom_1513947674596{margin-right: 20px !important;}
.vc_custom_1513951639015{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;}.vc_custom_1519031816989{margin-bottom: 50px !important;}.vc_custom_1514195915498{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 12px !important;padding-bottom: 25px !important;}.vc_custom_1514195922990{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;}.vc_custom_1513947445479{margin-bottom: 32px !important;}.vc_custom_1514196094436{margin-right: 20px !important;}.vc_custom_1518702729129{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;}.vc_custom_1514200398490{padding-top: 40px !important;}
.vc_custom_1514200301917{padding-top: 35px !important;}.vc_custom_1514210480661{margin-bottom: 7px !important;}
.vc_custom_1517493635443{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;}.vc_custom_1513954250846{margin-bottom: 49px !important;}.vc_custom_1514292629569{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 0px !important;padding-right: 30px !important;padding-bottom: 0px !important;padding-left: 30px !important;}.vc_custom_1514291609349{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;}.vc_custom_1514214173507{margin-bottom: 22px !important;}</style><noscript><style> .wpb_animate_when_almost_visible { opacity: 1; }

</style></noscript></head>

<body class="home page-template page-template-full-width page-template-full-width-php page page-id-39 theme-optima woocommerce-no-js wpb-js-composer js-comp-ver-6.6.0 vc_responsive" data-theme-color="#4eaac8">
    <div class='gt3_header_builder'>
      <div class="site_wrapper fadeOnLoad">
                <div class="main_wrapper">	
    
    <div class="container-full-width">
        <div class="row sidebar_none">
            <div class="content-container span12">

              <section id='main_content'>
<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_custom_1522412222679"><div class="container"><div class="vc_row wpb_row vc_row-fluid vc_row-has-fill" ><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner vc_custom_1513937409062"><div class="wpb_wrapper"><div class="gt3_spacing gt3_spacing-height_mobile-on"><div class="gt3_spacing-height gt3_spacing-height_default" style="height:185px;"></div> <div class="gt3_spacing-height gt3_spacing-height_mobile" style="height:100px;"></div></div>  
<div data-color="#ffffff" class="gt3_custom_text" style="color:#42474c;font-family:Lato;font-weight:700;font-style:normal;font-size: 13.5px; line-height: 172%; padding-top: 100px; ">A demo day for Startups who have completed their POC &AMP; MVP</div>
<div class="gt3_spacing"><div class="gt3_spacing-height gt3_spacing-height_default" style="height:11px;"></div></div>  
<div data-color="#ffffff" class="gt3_custom_text" style="color:#42474c;font-size: 68px; line-height: 117%; "> <div class="gt3_custom_text-font_size_tablet" style="font-size:40px;line-height: 117%;"> <div class="gt3_custom_text-font_size_mobile" style="font-size:30px;line-height: 117%;"><strong>NetWorthIn</strong></div> </div></div><div class="gt3_spacing"><div class="gt3_spacing-height gt3_spacing-height_default" style="height:34px;"></div></div>  

<!-- button -->
<div class="gt3_module_button gt3_btn_customize button_alignment_inline  wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp ">
  <a class="button_size_large   vc_custom_1513939337378" href="#" style="border: none; border-radius: 5px; " data-hover-bg="#3d3272" data-hover-color="#ffffff" >
    <span class="gt3_btn_text">REGISTER HERE</span></a></div>
<!-- BUTTON ENDS -->

    <div class="gt3_spacing gt3_spacing-height_mobile-on">
  <div class="gt3_spacing-height gt3_spacing-height_default" style="height:170px;"></div> 
</div> 


</div></div></div></div></div></div>

<div class="gt3_spacing">
  <div class="gt3_spacing-height gt3_spacing-height_default" style="height:40px;"></div></div>  

  <!-- ABOUT THE EVENT -->
<div class="container">
  <div class="vc_row wpb_row vc_row-fluid vc_row-has-fill" >
    <div class="wpb_animate_when_almost_visible wpb_fadeInLeft fadeInLeft wpb_column vc_column_container vc_col-sm-6">
      <div class="vc_column-inner vc_custom_1514195915498">
        <div class="wpb_wrapper">
          <div class="gt3_spacing"><div class="gt3_spacing-height gt3_spacing-height_default" style="height:12px;"></div></div> 
<div data-color="#ffffff" class="gt3_custom_text" style="color:#42474c;font-size: 36px; line-height: 128%; ">ABOUT THE EVENT</div><div class="gt3_spacing"><div class="gt3_spacing-height gt3_spacing-height_default" style="height:20px;"></div></div>  
<div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_75px vc_sep_pos_align_left vc_separator_no_text vc_custom_1513947445479  vc_custom_1513947445479" ><span class="vc_sep_holder vc_sep_holder_l"><span  style="border-color:#d9e0e4;" class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span  style="border-color:#d9e0e4;" class="vc_sep_line"></span></span>
</div>
<div data-color="#ffffff" class="gt3_custom_text" style="color:#5c656d;font-size: 18px; line-height: 167%; ">NetWorthIn is designed to bridge the gap between the startups and investors. <br> This event will give an opportunity to the startups for showcasing <br> their innovation to the top investors. </div>
<div class="gt3_spacing"><div class="gt3_spacing-height gt3_spacing-height_default" style="height:75px;"></div></div>  
</div></div></div><div class="wpb_animate_when_almost_visible wpb_fadeInRight fadeInRight wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner vc_custom_1514195922990"><div class="wpb_wrapper">
<div  class="wpb_single_image wpb_content_element vc_align_center  vc_custom_1518702729129">
  
  <figure class="wpb_wrapper vc_figure">
    <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="720" height="485" src="wp-content/uploads/sites/15/2018/01/about_endow.jpg" class="vc_single_image-img attachment-full" alt="" loading="lazy" sizes="(max-width: 720px) 100vw, 720px" /></div>
  </figure>
</div>
</div></div></div></div></div>
<!-- ABOUT THE EVENT ENDS -->

<!-- steps -->
<div class="gt3_spacing">
  <div class="gt3_spacing-height gt3_spacing-height_default" style="height:40px;"></div></div>  

<div class="vc_row-full-width vc_clearfix"></div>
<div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1513939060418 vc_row-no-padding vc_row-o-equal-height vc_row-o-content-top vc_row-flex"><div class="wpb_animate_when_almost_visible wpb_fadeInLeft fadeInLeft wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill"><div class="vc_column-inner vc_custom_1513940974061"><div class="wpb_wrapper"><div data-color="#ffffff" class="gt3_custom_text" style="color:#ffffff;font-size: 42px; line-height: 120%; "> <div class="gt3_custom_text-font_size_mobile" style="font-size:36px;line-height: 120%;"><strong>Registration round</strong> </div></div><div class="gt3_spacing"><div class="gt3_spacing-height gt3_spacing-height_default" style="height:15px;"></div></div>  
<div data-color="#ffffff" class="gt3_custom_text" style="color:#feffff;font-size: 16px; line-height: 150%; ">Startups need to register themselves via (link) and upload pitch deck along with other required documents. </div><div class="gt3_spacing"><div class="gt3_spacing-height gt3_spacing-height_default" style="height:13px;"></div></div>  
</div></div></div>
<div class="wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill"><div class="vc_column-inner vc_custom_1513940984676"><div class="wpb_wrapper"><div data-color="#ffffff" class="gt3_custom_text" style="color:#ffffff;font-size: 42px; line-height: 120%; "> <div class="gt3_custom_text-font_size_mobile" style="font-size:36px;line-height: 120%;"><strong>Application screening round</strong> </div></div><div class="gt3_spacing"><div class="gt3_spacing-height gt3_spacing-height_default" style="height:15px;"></div></div>  
<div data-color="#ffffff" class="gt3_custom_text" style="color:#feffff;font-size: 16px; line-height: 150%; ">SP-TBI experts will be selecting the top 12 startups for Finales based on the applications and simultaneous pitching round. </div><div class="gt3_spacing"><div class="gt3_spacing-height gt3_spacing-height_default" style="height:13px;"></div></div>  
</div></div></div>
<div class="wpb_animate_when_almost_visible wpb_fadeInRight fadeInRight wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill"><div class="vc_column-inner vc_custom_1513940990165"><div class="wpb_wrapper"><div data-color="#ffffff" class="gt3_custom_text" style="color:#42474c;font-size: 42px; line-height: 120%; "> <div class="gt3_custom_text-font_size_mobile" style="font-size:36px;line-height: 120%;"><strong>Finale round (Demo Day)</strong> </div></div><div class="gt3_spacing"><div class="gt3_spacing-height gt3_spacing-height_default" style="height:15px;"></div></div>  
<div data-color="#ffffff" class="gt3_custom_text" style="color:#42474c;font-size: 16px; line-height: 150%; ">The top 12 startups will get a chance to present their case in front of investors. </div><div class="gt3_spacing"><div class="gt3_spacing-height gt3_spacing-height_default" style="height:13px;"></div></div>  
</div></div></div></div>

<div class="vc_row-full-width vc_clearfix"></div>
<!-- STEPS ENDS -->

<!-- APPL FORM & CRITERIA -->
<div class="vc_custom_1513947487010">
  <div class="container">
  <div class="vc_row wpb_row vc_row-fluid" >
    <div class="wpb_animate_when_almost_visible wpb_fadeInLeft fadeInLeft wpb_column vc_column_container vc_col-sm-6">
      <div class="vc_column-inner vc_custom_1513947718877"><div class="wpb_wrapper"><div class="video-popup-wrapper">
        <br><br><br><br><br>
 <h3><p>NetWorthIn Application Form</p></h3>	
 <blockquote> Your network is your net worth </blockquote>
 - Porter Gale
    <br><br><br><br></div>
</div></div></div>

<div class="wpb_animate_when_almost_visible wpb_fadeInRight fadeInRight wpb_column vc_column_container vc_col-sm-6">
  <div class="vc_column-inner vc_custom_1513947725833">
    <div class="wpb_wrapper">
<div data-color="#ffffff" class="gt3_custom_text" style="color:#42474c;font-size: 36px; line-height: 128%; ">WHO CAN APPLY?</strong></div><div class="gt3_spacing"><div class="gt3_spacing-height gt3_spacing-height_default" style="height:20px;"></div></div>  
<div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_75px vc_sep_pos_align_left vc_separator_no_text vc_custom_1513947445479  vc_custom_1513947445479" ><span class="vc_sep_holder vc_sep_holder_l"><span  style="border-color:#d9e0e4;" class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span  style="border-color:#d9e0e4;" class="vc_sep_line"></span></span>
</div><div data-color="#ffffff" class="gt3_custom_text" style="color:#5c656d;font-size: 18px; line-height: 167%; ">Startups who have completed their POC & MVP 
  <ul> <li> Having innovative technologies in AI-ML, Security, AgriTech, DeepTech, IOT, Metaverse, D2C and FinTech.  </li> 
    <li> Has registered from 2017 or later. </li>
  <li> Has to be a private limited company registered under Companies Act,2013. </li>
    </ul> 

</div><div class="gt3_spacing"><div class="gt3_spacing-height gt3_spacing-height_default" style="height:30px;"></div></div>  
</div></div></div></div></div>
<div class="gt3_module_button gt3_btn_customize text-center wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp "><a class="button_size_large   vc_custom_1513947674596" href="#"   style="border: none; border-radius: 5px; " data-hover-bg="#3d3272" data-hover-color="#ffffff" ><span class="gt3_btn_text">FILL IN THE APPLICATION HERE..</span></a>
</div></div>

<!-- WHY NetWorthIn -->
      <div class="container">
        <div class="vc_row wpb_row vc_row-fluid" >
          <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
              <div class="wpb_wrapper">
                <!-- <div class="vc_empty_space"   style="height: 9.3vh">
                  <span class="vc_empty_space_inner"></span></div> -->
                  <div data-color="#ffffff" class="gt3_custom_text" style="color:#42474c;font-size: 36px; line-height: 128%; text-align: center; ">WHY NetWorthIn?</strong></div>
                  <div class="vc_empty_space"   style="height: 1.8vh"><span class="vc_empty_space_inner"></span></div>
                  <div class="vc_empty_space"   style="height: 3vh"><span class="vc_empty_space_inner"></span></div>
                  <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_75px vc_sep_pos_align_center vc_separator_no_text" >
                    <span class="vc_sep_holder vc_sep_holder_l"><span  style="border-color:#d9e0e4;" class="vc_sep_line"></span></span>
                    <span class="vc_sep_holder vc_sep_holder_r"><span  style="border-color:#d9e0e4;" class="vc_sep_line"></span></span>
    </div>
    <div class="vc_empty_space"   style="height: 9.2vh"><span class="vc_empty_space_inner"></span></div></div></div></div></div></div></div>

    
  <div class="container"><div class="vc_row wpb_row vc_row-fluid" ><div class="wpb_column vc_column_container vc_col-sm-4">
    
  <div class="vc_column-inner"><div class="wpb_wrapper"><div class="gt3_icon_box  gt3_icon_box_icon-position_ gt3_icon_box_icon-position_top gt3_icon_box__icon_icon_size_custom  gt3-box-image"><i class="gt3_icon_box__icon"  style="width:70px; font-size:70px">
    <img width="140" height="140" src="wp-content/uploads/sites/15/2018/02/icon7.png" class="attachment-full size-full" alt="" loading="lazy" sizes="(max-width: 140px) 100vw, 140px" /></i><div class="gt3_icon_box-content-wrapper"  ><div class="gt3_icon_box__title"><h3 style="color:#42474c;font-family:Lato;font-weight:400;font-style:normal;;font-size: 24px; line-height: 33.6px; ">Networking</h3></div><div class="gt3_icon_box__text" style="color:#42474c;font-family:Lato;font-weight:300;font-style:normal;;font-size: 16px; line-height: 27.36px; ">Build Collaborative Associations and Network.</div></div></div>  
  <div class="vc_empty_space"   style="height: 8.4vh"><span class="vc_empty_space_inner"></span></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="gt3_icon_box  gt3_icon_box_icon-position_ gt3_icon_box_icon-position_top gt3_icon_box__icon_icon_size_custom  gt3-box-image"><i class="gt3_icon_box__icon"  style="width:70px; font-size:70px">
    <img width="150" height="150" src="wp-content/uploads/sites/15/2018/02/icon8.png" class="attachment-full size-full" alt="" loading="lazy"  sizes="(max-width: 140px) 100vw, 140px" /></i><div class="gt3_icon_box-content-wrapper"  ><div class="gt3_icon_box__title"><h3 style="color:#42474c;font-family:Lato;font-weight:400;font-style:normal;;font-size: 24px; line-height: 33.6px; ">Expert's Feedback</h3></div><div class="gt3_icon_box__text" style="color:#42474c;font-family:Lato;font-weight:300;font-style:normal;;font-size: 16px; line-height: 27.36px; ">Get expert advice on your pitch deck, financials, and business plan. </div></div></div>  
  <div class="vc_empty_space"   style="height: 8.4vh"><span class="vc_empty_space_inner"></span></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="gt3_icon_box  gt3_icon_box_icon-position_ gt3_icon_box_icon-position_top gt3_icon_box__icon_icon_size_custom  gt3-box-image"><i class="gt3_icon_box__icon"  style="width:70px; font-size:70px">
    <img width="140" height="140" src="wp-content/uploads/sites/15/2018/02/icon9.png" class="attachment-full size-full" alt="" loading="lazy"  sizes="(max-width: 140px) 100vw, 140px" /></i><div class="gt3_icon_box-content-wrapper"  ><div class="gt3_icon_box__title"><h3 style="color:#42474c;font-family:Lato;font-weight:400;font-style:normal;;font-size: 24px; line-height: 33.6px; ">Funding Opportunity</h3></div><div class="gt3_icon_box__text" style="color:#42474c;font-family:Lato;font-weight:300;font-style:normal;;font-size: 16px; line-height: 27.36px; ">Get the chance to pitch to a panel of investors and get funded. </div></div></div>  
  <div class="vc_empty_space"   style="height: 8.4vh"><span class="vc_empty_space_inner"></span></div></div></div></div></div>
  <!-- WHY WORTHITIN ENDS -->
  

<!-- TIMELINE -->
  <div class="container">
  <div class="vc_row wpb_row vc_row-fluid" >
    <div class="wpb_column vc_column_container vc_col-sm-12">
      <div class="vc_column-inner">
        <div class="wpb_wrapper">
            <div data-color="#ffffff" class="gt3_custom_text" style="color:#42474c;font-size: 36px; line-height: 128%; text-align: center; ">TIMELINE</strong></div>
            <div class="vc_empty_space"   style="height: 1.8vh"><span class="vc_empty_space_inner"></span></div>
            <div class="vc_empty_space"   style="height: 3vh"><span class="vc_empty_space_inner"></span></div>
            <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_75px vc_sep_pos_align_center vc_separator_no_text" >
              <span class="vc_sep_holder vc_sep_holder_l"><span  style="border-color:#d9e0e4;" class="vc_sep_line"></span></span>
              <span class="vc_sep_holder vc_sep_holder_r"><span  style="border-color:#d9e0e4;" class="vc_sep_line"></span></span>
</div>
<figure class="wpb_wrapper vc_figure">
  <div class="vc_single_image-wrapper   vc_box_border_grey" style="display: flex;justify-content: center;"><img width="720" height="485" src="wp-content/uploads/sites/15/2018/01/timeline_endow.png" class="vc_single_image-img attachment-full" alt="" loading="lazy" sizes="(max-width: 720px) 100vw, 720px" /></div>
</figure>
<div class="vc_empty_space"   style="height: 9.2vh"><span class="vc_empty_space_inner"></span></div></div></div></div></div></div>
</div><div class="vc_row-full-width vc_clearfix"></div>
<!-- TIMELINE ENDS -->

<!-- investors -->
<div class=""> 
  <div class="container"> 
    <div class="vc_empty_space"   style="height: 0.5vh">
    </div>
    <div class="vc_empty_space"   style="height: 2vh"><span class="vc_empty_space_inner"></span></div>
    <h2 style="text-align: left;font-family:Lato;font-weight:300;font-style:normal" class="vc_custom_heading" >Meet Our <span> INVESTORS </span> </h2>
    <div class="gt3_spacing">
      <div class="gt3_spacing-height gt3_spacing-height_default" style="height:35px;">
        </div></div></div></div>
<div class="container"> 
  <!-- investor #1 -->
<article class="gt3_team_list__item span4 psyhology gt3_team_list__item--1">
  <div class="flip-box">
      <div class="flip-box-inner">
        <div class="flip-box-front">
          <img src="wp-content/uploads/sites/15/2018/01/SP-TBI.png" alt="Paris" style="width:300px;height:200px">
        </div>
        <div class="flip-box-back"><br><br><br>
          <h3 class="gt3_team_list__title">Investor Name #1</h3>
        </div>
      </div>
    </div>
  </article>
  <!-- investor #2 -->
    <article class="gt3_team_list__item span4 psyhology gt3_team_list__item--1">
      <div class="flip-box">
        <div class="flip-box-inner">
          <div class="flip-box-front">
            <img src="wp-content/uploads/sites/15/2018/01/SP-TBI.png" alt="Paris" style="width:300px;height:200px">
          </div>
          <div class="flip-box-back"><br><br><br>
            <h3 class="gt3_team_list__title">Investor Name #2</h3>
          </div>
        </div>
      </div>
    </article>
<!-- investor #3 -->
    <article class="gt3_team_list__item span4 psyhology gt3_team_list__item--1">
      <div class="flip-box">
        <div class="flip-box-inner">
          <div class="flip-box-front">
            <img src="wp-content/uploads/sites/15/2018/01/SP-TBI.png" alt="Paris" style="width:300px;height:200px">
          </div>
          <div class="flip-box-back"><br><br><br>
            <h3 class="gt3_team_list__title">Investor Name #3</h3>
          </div>
        </div>
      </div>
    </article>
</div>
</div></div>
<!-- end investors -->

<!-- PARTNERS -->
<div class="">
  <div class="container">
    <div class="vc_row wpb_row vc_row-fluid" >
      <div class="wpb_column vc_column_container vc_col-sm-4">
        <div class="vc_column-inner">
          <div class="wpb_wrapper">
            <div class="vc_empty_space"   style="height: 0.5vh">
              </div>
              <div class="vc_empty_space"   style="height: 2vh"><span class="vc_empty_space_inner"></span></div>
              <h2 style="text-align: left;font-family:Lato;font-weight:300;font-style:normal" class="vc_custom_heading" >Meet Our <span> PARTNERS</span> </h2>
              <div class="gt3_spacing">
                <div class="gt3_spacing-height gt3_spacing-height_default" style="height:35px;">
              </div></div> </div></div></div>
<div class="wpb_column vc_column_container vc_col-sm-8">
<div class="vc_column-inner">
<div class="wpb_wrapper">

</div></div></div></div></div></div> 

<!-- PHOTOS FOR PARTNERS -->
<div class="">
  <div class="container">
    <div class="vc_row wpb_row vc_row-fluid" >
      <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner"><div class="wpb_wrapper"><div class="vc_empty_space"   style="height: 2vh">
          <span class="vc_empty_space_inner"></span></div>
          <div class="gt3_team_list">
            <div class="gt3_team_list__posts-container row"  data-build_query="size:3|order_by:date" data-team_style="content_below" data-posts_per_line="3" data-items_load="4" data-post_count="3">
            <div class="gt3_team_list__grid-sizer span4"></div>
            <div class="gt3_team_list__grid-gutter"></div>

<article class="gt3_team_list__item span4 psyhology gt3_team_list__item--1"><div class="gt3_team_list__image-holder">
  <a href="#" class="gt3_team_list__image_link">
    <div class="gt3_team_list__image-placeholder" style="padding-bottom:100%;margin-bottom:-100%;background-color:#ACADB2;"></div>
    <img src="wp-content/uploads/sites/15/2018/01/SP-TBI.png"  sizes="(min-width: 1200px) 370px, (min-width: 992px) 297px, (min-width: 768px) 223px, (max-width: 600px) 420px" alt="" /></a>
  <div class="gt3_team_list__content"><a href="#" class="gt3_team_list__title_link"><h3 class="gt3_team_list__title">Partner #1</h3></a>
    
  </div><div class="gt3_team_list_social"><a href="#" class="gt3_team_list_social__item gt3_custom_color fa fa-facebook" target="_blank" data-hover-color="#1e73be""></a>
    <a href="#" class="gt3_team_list_social__item gt3_custom_color fa fa-twitter" target="_blank" data-hover-color="#4eaac8"></a>
    <a href="#" class="gt3_team_list_social__item gt3_custom_color fa fa-instagram" target="_blank" data-hover-color="#890c0c"></a>
    <a href="#" class="gt3_team_list_social__item gt3_custom_color fa fa-google-plus" target="_blank" data-hover-color="#dd3333"></a>
  </div></div></article>
 
    <article class="gt3_team_list__item span4 psyhology gt3_team_list__item--1">
      <div class="gt3_team_list__image-holder">
        <a href="#" class="gt3_team_list__image_link">
          <div class="gt3_team_list__image-placeholder" style="padding-bottom:100%;margin-bottom:-100%;background-color:#ACADB2;"></div>
          <img src="wp-content/uploads/sites/15/2018/01/SP-TBI.png"  sizes="(min-width: 1200px) 370px, (min-width: 992px) 297px, (min-width: 768px) 223px, (max-width: 600px) 420px" alt="" /></a>
      <div class="gt3_team_list__content"><a href="#" class="gt3_team_list__title_link"><h3 class="gt3_team_list__title">Partner #2</h3></a>
        
      </div>
        <div class="gt3_team_list_social"><a href="#" class="gt3_team_list_social__item gt3_custom_color fa fa-facebook" target="_blank" data-hover-color="#1e73be""></a>
        <a href="#" class="gt3_team_list_social__item gt3_custom_color fa fa-twitter" target="_blank" data-hover-color="#4eaac8"></a>
        <a href="#" class="gt3_team_list_social__item gt3_custom_color fa fa-instagram" target="_blank" data-hover-color="#890c0c"></a>
        <a href="#" class="gt3_team_list_social__item gt3_custom_color fa fa-google-plus" target="_blank" data-hover-color="#dd3333"></a></div>
      </div></article>
        
    <article class="gt3_team_list__item span4 neurology gt3_team_list__item--3">
      <div class="gt3_team_list__image-holder">
        <a href="#" class="gt3_team_list__image_link">
          <div class="gt3_team_list__image-placeholder" style="padding-bottom:100%;margin-bottom:-100%;background-color:#B2B6BA;"></div>
          <img src="wp-content/uploads/sites/15/2018/01/SP-TBI.png" sizes="(min-width: 1200px) 370px, (min-width: 992px) 297px, (min-width: 768px) 223px, (max-width: 600px) 420px" alt="" /></a>
      <div class="gt3_team_list__content"><a href="#" class="gt3_team_list__title_link"><h3 class="gt3_team_list__title">Partner #3</h3></a>
      
      </div><div class="gt3_team_list_social"><a href="#" class="gt3_team_list_social__item gt3_custom_color fa fa-facebook" target="_blank" data-hover-color="#1e73be""></a>
          <a href="#" class="gt3_team_list_social__item gt3_custom_color fa fa-twitter" target="_blank" data-hover-color="#4eaac8"></a>
          <a href="#" class="gt3_team_list_social__item gt3_custom_color fa fa-instagram" target="_blank" data-hover-color="#890c0c"></a>
          <a href="#" class="gt3_team_list_social__item gt3_custom_color fa fa-google-plus" target="_blank" data-hover-color="#dd3333"></a></div>
        </div></article></div></div><div class="vc_empty_space"   style="height: 9vh"><span class="vc_empty_space_inner"></span>
        </div></div></div></div></div></div></div>

        <!-- PARTNERS END -->

<!-- FAQs -->

<div class="container mt">
  <div class="row">
  <h1 class="head-bold burnt-txt">Frequently Asked Questions (FAQs)</h1>
  <div class="head-line"></div>
  <br>
<!-- Bootstrap collapsible panels -->
<div class="panel-group searchable" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-primary">
    <div class="panel-heading faq-panel-head" role="tab" id="headingOne">
      <h4 class="panel-title">
      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Q: Is there any fee for this event?
      </a>
    </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <h4><span class="label label-primary">Answer</span></h4>
        Participation in this event is free of cost. However, if you receive funding at this event, you will be charged 2% of the funding amount as programme fees.
      </div>
    </div>
  </div>
  <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      Q: What will be the pitching duration?
      </a>
    </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <h4><span class="label label-primary">Answer</span></h4>
        Top 12 startups will get the opportunity to pitch in front of the investor panel. Every pitching session will be restricted to 12 minutes – 8 minutes of pitch followed by 4 minutes of Q&A.
      </div>
    </div>
  </div>
  <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Q: Who can apply for this competition?
      </a>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <h4><span class="label label-primary">Answer</span></h4><br>
        Startups at the POC and MVP stages:
        Having innovative technology offerings in areas like AI-ML, IOT, Security, AgriTech, DeepTech, Metaverse, D2C & FinTech.
        Has registered from 2017 or later.
        Has to be a private limited company registered under Companies Act,2013
      </div>
    </div>
  </div>
        <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingFive">
      <h4 class="panel-title">
      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        Q: Why should one apply for this event?
      </a>
    </div>
    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
      <div class="panel-body">
        <h4><span class="label label-primary">Answer</span></h4>
        This event will provide you an opportunity to get funded and get connected to various investors & industry experts.
      </div>
    </div>
  </div>
          
              <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingSeven">
      <h4 class="panel-title">
      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
        Q: What type of startups can apply for this event?
      </a>
    </div>
    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
      <div class="panel-body">
        <h4><span class="label label-primary">Answer</span></h4>
        NetWorthIn is aiming for POC & MVP stage startups.
      </div>
    </div>
  </div>
          <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingSix">
      <h4 class="panel-title">
      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
        Q: Who will be evaluating my applications?
      </a>
    </div>
    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
      <div class="panel-body">
        <h4><span class="label label-primary">Answer</span></h4>
        The applications will be evaluated by business/industry experts & representatives from investors and incubators.
      </div>
    </div>
  </div>
  <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        Q: Can I apply if the venture is at an idea stage?
      </a>
    </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">
        <h4><span class="label label-primary">Answer</span></h4>
        No, the startup should be at the POC or MVP stage.
          </div>
      </div>
    </div>
          <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingEight">
      <h4 class="panel-title">
      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
        Q: How will the registration be done?
      </a>
    </div>
    <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
      <div class="panel-body">
        <h4><span class="label label-primary">Answer</span></h4>
        You can register for this event through the link given below. (TBA)
      </div>
    </div>
  </div>
          <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingNine">
      <h4 class="panel-title">
      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
        Q: Is there any event participation fee?
      </a>
    </div>
    <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
      <div class="panel-body">
        <h4><span class="label label-primary">Answer</span></h4>
        No, there is no event participation fee.
      </div>
    </div>
  </div>
          <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingTen">
      <h4 class="panel-title">
      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
        Q: What will be the platform for pitching?
      </a>
    </div>
    <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
      <div class="panel-body">
        <h4><span class="label label-primary">Answer</span></h4>
        The platform for pitching will be Google Meet(Online).
      </div>
    </div>
  </div>
          <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingEleven">
      <h4 class="panel-title">
      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
        Q: How many days is an event?
      </a>
    </div>
    <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven">
      <div class="panel-body">
        <h4><span class="label label-primary">Answer</span></h4>
        Finale round will be of two days.
      </div>
    </div>
  </div>
</div>
 </div>
</div>

<?php include('footer.php')?>
<!-- END FAQs -->
<script type="text/javascript">
            var custom_blog_css = "";
            if (document.getElementById("custom_blog_styles")) {
                document.getElementById("custom_blog_styles").innerHTML += custom_blog_css;
            } else if (custom_blog_css !== "") {
                document.head.innerHTML += '<style id="custom_blog_styles" type="text/css">'+custom_blog_css+'</style>';
            }
        </script>
    </div></div></div></div></div></div></div></div></div><!-- .main_wrapper --></div><!-- .site_wrapper -->
    <a href='#' id='back_to_top'></a>    
</div>
<style>
  .gt3_tools_bar{
    position: fixed;
    right: -400px;
    top: 0;
    background-color: #ffffff;
    width: 400px;
    height: 100%;
    z-index: 10001;
    -webkit-transition: right .3s ease;
    -moz-transition: right .3s ease;
    transition: right .3s ease;
  }
  .gt3_tools_bar.active{
    right: 0px;
  }
  .gt3_tools_bar__sidebar-cover{
    content: "";
    width: 100vw;
    height: 100vh;
    position: fixed;
    left: 0;
    top: 0;
    visibility: hidden;
    opacity: 0;
    cursor: url(wp-content/plugins/gt3-theme-tools-bar/assets/close.png) 16 16, default;
    -webkit-transition: all .3s ease;
    -moz-transition: all .3s ease;
    transition: all .3s ease;
  }
  .active_tools_bar_sidebar .gt3_tools_bar__sidebar-cover {
    visibility: visible;
    opacity: 1;
    background: rgba(0, 0, 0, 0.7);
    z-index: 10000;
  }
  .gt3_tools_bar .gt3_tools_bar__icon_container{
    /*width: 50px;*/
    position: absolute;
    top: calc(40% - 88px);
    left: -45px;
    display: inline-block;
    box-shadow: -8px 8px 30px rgba(0, 0, 0, 0.07);
  }
  .gt3_tools_bar__sidebar{
    position: absolute;
    right: -17px;
    top: 0;
    height: 100%;
    width: 417px;
    padding: 30px;
    background: #ffffff;
    border-left: 1px solid #dcdcdc;
    color: #111;
    font-size: 14px;
    line-height: 1.7;
    overflow-x: hidden;
    overflow-y: auto;
    box-sizing: border-box;
  }
  .admin-bar .gt3_tools_bar__sidebar{
    top: 32px;
    height: calc(100% - 32px);
  }
  .gt3_tools_bar__icon {
    height: 45px;
    line-height: 45px;
    text-align: center;
    position: relative;
    background-color: #2f323a;
    color: #ffffff;
    cursor: pointer;
    left: 0;
    white-space: nowrap;
    -webkit-transition: all .2s ease-in-out;
    -moz-transition: all .2s ease-in-out;
    -ms-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
  }
  .gt3_tools_bar__icon.gt3_tools_bar__icon_sale{
    background: #f73859;
  }
  .gt3_tools_bar__icon.gt3_tools_bar__icon_side_bar{
    background: #384259;
  }
  .gt3_tools_bar__icon.gt3_tools_bar__icon_support{
    background-color: #7ac7c4;
  }
  .gt3_tools_bar__icon.gt3_tools_bar__icon_docs{
    background: #c4edde;
  }
  .gt3_tools_bar__icon a{
    color: inherit;
  }
  .gt3_tools_bar__icon div.gt3_tools_bar__icon_src{
    display: inline-block;
    width: 45px;
    height: 45px;
    line-height: 55px;
    /*vertical-align: middle;*/
    border-radius: 0 !important;
    transition: opacity .2s ease;
    color: inherit;
  }
  .gt3_tools_bar__icon div.gt3_tools_bar__icon_src svg{
    width: 1em;
    height: 1em;
    display: inline-block;
    font-size: 21px;
    fill: currentColor;
  }
  .gt3_tools_bar__icon.gt3_tools_bar__icon_side_bar div.gt3_tools_bar__icon_src{
    background-position: 28px -36px;
  }
  .gt3_tools_bar__icon.gt3_tools_bar__icon_sale div.gt3_tools_bar__icon_src{
    background-position: -37px -4px;
  }
  .gt3_tools_bar__icon.gt3_tools_bar__icon_support div.gt3_tools_bar__icon_src{
    background-position: -68px -4px;
  }
  .gt3_tools_bar__icon.gt3_tools_bar__icon_docs div.gt3_tools_bar__icon_src{
    background-position: -4px 28px;
  }
  .gt3_tools_bar__icon_tooltip{
    font-size: 13px;
    width: 130px;
    height: 45px;
    font-weight: 400;
    line-height: 45px;
    text-align: center;
    transition: all .2s ease;
    padding: 0;
    box-sizing: border-box;
    background: rgba(0, 0, 0, 0.24);
    border-radius: 0;
    display: block;
    float: right;
    color: inherit;
  }
  .gt3_tools_bar__icon:hover .gt3_tools_bar__icon_tooltip{
    visibility: visible;
    opacity: 1;
    right: 110%;
  }
  .gt3_tools_bar__icon:hover{
    left: -130px;
  }
  .gt3_toolbar_button__container{
    text-align: center;
    padding-bottom: 40px;
  }
  .gt3_toolbar_button__container a{
    display: inline-block;
    vertical-align: top;
    padding: 8px 20px;
    font-size: 14px;
    font-weight: 500;
    line-height: 21px;
    color: #fff;
    border-width: 1px;
    border-style: solid;
    background-color: #82b440;
    border-color: #82b440;
    border-radius: 5px;
    transition: all 400ms;
    -webkit-transition: all 400ms;
  }
  .gt3_toolbar_button__container a:hover{
    color: #82b440;
    background-color: #ffffff;
  }
  .gt3_tools_bar__sidebar_container h2{
    text-align: center;
    font-size: 24px;
    line-height: 1.5;
    margin-bottom: 20px;
  }
  .gt3_tools_bar__sidebar_container a + a{
    margin-top: 25px;
    display: inline-block;
}
  .gt3_tools_bar__sidebar_container a img{
    box-shadow: -8px 8px 30px rgba(0, 0, 0, 0.07);
    max-width: 100%;
  }
.gt3_tools_bar .svg-preloader {
	  width: 100%;
	  height: 100%;
	  display: flex;
	  flex-direction: column;
	  justify-content: center;
	  align-items: center;
	  position: absolute;
	  left: 0;
	  top: 0;
	  background: white;
	  opacity: 1;
	  visibility: visible;
	  transition: opacity ease-in-out 400ms, visibility ease-in-out 400ms;
  }
  .gt3_tools_bar.loaded .svg-preloader {
	  opacity: 0;
	  visibility: hidden;
  }

  @media only screen and (max-width: 600px){
    .gt3_tools_bar{
      width: 300px;
      right: -300px;
    }
    .gt3_tools_bar__sidebar{
      width: 317px;
    }
    .gt3_tools_bar__sidebar_container h2{
      font-size: 20px;
    }
    .gt3_toolbar_button__container a{
      padding: 8px 10px;
    }

    .gt3_tools_bar__icon_tooltip{
      display: none;
    }
    .gt3_tools_bar__icon:hover{
      left: 0;
    }

  }
  @media only screen and (max-width: 480px){
    .gt3_tools_bar__icon_tooltip{
      display: none;
    }
    .gt3_tools_bar__icon:hover{
      left: 0;
    }
  }
  @media only screen and (max-width: 420px){
    .gt3_tools_bar{
      width: 250px;
      right: -250px;
    }
    .gt3_tools_bar__sidebar{
      width: 267px;
    }
    .gt3_tools_bar__sidebar_container h2{
      font-size: 16px;
    }
  }
</style><!-- Instagram Feed JS -->
<script type="text/javascript">
var sbiajaxurl = "wp-admin/admin-ajax.html";
</script>
<script type="text/html" id="wpb-modifications"></script>	<script type="text/javascript">
		(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})();
	</script>
	<link rel='stylesheet' id='vc_google_fonts_lato100100italic300300italicregularitalic700700italic900900italic-css'  href='http://fonts.googleapis.com/css?family=Lato%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;ver=5.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='vc_animate-css-css'  href='wp-content/plugins/js_composer/assets/lib/bower/animate-css/animate.min31dc.css?ver=6.6.0' type='text/css' media='all' />
<link rel='stylesheet' id='gt3_swipebox_style-css'  href='wp-content/themes/optima/js/swipebox/css/swipebox.min9f31.css?ver=5.7.2' type='text/css' media='all' />
<script type='text/javascript' src='wp-includes/js/jquery/ui/datepicker.min35d0.js?ver=1.12.1' id='jquery-ui-datepicker-js'></script>
<script type='text/javascript' id='jquery-ui-datepicker-js-after'>
jQuery(document).ready(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Previous","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"dateFormat":"MM d, yy","firstDay":1,"isRTL":false});});
</script>
<script type='text/javascript' src='wp-content/plugins/booked/assets/js/spin.min7406.js?ver=2.0.1' id='booked-spin-js-js'></script>
<script type='text/javascript' src='wp-content/plugins/booked/assets/js/spin.jquery7406.js?ver=2.0.1' id='booked-spin-jquery-js'></script>
<script type='text/javascript' src='wp-content/plugins/booked/assets/js/tooltipster/js/jquery.tooltipster.min9b70.js?ver=3.3.0' id='booked-tooltipster-js'></script>
<script type='text/javascript' id='booked-functions-js-extra'>
/* <![CDATA[ */
var booked_js_vars = {"ajax_url":"https:\/\/livewp.site\/wp\/md\/optima\/wp-admin\/admin-ajax.php","profilePage":"","publicAppointments":"","i18n_confirm_appt_delete":"Are you sure you want to cancel this appointment?","i18n_please_wait":"Please wait ...","i18n_wrong_username_pass":"Wrong username\/password combination.","i18n_fill_out_required_fields":"Please fill out all required fields.","i18n_guest_appt_required_fields":"Please enter your name to book an appointment.","i18n_appt_required_fields":"Please enter your name, your email address and choose a password to book an appointment.","i18n_appt_required_fields_guest":"Please fill in all \"Information\" fields.","i18n_password_reset":"Please check your email for instructions on resetting your password.","i18n_password_reset_error":"That username or email is not recognized."};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/booked/assets/js/functionsa361.js?ver=2.3' id='booked-functions-js'></script>
<script type='text/javascript' src='wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.selectBox.min7359.js?ver=1.2.0' id='jquery-selectBox-js'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.min005e.js?ver=3.1.6' id='prettyPhoto-js'></script>
<script type='text/javascript' id='jquery-yith-wcwl-js-extra'>
/* <![CDATA[ */
var yith_wcwl_l10n = {"ajax_url":"\/wp\/md\/optima\/wp-admin\/admin-ajax.php","redirect_to_cart":"no","multi_wishlist":"","hide_add_button":"1","enable_ajax_loading":"","ajax_loader_url":"https:\/\/livewp.site\/wp\/md\/optima\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader-alt.svg","remove_from_wishlist_after_add_to_cart":"1","is_wishlist_responsive":"1","time_to_close_prettyphoto":"3000","fragments_index_glue":".","reload_on_found_variation":"1","mobile_media_query":"768","labels":{"cookie_disabled":"We are sorry, but this feature is available only if cookies on your browser are enabled.","added_to_cart_message":"<div class=\"woocommerce-notices-wrapper\"><div class=\"woocommerce-message\" role=\"alert\">Product added to cart successfully<\/div><\/div>"},"actions":{"add_to_wishlist_action":"add_to_wishlist","remove_from_wishlist_action":"remove_from_wishlist","reload_wishlist_and_adding_elem_action":"reload_wishlist_and_adding_elem","load_mobile_action":"load_mobile","delete_item_action":"delete_item","save_title_action":"save_title","save_privacy_action":"save_privacy","load_fragments":"load_fragments"}};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.yith-wcwl.min7ee6.js?ver=3.0.23' id='jquery-yith-wcwl-js'></script>
<script type='text/javascript' src='wp-includes/js/dist/vendor/wp-polyfill.min89b1.js?ver=7.4.4' id='wp-polyfill-js'></script>
<script type='text/javascript' id='wp-polyfill-js-after'>
( 'fetch' in window ) || document.write( '<script src="wp-includes/js/dist/vendor/wp-polyfill-fetch.min6e0e.js?ver=3.0.0"></scr' + 'ipt>' );( document.contains ) || document.write( '<script src="wp-includes/js/dist/vendor/wp-polyfill-node-contains.min2e00.js?ver=3.42.0"></scr' + 'ipt>' );( window.DOMRect ) || document.write( '<script src="wp-includes/js/dist/vendor/wp-polyfill-dom-rect.min2e00.js?ver=3.42.0"></scr' + 'ipt>' );( window.URL && window.URL.prototype && window.URLSearchParams ) || document.write( '<script src="wp-includes/js/dist/vendor/wp-polyfill-url.min5aed.js?ver=3.6.4"></scr' + 'ipt>' );( window.FormData && window.FormData.prototype.keys ) || document.write( '<script src="wp-includes/js/dist/vendor/wp-polyfill-formdata.mine9bd.js?ver=3.0.12"></scr' + 'ipt>' );( Element.prototype.matches && Element.prototype.closest ) || document.write( '<script src="wp-includes/js/dist/vendor/wp-polyfill-element-closest.min4c56.js?ver=2.0.2"></scr' + 'ipt>' );( 'objectFit' in document.documentElement.style ) || document.write( '<script src="wp-includes/js/dist/vendor/wp-polyfill-object-fit.min531b.js?ver=2.3.4"></scr' + 'ipt>' );
</script>
<script type='text/javascript' id='contact-form-7-js-extra'>
/* <![CDATA[ */
var wpcf7 = {"api":{"root":"https:\/\/livewp.site\/wp\/md\/optima\/wp-json\/","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/indexc225.js?ver=5.4.1' id='contact-form-7-js'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4' id='js-cookie-js'></script>
<script type='text/javascript' id='woocommerce-js-extra'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp\/md\/optima\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/wp\/md\/optima\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.minc225.js?ver=5.4.1' id='woocommerce-js'></script>
<script type='text/javascript' id='wc-cart-fragments-js-extra'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp\/md\/optima\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/wp\/md\/optima\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_131433fde8c338992665ccf074bb7272","fragment_name":"wc_fragments_131433fde8c338992665ccf074bb7272","request_timeout":"5000"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.minc225.js?ver=5.4.1' id='wc-cart-fragments-js'></script>
<script type='text/javascript' id='booked-fea-js-js-extra'>
/* <![CDATA[ */
var booked_fea_vars = {"ajax_url":"https:\/\/livewp.site\/wp\/md\/optima\/wp-admin\/admin-ajax.php","i18n_confirm_appt_delete":"Are you sure you want to cancel this appointment?","i18n_confirm_appt_approve":"Are you sure you want to approve this appointment?"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/booked/includes/add-ons/frontend-agents/js/functionsa361.js?ver=2.3' id='booked-fea-js-js'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/jquery-cookie/jquery.cookie.min330a.js?ver=1.4.1' id='jquery-cookie-js'></script>
<script type='text/javascript' src='wp-content/themes/optima/js/jquery.isotope.min9f31.js?ver=5.7.2' id='gt3_isotope-js'></script>
<script type='text/javascript' src='wp-includes/js/imagesloaded.mineda1.js?ver=4.1.4' id='imagesloaded-js'></script>
<script type='text/javascript' id='gt3_theme_js-js-extra'>
/* <![CDATA[ */
var object_name = {"gt3_ajaxurl":"https:\/\/livewp.site\/wp\/md\/optima\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/themes/optima/js/theme9f31.js?ver=5.7.2' id='gt3_theme_js-js'></script>
<script type='text/javascript' src='wp-content/themes/optima/js/jquery.event.swipee7f0.js?ver=1.3.1' id='jquery-event-swipe-js'></script>
<script type='text/javascript' src='wp-includes/js/wp-embed.min9f31.js?ver=5.7.2' id='wp-embed-js'></script>
<script type='text/javascript' src='wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min31dc.js?ver=6.6.0' id='wpb_composer_front_js-js'></script>
<script type='text/javascript' src='wp-content/plugins/js_composer/assets/lib/vc_waypoints/vc-waypoints.min31dc.js?ver=6.6.0' id='vc_waypoints-js'></script>
<script type='text/javascript' src='wp-content/themes/optima/js/swipebox/js/jquery.swipebox.min9f31.js?ver=5.7.2' id='gt3_swipebox_js-js'></script>
<script type='text/javascript' src='wp-content/plugins/js_composer/assets/lib/bower/skrollr/dist/skrollr.min31dc.js?ver=6.6.0' id='vc_jquery_skrollr_js-js'></script>
<script type='text/javascript' src='wp-content/themes/optima/js/jquery.waypoints.min9f31.js?ver=5.7.2' id='gt3_waypoint_js-js'></script>
<script type='text/javascript' src='wp-includes/js/comment-reply.min9f31.js?ver=5.7.2' id='comment-reply-js'></script>
<script type="text/javascript" id="gt3_custom_footer_js">jQuery(document).ready(function(){

});</script>    

<!-- <?php include('footer.php')?> -->