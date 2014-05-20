<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>{exp:weblog:category_heading weblog="products" disable="categories|category_fields|pagination|member_data|trackbacks|custom_fields"}{category_name}{/exp:weblog:category_heading} | Business Directory | InThePanhandle.com | Your Eastern WV Community Website</title>
<meta name="description" content="inthepanhandle.com is an eastern panhandle West Virginia community website that features local news, businesses, events, classifieds, restaurant menus and more for Berkeley Springs, Martinsburg, Shepherdstown, Inwood, Charles Town and other parts of eastern WV.">
<meta name="keywords" CONTENT="eastern wv, martinsburg, inwood, shepherdstown, berkeley springs, charles town, west virginia, travel, tourism, events, lodging, news, classifieds, jobs, blogs, movies, restaurants">
{embed="embeds/css_js"}
</head>
<body id="shopping">
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
<div id="ads">


</div>
</div>
<div id="body_content">
<div id="products_subcategories">
{exp:weblog:category_heading weblog="products"}
<h1>{category_name}</h1><span class="bread_crumb"> / {embed="embeds/category_breadcrumbs_products" cat_id="{category_id}" type="name"} <a href="{path='SITE_INDEX'}/shop_local/">Shop Local</a> / <a href="{path='SITE_INDEX'}">Home</a></span>
<div class="clear_both"></div>
{/exp:weblog:category_heading}
<ul>
{exp:weblog:entries weblog="products" orderby="title" sort="asc"}
<li><h2><a href="{title_permalink=business_directory/product}">{title}</a></h2>
<p class="description">{prod_description}</p>
<p class="price">Price: {product_price}</p>
<div class="clear_both"></div></li>
{/exp:weblog:entries}
</ul>
</div>
</div>
<div id="back_full"><div id="back"><a href="{path='SITE_INDEX'}/shop_local/">Back to our Local Shopping Directory</a></div></div>
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
