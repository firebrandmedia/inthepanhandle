<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>{exp:weblog:category_heading weblog="bus_dir" disable="categories|category_fields|pagination|member_data|trackbacks|custom_fields"}{category_name}{/exp:weblog:category_heading} | Business Directory | InThePanhandle.com | Your Eastern WV Community Website</title>
<meta name="description" content="inthepanhandle.com is an eastern panhandle West Virginia community website that features local news, businesses, events, classifieds, restaurant menus and more for Berkeley Springs, Martinsburg, Shepherdstown, Inwood, Charles Town and other parts of eastern WV.">
<meta name="keywords" CONTENT="eastern wv, martinsburg, inwood, shepherdstown, berkeley springs, charles town, west virginia, travel, tourism, events, lodging, news, classifieds, jobs, blogs, movies, restaurants">
{embed="embeds/css_js"}
</head>
<body id="business">
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
<div id="biz_subcategories">
{exp:weblog:category_heading weblog="bus_dir"}
<h1>{category_name}</h1><span class="bread_crumb"> / {embed="embeds/category_breadcrumbs" cat_id="{category_id}" type="name"} <a href="{path='SITE_INDEX'}/business_directory/">Business Directory</a> / <a href="{path='SITE_INDEX'}">Home</a></span>
<div class="clear_both"></div>
{/exp:weblog:category_heading}

<ul>
{exp:weblog:entries weblog="bus_dir" orderby="title" sort="asc" orderby_ratings="yes"}
<li><h2><a href="{title_permalink=business_directory/listing}" title="{title}">{title}</a></h2>
<p><b>{city}, {state}</b><br /> {phone} <br />{exp:rating:stats entry_id="{entry_id}"}
<b>Rated:</b> {stars_overall_avg} {if overall_count !="1"}{/if}
{/exp:rating:stats}</p><div class="clear_both"></div></li>
{/exp:weblog:entries}
</ul>
</div>
</div>
<div id="back_full"><div id="back"><a href="{path='SITE_INDEX'}/business_directory/">Back to the Business Directory</a></div></div>
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
