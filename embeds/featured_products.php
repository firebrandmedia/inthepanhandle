<div id="bus_dir_home_content">
<h1>Shop Local: Products, Services, Coupons from Local Merchants.</h1>
<div class="clear_both"></div>
<div id="recent_biz">
<h2>Recently Added / Updated Products</h2>
<ul>
{exp:weblog:entries weblog="products" limit="14" orderby="edit_date" sort="desc" dynamic="off" sticky="off"}
<li><a href="{title_permalink=business_directory/product}">{title}</a></li>
{/exp:weblog:entries}
</ul>
</div>
<div id="most_popular_biz">
<h2>Popular Products & Services</h3>
<ul>
{exp:tracker:entries weblog="products" interval="month" limit="10" disable="categories|category_fields|member_data|trackbacks|pagination|custom_fields"}
   <li><span class="views">{tracker:total_views}</span><a href="{path="site_index"}/business_directory/product/{tracker:url_title}">{tracker:title}</a></li>
{/exp:tracker:entries}
</ul>
</div>
<div id="highest_rated_biz">
<h2>Featured Coupons</h2>
<ul>
{exp:weblog:entries weblog="coupons" orderby="random" limit="14" dynamic="off" disable="categories|category_fields|member_data|trackbacks|pagination"}
<li><a href="{title_permalink=business_directory/coupons}">{title}</a></li>
{/exp:weblog:entries}
</ul>
</div>
<div class="clear_both"></div>
</div>
