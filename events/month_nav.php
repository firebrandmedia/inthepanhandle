<div id="event_calendar_month_nav">
{exp:repeet:get_ids weblog="event_cal" parse="inward" calendar="yes"}
{exp:repeet:calendar weblog="event_cal" interval_field="repeat_interval" include_field="event_dates" exclude_field="exclude_dates" switch="calendarToday|calendarCell" entry_id="{repeet:entry_ids}" show_future_entries="yes" show_expired="yes"}
<h3><a href="{previous_path='events/index'}">&#8592;</a> <a href="{path=events/index}{segment_2}/{segment_3}/">Local Events for {date format="%F %Y"}</a> <a class="calendarMonthLinks" href="{next_path='events/index'}">&#8594;</a></h3>
<ul>
{calendar_rows }
{if entries}<li class="calendarToday"><a href="{day_path='events/index'}">{day_number}</a></li>{/if}{if not_entries}<li>{day_number}</li>{/if}
{/calendar_rows}
</ul>
</div>
{/exp:repeet:calendar}
{/exp:repeet:get_ids}
