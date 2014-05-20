<div id="headlines">
<h1>Recent and Popular News</h1>
<ul>
<li><a href="{path=''news/send_us_news"}?height=460&width=380" class="thickbox" title="Send us news"">Send us news</a></li>
<!--<li><a href="{path=''news/suggest_a_poll"}?height=400&width=370" class="thickbox" title="Suggest a poll"">Suggest a poll</a></li>-->
</ul>
<div class="clear_both"></div>
<div id="recent_news">
<h2>Recent Articles</h2>
<ul>
{exp:weblog:entries weblog="news" orderby="date" offset="0" sort="desc" limit="10" dynamic="off" disable="categories|category_fields|member_data|trackbacks|pagination|custom_fields"}
<li><a href="{title_permalink=news/article}">{title}</a></li>
{/exp:weblog:entries}
</ul>
</div>
<div id="most_popular">
<h2>Today's Buzz</h2>
<ul>
{exp:tracker:entries weblog="news" interval="today" limit="8" disable="categories|category_fields|member_data|trackbacks|pagination|custom_fields"}
   <li><span class="views">{tracker:total_views}</span><a href="{path="site_index"}/news/article/{tracker:url_title}">{tracker:title}</a></li>
{/exp:tracker:entries}
</ul>
</div>
<div id="most_popular">
<h2>Most Popular Articles, last 7 days</h2>
<ul>
{exp:tracker:entries weblog="news" interval="week" limit="8" status="open" show_expired="no" disable="categories|category_fields|member_data|trackbacks|pagination|custom_fields"}
   <li><span class="views">{tracker:total_views}</span><a href="{path="site_index"}/news/article/{tracker:url_title}">{tracker:title}</a></li>
{/exp:tracker:entries}
</ul>
</div>
<div class="clear_both"></div>
</div>
