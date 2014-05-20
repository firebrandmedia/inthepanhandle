<div id="popular_news_content">
<h1>Popular News, Articles, Commentary & More</h1>
<div id="most_popular_news">
<h2>Recent News</h2>
<ul>
{exp:weblog:entries weblog="news" orderby="date" offset="1" sort="desc" limit="6" dynamic="off" disable="categories|category_fields|member_data|trackbacks|pagination|custom_fields"}
<li><a href="{title_permalink=news/article}">{title}</a></li>
{/exp:weblog:entries}
</ul>
</div>
<div id="most_popular_news">
<h2>Today's Buzz</h3>
<ul>
{exp:tracker:entries weblog="news" interval="today" limit="6" disable="categories|category_fields|member_data|trackbacks|pagination|custom_fields"}
   <li><span class="views">{tracker:total_views}</span><a href="{path="site_index"}/news/article/{tracker:url_title}">{tracker:title}</a></li>
{/exp:tracker:entries}
</ul>
</div>
<div id="most_popular">
<h2>Most Popular Articles, last 7 days</h2>
<ul>
{exp:tracker:entries weblog="news" interval="week" limit="7" disable="categories|category_fields|member_data|trackbacks|pagination|custom_fields"}
   <li><span class="views">{tracker:total_views}</span><a href="{path="site_index"}/news/article/{tracker:url_title}">{tracker:title}</a></li>
{/exp:tracker:entries}
</ul>
</div>
<div class="clear_both"></div>
</div>
