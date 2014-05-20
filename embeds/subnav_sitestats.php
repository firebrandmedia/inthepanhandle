<div id="sitestats">
<h4>ITP Statistics</h4>
Page rendered in {elapsed_time} seconds<br />
{exp:stats}
Total Entries: {total_entries}<br />
Most Recent Entry: {last_entry_date format="%m/%d %h:%i %a"}<br />
Total Members: {total_members}<br />
Total Logged in members: {total_logged_in}<br />
Total guests: {total_guests}<br />
Total anonymous users: {total_anon}<br />
Most Recent Visitor on:  {last_visitor_date format="%m/%d/%Y %h:%i %a"}<br />
The most visitors ever was {most_visitors} on  {most_visitor_date format="%m/%d/%Y %h:%i %a"}

{if member_names}
<p>Current Logged-in Members:&nbsp;
{member_names  backspace='6'}
<a href="{member_path=member/index}">{name}</a>&nbsp;
{/member_names}
</p>
{/if}

{/exp:stats}
</div>
