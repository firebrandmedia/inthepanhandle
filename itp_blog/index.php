<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>InThePanhandle.com Blog | InThePanhandle.com | Your Eastern WV Community Website</title>
<meta name="description" content="inthepanhandle.com is an eastern panhandle West Virginia community website that features local news, businesses, events, classifieds, restaurant menus and more for Berkeley Springs, Martinsburg, Shepherdstown, Inwood, Charles Town and other parts of eastern WV.">
<meta name="keywords" CONTENT="eastern wv, martinsburg, inwood, shepherdstown, berkeley springs, charles town, west virginia, travel, tourism, events, lodging, news, classifieds, jobs, blogs, movies, restaurants">
{embed="embeds/css_js"}
<script type="text/javascript" src="/js/swfobject.js"></script>
</head>
<body id="more">
{search}
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
<div id="advertising"><div id="ads">

</div></div>
<div id="body_content">
{embed="itp_blog/featured_blog"}
{embed="itp_blog/popular_blog"}
<!-- News Categories Code -->
<div id="news_categories">
<h2>Browse InThePanhandle.com Blog by Category</h2>
{exp:splitter blocks="4" delimiter="</li>" style="linear" class="news_categories"}
{exp:weblog:categories weblog="itp_blog" id="my_custom_id"}
<a href="{path=itp_blog/category_archives}/">{category_name}</a>
{/exp:weblog:categories}
{/exp:splitter}
<div class="clear_both"></div>
</div>
<!-- News Categories Code End -->

</div>
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
