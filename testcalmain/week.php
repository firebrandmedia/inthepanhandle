{embed="testcalinc/index" page_title="Week View"}
</head>
<body id="home">
{embed="testcalinc/header"}

		<div id="maincolumn">

			<h2>Calendar</h2>

			<h3>Week View</h3>

			<p></p>

			<div id="leftcolumn">

				{if segment_3 == "by_calendar"}
					{exp:calendar:calendars calendar_name="{segment_4}" dynamic="off"}
					<div class="calendar">
						<h3>Events for <span>{calendar_title}</span> Calendar</h3>
					</div>
					{/exp:calendar:calendars}
				<hr />
				{/if}

<div id="wc_calendar">
{exp:calendar:cal enable="custom_fields" pad_short_weeks="y" dynamic="off"
   {if segment_3 == "by_calendar"}
      {if segment_5 == ''}calendar_name="{segment_4}" date_range_start="0 weeks begin"{/if}
      {if segment_5 != ''}calendar_name="{segment_4}" date_range_start="{segment_5}-{segment_6}-{segment_7}" date_range_end="{segment_5}-{segment_6}-{segment_7}"{/if}
   {/if}
   {if segment_3 != "by_calendar"}
      {if segment_3 == ''}date_range_start="0 weeks begin"{/if}
      {if segment_3 != ""}date_range_start="{segment_3}-{segment_4}-{segment_5}" date_range_end="{segment_3}-{segment_4}-{segment_5}"{/if}
   {/if}
}

   {display_each_week}
   <div class="header">
      <div class="left">
         <a href="{path='testcalmain/week'}{if segment_3 == "by_calendar"}by_calendar/{segment_4}/{/if}{prev_week format="%Y/%m/%d"}/">Last Week</a>
      </div>
      <div class="center">
         <h2>Week of {week format="%l, %F %j, %Y"}<br /><span>({week_event_total} events)</span></h2>
      </div>
      <div class="right">
         <a href="{path='testcalmain/week'}{if segment_3 == "by_calendar"}by_calendar/{segment_4}/{/if}{next_week format="%Y/%m/%d"}/">Next Week</a>
      </div>
      <hr />
   </div>
   {display_each_day}
   <div class="day">
      <h4><a href="{path='testcalmain/day'}{if segment_3 == "by_calendar"}by_calendar/{segment_4}/{/if}{day format="%Y/%m/%d"}/">{day format="%l, %F %j, %Y"}</a><span> ({day_event_total} events)</span></h4>
      <ul>
      {if day_event_total == 0}<li>No events for this day.</li>{/if}
         {events}
         <li class="event">
            <a href="{path='testcalmain/event'}{event_id}/">{event_title}</a> {if event_all_day}(all day){if:else}{event_start_date format="%g:%i%a"}{if event_end_time != event_start_time && event_end_time != '00:00'} - {event_end_date format="%g:%i%a"}{/if}{/if}
         </li>
         {/events}
      </ul>
   </div>
   {/display_each_day}
   {/display_each_week}
{/exp:calendar:cal}
</div>

			</div>

			<div id="rightcolumn">

{embed="testcalinc/side_column"}

				<div id="aboutcolumn">

					<h3>About This Page</h3>

					<p>The "Week" page is meant to show events for a particular week. Additionally, this page can be filtered down to display events for a specific calendar (if you've come from the Calendars page).</p>

					<p>It makes use of the following function:</p>

					<ul>
						<li><a href="http://www.solspace.com/docs/detail/calendar_week/">Calendar:Cal in Week mode</a> to display events for a particular week.</li>
						<li><a href="http://www.solspace.com/docs/detail/calendar_mini/">Calendar:Cal in Mini mode</a> to display a Mini Calendar that links to days that have events.</li>
						<li><a href="http://www.solspace.com/docs/detail/calendar_calendars/">Calendar:Calendars</a> to display a list of all available Calendars.</li>
					</ul>

				</div>

			</div>

		</div>

{embed="testcalinc/footer"}
