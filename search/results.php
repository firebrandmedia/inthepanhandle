<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Search Results | InThePanhandle.com | Your Eastern WV Community Website</title>
<meta name="description" content="inthepanhandle.com is an eastern panhandle West Virginia community website that features local news, businesses, events, classifieds, restaurant menus and more for Berkeley Springs, Martinsburg, Shepherdstown, Inwood, Charles Town and other parts of eastern WV.">
<meta name="keywords" CONTENT="eastern wv, martinsburg, inwood, shepherdstown, berkeley springs, charles town, west virginia, travel, tourism, events, lodging, news, classifieds, jobs, blogs, movies, restaurants">

{header_css_js}

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
<div id="advertising">
<div id="ads">

</div>
</div>
<div id="body_content">
<div id="search_results_page">
<h1>Thank you for searching with us. Here's what we found…</h1>
<p class="your_results">Your search for <span class="hilite">{exp:search:keywords}</span> found {exp:search:total_results}{total_results}{/exp:search:total_results} result{if "{exp:search:total_results}" != 1}s{/if}.</p>

<table class="search_results" cellpadding="10" cellspacing="0" width="100%">
<tr>
<th align="left">{lang:title}</th>
<th align="left">{lang:excerpt}</th>
</tr>

{exp:key_search:results groupby="channel" group_sort="asc" group_repeat="no" excerpt_size="60" parameters=”highlight”}
<tr class="{switch}">
<td width="30%" valign="top" ><b><a href="{auto_path}">{title}</a></b></td>
<td width="70%" valign="top">{excerpt}</td>
</tr>

{/exp:key_search:results}

</table>


<p class="try_advanced">Not exactly what you were looking for?  How about trying our <a href="{site_url}local/search/advanced/">Advanced Search?</a> It's super-terrific!</p>
<div id="paginate">
{exp:bu_search_pagination}
{if prev_page_path}
 <a href="{path={prev_page_path}}">&#8592; Prev</a>
{/if}

Page {current_page} of {total_pages}

{if next_page_path}
 <a href="{path={next_page_path}}">Next &#8594;</a>
{/if}
{/exp:bu_search_pagination}
</div>
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
