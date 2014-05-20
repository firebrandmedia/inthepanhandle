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
