<div id="bus_dir_home_content">
<h1>InThePanhandle.com Business Directory</h1>
<!--<ul>
<li><a href="{path=''advertise/purchase_advertising/"}" title="Advertise on InThePanhandle.com"">Add Your Business</a></li>
</ul>-->
<div class="clear_both"></div>
<div id="recent_biz">
<h2>New Businesses</h2>
<ul>
{exp:weblog:entries weblog="bus_dir" orderby="date" sort="desc" limit="10" sticky="off" dynamic="off" disable="categories|category_fields|member_data|trackbacks|pagination|custom_fields"}
<li><a href="{title_permalink=business_directory/listing}">{title}</a></li>
{/exp:weblog:entries}
</ul>
</div>
<div id="most_popular_biz">
<h2>Popular Businesses</h3>
<ul>
{exp:tracker:entries weblog="bus_dir" interval="week" limit="10" disable="categories|category_fields|member_data|trackbacks|pagination|custom_fields"}
   <li><span class="views">{tracker:total_views}</span><a href="{path="site_index"}/business_directory/listing/{tracker:url_title}">{tracker:title}</a></li>
{/exp:tracker:entries}
</ul>
</div>
<div class="clear_both"></div>
</div>
