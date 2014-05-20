{exp:fbc:prepare_page}
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

<title>Event Calendar | InThePanhandle.com | Your Eastern WV Community Website</title>

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
			{exp:calendar:calendars {if segment_3 != ""}calendar_name="{segment_3}"{/if}}
			<h1>{calendar_title} Events</h1>
			<p><b>Description:</b> {calendar_summary}</p>
			<div>
				<ul>View events in this Calendar by:
			    <li><a href="{path='12_events/month/by_calendar'}{calendar_url_title}/">Month</a></li>
			    <li><a href="{path='12_events/week/by_calendar'}{calendar_url_title}/">Week</a></li>
			    <li><a href="{path='12_events/day/by_calendar'}{calendar_url_title}/">Day</a></li>
			    </ul>
			    <p><i class="icon-calendar"></i><a href="{path='12_events/export/calendar'}{calendar_id}/">Download {calendar_title} Events to your calendar</a></p>
			    <p><b>Upcoming {calendar_title} Events:</b>
			       <ul>
			{embed="testcalinc/calendar_events" calendar_id="{calendar_id}" {if segment_3 == ""}event_limit="5"{/if}{if segment_3 != ""}event_limit="10"{/if}}
			       </ul></p>
			</div>
			{if no_results}<p>No Calendars found for this site.</p>{/if}
			{/exp:calendar:calendars}

			</article>

			<footer class="m-all t-all da5-da6">
				{if segment_3}
				<h3>Other Calendars</h3>
				<ul>
				{exp:calendar:calendars calendar_name="not {segment_3}" dynamic="off"}
				    <li><strong>{calendar_title} Events:</strong> <a href="{path='12_events/month/by_calendar'}{calendar_url_title}/">Month</a> | <a href="{path='12_events/week/by_calendar'}{calendar_url_title}/">Week</a> | <a href="{path='12_events/day/by_calendar'}{calendar_url_title}/">Day</a></li>
				{/exp:calendar:calendars}
				{if no_results}<li>No other Calendars found for this site.</li>{/if}
				</ul>
				{/if}
			</footer>

		</section>


	</div>

	<!-- Gridset overlay script - toggles grid overlay on and off - You can remove this if you want. -->
	<script src="/js/gridset-overlay.js"></script>

</body>
</html>
