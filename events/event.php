

		<div id="maincolumn">

			<h2>Calendar</h2>

			<h3>Event View</h3>

			<p></p>

			<div id="leftcolumn">

{if logged_in_group_id == "1"}
				{if segment_4 == "success"}<div class="calendar_success">Event has been successfully created!</div>{/if}
				{if segment_4 == "updated"}<div class="calendar_success">Event has been successfully updated!</div>{/if}
<p><b>Admin:</b> <a href="{path='testcalmain/edit'}{segment_3}/">Update this Event</a></p>
				<hr />
{/if}

<div id="events_calendar">

{exp:calendar:events orderby="title" sort="asc" event_id="{segment_3}" date_range_start="99 months ago" show_months="999" dynamic="off"}
   {if no_results}No Results{/if}
   <div class="event">
      <small style="float:right;"><a href="{path='testcalmain/export/event'}{segment_3}/">Export this Event to another Application</a></small>
      <h2 style="font-size:25px;font-weight:bold;">{event_title}</h2>
      <p><b>From Calendar:</b> <a href="{path='testcalmain/calendars'}{event_calendar_url_title}/">{event_calendar_title}</a></p>
      <p><b>Location:</b> {event_location}</p>
      <p><b>From:</b> {event_first_date format="%F %j, %Y at %g:%i%a"}{if event_never_ends} (never ends){if:else}{if "{event_first_date format='%Y%m%d%g%i%a'}" != "{event_last_date format='%Y%m%d%g%i%a'}"} <b>to:</b> {if "{event_first_date format='%Y%m%d'}" != "{event_last_date format='%Y%m%d'}"}{event_last_date format="%l, %F %j, %Y at %g:%i%a"}{if:else}{event_last_date format="%g:%i%a"}{/if}{/if}{/if}</p>
      <p><b>Details:</b> {event_summary}</p>
   </div>
{/exp:calendar:events}

   <hr />

      <h3 class="occurrences">Upcoming Occurrences:</h3>
      <ul>
         {exp:calendar:occurrences event_id="{segment_3}" date_range_start="today" date_range_end="3 months" upcoming_occurrences_limit="5" prior_occurrences_limit="0" dynamic="off"}
         <li>{occurrence_start_date format="%l, %F %j, %Y at %g:%i%a"}{if "{occurrence_start_date format='%Y%m%d%g%i%a'}" != "{occurrence_end_date format='%Y%m%d%g%i%a'}"} - {if "{occurrence_start_date format='%Y%m%d'}" != "{occurrence_end_date format='%Y%m%d'}"}{occurrence_end_date format="%l, %F %j, %Y at %g:%i%a"}{if:else}{occurrence_end_date format="%g:%i%a"}{/if}{/if} &nbsp; <small><a href="{path='testcalmain/day'}{occurrence_start_date format="%Y/%m/%d"}/">View other events on this day</a></small></li>
         {if no_results}
         <li>No upcoming occurrences in the timeframe specified for this event.</li>
         {/if}
         {/exp:calendar:occurrences}
      </ul>

      <h3 class="occurrences">Past Occurrences:</h3>
      <ul>
         {exp:calendar:occurrences event_id="{segment_3}" date_range_start="3 months ago" date_range_end="today" upcoming_occurrences_limit="0" prior_occurrences_limit="3" dynamic="off"}
         <li>{occurrence_start_date format="%l, %F %j, %Y at %g:%i%a"}{if "{occurrence_start_date format='%Y%m%d%g%i%a'}" != "{occurrence_end_date format='%Y%m%d%g%i%a'}"} - {if "{occurrence_start_date format='%Y%m%d'}" != "{occurrence_end_date format='%Y%m%d'}"}{occurrence_end_date format="%l, %F %j, %Y at %g:%i%a"}{if:else}{occurrence_end_date format="%g:%i%a"}{/if}{/if} &nbsp; <small><a href="{path='testcalmain/day'}{occurrence_start_date format="%Y/%m/%d"}/">View other events on this day</a></small></li>
         {if no_results}
         <li>No prior occurrences in the timeframe specified for this event.</li>
         {/if}
         {/exp:calendar:occurrences}
      </ul>

   <hr />

</div>

			</div>

		</div>

