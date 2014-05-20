{exp:fbc:prepare_page}
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>InThePanhandle.com | Your Eastern WV Community Website</title>
<meta name="description" content="inthepanhandle.com is an eastern panhandle West Virginia community website that features local news, businesses, events, classifieds, restaurant menus and more for Berkeley Springs, Martinsburg, Shepherdstown, Inwood, Charles Town and other parts of eastern WV.">
<meta name="keywords" CONTENT="eastern wv, martinsburg, inwood, shepherdstown, berkeley springs, charles town, west virginia, travel, tourism, events, lodging, news, classifieds, jobs, blogs, movies, restaurants">
<meta name="viewport" content="width=1024" />
<meta property="twitter:account_id" content="16668236" />

{header_css_js}

</head>
<body id="home">
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
{embed="embeds/weather"}
{embed="embeds/welcome_login"}
</div>
</div>
<div id="body_content_background">
<div id="body_content">

<div id="top_stories" class="group">

<h1>Headlines</h1>
<ul>
<li><a href="{path=''news/send_us_news"}" title="Send us news"">Send us news</a></li>
</ul>
<div class="clear_both"></div>


{exp:weblog:entries weblog="news" orderby="date" sort="desc" limit="5" dynamic="off" category="390"}

<div class="story">
<a href="{title_permalink=news/article}">{if article_thumbnail}{exp:imgsizer:size src="{article_thumbnail}" width="180" height="180"}
<img src="{sized}" />{/exp:imgsizer:size}{if:else}{exp:imgsizer:size src="{article_images}{article_image}{/article_images}" width="180" height="180"}
<img src="{sized}" />
{/exp:imgsizer:size}{/if}</a>
<h2><a href="{title_permalink=news/article}">{title}</a></h2>
</div>

{/exp:weblog:entries}

</div>

<!--Email / Ads / PunchTab-->
<div id="advertising" class="group">
<div id="ads">
{embed="embeds/ads_newsletter_punchtab"}
</div>
</div>
<!--Email / Ads / PunchTab-->


<!--Home News-->
<div id="home_news" class="group">

<h1>New & Popular</h1>
<div id="recent_news">
<h2>More Recent Articles</h2>
<ul>
{exp:weblog:entries weblog="news" orderby="date" offset="0" sort="desc" limit="6" dynamic="off" disable="categories|category_fields|member_data|trackbacks|pagination|custom_fields"}
<li><a href="{title_permalink=news/article}">{title}</a></li>
{/exp:weblog:entries}
</ul>
</div>

<div id="popular_today">

<h2>Today's Buzz</h2>
<ul>
{exp:tracker:entries weblog="news" interval="today" limit="8" disable="categories|category_fields|member_data|trackbacks|pagination|custom_fields"}
   <li><span class="views">{tracker:total_views}</span><a href="{path="site_index"}/news/article/{tracker:url_title}">{tracker:title}</a></li>
{/exp:tracker:entries}
</ul>
</div>

<div id="most_popular">
<h2>Most Popular Articles, last 7 days</h2>
<ul>
{exp:tracker:entries weblog="news" interval="week" limit="6" disable="categories|category_fields|member_data|trackbacks|pagination|custom_fields"}
   <li><span class="views">{tracker:total_views}</span><a href="{path="site_index"}/news/article/{tracker:url_title}" class="popular_links">{tracker:title}</a></li>
{/exp:tracker:entries}
</ul>
</div>
</div>
<!--End Home News-->

<!--Home Events-->
<div id="events">
<h1>Local Event Calendar</h1>
<div class="clear_both"></div>
<div id="featured_event">
{exp:weblog:entries weblog="event_cal" orderby="date" limit="1" sort="asc" dynamic="off" start_on="{current_time format='%Y-%m-%d %H:%i'}" show_future_entries="yes" disable="pagination|categories|category_fields|member_data|trackbacks" category="not 321"}
<h2>Featured Event: <br />
<a href="{title_permalink=events/details}">{title}</a> | {entry_date format="%m. %d. %Y"}</h2>
<p>{exp:md_eexcerpt if_exceeds="75" stop_after="50" append="&nbsp;&hellip;" the_link="<a href='{title_permalink=events/details}'>Continue Reading</a>"}
{event_details}
{/exp:md_eexcerpt}</p>
{/exp:weblog:entries}
</div>
<div id="upcoming_evnts">
<h2>Today's Events</h2>
<ul>
{exp:repeet:parse date_header_interval="month"}
{repeet:no_results}Sorry, no results.{/repeet:no_results}
{repeet:date_header}<!--<h1>%F %j, %Y</h1>-->{/repeet:date_header}
{exp:repeet:get_ids weblog="event_cal" parse="inward"}
{exp:weblog:entries weblog="event_cal" entry_id="{repeet:entry_ids}" show_expired="no" show_future_entries="yes" dynamic="off" disable="pagination|category_fields||member_data|trackbacks"}
{repeet:item}
{repeet:entry_id}{entry_id}{/repeet:entry_id}
{repeet:entry_date}{entry_date format="%Y-%m-%d %H:%i"}{/repeet:entry_date}
{repeet:expiration_date}{expiration_date format="%Y-%m-%d %H:%i"}{/repeet:expiration_date}
{repeet:interval}{repeat_interval}{/repeet:interval}
{repeet:include_dates}{event_dates}{/repeet:include_dates}
{repeet:exclude_dates}{exclude_dates}{/repeet:exclude_dates}
{repeet:display}
{exp:repeet:calendar weblog="event_cal"}
<li><a href='{title_permalink=events/details}'>{title}</a></li>
{/exp:repeet:calendar}
{/repeet:display}
{/repeet:item}
{/exp:weblog:entries}
{/exp:repeet:get_ids}
{/exp:repeet:parse}
<li><a href="{path='SITE_INDEX'}/events/{current_time format="%Y"}/{current_time format="%m"}/{current_time format="%d"}/">View Full Calendar</a></li>
</ul>
</div>
<div id="most_popular_events">
<h2>Popular Upcoming Events</h2>
<ul>
{exp:tracker:entries weblog="event_cal" interval="week" limit="10" entry_date_from="{current_time format='%Y-%m-%d %H:%i'}" show_future_entries="yes" disable="categories|category_fields|member_data|trackbacks|pagination|custom_fields"}
   <li><span class="views">{tracker:total_views}</span><a href="{path="site_index"}/events/details/{tracker:url_title}">{tracker:title}</a></li>
{/exp:tracker:entries}
</ul>
</div>
<div class="clear_both"></div>
</div>
<!--End Home Events-->

</div>
<div id="footer">
<div id="footer_nav">
{embed="embeds/subnav_destinations"}
{embed="embeds/subnav_help"}
{embed="embeds/subnav_interact"}

{embed="embeds/subnav_sitestats"}
<div class="clear_both">
</div>
</div>
</div>
{embed="embeds/copyright"}
</div>
        <script type="text/javascript">
setTimeout(function(){var a=document.createElement("script");
var b=document.getElementsByTagName("script")[0];
a.src=document.location.protocol+"//dnn506yrbagrg.cloudfront.net/pages/scripts/0014/8160.js?"+Math.floor(new Date().getTime()/3600000);
a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>

{embed="embeds/footer"}
