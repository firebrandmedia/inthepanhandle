<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Whoops! 404 Error, Page Not Found | Your Eastern WV Community Website</title>
<meta name="description" content="inthepanhandle.com is an eastern panhandle West Virginia community website that features local news, businesses, events, classifieds, restaurant menus and more for Berkeley Springs, Martinsburg, Shepherdstown, Inwood, Charles Town and other parts of eastern WV.">
<meta name="keywords" CONTENT="eastern wv, martinsburg, inwood, shepherdstown, berkeley springs, charles town, west virginia, travel, tourism, events, lodging, news, classifieds, jobs, blogs, movies, restaurants">
<link rel="stylesheet" href="/css/itp.css" type="text/css">
<link rel="stylesheet" href="/css/thickbox.css" type="text/css" media="screen" />
<link rel="apple-touch-icon" href="http://inthepanhandle.com/images/ui/iphonetouch.jpg">
<script type='text/javascript' src='/js/jquery-1.2.1.pack.js'></script>
<script type="text/javascript" src="/js/thickbox.js"></script>
</head>
<body id="more">
{embed="embeds/iphone"}
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
<div id="advertising">
<!--<div id="ads">
</div>-->
</div>
<div id="body_content">
<div id="error_content">
<img align="right" src="http://www.inthepanhandle.com/images/ui/404_ice_cream.png" />
<h1>Whoops!  Page Not Found</h1>
<p>One night, I ate too much ice cream and man did my stomach hurt afterward.  This is sorta like that.  Except, we can help you get out of this without the use of chalky, pink liquid.
{exp:friendly_404}
		{if count == 1}<ul>{/if}
			<li>Were you looking for… <a href="{auto_path}">{title}</a></li>
		{if count == total_results}</ul>{/if}
	{/exp:friendly_404}
<br />
</p>
<div id="bus_search">
{exp:search:simple_form weblog="news|bus_dir|coupons|products|event_cal" show_future_entries="yes" show_expired="yes" results="15" search_in="everywhere" where="exact" no_result_page="search/noresults"}
<p><label for="keywords">How about trying a search for what you were looking for?</label><input class="txt" type="text" name="keywords" id="keywords" value="" size="40" maxlength="100" /> <input type="submit" value="Search" class="btn" /></p>
{/exp:search:simple_form}
</div>
<h2>Or, check out today's most popular items!</h2>
<ul>
{exp:tracker:entries weblog="news|bus_dir|event_cal|video_tutorials|itp_blog" interval="today" limit="10" disable="categories|category_fields|member_data|trackbacks|pagination|custom_fields"}
  <li><a href="{tracker:comment_url_title_auto_path}" title="{tracker:title}">{tracker:title}</a></li>
{/exp:tracker:entries}
</ul>
</div>
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
