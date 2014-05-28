{embed="testcalinc/index" page_title="Edit Event"}
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script type="text/javascript" src="/themes/solspace_themes/calendar/js/jquery-ui.custom.min.js"></script>
{exp:calendar:datepicker_js}
{exp:calendar:datepicker_css}
</head>
<body id="home">
{embed="testcalinc/header"}

		<div id="maincolumn">

			<h2>Calendar</h2>

			<h3>Edit Event</h3>

			<p></p>

			<div id="leftcolumn">

				<h5>Update this Event</h5>
				<hr />

{if logged_in_group_id == "1"}
{if segment_3}



<div id="calendar_saef">
   {exp:calendar:form weblog="calendar_events" event_id="{segment_3}" return="testcalmain/event/{segment_3}/updated"}
   <p><label>Title:</label><br />
   <input type="text" name="title" value="{title}" size="80" style="width: 600px;" /></p>
   {calendar_date_widget}
   <p><label>Summary:</label><br />
   <textarea name="{event_summary_field_name}" rows="5" cols="65" style="width: 600px; height: 100px;">{event_summary}</textarea>
   <input type="hidden" name="{event_summary_format_name}" value="{event_summary_format_value}" /></p>
   <p><label>Location:</label><br />
   <input type="text" name="{event_location_field_name}" value="{event_location}" size="80" style="width: 600px;" /></p>
   <input type="hidden" name="{event_location_format_name}" value="{event_location_format_value}" /></p>
   <p><input type="submit" name="submit" value="Submit" /></p>
   {/exp:calendar:form}
</div>


{if:else}

   <div class="calendar_error">An event ID is required to edit events.</div>

{/if}

{if:else}

   <div class="calendar_error">You do not have sufficient privileges to edit events.</div>

{/if}

			</div>

			<div id="rightcolumn">

{embed="testcalinc/side_column"}

				<div id="aboutcolumn">

					<h3>About This Page</h3>

					<p>The "Edit Event" page is meant to allow members with appropriate privileges to edit the selected event.</p>

					<p>It makes use of the following function:</p>

					<ul>
						<li><a href="http://www.solspace.com/docs/detail/calendar_form/">Calendar:Form</a> to display the SAEF form for users to edit an event.</li>
						<li><a href="http://www.solspace.com/docs/detail/calendar_mini/">Calendar:Cal in Mini mode</a> to display a Mini Calendar that links to days that have events.</li>
						<li><a href="http://www.solspace.com/docs/detail/calendar_calendars/">Calendar:Calendars</a> to display a list of all available Calendars.</li>
					</ul>

				</div>

			</div>

		</div>

{embed="testcalinc/footer"}
