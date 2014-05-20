<div id="bus_dir_home_content">
<h1>InThePanhandle.com Directory of Local Government</h1>
<div class="clear_both"></div>
<div id="recent_biz">
<h2>Recent Gov. Listings</h2>
<ul>
{exp:weblog:entries weblog="bus_dir" orderby="date" offset="1" sort="desc" limit="10" category="118|117|116" dynamic="off" disable="category_fields|member_data|trackbacks|pagination|custom_fields"}
<li><a href="{title_permalink=business_directory/listing}">{title}</a></li>
{/exp:weblog:entries}
</ul>
</div>
<div id="most_popular_biz">
<h2>Popular Gov Today</h3>
<ul>
{exp:tracker:entries weblog="bus_dir" interval="today" limit="10" category="118|117|116" disable="category_fields|member_data|trackbacks|pagination|custom_fields"}
   <li><span class="views">{tracker:total_views}</span><a href="{path="site_index"}/business_directory/listing/{tracker:url_title}">{tracker:title}</a></li>
{/exp:tracker:entries}
</ul>
</div>
<div id="highest_rated_biz">
<!--<h2>Featured Coupons</h2>
<ul>
{exp:weblog:entries weblog="coupons" orderby="random" limit="10" dynamic="off" disable="categories|category_fields|member_data|trackbacks|pagination"}
<li><a href="{title_permalink=business_directory/coupons}">{title}</a></li>
{/exp:weblog:entries}
</ul>  -->
</div>
<div class="clear_both"></div>
</div>
