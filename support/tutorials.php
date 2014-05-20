<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Video Tutorials | InThePanhandle.com | Your Eastern WV Community Website</title>
<meta name="description" content="inthepanhandle.com is an eastern panhandle West Virginia community website that features local news, businesses, events, classifieds, restaurant menus and more for Berkeley Springs, Martinsburg, Shepherdstown, Inwood, Charles Town and other parts of eastern WV.">
<meta name="keywords" CONTENT="eastern wv, martinsburg, inwood, shepherdstown, berkeley springs, charles town, west virginia, travel, tourism, events, lodging, news, classifieds, jobs, blogs, movies, restaurants">
<link rel="stylesheet" href="/css/itp.css" type="text/css">
<link rel="stylesheet" href="/css/thickbox.css" type="text/css" media="screen" />
<link rel="apple-touch-icon" href="http://inthepanhandle.com/images/ui/iphonetouch.jpg">
<script type='text/javascript' src='/js/jquery-1.2.1.pack.js'></script>
<script type="text/javascript" src="/js/thickbox.js"></script>
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
<h1>InThePanhandle.com Video Tutorials</h1>
<div id="video_tutorials">
<div class="featured_video">
{exp:weblog:entries weblog="video_tutorials" limit="1" orderby="random"}
{exp:flvplugin playerpath="/video/player.swf" file="http://www.youtube.com/watch?v={youtube_id}" playernumber="{entry_id}" width="660" height="500" controlbar="none" stretching="fill" backcolor="ffffff" frontcolor="000000" skin="/video_skin/modieus.swf" image="http://img.youtube.com/vi/{youtube_id}/0.jpg"}
<h2>Featured Tutorial: {title}</h2>
<div id="player{entry_id}"></div>
{/exp:weblog:entries}
</div>
<div id="recently_added_videos">
<h2>Tutorial Library</h3>
<ul>
{exp:weblog:entries weblog="video_tutorials" orderby="date" sort="desc" limit="15" dynamic="off" disable="categories|category_fields|member_data|trackbacks|pagination|custom_fields"}
<li><a href="{title_permalink=support/tutorial_details}">{title}</a></li>
{/exp:weblog:entries}
</ul>
</div>
<div class="clear_both"></div>
</div>
<p class="having_trouble">Having trouble with the video tutorials? Rats!  Luckily, we have them hosted on our <a href="http://www.youtube.com/inthepanhandle" title="InThePanhandle.com's YouTube Page">YouTube</a> page.<br />  If that's down, then the world is pretty much over and we defer to our robot overlords.</p>
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
