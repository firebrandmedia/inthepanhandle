{if logged_in}
<h3>My Business Listing(s)</h3>
<ul>{exp:weblog:entries weblog="bus_dir" author_id="CURRENT_USER" orderby="date" sort="desc" limit="30" }
<li><a href="{url_title_path=comments}">{title}</a></li>
{/exp:weblog:entries}
<ul>
{/if}
