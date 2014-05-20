<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>{exp:weblog:category_heading weblog="news" disable="categories|category_fields|pagination|member_data|trackbacks|custom_fields"}{category_name}{/exp:weblog:category_heading} | News Archives | InThePanhandle.com | Your Eastern WV Community Website</title>
<meta name="description" content="inthepanhandle.com is an eastern panhandle West Virginia community website that features local news, businesses, events, classifieds, restaurant menus and more for Berkeley Springs, Martinsburg, Shepherdstown, Inwood, Charles Town and other parts of eastern WV.">
<meta name="keywords" CONTENT="eastern wv, martinsburg, inwood, shepherdstown, berkeley springs, charles town, west virginia, travel, tourism, events, lodging, news, classifieds, jobs, blogs, movies, restaurants">
{embed="embeds/css_js"}
</head>
<body id="news">
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
<div id="advertising">
<div id="ads">


</div>
</div>
<div id="body_content">
<div id="news_category_listings">
{exp:weblog:category_heading weblog="news"}
<h1>{category_name}</h1><span class="bread_crumb"> / {embed="embeds/category_breadcrumbs" cat_id="{category_id}" type="name"} <a href="{path='SITE_INDEX'}/news/">News Archives</a> / <a href="{path='SITE_INDEX'}">Home</a></span>
<div class="clear_both"></div>
{/exp:weblog:category_heading}

{exp:weblog:entries weblog="news" orderby="date" sort="desc"}
<h2>{title}</h2>
<!--{if article_thumbnail}{article_thumbnail}<img class="article_image_thumbnail" src="{file_thumb_url}" border="0" alt="image">{/article_thumbnail}{/if}-->
<p>{exp:md_eexcerpt if_exceeds="75" stop_after="50" append="&nbsp;&hellip;"}
{body}
{/exp:md_eexcerpt} <a href='{title_permalink=news/article}'>Continue Reading {title}</a> <span class="article_author"> <b>Author:</b> {author} | <b>Published:</b> {entry_date format="%m/%d/%Y"} | {exp:tracker:stats weblog="news" entry_id="{entry_id}"}{tracker:alltime}{/exp:tracker:stats} Views</span></p>
{/exp:weblog:entries}

</div>
</div>
<div id="back_full"><div id="back"><a href="{path='SITE_INDEX'}/news/">Back to the InThePanhandle.com News Page</a></div></div>
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
