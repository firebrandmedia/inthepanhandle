{embed="testcalinc/index" page_title="Month View"}
  <!--[if gte IE 7]>
  <style type="text/css">
    #fc_calendar .event { width: 80px; }
  </style>
  <![endif]-->
</head>
<body id="home">
{embed="testcalinc/header"}

		<div id="maincolumn">

			<h2>Calendar</h2>

			<h3>Month View</h3>

			<p></p>

			<div id="leftcolumn">

				<div id="fc_legend"><span class="legend">LEGEND:</span>
					<div class="event multi_day first_day"><a href="#">Multi-Day Event</a></div>
					<div class="event all_day first_day last_day">All Day Event</a></div>
					<div class="event">1pm <a href="#">Regular Event</a></div>
				</div>
				<hr />
				{if segment_3 == "by_calendar"}
					{exp:calendar:calendars calendar_name="{segment_4}" dynamic="off"}
					<div class="calendar">
						<h3>Events for <span>{calendar_title}</span> Calendar</h3>
					</div>
					{/exp:calendar:calendars}
				<hr />
				{/if}

<div id="fc_calendar">
   {exp:calendar:cal
      {if segment_3 == "by_calendar"}
         {if segment_5 == ''}calendar_name="{segment_4}" date_range_start="year-month-01" date_range_end="year-month-last"{/if}
         {if segment_5 != ''}calendar_name="{segment_4}" date_range_start="{segment_5}-{segment_6}-01" date_range_end="{segment_5}-{segment_6}-last"{/if}
      {/if}
      {if segment_3 != "by_calendar"}
         {if segment_3 == ''}date_range_start="year-month-01" date_range_end="year-month-last"{/if}
         {if segment_3 != ""}date_range_start="{segment_3}-{segment_4}-01" date_range_end="{segment_3}-{segment_4}-last"{/if}
      {/if}
   }
      {display_each_month}
      <table id="fc_outer">
         <thead>
            <tr id="month_year">
               <th colspan="2" class="left">&laquo; <a href="{path='testcalmain/month'}{if segment_3 == "by_calendar"}by_calendar/{segment_4}/{/if}{prev_month format="%Y/%m"}/">{prev_month format="%F"}</a></th>
               <th colspan="3" class="center">{month format="%F %Y"} ({month_event_total} events)</th>
               <th colspan="2" class="right"><a href="{path='testcalmain/month'}{if segment_3 == "by_calendar"}by_calendar/{segment_4}/{/if}{next_month format="%Y/%m"}/">{next_month format="%F"}</a> &raquo;</th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <td colspan="7">
                  <div class="wrap">
                  <table id="fc_inner">
                     <thead>
                        <tr id="days_of_week">
                           {display_each_day_of_week}
                           <th class="day_of_week {day_of_week}">{day_of_week}</th>
                           {/display_each_day_of_week}
                        </tr>
                     </thead>
                     <tbody>
                        {display_each_week}
                           <tr>
                              {display_each_day}
                              {if day_in_current_month}
                                 <td class="day_cell"><div class="date"><a class="num" href="{path='testcalmain/day'}{if segment_3 == "by_calendar"}by_calendar/{segment_4}/{/if}{day format="%Y/%m/%d"}/">{day format="%j"}</a></div>
                              {if:else}
                                 <td class="day_cell out_of_range"><div class="date"><span class="num">{day format="%j"}</span></div>
                              {/if}
                              {display_each_hour}
                                 {events}
                                    <div
                                      class="
                                         event {if event_all_day}all_day{/if}
                                         {if event_multi_day}multi_day{/if}
                                         {if event_first_day}first_day{/if}
                                         {if event_last_day}last_day{/if}
                                         {if all_day_event_index_difference > 0}index_difference_{all_day_event_index_difference}{/if}
                                      ">
                                   {if event_multi_day}
                                      {if event_all_day == FALSE}
                                         {if event_first_day}
                                            {event_start_time}
                                         {/if}
                                         {if event_last_day}
                                            {event_end_time}
                                         {/if}
                                      {/if}
                                         <a href="{path='testcalmain/event'}{event_id}/">{event_title}</a>
                                   {if:else}
                                      {if event_all_day == ''}
                                         {event_start_date format="%g"}{if event_start_minute > 0}:{event_start_minute}{/if}{if event_end_time != event_start_time && event_end_time != '00:00'}&ndash;{event_end_date format="%g"}{if event_end_minute > 0}:{event_end_minute}{/if}{event_end_date format="%a"}{if:else}{event_start_date format="%a"}{/if}
                                      {/if}
                                         <a href="{path='testcalmain/event'}{if edited_occurrence}{event_parent_id}{if:else}{event_id}{/if}/" title="{event_title}">{event_title}</a>
                                   {/if}
                                    </div>
                                 {/events}
                              {/display_each_hour}
                           </td>
                           {/display_each_day}
                        </tr>
                        {/display_each_week}
                     </tbody>
                  </table>
               </div>
            </td>
         </tbody>
      </table>
   {/display_each_month}
   {/exp:calendar:cal}
</div>

			</div>

			<div id="rightcolumn">

{embed="testcalinc/side_column"}

				<div id="aboutcolumn">

					<h3>About This Page</h3>

					<p>The "Month" page is meant to show a typical Calendar month view of all events that fall within the selected month. Additionally, this page is set to allow filtering down to a specific Calendar (if you've come to this page from the Calendars page).</p>

					<p>It makes use of the following function:</p>

					<ul>
						<li><a href="http://www.solspace.com/docs/detail/calendar_month/">Calendar:Cal in Month mode</a> to display a month view of events.</li>
						<li><a href="http://www.solspace.com/docs/detail/calendar_mini/">Calendar:Cal in Mini mode</a> to display a Mini Calendar that links to days that have events.</li>
						<li><a href="http://www.solspace.com/docs/detail/calendar_calendars/">Calendar:Calendars</a> to display a list of all available Calendars.</li>
					</ul>

				</div>

			</div>

		</div>

{embed="testcalinc/footer"}
