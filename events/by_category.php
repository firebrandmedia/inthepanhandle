<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Upcoming events for the {segment_4} category | InThePanhandle.com | Your Eastern WV Community Website</title>
<meta name="description" content="inthepanhandle.com is an eastern panhandle West Virginia community website that features local news, businesses, events, classifieds, restaurant menus and more for Berkeley Springs, Martinsburg, Shepherdstown, Inwood, Charles Town and other parts of eastern WV.">
<meta name="keywords" CONTENT="eastern wv, martinsburg, inwood, shepherdstown, berkeley springs, charles town, west virginia, travel, tourism, events, lodging, news, classifieds, jobs, blogs, movies, restaurants">
{embed="embeds/css_js"}
</head>
<body id="event_cal">
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
<div id="event_calendar">
<!-- Calendar Categories Code -->
<div id="cal_categories">
<h2>View Events by Category</h2>
{exp:splitter blocks="4" delimiter="</li>" style="linear" class="event_categories"}
{exp:weblog:categories weblog="event_cal" id="my_custom_id"}
<a href="{path=events/by_category}{current_time format="%Y"}/{current_time format="%m"}/">{category_name}</a>
{/exp:weblog:categories}
{/exp:splitter}
<div class="clear_both"></div>
</div>
<!-- End Calendar Categories Code -->

<!--Begin Calendar Month Navigation -->
<div id="event_calendar_month_nav">
{exp:repeet:get_ids weblog="event_cal" parse="inward" calendar="yes"}
{exp:repeet:calendar weblog="event_cal" interval_field="repeat_interval" include_field="event_dates" exclude_field="exclude_dates" switch="calendarToday|calendarCell" entry_id="{repeet:entry_ids}" show_future_entries="yes" show_expired="yes"}
<h3><a href="{previous_path='events/month'}">&#8592;</a> <a href="{path=events}month/{segment_5}/{segment_6}/">Local Events for {date format="%F %Y"}</a> <a class="calendarMonthLinks" href="{next_path='events/month'}">&#8594;</a></h3>
<ul>
{calendar_rows }
{if entries}<li class="calendarToday"><a href="{day_path='events/index'}">{day_number}</a></li>{/if}{if not_entries}<li>{day_number}</li>{/if}
{/calendar_rows}
</ul>
</div>
{/exp:repeet:calendar}
{/exp:repeet:get_ids}

<!--End Calendar Month Navigation -->

{exp:repeet:parse date_header_interval="week" category=”{segment_5}”}
{repeet:no_results}<h1>Sorry, we have no events.  How about adding some?</h1>{/repeet:no_results}
{repeet:date_header}<h1>Upcoming events for the Week of %F %d, %Y in the {exp:weblog:category_heading weblog="event_cal"}{category_name}{/exp:weblog:category_heading} category</h1>{/repeet:date_header}
{exp:repeet:get_ids weblog="event_cal" parse="inward"}
{exp:weblog:entries weblog="event_cal" entry_id="{repeet:entry_ids}" show_expired="no" show_future_entries="yes" dynamic="on"}
{repeet:item}
{repeet:entry_id}{entry_id}{/repeet:entry_id}
{repeet:entry_date}{entry_date format="%Y-%m-%d %H:%i"}{/repeet:entry_date}
{repeet:expiration_date}{expiration_date format="%Y-%m-%d %H:%i"}{/repeet:expiration_date}
{repeet:interval}{repeat_interval}{/repeet:interval}
{repeet:include_dates}{event_dates}{/repeet:include_dates}
{repeet:exclude_dates}{exclude_dates}{/repeet:exclude_dates}
{repeet:display}
{exp:repeet:calendar weblog="event_cal" category=”{segment_5}”}
<div class="event_month">{repeet:start_time format="%D"}</div>
<div class="event_date">{repeet:start_time format="%d"}</div>
<div class="event_details">  <h3>{title}</h3><ul class="inline_category"><b>Category:</b> {categories}<li>{category_name}</li>{/categories}</ul><div class="clear_both"></div><p>{exp:char_limit total="75"}{event_details}{/exp:char_limit} <a href='{title_permalink=events/details}'>Click for {title} event details</a></p></div>
<div class="clear_both"></div>
{/exp:repeet:calendar}
{/repeet:display}
{/repeet:item}
{/exp:weblog:entries}
{/exp:repeet:get_ids}
{/exp:repeet:parse}
{exp:weblog:calendar weblog="event_cal" show_future_entries="yes" sort="asc"}
<p class="next_month"><a href="{previous_path=events/month}">&#8592; Previous Month</a> | <a href="#ads">Back to Top</a> | <a href="{next_path=events/month}">Next Month &#8594;</a></p>
{/exp:weblog:calendar}
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
