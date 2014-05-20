Favorites
<ul>
{exp:favorites:entries weblog="event_cal" show_expired="yes" show_future_entries="yes" orderby="favorites_count" sort="asc" limit="25" dynamic="on" favorites_member_id="CURRENT_USER"}
<li><a href="{title_permalink='site/template'}">{title}</a> (Saved on {favorites_date format="%l, %F %j, %Y at %g:%i %a"})</li>
{/exp:favorites:entries}
</ul>
