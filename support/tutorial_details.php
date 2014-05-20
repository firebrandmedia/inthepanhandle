<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>{exp:weblog:entries rdf="off" limit="1" disable="categories|category_fields|pagination|member_data|trackbacks|custom_fields"}{title}{/exp:weblog:entries} | InThePanhandle.com | Your Eastern WV Community Website</title>
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
<div id="article_content">
{exp:weblog:entries weblog="video_tutorials"}
{exp:flvplugin playerpath="/video/player.swf" file="http://www.youtube.com/watch?v={youtube_id}" playernumber="{entry_id}" width="650" height="450" stretching="uniform" backcolor="ffffff" frontcolor="7B1E23" skin="/video_skin/modieus.swf" image="http://img.youtube.com/vi/{youtube_id}/0.jpg"}
<h1>Tutorial: {title}</h1>
<p class="tutorial_author"><b>Author:</b> {author} | <b>Published:</b> {entry_date format="%m/%d/%Y"} | {exp:tracker:stats weblog="news" entry_id="{entry_id}"}{tracker:alltime}{/exp:tracker:stats} Views</p>
<div id="player{entry_id}"></div>
<img src="{exp:tracker:pixeltrack weblog="video_tutorials" entry_id="{entry_id}" entry_identifier="{entry_id}"}" />
</div>
<div id="related_content">
<div class="related_content_box">
<h3>Tutorial Summary:</h3>
<p>{video_description}</p>
</div>
<div class="related_content_box">
<h3>About this tutorial:</h3>
<ul>
<li><b>Publish Date:</b> {entry_date format="%m/%d/%Y"}</li>
<li><b>Permalink:</b> <a href="{permalink="support/tutorial_details"}">{title}</a></li>
</ul>
</div>
{/exp:weblog:entries}
<div class="related_content_box">
<h3>More Tutorials:</h3>
<ul>
{exp:weblog:entries weblog="video_tutorials" orderby="date" sort="desc" limit="15" dynamic="off" disable="categories|category_fields|member_data|trackbacks|pagination|custom_fields"}
<li><a href="{title_permalink=support/tutorial_details}">{title}</a></li>
{/exp:weblog:entries}
</ul>
</div>
</div>
<div class="clear_both"></div>
</div>
<div id="back_full"><div id="back"><a href="{path='SITE_INDEX'}/support/tutorials/">Back to the InThePanhandle.com Tutorials Page</a></div></div>
<div id="footer">
<div id="footer_nav">
{embed="embeds/subnav_destinations"}
{embed="embeds/subnav_help"}
{embed="embeds/subnav_interact"}
{embed="embeds/twitter"}
{embed="embeds/subnav_sitestats"}
<div class="clear_both">
</div>
</div>
</div>
{embed="embeds/copyright"}
</div>
{embed="embeds/footer"}
