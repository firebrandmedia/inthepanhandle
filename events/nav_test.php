<!--{exp:repeet:get_ids weblog="event_cal" parse="inward" calendar="yes"}
{exp:repeet:calendar weblog="event_cal" interval_field="repeat_interval" include_field="include_dates" exclude_field="exclude_dates" switch="calendarToday|calendarCell" entry_id="{repeet:entry_ids}" show_future_entries="yes" show_expired="yes" dynamic="off"}
<h3><a href="{previous_path='events/month'}">&#8592;</a> <a href="{path=events}month/{segment_2}/{segment_3}/">Local Events for {date format="%F %Y"}</a> <a class="calendarMonthLinks" href="{next_path='events/month'}">&#8594;</a></h3>
<ul>
{calendar_rows}
{if entries}<li class="calendarToday"><a href="{day_path='events/index'}">{day_number}</a></li>{/if}{if not_entries}<li>{day_number}</li>{/if}
{/calendar_rows}
</ul>
</div>
{/exp:repeet:calendar}
{/exp:repeet:get_ids}-->

<h1>
                  Coming Events
                </h1>
{exp:repeet:get_ids weblog="event_cal" parse="inward" calendar="yes"}

                {exp:repeet:calendar weblog="event_cal" interval_field="repeat_interval" include_field="event_dates" exclude_field="exclude_dates" switch="calendarToday|calendarCell" entry_id="{repeet:entry_ids}" show_future_entries="yes" show_expired="yes"}
                <table class="calendarBG" summary="Mini Events Calendar">
                  <tr class="calendarHeader">
                    <th colspan="7"><a href="http://lincolnite.com/ee/repeet_example1/{date format="%Y/%m/"}" title="View all events in {date format="%F %Y"}">{date format="%F %Y"}</a></th>
                  </tr>
                  <tr>
                  {calendar_heading}
                  <td class="calendarDayHeading">{lang:weekday_abrev}</td>
                  {/calendar_heading}
                  </tr>
                {calendar_rows }
                  {row_start}<tr class="calendarRow">{/row_start}
                  {if entries}
                    <td class='{switch} {switch}Event' align='center'><a href="{day_path=ee/repeet_example1}">{day_number}</a></td>
                  {/if}
                  {if not_entries}
                    <td class='{switch}' align='center'>{day_number}</td>
                  {/if}
                  {if blank}
                    <td class='calendarBlank'> </td>
                  {/if}
                  {row_end}</tr>{/row_end}
                {/calendar_rows}
                  <tr class="calendarMonthLinks">
                    <td colspan="3">
                      <div class="calendarPrevMonth"><a href="http://lincolnite.com/ee/repeet_example4/{previous_date format="%Y/%m/"}" onClick="sndReq('coming_events_minical', 'events', 'mini_cal', '{previous_date format="%Y/%m/"}'); return false;"><< {previous_date format="%M %Y"}</a></div>
                    </td>
                    <td></td>
                    <td colspan="3">
                      <div class="calendarNextMonth"><a href="http://lincolnite.com/ee/repeet_example4/{next_date format="%Y/%m/"}" onClick="sndReq('coming_events_minical', 'events', 'mini_cal', '{next_date format="%Y/%m/"}'); return false;">{next_date format="%M %Y"} >></a></div>
                    </td>
                  </tr>
                </table>
                {/exp:repeet:calendar}
{/exp:repeet:get_ids}
