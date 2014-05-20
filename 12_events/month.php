{exp:fbc:prepare_page}
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

<title>{exp:calendar:cal
   {if segment_3 == "by_calendar"}
      {if segment_5 == ''}calendar_name="{segment_4}" date_range_start="year-month-01" date_range_end="year-month-last"{/if}
      {if segment_5 != ''}calendar_name="{segment_4}" date_range_start="{segment_5}-{segment_6}-01" date_range_end="{segment_5}-{segment_6}-last"{/if}
   {/if}
   {if segment_3 != "by_calendar"}
      {if segment_3 == ''}date_range_start="year-month-01" date_range_end="year-month-last"{/if}
      {if segment_3 != ""}date_range_start="{segment_3}-{segment_4}-01" date_range_end="{segment_3}-{segment_4}-last"{/if}
   {/if}
}
   {display_each_month}{month format="%F %Y"} {/display_each_month}
{/exp:calendar:cal} | Event Calendar | InThePanhandle.com | Your Eastern WV Community Website</title>

{header_css_js_12}

{exp:shrimp:meta_tag template="n" entry_id="{entry_id}"}

</head>
<body>

	<div class="grid_wrapper">

		<!--<header class="m-all t-all da-all header group">
			<section class="da-all logo"><img src="/2012images/ui/itpwv_logo_sm.jpg" />InThePanhandle.com</section>
			<nav class="da2-da6"></nav>
		</header>-->

		<section class="body_content group">

			<article class="m-all t-all da2-da4">
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
								<h1>{month format="%F %Y"} ({month_event_total} events)</h1>
								<a href="{path='12_events/month'}{if segment_3 == "by_calendar"}by_calendar/{segment_4}/{/if}{prev_month format="%Y/%m"}/"><i class="icon-left-open-mini"></i> {prev_month format="%F"}</a>
								<a href="{path='12_events/month'}{if segment_3 == "by_calendar"}by_calendar/{segment_4}/{/if}{next_month format="%Y/%m"}/">{next_month format="%F"} <i class="icon-right-open-mini"></i></a>
				{/display_each_month}
			{/exp:calendar:cal}

				<!--Daily Events Start-->
                  {exp:calendar:cal {if segment_3 == ''}date_range_start="year-month-01" date_range_end="year-month-last"{/if}{if segment_3 != ""}date_range_start="{segment_3}-{segment_4}-01" date_range_end="{segment_3}-{segment_4}-last"{/if}}
                        {display_each_month}


                                          {display_each_week}

                                                {display_each_day}
                                                {if day_in_current_month}
                                                   <div class="date"><a class="num" href="{path='12_events/day'}{date format="%Y/%m/%d"}/">{date format="%j"}</a></div>
                                                {if:else}
                                                   <div class="date"><span class="num">{date format="%j"}</span></div>
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
                                                           <a href="{path='12_events/details'}{event_id}/">{event_title}</a>
                                                     {if:else}
                                                        {if event_all_day == ''}
                                                           {event_start_date format="%g"}{if event_start_minute > 0}:{event_start_minute}{/if}{if event_end_time != event_start_time && event_end_time != '00:00'}&ndash;{event_end_date format="%g"}{if event_end_minute > 0}:{event_end_minute}{/if}{event_end_date format="%a"}{if:else}{event_start_date format="%a"}{/if}
                                                        {/if}
                                                           <a href="{path='12_events/details'}{event_id}/">{event_title}</a>
                                                     {/if}
                                                      </div>
                                                   {/events}
                                                {/display_each_hour}

                                             {/display_each_day}

                                          {/display_each_week}
                                      {/display_each_month}
                     {/exp:calendar:cal}
                   <!--Daily Events End-->
			</article>

			<footer class="m-all t-all da5-da6">
			</footer>

		</section>


	</div>

	<!-- Gridset overlay script - toggles grid overlay on and off - You can remove this if you want. -->
	<script src="/js/gridset-overlay.js"></script>

</body>
</html>
