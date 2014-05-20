{exp:fbc:prepare_page}
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

<title>{exp:weblog:entries rdf="off" limit="1" disable="categories|category_fields|pagination|member_data|trackbacks|custom_fields"}{title}{/exp:weblog:entries} | InThePanhandle.com | Your Eastern WV Community Website</title>

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

				{if logged_in_group_id == "1"}
								{if segment_4 == "success"}<div class="calendar_success">Event has been successfully created!</div>{/if}
								{if segment_4 == "updated"}<div class="calendar_success">Event has been successfully updated!</div>{/if}
				<p><strong>Admin:</strong> <a href="{path='testcalmain/edit'}{segment_3}/">Update this Event</a></p>
				{/if}

				{exp:calendar:events orderby="title" sort="asc" event_id="{segment_3}" date_range_start="99 months ago" show_months="999" dynamic="off"}
				   {if no_results}No Results{/if}
				      <h1>{event_title}</h2>
				      {if event_image}{exp:imgsizer:size src="{event_image}" width="400"}<img class="article_image"  src="{sized}" />{/exp:imgsizer:size}{/if}
				      <p>{event_details}</p>
				      <p><strong>Cost: </strong>{event_cost}</p>
				      <p><strong>Location:</strong> {event_location}</p>
				      <p><strong>From:</strong> {event_first_date format="%F %j, %Y at %g:%i%a"}{if event_never_ends} (never ends){if:else}{if "{event_first_date format='%Y%m%d%g%i%a'}" != "{event_last_date format='%Y%m%d%g%i%a'}"} <strong>to:</strong> {if "{event_first_date format='%Y%m%d'}" != "{event_last_date format='%Y%m%d'}"}{event_last_date format="%l, %F %j, %Y at %g:%i%a"}{if:else}{event_last_date format="%g:%i%a"}{/if}{/if}{/if}</p>
				      <p><i class="icon-calendar"></i><a href="{path='testcalmain/export/event'}{segment_3}/">Download this event to your calendar</a></p>

				      <h2>Contact Info:</h2>
				       <ul>
				       {if event_contact_name}<li><strong>Contact:</strong> {event_contact_name}</li>{/if}
				       {if event_contact_email}<li><strong>Email:</strong> {event_contact_email}</li>{/if}
				       {if event_website}<li><strong>Website:</strong> {event_website}</li>{/if}
				       {if event_contact_phone}<li><strong>Phone:</strong> {event_contact_phone}</li>{/if}
				       {if event_doc}<li><strong>Download(s):</strong> <a href="http://www.inthepanhandle.com{event_doc}">{title} Download</a></li>{/if}
				      </ul>

				      {exp:tracker:pixeltrack weblog="event_cal" entry_id="{entry_id}" entry_identifier="{entry_id}"}<img src="{pixeltrack_url}" />{/exp:tracker:pixeltrack}

				      {exp:fbc:comments
				           href="{url_title_path=events/details'}"
				           num_posts="8"
				           width="100%"
				           colorscheme="light"
				        }

			</article>

			<footer class="m-all t-all da5-da6">
				<p><strong>Calendar:</strong> <a href="{path='12_events/calendars'}{event_calendar_url_title}/">{event_calendar_title}</a></p>
				{/exp:calendar:events}


				<h3>Upcoming Occurrences:</h3>
				      <ul>
				         {exp:calendar:occurrences event_id="{segment_3}" date_range_start="today" date_range_end="3 months" upcoming_occurrences_limit="5" prior_occurrences_limit="0" dynamic="off"}
				         <li>{occurrence_start_date format="%l, %F %j, %Y at %g:%i%a"}{if "{occurrence_start_date format='%Y%m%d%g%i%a'}" != "{occurrence_end_date format='%Y%m%d%g%i%a'}"} - {if "{occurrence_start_date format='%Y%m%d'}" != "{occurrence_end_date format='%Y%m%d'}"}{occurrence_end_date format="%l, %F %j, %Y at %g:%i%a"}{if:else}{occurrence_end_date format="%g:%i%a"}{/if}{/if} &nbsp; <a href="{path='12_events/day'}{occurrence_start_date format="%Y/%m/%d"}/">View other events on this day</a></li>
				         {if no_results}
				         <li>No upcoming occurrences in the timeframe specified for this event.</li>
				         {/if}
				         {/exp:calendar:occurrences}
				      </ul>

				      <h3>Past Occurrences:</h3>
				      <ul>
				         {exp:calendar:occurrences event_id="{segment_3}" date_range_start="3 months ago" date_range_end="today" upcoming_occurrences_limit="0" prior_occurrences_limit="3" dynamic="off"}
				         <li>{occurrence_start_date format="%l, %F %j, %Y at %g:%i%a"}{if "{occurrence_start_date format='%Y%m%d%g%i%a'}" != "{occurrence_end_date format='%Y%m%d%g%i%a'}"} - {if "{occurrence_start_date format='%Y%m%d'}" != "{occurrence_end_date format='%Y%m%d'}"}{occurrence_end_date format="%l, %F %j, %Y at %g:%i%a"}{if:else}{occurrence_end_date format="%g:%i%a"}{/if}{/if} &nbsp; <a href="{path='12_evetns/day'}{occurrence_start_date format="%Y/%m/%d"}/">View other events on this day</a></li>
				         {if no_results}
				         <li>No prior occurrences in the timeframe specified for this event.</li>
				         {/if}
				         {/exp:calendar:occurrences}
				      </ul>
			</footer>

		</section>


	</div>

	<!-- Gridset overlay script - toggles grid overlay on and off - You can remove this if you want. -->
	<script src="/js/gridset-overlay.js"></script>

</body>
</html>
