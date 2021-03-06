{embed="testcalinc/index"}
</head>
<body id="home">
{embed="testcalinc/header"}

		<div id="maincolumn">

			<h2>Calendar</h2>

			<h3>Home</h3>

			<p></p>

			<div id="leftcolumn">

<div id="wc_calendar">

<div class="calendars" style="float:left;width:210px;">
    <h4>Events by Month</h4>
    <ul>
   {exp:calendar:month_list date_range_start="2010-01-01" date_range_end="2011-06-last" limit="100"}
       <li><a href="{path='testcalmain/month'}{month format="%Y/%m"}/">{month format="%F, %Y"}</a></li>
   {/exp:calendar:month_list}
    </ul></p>
</div>

<div class="calendars" style="float:left;width:415px;margin-left:15px;">
    <h4>Events by Calendar</h4>
    <ul>
   {exp:calendar:calendars dynamic="off"}
       <li><b style="padding-top:5px;line-height:25px;"><a href="{path='testcalmain/calendars'}{calendar_url_title}/">{calendar_title}</a></b>
          <ul>
             <li>View by: <a href="{path='testcalmain/month/by_calendar'}{calendar_url_title}/">Month</a> | <a href="{path='testcalmain/week/by_calendar'}{calendar_url_title}/">Week</a> | <a href="{path='testcalmain/day/by_calendar'}{calendar_url_title}/">Day</a></li>
             <li>Upcoming Events:</li>
          </ul>
          <ul>
{embed="testcalinc/calendar_events" calendar_id="{calendar_id}" event_limit="5"}
          </ul></li>
   {/exp:calendar:calendars}
    </ul></p>
</div>

</div>
			</div>

			<div id="rightcolumn">

{embed="testcalinc/side_column"}

				<div id="aboutcolumn">

					<h3>About This Page</h3>

					<p>The "Home" page is meant to display a simple overview of Calendars, along with links that filter the other pages down to events for specific calendars and/or timeframes.</p>

					<p>It makes use of the following function:</p>

					<ul>
						<li><a href="http://www.solspace.com/docs/detail/calendar_month_list/">Calendar:Month_List</a> to display a list of all months for the past year and a half.</li>
						<li><a href="http://www.solspace.com/docs/detail/calendar_cal/">Calendar:Cal</a> to display a list of recent upcoming events for available Calendars.</li>
						<li><a href="http://www.solspace.com/docs/detail/calendar_mini/">Calendar:Cal in Mini mode</a> to display a Mini Calendar that links to days that have events.</li>
						<li><a href="http://www.solspace.com/docs/detail/calendar_calendars/">Calendar:Calendars</a> to display a list of all available Calendars.</li>
					</ul>

				</div>

			</div>

		</div>

{embed="testcalinc/footer"}
