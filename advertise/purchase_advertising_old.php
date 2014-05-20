{assign_variable:my_weblog="subscriptions"} <!-- change this to your FoxEE weblog. If you are using multiple weblogs then you will need to change the parameters in the EE tags to the pipe | charecter and insert your weblog names. -->

{assign_variable:my_template_group="advertise"} <!-- change this to your temlpate group. (This tag is only used on the login redirect for this template) -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Compare Advertising Packages | InThePanhandle.com | Your Eastern WV Website</title>
<meta name="description" content="inthepanhandle.com is an eastern panhandle West Virginia community website that features local news, businesses, events, classifieds, restaurant menus and more for Berkeley Springs, Martinsburg, Shepherdstown, Inwood, Charles Town and other parts of eastern WV.">
<meta name="keywords" CONTENT="eastern wv, martinsburg, inwood, shepherdstown, berkeley springs, charles town, west virginia, travel, tourism, events, lodging, news, classifieds, jobs, blogs, movies, restaurants">
<link rel="stylesheet" href="/css/itp.css" type="text/css" />
<link rel="stylesheet" href="/css/thickbox.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/css/print.css" type="text/css" media="print" />
<link rel="apple-touch-icon" href="http://inthepanhandle.com/images/ui/iphonetouch.jpg">
<link rel="alternate" type="application/rss+xml" title="ITP Articles Feed" href="{path='SITE_INDEX'}/media/news_rss/" />
<link rel="alternate" type="application/rss+xml" title="ITP Event Cal Feed" href="{path='SITE_INDEX'}/media/events_rss/" />
<link rel="alternate" type="application/rss+xml" title="ITP New Businesses Feed" href="{path='SITE_INDEX'}/media/business_rss/" />
<link rel="alternate" type="application/rss+xml" title="ITP Shop Local Feed" href="{path='SITE_INDEX'}/media/products_rss/" />
<link rel="alternate" type="application/rss+xml" title="ITP New Coupons Feed" href="{path='SITE_INDEX'}/media/coupons_rss/" />
<link rel="alternate" type="application/rss+xml" title="ITP Flickr Feed" href="http://feeds.feedburner.com/UploadsFromInthepanhandlecom/" />
<script type='text/javascript' src='/js/jquery-1.2.1.pack.js'></script>
<script type="text/javascript" src="/js/thickbox.js"></script>
<script type="text/javascript">
        $(document).ready(function() {

            $(".signin").click(function(e) {
                e.preventDefault();
                $("fieldset#signin_menu").toggle();
                $(".signin").toggleClass("menu-open");
            });

            $("fieldset#signin_menu").mouseup(function() {
                return false
            });
            $(document).mouseup(function(e) {
                if($(e.target).parent("a.signin").length==0) {
                    $(".signin").removeClass("menu-open");
                    $("fieldset#signin_menu").hide();
                }
            });

        });
</script>
{exp:foxee:headers}
</head>
<body id="more">
<div id="content">
<div id="header">
<div id="header_content">
{embed="embeds/logo"}
{embed="embeds/navigation_primary"}
<div class="clear_both"></div>
</div>
</div>
<div id="announcements">
<div id="announcements_content">
{embed="embeds/welcome_login"}
{embed="embeds/weather"}
</div>
</div>
<div id="body_content_background">
{if member_group == '6'}
{embed="advertise/purchase_complete"}
{/if}
{if member_group != '6'}
<div id="advertising"></div>
<div id="ad_content">
{embed="advertise/package_options"}
</div>
{/if}
<div id="footer">
<div id="footer_nav">
{embed="embeds/subnav_destinations"}
{embed="embeds/subnav_help"}
{embed="embeds/subnav_interact"}
{embed="embeds/twitter"}
{embed="embeds/subnav_sitestats"}
<div class="clear_both"}
</div>
</div>
</div>
{embed="embeds/copyright"}
</div>
{embed="embeds/footer"}
