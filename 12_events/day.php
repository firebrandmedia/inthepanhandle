{exp:fbc:prepare_page}
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

<title>{if embed:page_title}{embed:page_title}{if:else}Home{/if} | Local Event Calendar | InThePanhandle.com | Your Eastern WV Community Website</title>

{header_css_js_12}

{exp:shrimp:meta_tag template="e" entry_id="{entry_id}"}

</head>
<body>

	<div class="grid_wrapper">

		<!--<header class="m-all t-all da-all header group">
			<section class="da-all logo"><img src="/2012images/ui/itpwv_logo_sm.jpg" />InThePanhandle.com</section>
			<nav class="da2-da6"></nav>
		</header>-->

		<section class="body_content group">

			<article class="m-all t-all da2-da4">
				<div id="maincolumn">

							<h1>Event Calendar</h1>

							<div id="leftcolumn">

								{if segment_3 == "by_calendar"}
									{exp:calendar:calendars calendar_name="{segment_4}" dynamic="off"}
									<div class="calendar">
										<h3>Events for <span>{calendar_title}</span> Calendar</h3>
									</div>
									{/exp:calendar:calendars}
								<hr />
								{/if}

				<div id="dc_calendar">

				{exp:calendar:cal pad_short_weeks="n"
				   {if segment_3 == "by_calendar"}
				      {if segment_5 == ''}calendar_name="{segment_4}" date_range_start="today" date_range_end="today"{/if}
				      {if segment_5 != ''}calendar_name="{segment_4}" date_range_start="{segment_5}-{segment_6}-{segment_7}" date_range_end="{segment_5}-{segment_6}-{segment_7}"{/if}
				   {/if}
				   {if segment_3 != "by_calendar"}
				      {if segment_3 == ''}date_range_start="today" date_range_end="today"{/if}
				      {if segment_3 != ""}date_range_start="{segment_3}-{segment_4}-{segment_5}" date_range_end="{segment_3}-{segment_4}-{segment_5}"{/if}
				   {/if}
				   dynamic="off"
				}

				   {display_each_day}
				   <div>
				      <a href="{path='12_events/day'}{if segment_3 == "by_calendar"}by_calendar/{segment_6}/{/if}{prev_day format="%Y/%m/%d"}/"><i class="icon-left-open-mini"></i></a> ({day_event_total}) Events for {day format="%D, %M %d, %Y"} <a href="{path='12_events/day'}{if segment_3 == "by_calendar"}by_calendar/{segment_6}/{/if}{next_day format="%Y/%m/%d"}/"><i class="icon-right-open-mini"></i></a>
				   </div>
				   {display_each_hour}
				   <h4 {if time == "00:00"}class="thickline"{/if}>{time format="%g %a"} <span>({if hour_event_total == "0"}no events{if:else}{hour_event_total} event{if hour_event_total > "1"}s{/if}{/if})</span></h4>
				   {events}
				{if event_multi_day == FALSE && event_all_day == FALSE}
				   <div class="event">
				         <h2><a href="{path='12_events/details'}{event_id}/">{event_title}</a> <span>({event_start_date format="%g:%i %a"}{if event_end_date}{if "{event_start_date format='%g:%i %a'}" != "{event_end_date format='%g:%i%a'}"} - {event_end_date format="%g:%i%a"}{/if}{/if})</span> (<a href="{path='12_events/calendars'}{event_calendar_url_title}/">{event_calendar_title}</a>)</h2>
				         <!--<p><b>Location:</b> {event_location}</p>
				         <p><b>Details:</b> {event_summary}<p>-->
				   </div>
				{if:else}
				   <div class="event_top">
				         <h2><a href="{path='12_events/details'}{event_id}/">{event_title}</a> <span>({if event_multi_day == FALSE && event_all_day == TRUE}all day{if:else}{event_start_date format="%F %j, %Y at %g:%i%a"}{if event_end_date}{if "{event_start_date format='%g:%i%a'}" != "{event_end_date format='%g:%i%a'}"} - {event_end_date format="%F %j, %Y at %g:%i%a"}{/if}{/if}{/if})</span></h2>
				         <p><b>From Calendar:</b> <a href="{path='12_events/calendars'}{event_calendar_url_title}/">{event_calendar_title}</a> &nbsp; &nbsp; <b>Location:</b> {event_location} &nbsp; &nbsp; <a href="{path='12_events/details'}{event_id}/">View Details</a></p>
				   </div>
				{/if}
				   {/events}
				   {/display_each_hour}
				   {/display_each_day}
				{/exp:calendar:cal}

				</div>

				</div>



				</div>

			</article>

			<footer class="m-all t-all da5-da6">
				<h3>Events by Month</h3>
				 <ul>
				{exp:calendar:month_list date_range_start="2013-01-01" date_range_end="2013-12-last" limit="100"}
				    <li><a href="{path='12_events/month'}{month format="%Y/%m"}/">{month format="%F, %Y"}</a></li>
				{/exp:calendar:month_list}
				 </ul></p>

				<h3>Calendars</h3>
					<ul>
						{exp:calendar:calendars dynamic="off"}
						<li><a href="{path=12_events/calendars}{calendar_url_title}/">{calendar_title}</a></li>
						{/exp:calendar:calendars}
					</ul>
			</footer>

		</section>


	</div>

	<!-- Gridset overlay script - toggles grid overlay on and off - You can remove this if you want. -->
	<script src="/js/gridset-overlay.js"></script>

</body>
</html>
