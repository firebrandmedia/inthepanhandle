<div id="travel_dir_content">
<h1>Travel To and In the Eastern Panhandle of West Virginia</h1>
<div class="clear_both"></div>
<div id="travel_content">
<h2>Local Travel & Event News</h2>
<ul>
{exp:weblog:entries weblog="news" category="290" orderby="date" sort="desc" limit="8" dynamic="off" disable="categories|category_fields|member_data|trackbacks|pagination|custom_fields"}
<li><a href="{title_permalink=news/article}">{title}</a></li>
{/exp:weblog:entries}
</ul>
</div>
<div id="travel_content">
<h2>Popular Travel Destination Pages</h3>
<ul>
{exp:tracker:entries weblog="bus_dir" interval="month" category="100|101|99|313|106|251|252|254|255" limit="10" disable="categories|category_fields|member_data|trackbacks|pagination|custom_fields"}
   <li><span class="views">{tracker:total_views}</span><a href="{path="site_index"}/business_directory/listing/{tracker:url_title}">{tracker:title}</a></li>
{/exp:tracker:entries}
</ul>
</div>
<div id="travel_content">
<h2>Destinations Rated by Our Visitors</h2>
<ul>
{exp:rating:rankings limit="10" weblog="bus_dir" category="100|101|99|313|106|251|252|254|255"}
<li>{exp:rating:stats entry_id="{entry_id}" precision="1"}{stars_avg_rating} ({avg_rating}/5){/exp:rating:stats} <a href="{title_permalink=business_directory/listing"}">{title}</a></li>
{/exp:rating:rankings}
<ul>
</div>
<div class="clear_both"></div>
</div>
